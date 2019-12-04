@extends('layouts.app')

@section('content')
      <div class="row">
          <div class="col-12 pt-5 pb-4">
            <h4>All Categories</h4>
            <div class="text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form-modal">
                  <span class="mdi mdi-bookmark-plus-outline mr-3"></span> Add a new Category
                </button>
            </div>
          </div>
      </div>
      @include('layouts.partials.alert')
      <div class="card">
          <div class="card-body py-3">
            <p class="card-title ml-n1">All Categories</p>
          </div>
          <div class="table-responsive">
              <table class="table table-hover table-sm">
                    <thead>
                        <tr class="solid-header">
                            <th>#</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Department</th>
                            <th>No of Tickets</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @if($categories->count() < 1)
                            <tr><td colspan="6" class="text-center">No record found.</td></tr>
                        @else
                        @php $count = 1 @endphp
                        @foreach($categories as $category)
                            @php $count =  ($categories ->currentpage()-1) * $categories ->perpage() + $loop->index + 1; @endphp
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->unit->name }}</td>
                                <td>{{ $category->unit->department->name }}</td>
                                <td>{{ $category->tickets->count() }}</td>
                                {{-- <td>
                                    <a href="{{ route('tickets.admin.categories.delete', ['id' => $category->id]) }}">Delete</a> |
                                    <a href="#">Edit</a>
                                </td> --}}
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="irs_pagination">
            {{ $categories->links() }}
            </div>
      </div>

      <div class="modal fade" tabindex="-1" role="dialog" id="form-modal" aria-modal="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <h6 class="text-primary mb-4">Add a new Category</h6>
              <div class="item-wrapper">
                  <form id="create-form" action="#" method="POST">
                      <div class="form-group">
                              <label for="category">Name</label>
                                  <input class="form-control" name="name" />
                                  <p class="invalid-feedback" id="name"></p>
                      </div>
                      <div class="form-group">
                            <label for="department">Department</label>
                            <select class="form-control" name="department_id" id="departments">
                                <option value="">Select a Department</option>
                            </select>
                            <p class="invalid-feedback" id="department_id"></p>
                      </div>
                      <div class="form-group">
                            <label for="unit">Unit</label>
                            <select class="form-control" disabled name="unit_id" id="units">
                                <option value="">Select a Unit</option>
                            </select>
                            <p class="invalid-feedback" id="unit_id"></p>
                      </div>
                      <button type="submit" class="btn btn-sm btn-primary">
                        <div class="spinner-grow spinner-grow-md mr-1 animate-this d-none" id="processing" role="status"><span class="sr-only">Loading...</span></div>
                            Create Category
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

        //fetch depts
        $.get("{{ route('api.departments.list') }}", (res) => {
            departments = res.data;
            //append depts
            appendItems(departments, '#departments');
        });

        //load units
        $('#departments').change(function(e) {
            units = departments.filter(item => item.id == e.target.value)[0].units;

            appendItems(units, '#units');
            $('#units').removeAttr('disabled');
        })

        //load categories
        $('#units').change(function(e) {
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

            $.post("{{ route('tickets.admin.categories.post.store') }}", formData)
            .done((res) => {
                alert(`Category created successfully! . Click OK to continue`);
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
        $(field).html("<option value=''>Please select a value</option>");
        items.forEach((item) => {
                $(field).append(`<option value="${item.id}">${item.name}</option>`);
        })
    }

</script>
@endsection
