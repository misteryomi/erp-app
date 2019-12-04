@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit flutterwavetransaction
    </h1>
    <a href="{!!url('flutterwavetransaction')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Flutterwavetransaction Index</a>
    <br>
    <form method = 'POST' action = '{!! url("flutterwavetransaction")!!}/{!!$flutterwavetransaction->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="token_id">token_id</label>
            <input id="token_id" name = "token_id" type="text" class="form-control" value="{!!$flutterwavetransaction->
            token_id!!}"> 
        </div>
        <div class="form-group">
            <label for="transaction_id">transaction_id</label>
            <input id="transaction_id" name = "transaction_id" type="text" class="form-control" value="{!!$flutterwavetransaction->
            transaction_id!!}"> 
        </div>
        <div class="form-group">
            <label for="transaction_reference">transaction_reference</label>
            <input id="transaction_reference" name = "transaction_reference" type="text" class="form-control" value="{!!$flutterwavetransaction->
            transaction_reference!!}"> 
        </div>
        <div class="form-group">
            <label for="processor_reference">processor_reference</label>
            <input id="processor_reference" name = "processor_reference" type="text" class="form-control" value="{!!$flutterwavetransaction->
            processor_reference!!}"> 
        </div>
        <div class="form-group">
            <label for="amount">amount</label>
            <input id="amount" name = "amount" type="text" class="form-control" value="{!!$flutterwavetransaction->
            amount!!}"> 
        </div>
        <div class="form-group">
            <label for="currency">currency</label>
            <input id="currency" name = "currency" type="text" class="form-control" value="{!!$flutterwavetransaction->
            currency!!}"> 
        </div>
        <div class="form-group">
            <label for="amount_charged">amount_charged</label>
            <input id="amount_charged" name = "amount_charged" type="text" class="form-control" value="{!!$flutterwavetransaction->
            amount_charged!!}"> 
        </div>
        <div class="form-group">
            <label for="rave_fee">rave_fee</label>
            <input id="rave_fee" name = "rave_fee" type="text" class="form-control" value="{!!$flutterwavetransaction->
            rave_fee!!}"> 
        </div>
        <div class="form-group">
            <label for="merchant_fee">merchant_fee</label>
            <input id="merchant_fee" name = "merchant_fee" type="text" class="form-control" value="{!!$flutterwavetransaction->
            merchant_fee!!}"> 
        </div>
        <div class="form-group">
            <label for="merchant_bore_fee">merchant_bore_fee</label>
            <input id="merchant_bore_fee" name = "merchant_bore_fee" type="text" class="form-control" value="{!!$flutterwavetransaction->
            merchant_bore_fee!!}"> 
        </div>
        <div class="form-group">
            <label for="processor_response_code">processor_response_code</label>
            <input id="processor_response_code" name = "processor_response_code" type="text" class="form-control" value="{!!$flutterwavetransaction->
            processor_response_code!!}"> 
        </div>
        <div class="form-group">
            <label for="processor_response_message">processor_response_message</label>
            <input id="processor_response_message" name = "processor_response_message" type="text" class="form-control" value="{!!$flutterwavetransaction->
            processor_response_message!!}"> 
        </div>
        <div class="form-group">
            <label for="auth_model">auth_model</label>
            <input id="auth_model" name = "auth_model" type="text" class="form-control" value="{!!$flutterwavetransaction->
            auth_model!!}"> 
        </div>
        <div class="form-group">
            <label for="customer_ip">customer_ip</label>
            <input id="customer_ip" name = "customer_ip" type="text" class="form-control" value="{!!$flutterwavetransaction->
            customer_ip!!}"> 
        </div>
        <div class="form-group">
            <label for="narration">narration</label>
            <input id="narration" name = "narration" type="text" class="form-control" value="{!!$flutterwavetransaction->
            narration!!}"> 
        </div>
        <div class="form-group">
            <label for="status">status</label>
            <input id="status" name = "status" type="text" class="form-control" value="{!!$flutterwavetransaction->
            status!!}"> 
        </div>
        <div class="form-group">
            <label for="payment_entity">payment_entity</label>
            <input id="payment_entity" name = "payment_entity" type="text" class="form-control" value="{!!$flutterwavetransaction->
            payment_entity!!}"> 
        </div>
        <div class="form-group">
            <label for="payment_entity_id">payment_entity_id</label>
            <input id="payment_entity_id" name = "payment_entity_id" type="text" class="form-control" value="{!!$flutterwavetransaction->
            payment_entity_id!!}"> 
        </div>
        <div class="form-group">
            <label for="date_created">date_created</label>
            <input id="date_created" name = "date_created" type="text" class="form-control" value="{!!$flutterwavetransaction->
            date_created!!}"> 
        </div>
        <div class="form-group">
            <label for="unique_reference">unique_reference</label>
            <input id="unique_reference" name = "unique_reference" type="text" class="form-control" value="{!!$flutterwavetransaction->
            unique_reference!!}"> 
        </div>
        <div class="form-group">
            <label for="amount_due_merchant">amount_due_merchant</label>
            <input id="amount_due_merchant" name = "amount_due_merchant" type="text" class="form-control" value="{!!$flutterwavetransaction->
            amount_due_merchant!!}"> 
        </div>
        <div class="form-group">
            <label for="customer_id">customer_id</label>
            <input id="customer_id" name = "customer_id" type="text" class="form-control" value="{!!$flutterwavetransaction->
            customer_id!!}"> 
        </div>
        <div class="form-group">
            <label for="customer_email">customer_email</label>
            <input id="customer_email" name = "customer_email" type="text" class="form-control" value="{!!$flutterwavetransaction->
            customer_email!!}"> 
        </div>
        <div class="form-group">
            <label for="customer_phonenumber">customer_phonenumber</label>
            <input id="customer_phonenumber" name = "customer_phonenumber" type="text" class="form-control" value="{!!$flutterwavetransaction->
            customer_phonenumber!!}"> 
        </div>
        <div class="form-group">
            <label for="customer_fullname">customer_fullname</label>
            <input id="customer_fullname" name = "customer_fullname" type="text" class="form-control" value="{!!$flutterwavetransaction->
            customer_fullname!!}"> 
        </div>
        <div class="form-group">
            <label for="customer_date_created">customer_date_created</label>
            <input id="customer_date_created" name = "customer_date_created" type="text" class="form-control" value="{!!$flutterwavetransaction->
            customer_date_created!!}"> 
        </div>
        <div class="form-group">
            <label for="card_id">card_id</label>
            <input id="card_id" name = "card_id" type="text" class="form-control" value="{!!$flutterwavetransaction->
            card_id!!}"> 
        </div>
        <div class="form-group">
            <label for="masked_pan">masked_pan</label>
            <input id="masked_pan" name = "masked_pan" type="text" class="form-control" value="{!!$flutterwavetransaction->
            masked_pan!!}"> 
        </div>
        <div class="form-group">
            <label for="expiry_year">expiry_year</label>
            <input id="expiry_year" name = "expiry_year" type="text" class="form-control" value="{!!$flutterwavetransaction->
            expiry_year!!}"> 
        </div>
        <div class="form-group">
            <label for="expiry_month">expiry_month</label>
            <input id="expiry_month" name = "expiry_month" type="text" class="form-control" value="{!!$flutterwavetransaction->
            expiry_month!!}"> 
        </div>
        <div class="form-group">
            <label for="type">type</label>
            <input id="type" name = "type" type="text" class="form-control" value="{!!$flutterwavetransaction->
            type!!}"> 
        </div>
        <div class="form-group">
            <label for="country">country</label>
            <input id="country" name = "country" type="text" class="form-control" value="{!!$flutterwavetransaction->
            country!!}"> 
        </div>
        <div class="form-group">
            <label for="issuer_info">issuer_info</label>
            <input id="issuer_info" name = "issuer_info" type="text" class="form-control" value="{!!$flutterwavetransaction->
            issuer_info!!}"> 
        </div>
        <div class="form-group">
            <label for="date_created">date_created</label>
            <input id="date_created" name = "date_created" type="text" class="form-control" value="{!!$flutterwavetransaction->
            date_created!!}"> 
        </div>
        <div class="form-group">
            <label for="merchant_id">merchant_id</label>
            <input id="merchant_id" name = "merchant_id" type="text" class="form-control" value="{!!$flutterwavetransaction->
            merchant_id!!}"> 
        </div>
        <div class="form-group">
            <label for="payment_count">payment_count</label>
            <input id="payment_count" name = "payment_count" type="text" class="form-control" value="{!!$flutterwavetransaction->
            payment_count!!}"> 
        </div>
        <div class="form-group">
            <label for="other1">other1</label>
            <input id="other1" name = "other1" type="text" class="form-control" value="{!!$flutterwavetransaction->
            other1!!}"> 
        </div>
        <div class="form-group">
            <label for="other2">other2</label>
            <input id="other2" name = "other2" type="text" class="form-control" value="{!!$flutterwavetransaction->
            other2!!}"> 
        </div>
        <div class="form-group">
            <label for="other3">other3</label>
            <input id="other3" name = "other3" type="text" class="form-control" value="{!!$flutterwavetransaction->
            other3!!}"> 
        </div>
        <div class="form-group">
            <label for="other4">other4</label>
            <input id="other4" name = "other4" type="text" class="form-control" value="{!!$flutterwavetransaction->
            other4!!}"> 
        </div>
        <div class="form-group">
            <label for="other5">other5</label>
            <input id="other5" name = "other5" type="text" class="form-control" value="{!!$flutterwavetransaction->
            other5!!}"> 
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection