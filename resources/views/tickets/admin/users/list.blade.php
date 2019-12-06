@extends('layouts.app')

@section('content')
@include('tickets.admin.layouts.menu')
      <div class="row">
          <div class="col-12 pt-5 pb-4">
            <h4>All Vendors</h4>
            <div class="text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#user-modal">
                  <span class="mdi mdi-bookmark-plus-outline mr-3"></span> Add a new vendor
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#assign-modal">
                  <span class="mdi mdi-users mr-3"></span> Assign staff as vendor
                </button>
            </div>
          </div>
      </div>
      @include('layouts.partials.alert')
      <div class="card">
          <div class="card-body py-3">
            <p class="card-title ml-n1">Filter Results</p>
            @include('tickets.admin.users.filter_template')
          </div>
          <div class="table-responsive">
              <table class="table table-hover table-sm">
                    <thead>
                        <tr class="solid-header">
                            <th>#</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Department</th>
                            <th>No of Tickets Assigned</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($users->count() < 1)
                            <tr><td colspan="8" class="text-center">No record found.</td></tr>
                        @else
                        @php $count = 1 @endphp
                        @foreach($users as $user)
                            @php $count =  ($users ->currentpage()-1) * $users ->perpage() + $loop->index + 1; @endphp
                            <tr>
                                <td>{{ $count }}</td>
                                <td><a href="{{ route('tickets.admin.users.show', ['user' => $user->id]) }}">{{ $user->name }}</a></td>
                                <td>{{ $user->unit && $user->unit->unit ? $user->unit->unit->name : '-' }}</td>
                                <td>{{ $user->unit && $user->unit->unit ? $user->unit->unit->department->name : '-' }}</td>
                                <td>{{ $user->assignedTickets->count() }}</td>
                                <td>
                                    @if($user->is_active)
                                    <a href="{{ request()->fullUrlWithQuery(['activate' => false, 'user_id' => $user->id]) }}">Deactivate user</a>
                                    @else
                                    <a href="{{ request()->fullUrlWithQuery(['activate' => true, 'user_id' => $user->id]) }}">Activate user</a>
                                    @endif
                                    <br/>
                                    <a href="{{ request()->fullUrlWithQuery(['reset-password' => true, 'user_id' => $user->id]) }}">Resend Activation Email</a>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="irs_pagination">
            {{ $users->links() }}
            </div>
      </div>

      <div class="modal fade" tabindex="-1" role="dialog" id="user-modal" aria-modal="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <h6 class="text-primary mb-4">Add a new vendor</h6>
              <form action="#" id="create-form" method="post">
              @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" required name="name">
                  <p class="invalid-feedback" id="name"></p>
                </div>
                <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" class="form-control" required name="email">
                  <p class="invalid-feedback" id="email"></p>
                </div>
                <div class="form-group">
                        <label for="department">Department</label>
                        <select class="form-control departments" name="department_id">
                            <option value="">Select a Department</option>
                        </select>
                        <p class="invalid-feedback" id="department_id"></p>
                </div>
                <div class="form-group">
                        <label for="unit">Unit</label>
                        <select class="form-control units" disabled name="unit_id">
                            <option value="">Select a Unit</option>
                        </select>
                        <p class="invalid-feedback" id="unit_id"></p>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">
                    <div class="spinner-grow spinner-grow-md mr-1 animate-this d-none" id="processing" role="status"><span class="sr-only">Loading...</span></div>
                        Add User
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>



      <div class="modal fade" tabindex="-1" role="dialog" id="assign-modal" aria-modal="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <h6 class="text-primary mb-4">Assign staff as vendor</h6>

              <div class="item-wrapper">
                    <form id="assign-form" action="#" method="POST">
                          <div class="form-group">
                                  <label for="unit">Select Staff</label>
                                  <select class="form-control select2"  name="staff_ids[]" id="staff"  multiple="multiple">
                                      <option value="">Select staff</option>
                                      @if($staffs->count() > 0)
                                      @foreach($staffs as $staff)
                                      <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                                      @endforeach
                                      @endif
                                  </select>
                                  <p class="invalid-feedback" id="staff_ids"></p>
                          </div>
                          <div class="form-group">
                                  <label for="department">Department</label>
                                  <select class="form-control departments" name="department_id">
                                      <option value="">Select a Department</option>
                                  </select>
                                  <p class="invalid-feedback" id="department_id"></p>
                          </div>
                          <div class="form-group">
                                  <label for="unit">Unit</label>
                                  <select class="form-control units" disabled name="unit_id">
                                      <option value="">Select a Unit</option>
                                  </select>
                                  <p class="invalid-feedback" id="unit_id"></p>
                          </div>
                          <button type="submit" class="btn btn-sm btn-primary">
                              <div class="spinner-grow spinner-grow-md mr-1 animate-this d-none" id="processing" role="status"><span class="sr-only">Loading...</span></div>
                                  Add Users
                          </button>
                      </form>


                  </div>


            </div>
          </div>
        </div>
      </div>


@endsection
@section('scripts')
<script>
    var departments = [];
    var units = [];


    $(document).ready(function() {

    //   $('.select2').select2();

        //fetch depts
        $.get("{{ route('api.departments.list') }}", (res) => {
            departments = res.data;
            //append depts
            appendItems(departments, '.departments');
        });

        //load units
        $('.departments').change(function(e) {
            units = departments.filter(item => item.id == e.target.value)[0].units;

            appendItems(units, '.units');
            $('.units').removeAttr('disabled');
        })

        //load categories
        $('.units').change(function(e) {
            categories = units.filter(item => item.id == e.target.value)[0].categories;

            appendItems(categories, '#categories');
            $('#categories').removeAttr('disabled');
            // console.log('success', units);
        })


        $('#create-form').submit(function(e) {
            e.preventDefault();

            let formObj = {};
            let formData = $(this).serializeArray();

            formData.forEach((item) => {
                formObj[item.name] = item.value
            });

            $.post("{{ route('tickets.admin.users.post.store') }}", formData)
            .done((res) => {
                alert(`Vendor created successfully! . Click OK to continue`);
                window.location.reload();
            })
            .fail((err) => {
                if(err.status == 422) {
                    $.each(err.responseJSON.errors, (index, value) => {
                        $(`p#${index}`).text(value);
                    })
                    // console.log(err);
                } else {
                    alert('An error occured. Please try again');
                }
            });
        })

        $('#assign-form').submit(function(e) {
            e.preventDefault();

            let formObj = {};
            let formData = $(this).serializeArray();

            formData.forEach((item) => {
                formObj[item.name] = item.value
            });

            $.post("{{ route('tickets.admin.users.assign.post.store') }}", formData)
            .done((res) => {
                alert(`Staff successfully assigned as vendor! . Click OK to continue`);
                window.location.reload();
            })
            .fail((err) => {
                if(err.status == 422) {
                    $.each(err.responseJSON.errors, (index, value) => {
                        $(`p#${index}`).text(value);
                    })
                    // console.log(err);
                } else {
                    alert('An error occured. Please try again');
                }
            });
        })
    });


    function appendItems(items, field) {
        $(field).html('');
        $(field).append(`<option value="">Select an option</option>`);
        items.forEach((item) => {
                $(field).append(`<option value="${item.id}">${item.name}</option>`);
        })
    }

</script>
@endsection
