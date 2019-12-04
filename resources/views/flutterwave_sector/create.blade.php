@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create flutterwave_sector
    </h1>
    <a href="{!!url('flutterwave_sector')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Flutterwave_sector Index</a>
    <br>
    <form method = 'POST' action = '{!!url("flutterwave_sector")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input id="email" name = "email" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="active">active</label>
            <input id="active" name = "active" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection