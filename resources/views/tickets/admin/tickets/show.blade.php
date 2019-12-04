@extends('layouts.app')

@section('content')
    <div class="doc-content-section-inner">
        <h5>Ticket #{{ $ticket->ticket_id }}</h5>
        <h1 class="mb-3">{{ $ticket->title }}</h1>
        <small class="text-muted">{{ $ticket->formated_date }}</small><br/>
        @if($ticket->solved_at)
            <small class="text-muted">Solved at: {{ $ticket->solved_at }}</small><br/>
        @endif
        @if($ticket->is_assigned)
        <small>Assigned to  <strong>{{ $ticket->assignedTo->name }}</strong></small><br/>
        @endif
        <br/>

        {!! $ticket->statusBadge() !!}

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                        @include('tickets.ticket_message_template')
                        @include('tickets.ticket_conversation_template')
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                       <p class="card-title mb-4">Reassign Ticket</p>
                       <div class="item-wrapper">
                            <form id="create-form" action="#" method="POST">
                                <div class="form-group">
                                    <label for="unit">Department</label>
                                    <select class="form-control" name="department_id" id="departments">
                                        <option value="">Select a Department</option>
                                    </select>
                                    <p class="invalid-feedback" id="department_id"></p>
                                </div>
                                <div class="form-group">
                                    <label for="unit">Unit</label>
                                    <select class="form-control" name="unit_id" id="units">
                                        <option value="">Select a Unit</option>
                                    </select>
                                    <p class="invalid-feedback" id="unit_id"></p>
                                </div>
                                <div class="form-group">
                                        <label for="unit">Staff</label>
                                        <select class="form-control" disabled name="staff_id" id="staff">
                                            <option value="">Select a staff</option>
                                        </select>
                                        <p class="invalid-feedback" id="staff_id"></p>
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">
                                    <div class="spinner-grow spinner-grow-md mr-1 animate-this d-none" id="processing" role="status"><span class="sr-only">Loading...</span></div>
                                        Reassign Ticket
                                </button>
                                </form>

                            </div>
                    </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <div class="split-header">
                      <p class="card-title">Assignment Log</p>
                    </div>
                    <div class="vertical-timeline-wrapper">
                      <div class="timeline-vertical dashboard-timeline">
                          @if($assignmentLog->count() > 0)
                            @foreach($assignmentLog as $assignment)
                                <div class="activity-log">
                                    <p class="log-name">{{ $assignment->user ? $assignment->user->name : '' }}</p>
                                    <div class="log-details"><small class="text-muted">{{ $assignment->formated_date }}</small></div>
                                </div>
                            @endforeach
                          @endif
                      </div>
                    </div>
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
            staff = units.filter(item => item.id == e.target.value)[0].staff;

            appendItems(staff, '#staff');
            $('#staff').removeAttr('disabled');
            // console.log('success', units);
        })


        $('#create-form').submit(function(e) {
            e.preventDefault();

            let formObj = {};
            let formData = $(this).serializeArray();

            formData.forEach((item) => {
                formObj[item.name] = item.value
            });

            $.post("{{ route('tickets.admin.tickets.reassign', ['ticket' => $ticket->ticket_id]) }}", formData)
            .done((res) => {
                alert(`Ticket reassigned successfully! . Click OK to continue`);
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
        $(field).html('<option>Select option</option>');
        items.forEach((item) => {
            $(field).append(`<option value="${item.id}">${item.name}</option>`);
        })
    }

</script>
@endsection
