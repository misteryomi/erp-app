@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create accountstatement
    </h1>
    <a href="{!!url('accountstatement')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Accountstatement Index</a>
    <br>
    <form method = 'POST' action = '{!!url("accountstatement")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="staff">staff</label>
            <input id="staff" name = "staff" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="accout_no">accout_no</label>
            <input id="accout_no" name = "accout_no" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">body</label>
            <input id="body" name = "body" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="customer_name">customer_name</label>
            <input id="customer_name" name = "customer_name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="customer_cif">customer_cif</label>
            <input id="customer_cif" name = "customer_cif" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="opening_balance">opening_balance</label>
            <input id="opening_balance" name = "opening_balance" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="closing_balance">closing_balance</label>
            <input id="closing_balance" name = "closing_balance" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="transaction_count">transaction_count</label>
            <input id="transaction_count" name = "transaction_count" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="start_date">start_date</label>
            <input id="start_date" name = "start_date" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="end_date">end_date</label>
            <input id="end_date" name = "end_date" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="cust_email">cust_email</label>
            <input id="cust_email" name = "cust_email" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="cust_phone">cust_phone</label>
            <input id="cust_phone" name = "cust_phone" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="others">others</label>
            <input id="others" name = "others" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection