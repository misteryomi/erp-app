@extends('layouts.app')


@section('wide_content')
<div class="header bg-default pt-5 pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="pt-2 mb-3 text-light">
                <h1 class="text-light">{{ '@'.$user->username }}'s Profile</h1>
                {{-- <small class="text-light">{{ $user->details ? $user->details->bio : '' }}</small> --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container mt--7">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach($user_details as $key => $value)
                        <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <strong>{{ ucwords(str_replace('_', ' ', $key)) }}</strong>
                                </div>
                                <div class="col-md-4">
                                    {!! $value !!}
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>

        @include('profiles.profile')
    </div>
</div>
@endsection
