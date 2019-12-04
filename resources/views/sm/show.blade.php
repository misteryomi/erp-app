@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show sm
    </h1>
    <br>
    <a href='{!!url("sm")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Sm Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>staff_id</b> </td>
                <td>{!!$sm->staff_id!!}</td>
            </tr>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$sm->name!!}</td>
            </tr>
            <tr>
                <td> <b>phone</b> </td>
                <td>{!!$sm->phone!!}</td>
            </tr>
            <tr>
                <td> <b>email</b> </td>
                <td>{!!$sm->email!!}</td>
            </tr>
            <tr>
                <td> <b>cif</b> </td>
                <td>{!!$sm->cif!!}</td>
            </tr>
            <tr>
                <td> <b>message</b> </td>
                <td>{!!$sm->message!!}</td>
            </tr>
            <tr>
                <td> <b>sent</b> </td>
                <td>{!!$sm->sent!!}</td>
            </tr>
            <tr>
                <td> <b>body</b> </td>
                <td>{!!$sm->body!!}</td>
            </tr>
            <tr>
                <td> <b>other1</b> </td>
                <td>{!!$sm->other1!!}</td>
            </tr>
            <tr>
                <td> <b>other2</b> </td>
                <td>{!!$sm->other2!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection