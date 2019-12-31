<div class="col-md-4">
    <div class="card">
    <div class="card-body">
        <a href="{{ route('profile.show', ['user' => $user->username ]) }}">
            <img src="{{ $user->avatar }}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 140px;">
        </a>
        <div class="pt-4 text-center">
            @if($user->isBirthday())
            <span class="badge badge-warning mb-3"><i class="fa fa-lg fa-birthday-cake"></i> We at Primera wish you a Happy Birthday! </span>
            @endif
            <h5 class="h3 title">
                <a href="{{ route('profile.show', ['user' => $user->username ]) }}"><span class="d-block mb-1">{{ $user->name }}</span></a>
                <small class="h4 font-weight-bold text-muted">{{ $user->designation }}</small><br/>
                <small class="h4 font-weight-light text-muted">{{ $user->department }}</small><hr/>
                <small class="text-muted"><a href="mailto:{{ $user->email}}"> {{ $user->email }}</a></small><br/>
                @if($user->details)
                <small class="text-muted"><a href="tel:{{ $user->details->phone }}">{{ $user->details->phone }}</a></small>
                @endif
            </h5>
        </div>
    </div>
</div>
