<div class="col-md-4">
    <div class="card">
    <div class="card-body">
        <a href="{{ route('profile.show', ['user' => $user->username ]) }}">
            <img src="{{ $user->avatar }}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 140px;">
        </a>
        <div class="pt-4 text-center">
            <h5 class="h3 title">
                <span class="d-block mb-1">{{ $user->name }}</span>
                <small class="h4 font-weight-bold text-muted">{{ $user->designation }}</small><br/>
                <small class="h4 font-weight-light text-muted">{{ $user->department }}</small>
            </h5>
        </div>
    </div>
</div>
