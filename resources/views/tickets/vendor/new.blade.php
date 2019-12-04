@extends('layouts.app')

@section('content')
    @php $vendor = auth()->guard('vendor')->user();  @endphp
    <div class="row">
        <div class="col-12 pt-5 pb-4">
        <h4>Create Ticket</h4>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
        <div class="item-wrapper">
        <form id="create-ticket" action="#" method="POST">
            <div class="form-group">
            </div>
            <div class="form-group row">
                <div class="col-md-8">
                    <label for="category">Select User</label>
                    <select class="form-control select2"  name="ticket_owner" id="users">
                        <option value="">Select User</option>
                        @if($users->count() > 0)
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        @endif
                    </select>
                    <p class="invalid-feedback">Please note: The selected user would have to approve the ticket before it can be active.</p>
                    <input type="hidden" value="{{ $vendor->unit->unit->department->id}}" name="department_id" />
                    <input type="hidden" value="{{ $vendor->unit->unit->id }}" name="unit_id" />
                </div>
                <!--<div class="col-md-4">-->
                <!--    <label for="department">Department</label>-->
                <!--    <select class="form-control" name="department_id" id="departments">-->
                <!--        <option value="">Select a Department</option>-->
                <!--    </select>       -->
                <!--    <p class="invalid-feedback" id="department_id"></p>-->
                <!--</div>-->
                <!--<div class="col-md-4">-->
                <!--    <label for="unit">Unit</label>-->
                <!--    <select class="form-control" disabled name="unit_id" id="units">-->
                <!--        <option value="">Select a Unit</option>-->
                <!--    </select>       -->
                <!--    <p class="invalid-feedback" id="unit_id"></p>-->
                <!--</div>-->
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
                @php $categories = $vendor->unit->unit->categories(); @endphp
                    <select class="form-control" name="category_id" id="categories">
                        <option value="">Select a Category</option>
                        @if($categories->count() > 0)
                            @foreach($categories->get() as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        @endif
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

            $('#submit').attr('disabled', true);

            let formObj = {};
            let formData = new FormData($(this)[0]);
            formData.append('attachment', $('input[type=file]')[0].files[0]);


            $.ajax({
                type: "POST",
                url: "{{ route('tickets.vendor.post.new') }}",
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
        items.forEach((item) => {
                $(field).append(`<option value="${item.id}">${item.name}</option>`);
        })
    }

</script>
@endsection
