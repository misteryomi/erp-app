@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show flutterwave_sector
    </h1>
    <br>
    <a href='{!!url("flutterwave_sector")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Flutterwave_sector Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$flutterwave_sector->name!!}</td>
            </tr>
            <tr>
                <td> <b>email</b> </td>
                <td>{!!$flutterwave_sector->email!!}</td>
            </tr>
            <tr>
                <td> <b>active</b> </td>
                <td>{!!$flutterwave_sector->active!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection