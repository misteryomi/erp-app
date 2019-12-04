@extends('layouts.app')


@section('wide_content')
<div class="header bg-default pt-5 pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="pt-2 mb-3 text-light">
                <h1 class="text-light">{{ '@'.$user->username }}'s Profile</h1>
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
                    <ul class="list-group list-group-flush" data-toggle="checklist">
                        <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                        <div class="checklist-item checklist-item-success checklist-item-checked">
                            <div class="checklist-info">
                            <h5 class="checklist-title mb-0">Call with Dave</h5>
                            <small>10:30 AM</small>
                            </div>
                            <div>
                            <div class="custom-control custom-checkbox custom-checkbox-success">
                                <input class="custom-control-input" id="chk-todo-task-1" type="checkbox" checked="">
                                <label class="custom-control-label" for="chk-todo-task-1"></label>
                            </div>
                            </div>
                        </div>
                        </li>
                        <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                        <div class="checklist-item checklist-item-warning">
                            <div class="checklist-info">
                            <h5 class="checklist-title mb-0">Lunch meeting</h5>
                            <small>10:30 AM</small>
                            </div>
                            <div>
                            <div class="custom-control custom-checkbox custom-checkbox-warning">
                                <input class="custom-control-input" id="chk-todo-task-2" type="checkbox">
                                <label class="custom-control-label" for="chk-todo-task-2"></label>
                            </div>
                            </div>
                        </div>
                        </li>
                        <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                        <div class="checklist-item checklist-item-info">
                            <div class="checklist-info">
                            <h5 class="checklist-title mb-0">Argon Dashboard Launch</h5>
                            <small>10:30 AM</small>
                            </div>
                            <div>
                            <div class="custom-control custom-checkbox custom-checkbox-info">
                                <input class="custom-control-input" id="chk-todo-task-3" type="checkbox">
                                <label class="custom-control-label" for="chk-todo-task-3"></label>
                            </div>
                            </div>
                        </div>
                        </li>
                        <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                        <div class="checklist-item checklist-item-danger checklist-item-checked">
                            <div class="checklist-info">
                            <h5 class="checklist-title mb-0">Winter Hackaton</h5>
                            <small>10:30 AM</small>
                            </div>
                            <div>
                            <div class="custom-control custom-checkbox custom-checkbox-danger">
                                <input class="custom-control-input" id="chk-todo-task-4" type="checkbox" checked="">
                                <label class="custom-control-label" for="chk-todo-task-4"></label>
                            </div>
                            </div>
                        </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
