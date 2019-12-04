@extends('layouts.app')

@section('content')
      <div class="row">
          <div class="col-12 pt-5 pb-4">
            <h4>Reset Password</h4>
          </div>
      </div>
      <div class="card">
          <div class="card-body">
                @include('layouts.partials.alert')
                <form action="{{ route('tickets.vendor.password.reset.post') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Old Password</label>
                        <input type="password" class="form-control" name="old_password" required placeholder="Old Password" />
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control" name="password" required placeholder="New Password" />
                    </div>
                    <div class="form-group">
                        <label>Confirm New Password</label>
                        <input type="password" class="form-control" required name="password_confirmation" placeholder="Confirm New Password" />
                    </div>
                    <button type="submit" class="btn btn-primary"> Update Password </button>
                </form>

            </div>

      </div>


@endsection
