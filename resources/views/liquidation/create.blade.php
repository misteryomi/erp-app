@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create liquidation
    </h1>
    <a href="{!!url('liquidation')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Liquidation Index</a>
    <br>
    <form method = 'POST' action = '{!!url("liquidation")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="staff_id">staff_id</label>
            <input id="staff_id" name = "staff_id" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="customer_name">customer_name</label>
            <input id="customer_name" name = "customer_name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="amount_paid">amount_paid</label>
            <input id="amount_paid" name = "amount_paid" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="date_paid">date_paid</label>
            <input id="date_paid" name = "date_paid" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="payee">payee</label>
            <input id="payee" name = "payee" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="liquidation_type">liquidation_type</label>
            <input id="liquidation_type" name = "liquidation_type" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="documents">documents</label>
            <input id="documents" name = "documents" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="product_type">product_type</label>
            <input id="product_type" name = "product_type" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="amount_confirmed">amount_confirmed</label>
            <input id="amount_confirmed" name = "amount_confirmed" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ld">ld</label>
            <input id="ld" name = "ld" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="liquidation_type_ops">liquidation_type_ops</label>
            <input id="liquidation_type_ops" name = "liquidation_type_ops" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="t24_acc_no">t24_acc_no</label>
            <input id="t24_acc_no" name = "t24_acc_no" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="approved_by_ops">approved_by_ops</label>
            <input id="approved_by_ops" name = "approved_by_ops" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="approved_by_cad">approved_by_cad</label>
            <input id="approved_by_cad" name = "approved_by_cad" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="status_ops">status_ops</label>
            <input id="status_ops" name = "status_ops" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="status_cad">status_cad</label>
            <input id="status_cad" name = "status_cad" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="comment">comment</label>
            <input id="comment" name = "comment" type="text" class="form-control">
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
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection