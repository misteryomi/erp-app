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
                <div class="card-body justify-content-center d-flex">
                    <form action="?search" class="form-inline">
                        <label class="sr-only" for="inlineFormInputName2">Name</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="q" placeholder="Enter staff name or username" />

                        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <select name="department" class="form-control">
                                <option value="">All departments</option>
                                @foreach($departments as $department)
                                    <option>{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                      </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @if($users->count() > 0)
            @foreach($users as $user)
                @include('profiles.profile')
            </div>
            @endforeach
        @else
            <p class="text-center">No record found</p>
        @endif
    </div>

    <div class="irs_pagination">
        {{ $users->links() }}
    </div>
</div>
@endsection
