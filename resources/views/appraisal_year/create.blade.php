@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create appraisal_year
    </h1>
    <a href="{!!url('appraisal_year')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Appraisal_year Index</a>
    <br>
    <form method = 'POST' action = '{!!url("appraisal_year")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="year">year</label>
            <input id="year" name = "year" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">title</label>
            <input id="title" name = "title" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection