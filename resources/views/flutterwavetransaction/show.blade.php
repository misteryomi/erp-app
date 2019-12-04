@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show flutterwavetransaction
    </h1>
    <br>
    <a href='{!!url("flutterwavetransaction")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Flutterwavetransaction Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>token_id</b> </td>
                <td>{!!$flutterwavetransaction->token_id!!}</td>
            </tr>
            <tr>
                <td> <b>transaction_id</b> </td>
                <td>{!!$flutterwavetransaction->transaction_id!!}</td>
            </tr>
            <tr>
                <td> <b>transaction_reference</b> </td>
                <td>{!!$flutterwavetransaction->transaction_reference!!}</td>
            </tr>
            <tr>
                <td> <b>processor_reference</b> </td>
                <td>{!!$flutterwavetransaction->processor_reference!!}</td>
            </tr>
            <tr>
                <td> <b>amount</b> </td>
                <td>{!!$flutterwavetransaction->amount!!}</td>
            </tr>
            <tr>
                <td> <b>currency</b> </td>
                <td>{!!$flutterwavetransaction->currency!!}</td>
            </tr>
            <tr>
                <td> <b>amount_charged</b> </td>
                <td>{!!$flutterwavetransaction->amount_charged!!}</td>
            </tr>
            <tr>
                <td> <b>rave_fee</b> </td>
                <td>{!!$flutterwavetransaction->rave_fee!!}</td>
            </tr>
            <tr>
                <td> <b>merchant_fee</b> </td>
                <td>{!!$flutterwavetransaction->merchant_fee!!}</td>
            </tr>
            <tr>
                <td> <b>merchant_bore_fee</b> </td>
                <td>{!!$flutterwavetransaction->merchant_bore_fee!!}</td>
            </tr>
            <tr>
                <td> <b>processor_response_code</b> </td>
                <td>{!!$flutterwavetransaction->processor_response_code!!}</td>
            </tr>
            <tr>
                <td> <b>processor_response_message</b> </td>
                <td>{!!$flutterwavetransaction->processor_response_message!!}</td>
            </tr>
            <tr>
                <td> <b>auth_model</b> </td>
                <td>{!!$flutterwavetransaction->auth_model!!}</td>
            </tr>
            <tr>
                <td> <b>customer_ip</b> </td>
                <td>{!!$flutterwavetransaction->customer_ip!!}</td>
            </tr>
            <tr>
                <td> <b>narration</b> </td>
                <td>{!!$flutterwavetransaction->narration!!}</td>
            </tr>
            <tr>
                <td> <b>status</b> </td>
                <td>{!!$flutterwavetransaction->status!!}</td>
            </tr>
            <tr>
                <td> <b>payment_entity</b> </td>
                <td>{!!$flutterwavetransaction->payment_entity!!}</td>
            </tr>
            <tr>
                <td> <b>payment_entity_id</b> </td>
                <td>{!!$flutterwavetransaction->payment_entity_id!!}</td>
            </tr>
            <tr>
                <td> <b>date_created</b> </td>
                <td>{!!$flutterwavetransaction->date_created!!}</td>
            </tr>
            <tr>
                <td> <b>unique_reference</b> </td>
                <td>{!!$flutterwavetransaction->unique_reference!!}</td>
            </tr>
            <tr>
                <td> <b>amount_due_merchant</b> </td>
                <td>{!!$flutterwavetransaction->amount_due_merchant!!}</td>
            </tr>
            <tr>
                <td> <b>customer_id</b> </td>
                <td>{!!$flutterwavetransaction->customer_id!!}</td>
            </tr>
            <tr>
                <td> <b>customer_email</b> </td>
                <td>{!!$flutterwavetransaction->customer_email!!}</td>
            </tr>
            <tr>
                <td> <b>customer_phonenumber</b> </td>
                <td>{!!$flutterwavetransaction->customer_phonenumber!!}</td>
            </tr>
            <tr>
                <td> <b>customer_fullname</b> </td>
                <td>{!!$flutterwavetransaction->customer_fullname!!}</td>
            </tr>
            <tr>
                <td> <b>customer_date_created</b> </td>
                <td>{!!$flutterwavetransaction->customer_date_created!!}</td>
            </tr>
            <tr>
                <td> <b>card_id</b> </td>
                <td>{!!$flutterwavetransaction->card_id!!}</td>
            </tr>
            <tr>
                <td> <b>masked_pan</b> </td>
                <td>{!!$flutterwavetransaction->masked_pan!!}</td>
            </tr>
            <tr>
                <td> <b>expiry_year</b> </td>
                <td>{!!$flutterwavetransaction->expiry_year!!}</td>
            </tr>
            <tr>
                <td> <b>expiry_month</b> </td>
                <td>{!!$flutterwavetransaction->expiry_month!!}</td>
            </tr>
            <tr>
                <td> <b>type</b> </td>
                <td>{!!$flutterwavetransaction->type!!}</td>
            </tr>
            <tr>
                <td> <b>country</b> </td>
                <td>{!!$flutterwavetransaction->country!!}</td>
            </tr>
            <tr>
                <td> <b>issuer_info</b> </td>
                <td>{!!$flutterwavetransaction->issuer_info!!}</td>
            </tr>
            <tr>
                <td> <b>date_created</b> </td>
                <td>{!!$flutterwavetransaction->date_created!!}</td>
            </tr>
            <tr>
                <td> <b>merchant_id</b> </td>
                <td>{!!$flutterwavetransaction->merchant_id!!}</td>
            </tr>
            <tr>
                <td> <b>payment_count</b> </td>
                <td>{!!$flutterwavetransaction->payment_count!!}</td>
            </tr>
            <tr>
                <td> <b>other1</b> </td>
                <td>{!!$flutterwavetransaction->other1!!}</td>
            </tr>
            <tr>
                <td> <b>other2</b> </td>
                <td>{!!$flutterwavetransaction->other2!!}</td>
            </tr>
            <tr>
                <td> <b>other3</b> </td>
                <td>{!!$flutterwavetransaction->other3!!}</td>
            </tr>
            <tr>
                <td> <b>other4</b> </td>
                <td>{!!$flutterwavetransaction->other4!!}</td>
            </tr>
            <tr>
                <td> <b>other5</b> </td>
                <td>{!!$flutterwavetransaction->other5!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection