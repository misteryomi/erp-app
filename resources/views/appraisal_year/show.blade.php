@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show appraisal_year
    </h1>
    <br>
    <a href='{!!url("appraisal_year")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Appraisal_year Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>year</b> </td>
                <td>{!!$appraisal_year->year!!}</td>
            </tr>
            <tr>
                <td> <b>title</b> </td>
                <td>{!!$appraisal_year->title!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection