@extends('layouts.auth')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card">
                <div class="card-header text-center mb-2">
                    <h3>Vendor Login</h3>
                    <p>Please login to continue</p>
                </div>
                @include('layouts.partials.alert')
                <div class="card-body">
                    <form action="{{ route('tickets.vendor.post.login') }}" method="POST">
                            @csrf
                            <div class="form-group input-rounded">
                                <input type="text" class="form-control" name="email" placeholder="Username" value="{{ request()->old('email') }}" />
                            </div>
                            <div class="form-group input-rounded">
                                <input type="password" class="form-control" name="password" placeholder="Password" />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"> Login </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
