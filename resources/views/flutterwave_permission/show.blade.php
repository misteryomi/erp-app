@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show flutterwave_permission
    </h1>
    <br>
    <a href='{!!url("flutterwave_permission")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Flutterwave_permission Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>staff</b> </td>
                <td>{!!$flutterwave_permission->staff!!}</td>
            </tr>
            <tr>
                <td> <b>staff_department</b> </td>
                <td>{!!$flutterwave_permission->staff_department!!}</td>
            </tr>
            <tr>
                <td> <b>staff_permission</b> </td>
                <td>{!!$flutterwave_permission->staff_permission!!}</td>
            </tr>
            <tr>
                <td> <b>staff_email</b> </td>
                <td>{!!$flutterwave_permission->staff_email!!}</td>
            </tr>
            <tr>
                <td> <b>staff_status</b> </td>
                <td>{!!$flutterwave_permission->staff_status!!}</td>
            </tr>
            <tr>
                <td> <b>permitted_by</b> </td>
                <td>{!!$flutterwave_permission->permitted_by!!}</td>
            </tr>
            <tr>
                <td> <b>others</b> </td>
                <td>{!!$flutterwave_permission->others!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection