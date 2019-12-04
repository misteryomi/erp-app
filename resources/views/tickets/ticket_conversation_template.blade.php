        <div class="card">
            <div class="card-body">
                <div class="row">
                    @if($conversations->count() > 0)
                        @foreach($conversations as $conversation)
                        <div class="col-sm-11 alert {{ !$conversation->is_agent ? 'alert-secondary' : 'offset-md-1 text-right alert-success'}}">
                                <strong class="text-dark">{{ $conversation->sender->name }}</strong><br/>
                                <small class="text-muted mb-1">{{ $conversation->formated_date }}</small>
                                <div class="col-md-12"><hr/></div>
                                <p>{{ $conversation->message }}</p>

                                @if($conversation->attachment)
                                    <a href="{{ $conversation->attachment  }}" target="_blank"><img width="300" style="margin-top: 20px" src="{{ $conversation->attachment }}" alt="" /></a>
                                @endif
                        </div>
                        @endforeach
                    @endif
                </div>

                <div class="irs_pagination">
                    {{ $conversations->links() }}
                </div>

            </div>
        </div>
