@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create flutterwave_permission
    </h1>
    <a href="{!!url('flutterwave_permission')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Flutterwave_permission Index</a>
    <br>
    <form method = 'POST' action = '{!!url("flutterwave_permission")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="staff">staff</label>
            <input id="staff" name = "staff" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="staff_department">staff_department</label>
            <input id="staff_department" name = "staff_department" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="staff_permission">staff_permission</label>
            <input id="staff_permission" name = "staff_permission" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="staff_email">staff_email</label>
            <input id="staff_email" name = "staff_email" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="staff_status">staff_status</label>
            <input id="staff_status" name = "staff_status" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="permitted_by">permitted_by</label>
            <input id="permitted_by" name = "permitted_by" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="others">others</label>
            <input id="others" name = "others" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection