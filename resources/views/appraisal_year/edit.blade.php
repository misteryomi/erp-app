@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit appraisal_year
    </h1>
    <a href="{!!url('appraisal_year')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Appraisal_year Index</a>
    <br>
    <form method = 'POST' action = '{!! url("appraisal_year")!!}/{!!$appraisal_year->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="year">year</label>
            <input id="year" name = "year" type="text" class="form-control" value="{!!$appraisal_year->
            year!!}"> 
        </div>
        <div class="form-group">
            <label for="title">title</label>
            <input id="title" name = "title" type="text" class="form-control" value="{!!$appraisal_year->
            title!!}"> 
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection