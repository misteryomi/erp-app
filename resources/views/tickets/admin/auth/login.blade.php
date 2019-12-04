@extends('tickets.admin.layouts.auth')

@section('content')
    @include('layouts.partials.alert')
    <form action="{{ route('tickets.admin.post.login') }}" method="POST">
        @csrf
        <div class="form-group input-rounded">
            <input type="text" class="form-control" name="email" placeholder="Username" value="{{ request()->old('email') }}" />
        </div>
        <div class="form-group input-rounded">
            <input type="password" class="form-control" name="password" placeholder="Password" />
        </div>
        <button type="submit" class="btn btn-primary btn-block"> Login </button>
    </form>
@endsection
