<div class="py-5">
    <form action="{{ route('profile.avatar.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="avatar" class="form-control">
        </div>
        <button type="submit" class="btn btn-default">Update Profile Picture</button>
    </form>
</div>
