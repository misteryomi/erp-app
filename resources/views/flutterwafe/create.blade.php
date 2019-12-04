@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create flutterwafe
    </h1>
    <a href="{!!url('flutterwafe')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Flutterwafe Index</a>
    <br>
    <form method = 'POST' action = '{!!url("flutterwafe")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="user_id">user_id</label>
            <input id="user_id" name = "user_id" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">status</label>
            <input id="status" name = "status" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="customer_name">customer_name</label>
            <input id="customer_name" name = "customer_name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="customer_bank">customer_bank</label>
            <input id="customer_bank" name = "customer_bank" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="purpose">purpose</label>
            <input id="purpose" name = "purpose" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="frequency">frequency</label>
            <input id="frequency" name = "frequency" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="amount">amount</label>
            <input id="amount" name = "amount" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="reg_date">reg_date</label>
            <input id="reg_date" name = "reg_date" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="tokenize_date">tokenize_date</label>
            <input id="tokenize_date" name = "tokenize_date" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="start_date">start_date</label>
            <input id="start_date" name = "start_date" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="date_end">date_end</label>
            <input id="date_end" name = "date_end" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="last_trxn_date">last_trxn_date</label>
            <input id="last_trxn_date" name = "last_trxn_date" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="last_trxn_status">last_trxn_status</label>
            <input id="last_trxn_status" name = "last_trxn_status" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="pending_payments">pending_payments</label>
            <input id="pending_payments" name = "pending_payments" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="paid_closed">paid_closed</label>
            <input id="paid_closed" name = "paid_closed" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="next_due_date">next_due_date</label>
            <input id="next_due_date" name = "next_due_date" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone_number">phone_number</label>
            <input id="phone_number" name = "phone_number" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input id="email" name = "email" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="cfi">cfi</label>
            <input id="cfi" name = "cfi" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="life_token">life_token</label>
            <input id="life_token" name = "life_token" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="hash_id">hash_id</label>
            <input id="hash_id" name = "hash_id" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="txRef">txRef</label>
            <input id="txRef" name = "txRef" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="flwRef">flwRef</label>
            <input id="flwRef" name = "flwRef" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="card_expirymonth">card_expirymonth</label>
            <input id="card_expirymonth" name = "card_expirymonth" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="card_year">card_year</label>
            <input id="card_year" name = "card_year" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="card_last4digits">card_last4digits</label>
            <input id="card_last4digits" name = "card_last4digits" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="card_brand">card_brand</label>
            <input id="card_brand" name = "card_brand" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="card_type">card_type</label>
            <input id="card_type" name = "card_type" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="amount_tokenized">amount_tokenized</label>
            <input id="amount_tokenized" name = "amount_tokenized" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="payment_type">payment_type</label>
            <input id="payment_type" name = "payment_type" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="narration">narration</label>
            <input id="narration" name = "narration" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ravreref">ravreref</label>
            <input id="ravreref" name = "ravreref" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="other1">other1</label>
            <input id="other1" name = "other1" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="other2">other2</label>
            <input id="other2" name = "other2" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="other3">other3</label>
            <input id="other3" name = "other3" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="other4">other4</label>
            <input id="other4" name = "other4" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="other5">other5</label>
            <input id="other5" name = "other5" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection