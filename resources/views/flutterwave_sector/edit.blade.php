@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit flutterwave_sector
    </h1>
    <a href="{!!url('flutterwave_sector')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Flutterwave_sector Index</a>
    <br>
    <form method = 'POST' action = '{!! url("flutterwave_sector")!!}/{!!$flutterwave_sector->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$flutterwave_sector->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input id="email" name = "email" type="text" class="form-control" value="{!!$flutterwave_sector->
            email!!}"> 
        </div>
        <div class="form-group">
            <label for="active">active</label>
            <input id="active" name = "active" type="text" class="form-control" value="{!!$flutterwave_sector->
            active!!}"> 
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection