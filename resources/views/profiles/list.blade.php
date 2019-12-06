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

                    <form action="?search">
                        <div class="form-group">
                            <input type="text" class="form-control" name="q" placeholder="Enter staff name or username" />
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
            @foreach($users as $user)
                @include('profiles.profile')
            </div>
            @endforeach
    </div>

    <div class="irs_pagination">
        {{ $users->links() }}
    </div>
</div>
@endsection
