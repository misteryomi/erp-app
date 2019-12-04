        <div class="card">
            <div class="card-body">
                <strong class="text-dark">By: {{ $ticket->user->name }}</strong><br/>
                <small class="text-muted mb-1">{{ $ticket->formated_date }}</small>
                <div class="col-md-12"><hr/></div>
                <p>{{ $ticket->message }}</p>

                @if($ticket->attachment)
                    <a href="{{ $ticket->attachment  }}" target="_blank"><img width="300" style="margin-top: 20px" src="{{ $ticket->attachment }}" alt="" /></a>
                @endif

            </div>
        </div>
