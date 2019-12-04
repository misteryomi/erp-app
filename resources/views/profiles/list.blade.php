@extends('layouts.app')

@section('wide_content')
<div class="header bg-default pt-5 pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="pt-2 mb-3 text-light">
                <h1 class="text-light">All Staff</h1>
            </div>
        </div>
    </div>
</div>
<div class="container mt--5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <form>
                        <input type="text" class="form-control" />
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
            @foreach($users as $user)
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-body">
                        <a href="{{ route('profile.show', ['user' => $user->username ]) }}">
                            <img src="{{ $user->avatar }}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 140px;">
                        </a>
                        <div class="pt-4 text-center">
                            <h5 class="h3 title">
                                <span class="d-block mb-1">{{ $user->name }}</span>
                                <small class="h4 font-weight-light text-muted">Web Developer</small>
                            </h5>
                            <div class="mt-3">
                                <a href="#" class="btn btn-twitter btn-icon-only rounded-circle">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-facebook btn-icon-only rounded-circle">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-dribbble btn-icon-only rounded-circle">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>

    <div class="irs_pagination">
        {{ $users->links() }}
    </div>
</div>
@endsection
