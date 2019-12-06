@extends('layouts.app')

@section('wide_content')
<div class="header bg-default pt-5 pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="pt-2 mb-3 text-light">
                <h1 class="text-light">Edit Profile</h1>
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
                            <ul class="nav nav-tabs-code" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="edit-profile-tab" data-toggle="tab" href="#edit-profile" role="tab" aria-controls="edit-profile" aria-selected="true">Edit Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="edit-profile-picture-tab" data-toggle="tab" href="#edit-profile-picture" role="tab" aria-controls="edit-profile-picture" aria-selected="false">Update Profile Picture</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" id="change-password-tab" data-toggle="tab" href="#change-password" role="tab" aria-controls="change-password" aria-selected="false">Change Password</a>
                                    </li>
                                </ul>
                            @include('layouts.partials.alert')
                            <div class="tab-content border p-3" id="myTabContent">
                                <div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
                                        @include('profiles.edit-profile')
                                </div>
                                <div class="tab-pane fade" id="edit-profile-picture" role="tabpanel" aria-labelledby="edit-profile-picture-tab">
                                        @include('profiles.avatar')
                                </div>
                                <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
                                    @include('profiles.password')
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            @include('profiles.profile')
        </div>
    </div>
@endsection
