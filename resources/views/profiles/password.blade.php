<div class="py-5">
    <form action="{{ route('profile.password.update') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="password" name="old_password" placeholder="Old Password"  class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="New Password"  class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" placeholder="Confirm New Password"  class="form-control">
        </div>

        <button type="submit" class="btn btn-default">Update Password</button>
    </form>
</div>
