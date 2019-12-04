@extends('layouts.app')

@section('content')
    <div class="doc-content-section-inner">
        <h5>Exception #{{ $exception->exception_id }}</h5>
        <h1 class="mb-3">{{ $exception->title }}</h1>
        <small class="text-muted">{{ $exception->formated_date }}</small><br/>
        {{-- @if($exception->solved_at)
            <small class="text-muted">Solved at: {{ $exception->solved_at }}</small><br/>
        @endif --}}
        <small>Exception Processor:  {{ $exception->assignedTo->name }}</small><br/>
        <small>Team Lead:  {{ $exception->team_lead->name }}</small><br/>
        <small>Supervisor:  {{ $exception->hod->name }}</small><br/>
        <small><strong>Current escalation level: {{ $exception->escalationLevel() }}</strong></small>

        <br/>
        {!! $exception->statusBadge() !!}
        {!! $exception->displayApprovedBadge() !!}
        <br/>
        <br/>

        @include('layouts.partials.alert')

        <div class="mb-4 text-right">
            @if($exception->canRespond() && $exception->status !== 'CLOSED')

                <a class="btn btn-irs goto text-white" href="#reply">Respond to Exception</a>

                @if(auth()->user()->isExceptionAdmin())
                <a class="btn btn-danger text-white" href="?close">Mark as Closed</a>
                @endif

            @endif
            <a class="btn btn-irs goto text-white" href="{{ auth()->user()->isExceptionAdmin() ? route('exceptions.list', ['display_all']) : route('exceptions.list', request()->has('supervisor') ? ['supervisor']: '') }}">&laquo; Go back to Exceptions</a>
        </div>

        @include('exceptions.exception_message_template')
        @include('exceptions.exception_conversation_template')

        @if($exception->canRespond() && $exception->status != 'CLOSED')
            <div id="reply">
                <div class="card">
                    <div class="card-body">
                    <div class="item-wrapper">
                        <form id="submit-response" action="#" method="POST">
                        <div class="form-group">
                            <label>Respond to exception</label>
                            <textarea rows="10" placeholder="Enter your message" name="message" class="form-control" v-model="message"></textarea>
                            <p class="invalid-feedback" id="message"></p>
                        </div>
                        <div class="form-group">
                            <input type="file" name="attachment" id="attachment">
                        </div>
                        @if(auth()->user()->isExceptionAdmin())
                        <div class="form-group">
                            <input type="checkbox" name="mark_as_closed" id="close" > Mark as closed
                        </div>
                        @endif

                        <button type="submit" class="btn btn-sm btn-primary">
                            <div class="spinner-grow spinner-grow-md mr-1 animate-this d-none" role="status"><span class="sr-only">Loading...</span></div>
                            RESPOND AND SUBMIT
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

            let formObj = {};
            let formData = new FormData($(this)[0]);
            formData.append('attachment', $('input[type=file]')[0].files[0]);

            $.ajax({
                type: "POST",
                url: "{{ route('exceptions.conversation.new', ['exception_id' => $exception->exception_id]) }}",
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
                }
            });

        })

    })
</script>
@endsection
