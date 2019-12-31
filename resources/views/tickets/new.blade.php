@extends('layouts.app')

@section('content')
    <div class="doc-content-section-inner">
        <h1>Create a new ticket</h1>
            <div class="card">
                <div class="card-body">
                <div class="item-wrapper">
                    <form id="create-ticket" action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="department">Department</label>
                            <select class="form-control" name="department_id" id="departments">
                                <option value="">Select a Department</option>
                            </select>
                            <p class="invalid-feedback" id="department_id"></p>
                        </div>
                        <div class="col-md-4">
                            <label for="unit">Unit</label>
                            <select class="form-control" disabled name="unit_id" id="units">
                                <option value="">Select a Unit</option>
                            </select>
                            <p class="invalid-feedback" id="unit_id"></p>
                        </div>
                        <div class="col-md-4">
                            <label for="priority">Priority</label>
                            <select class="form-control" name="priority">
                                <option selected>Low</option>
                                <option>Medium</option>
                                <option>High</option>
                            </select>
                            <p class="invalid-feedback" id="priority"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                            <select class="form-control" disabled name="category_id" id="categories">
                                <option value="">Select a Category</option>
                            </select>
                            <p class="invalid-feedback" id="category_id"></p>
                    </div>
                    <div class="form-group">
                        <label for="title">Subject</label>
                        <input type="text" class="form-control" placeholder="Ticket title"name="title" id="title">
                        <p class="invalid-feedback" id="title"></p>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1">Description</label>
                        <textarea rows="10" placeholder="Enter your message" name="message" name="message" class="form-control" id="message"></textarea>
                        <p class="invalid-feedback" id="message"></p>
                    </div>

                    @if(auth()->user()->isVendor)
                    <div class="form-group">
                        <label for="inputPassword1">Are you creating this ticket on behalf of someone else?</label><br/>
                        <input type="radio" value="false" name="is_on_behalf" checked class="isOnBehalf" />No
                        <input type="radio" value="true" name="is_on_behalf" class="isOnBehalf" />Yes
                    </div>

                    <div class="form-group" id="displayOnBehalf" style="display: none">
                        <label for="category">Select User</label>
                            <select class="form-control select2" name="ticket_owner" id="users">
                                <option value="">Select User</option>
                                @php $users = \App\User::all(); @endphp
                                @if($users->count() > 0)
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <p class="invalid-feedback">Please note: The selected user would have to approve the ticket before it can be active.</p>
                    </div>
                    @endif

                    <div class="form-group">
                        <input type="file" name="attachment" id="attachment">
                    </div>
                    <button type="submit" id="submit" class="btn btn-sm btn-primary">
                        <div class="spinner-grow spinner-grow-md mr-1 animate-this d-none" id="processing" role="status"><span class="sr-only">Loading...</span></div>
                            Create Ticket</button>
                </form>

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
        $('departments').change(function(e) {
            loadSubData('units', departments);
        })

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

        $('.isOnBehalf').click(function() {
            $('#displayOnBehalf').toggle();
        })

        $('#create-ticket').submit(function(e) {
            e.preventDefault();

            $('#submit').attr('disabled', 'true');

            let formObj = {};
            let formData = new FormData($(this)[0]);
            formData.append('attachment', $('input[type=file]')[0].files[0]);

            $.ajax({
                type: "POST",
                url: "{{ route('tickets.post.new') }}",
                data: formData,
                //use contentType, processData for sure.
                contentType: false,
                processData: false,
                success: function(res) {
                    alert(`${res.message}. Click OK to continue`);
                    window.location = res.redirectsTo;
                },
                error: function(err) {
                    if(err.status == 422) {
                        $.each(err.responseJSON.errors, (index, value) => {
                            $(`p#${index}`).text(value);
                        })
                        // console.log(err);
                    } else {
                        console.log(err);
                        alert('An error occured. Please try again');
                    }
                    $('#submit').removeAttr('disabled');
                }
            });
        })
    });

    $('.select2').select2();

    function appendItems(items, field) {
        $(field).html('<option value="">Select an option</option>')
        items.forEach((item) => {
                $(field).append(`<option value="${item.id}">${item.name}</option>`);
        })
    }

</script>
@endsection
