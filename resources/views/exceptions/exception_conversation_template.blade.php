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
                                    <br/><hr/>
                                    <a href="{{ $conversation->attachment  }}" target="_blank"><strong><i class="fa fa-file"></i> Download attachment</strong></a>
                                @endif
                        </div>
                        @endforeach
                    @endif
                </div>

                @if(method_exists('links', $conversations))
                <div class="irs_pagination">
                    {{ $conversations->links() }}
                </div>
                @endif

            </div>
        </div>
