@extends('layouts.auth')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <h4>Welcome to Primera Internal Resource Stream (IRS)</h4>
                <small>Create your IRS account</small><br/>
                <a href="{{ route('login') }}"><small><strong>Already own an account? Click here to login</strong></small></a>

              </div>

              @include('layouts.partials.alert')

              <form action="{{ route('post.register') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                 <label><small>Username or email address</small></label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="username"  placeholder="Username or email address">
                  </div>
                </div>
                <div class="form-group">
                <label><small>Password</small></label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" name="remember_me" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-block btn-primary my-4">Create Account</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
