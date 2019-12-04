        <div class="card">
            <div class="card-body">
                <strong class="text-dark">By: {{ $exception->user->name }}</strong><br/>
                <small class="text-muted mb-1">{{ $exception->formated_date }}</small>
                <div class="col-md-12"><hr/></div>
                <p>{{ $exception->message }}</p>

                @if($exception->attachment)
                    <br/><hr/>
                    <a href="{{ $exception->attachment  }}" target="_blank"><strong><i class="fa fa-file"></i> Download attachment</strong></a>
                @endif

            </div>
        </div>
