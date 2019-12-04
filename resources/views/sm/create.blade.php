@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create sm
    </h1>
    <a href="{!!url('sm')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Sm Index</a>
    <br>
    <form method = 'POST' action = '{!!url("sm")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="staff_id">staff_id</label>
            <input id="staff_id" name = "staff_id" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">phone</label>
            <input id="phone" name = "phone" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input id="email" name = "email" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="cif">cif</label>
            <input id="cif" name = "cif" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">message</label>
            <input id="message" name = "message" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sent">sent</label>
            <input id="sent" name = "sent" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">body</label>
            <input id="body" name = "body" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="other1">other1</label>
            <input id="other1" name = "other1" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="other2">other2</label>
            <input id="other2" name = "other2" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection