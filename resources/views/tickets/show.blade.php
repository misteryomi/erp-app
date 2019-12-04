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
        <small>Assigned to  {{ $ticket->assignedTo->name }}</small><br/>
        @endif
        <br/>
        {!! $ticket->statusBadge() !!}
        {!! $ticket->displayApprovedBadge() !!}

        @include('layouts.partials.alert')

        @if($ticket->is_assigned)
        <div class="mb-4 text-right">

            <a class="btn btn-irs goto text-white" href="#reply">Reply Ticket</a>

            @if($isOwnedByMe && !$ticket->is_approved)
             <a class="btn btn-danger text-white" href="?approve_ticket">Approve Ticket</a>
            @endif
            @if($isOwnedByMe && $ticket->status->name !== 'Solved')
             <a class="btn btn-danger text-white" href="?solved">Confirm Solved</a>
            @endif

        </div>
        @endif

        @include('tickets.ticket_message_template')
        @include('tickets.ticket_conversation_template')

        @if($ticket->is_assigned)
            <div id="reply">
                <div class="card">
                    <div class="card-body">
                    <div class="item-wrapper">
                        <form id="submit-response" action="#" method="POST">
                        <div class="form-group">
                            <label>Respond to ticket</label>
                            <textarea rows="10" placeholder="Enter your message" name="message" class="form-control" v-model="message"></textarea>
                            <p class="invalid-feedback" id="message"></p>
                        </div>
                        <div class="form-group">
                            <input type="file" name="attachment" id="attachment">
                        </div>

                        <button type="submit" id="submit" class="btn btn-sm btn-primary">
                            <div class="spinner-grow spinner-grow-md mr-1 animate-this d-none" role="status"><span class="sr-only">Loading...</span></div>
                            Reply Ticket
                        </button>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#submit-response').submit(function(e) {
            e.preventDefault();

            $('#submit').attr('disabled', true);

            let formObj = {};
            let formData = new FormData($(this)[0]);
            formData.append('attachment', $('input[type=file]')[0].files[0]);

            $.ajax({
                type: "POST",
                url: "{{ route('tickets.conversation.new', ['ticket_id' => $ticket->ticket_id]) }}",
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    alert(`${res.message}. Click OK to continue`);
                    window.location = res.redirectsTo;
                },
                error: function(err) {
                    if(err.status == 422) {
                        alert('There is an error with your form!');
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

    })
</script>
@endsection
