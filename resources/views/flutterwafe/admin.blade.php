@extends('layouts.app') @section('content') 
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title">
            Flutterwafe 
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
                <li> <a href="#">Flutterwafe </a> </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card">
                    <div class="card-header">
                        <div class="caption"> <i class="fa fa-globe"></i>Flutterwafe </div>
                        <div class="actions"></div>
                    </div>
                    <div class="card-body
                        <div class="" style="display:none;" id="creator-form">
                            <div class="card">
                                <div class="card-header">
                                    <h2>
                                        Add New Flutterwafe
                                    </h2>
                                    <span>Adding new records for Flutterwafe</span> 
                                    <div class="card-header-right" style="padding:30px;">
                                        <a href="#back" id="btn-form-close" class="btn btn-lg red">
                                            <i class="icofont icofont-rounded-left"></i>
                                            << Cancel & Return</a>
                                            </div>
                                        </div>
                                        <div class="card-body
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <!-- Date card start -->
                                                    <div class="card">
                                                        <div class="card-header"></div>
                                                        <div class="card-bodytyle="">
                                                            <form id="add_kc_form">
                                                                <input type="hidden" name="_token" value="FhNQh52osu61R1GK4s1jVfzNcQLmEhIRjYLZvvGO">
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="user_id">user_id</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="user_id_add" name = "user_id" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="status">status</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="status_add" name = "status" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="customer_name">customer_name</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="customer_name_add" name = "customer_name" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="customer_bank">customer_bank</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="customer_bank_add" name = "customer_bank" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="purpose">purpose</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="purpose_add" name = "purpose" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="frequency">frequency</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="frequency_add" name = "frequency" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="amount">amount</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="amount_add" name = "amount" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="reg_date">reg_date</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="reg_date_add" name = "reg_date" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="tokenize_date">tokenize_date</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="tokenize_date_add" name = "tokenize_date" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="start_date">start_date</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="start_date_add" name = "start_date" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="date_end">date_end</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="date_end_add" name = "date_end" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="last_trxn_date">last_trxn_date</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="last_trxn_date_add" name = "last_trxn_date" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="last_trxn_status">last_trxn_status</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="last_trxn_status_add" name = "last_trxn_status" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="pending_payments">pending_payments</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="pending_payments_add" name = "pending_payments" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="paid_closed">paid_closed</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="paid_closed_add" name = "paid_closed" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="next_due_date">next_due_date</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="next_due_date_add" name = "next_due_date" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="phone_number">phone_number</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="phone_number_add" name = "phone_number" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="email">email</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="email_add" name = "email" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="cfi">cfi</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="cfi_add" name = "cfi" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="life_token">life_token</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="life_token_add" name = "life_token" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="hash_id">hash_id</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="hash_id_add" name = "hash_id" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="txRef">txRef</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="txRef_add" name = "txRef" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="flwRef">flwRef</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="flwRef_add" name = "flwRef" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="card_expirymonth">card_expirymonth</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="card_expirymonth_add" name = "card_expirymonth" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="card_year">card_year</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="card_year_add" name = "card_year" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="card_last4digits">card_last4digits</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="card_last4digits_add" name = "card_last4digits" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="card_brand">card_brand</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="card_brand_add" name = "card_brand" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="card_type">card_type</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="card_type_add" name = "card_type" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="amount_tokenized">amount_tokenized</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="amount_tokenized_add" name = "amount_tokenized" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="payment_type">payment_type</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="payment_type_add" name = "payment_type" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="narration">narration</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="narration_add" name = "narration" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="ravreref">ravreref</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="ravreref_add" name = "ravreref" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="other1">other1</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="other1_add" name = "other1" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="other2">other2</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="other2_add" name = "other2" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="other3">other3</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="other3_add" name = "other3" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="other4">other4</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="other4_add" name = "other4" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="other5">other5</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="other5_add" name = "other5" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- Date card end -->
                                                </div>
                                            </div>
                                            <div class="text-center modal-footer">
                                                <button type="submit" class="btn btn-primary btn-lg m-b-0 add">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="display:none;" id="edit-form">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2>
                                                Editing flutterwafe
                                            </h2>
                                            <span>Editing flutterwafe</span> 
                                            <div class="card-header-right" style="padding:30px;">
                                                <a href="#back" id="btn-form-close" class="btn btn-lg red">
                                                    <i class="icofont icofont-rounded-left"></i>
                                                    << Cancel & Return</a>
                                                    </div>
                                                </div>
                                                <div class="card-body
                                                    <div class="row">
                                                        <div class="col-lg-12 col-xl-12">
                                                            <!-- Date card start -->
                                                            <div class="card">
                                                                <div class="card-header"></div>
                                                                <div class="card-bodytyle="">
                                                                    <form id="edit_kc_form">
                                                                        <input type="hidden" name="_token" value="FhNQh52osu61R1GK4s1jVfzNcQLmEhIRjYLZvvGO">
                                                                        <input type="hidden" class="form-control" id="id_edit" disabled>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="user_id">user_id</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="user_id_edit" name = "user_id" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="status">status</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="status_edit" name = "status" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="customer_name">customer_name</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="customer_name_edit" name = "customer_name" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="customer_bank">customer_bank</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="customer_bank_edit" name = "customer_bank" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="purpose">purpose</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="purpose_edit" name = "purpose" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="frequency">frequency</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="frequency_edit" name = "frequency" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="amount">amount</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="amount_edit" name = "amount" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="reg_date">reg_date</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="reg_date_edit" name = "reg_date" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="tokenize_date">tokenize_date</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="tokenize_date_edit" name = "tokenize_date" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="start_date">start_date</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="start_date_edit" name = "start_date" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="date_end">date_end</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="date_end_edit" name = "date_end" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="last_trxn_date">last_trxn_date</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="last_trxn_date_edit" name = "last_trxn_date" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="last_trxn_status">last_trxn_status</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="last_trxn_status_edit" name = "last_trxn_status" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="pending_payments">pending_payments</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="pending_payments_edit" name = "pending_payments" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="paid_closed">paid_closed</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="paid_closed_edit" name = "paid_closed" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="next_due_date">next_due_date</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="next_due_date_edit" name = "next_due_date" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="phone_number">phone_number</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="phone_number_edit" name = "phone_number" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="email">email</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="email_edit" name = "email" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="cfi">cfi</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="cfi_edit" name = "cfi" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="life_token">life_token</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="life_token_edit" name = "life_token" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="hash_id">hash_id</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="hash_id_edit" name = "hash_id" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="txRef">txRef</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="txRef_edit" name = "txRef" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="flwRef">flwRef</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="flwRef_edit" name = "flwRef" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="card_expirymonth">card_expirymonth</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="card_expirymonth_edit" name = "card_expirymonth" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="card_year">card_year</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="card_year_edit" name = "card_year" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="card_last4digits">card_last4digits</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="card_last4digits_edit" name = "card_last4digits" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="card_brand">card_brand</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="card_brand_edit" name = "card_brand" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="card_type">card_type</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="card_type_edit" name = "card_type" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="amount_tokenized">amount_tokenized</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="amount_tokenized_edit" name = "amount_tokenized" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="payment_type">payment_type</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="payment_type_edit" name = "payment_type" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="narration">narration</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="narration_edit" name = "narration" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="ravreref">ravreref</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="ravreref_edit" name = "ravreref" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="other1">other1</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="other1_edit" name = "other1" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="other2">other2</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="other2_edit" name = "other2" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="other3">other3</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="other3_edit" name = "other3" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="other4">other4</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="other4_edit" name = "other4" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="other5">other5</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="other5_edit" name = "other5" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <!-- Date card end -->
                                                        </div>
                                                    </div>
                                                    <div class="text-center modal-footer">
                                                        <button type="submit" class="btn btn-primary btn-lg m-b-0 edit">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" id="table-content-display">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h2>
                                                        Flutterwafe
                                                    </h2>
                                                    <span>Displaying Flutterwafe</span> 
                                                    <button id="btn-form-create" class="btn btn-lg btn-success" style="margin:30px;" > Add new Flutterwafe </button>
                                                    <div class="card-header-right"> <i class="icofont icofont-rounded-down"></i> <i class="icofont icofont-refresh"></i> <i class="icofont icofont-close-circled"></i> </div>
                                                </div>
                                                <div class="card-body
                                                    <div>
                                                        <div id="new-cons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12">
                                                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th>user_id</th>
                                                                                <th>status</th>
                                                                                <th>customer_name</th>
                                                                                <th>customer_bank</th>
                                                                                <th>purpose</th>
                                                                                <th>frequency</th>
                                                                                <th>amount</th>
                                                                                <th>reg_date</th>
                                                                                <th>tokenize_date</th>
                                                                                <th>start_date</th>
                                                                                <th>date_end</th>
                                                                                <th>last_trxn_date</th>
                                                                                <th>last_trxn_status</th>
                                                                                <th>pending_payments</th>
                                                                                <th>paid_closed</th>
                                                                                <th>next_due_date</th>
                                                                                <th>phone_number</th>
                                                                                <th>email</th>
                                                                                <th>cfi</th>
                                                                                <th>life_token</th>
                                                                                <th>hash_id</th>
                                                                                <th>txRef</th>
                                                                                <th>flwRef</th>
                                                                                <th>card_expirymonth</th>
                                                                                <th>card_year</th>
                                                                                <th>card_last4digits</th>
                                                                                <th>card_brand</th>
                                                                                <th>card_type</th>
                                                                                <th>amount_tokenized</th>
                                                                                <th>payment_type</th>
                                                                                <th>narration</th>
                                                                                <th>ravreref</th>
                                                                                <th>other1</th>
                                                                                <th>other2</th>
                                                                                <th>other3</th>
                                                                                <th>other4</th>
                                                                                <th>other5</th>
                                                                                <th>Last Update</th>
                                                                                <th>Actions</th>
                                                                            </tr>
                                                                            <input type="hidden" name="_token" value="FhNQh52osu61R1GK4s1jVfzNcQLmEhIRjYLZvvGO">
                                                                        </thead>
                                                                        <tbody id="PostContent">
                                                                            @foreach($flutterwaves as $flutterwafe) 
                                                                            <tr class="item{!!$flutterwafe->
                                                                                id!!}" > 
                                                                                <td>{!!$flutterwafe->user_id!!}</td>
                                                                                <td>{!!$flutterwafe->status!!}</td>
                                                                                <td>{!!$flutterwafe->customer_name!!}</td>
                                                                                <td>{!!$flutterwafe->customer_bank!!}</td>
                                                                                <td>{!!$flutterwafe->purpose!!}</td>
                                                                                <td>{!!$flutterwafe->frequency!!}</td>
                                                                                <td>{!!$flutterwafe->amount!!}</td>
                                                                                <td>{!!$flutterwafe->reg_date!!}</td>
                                                                                <td>{!!$flutterwafe->tokenize_date!!}</td>
                                                                                <td>{!!$flutterwafe->start_date!!}</td>
                                                                                <td>{!!$flutterwafe->date_end!!}</td>
                                                                                <td>{!!$flutterwafe->last_trxn_date!!}</td>
                                                                                <td>{!!$flutterwafe->last_trxn_status!!}</td>
                                                                                <td>{!!$flutterwafe->pending_payments!!}</td>
                                                                                <td>{!!$flutterwafe->paid_closed!!}</td>
                                                                                <td>{!!$flutterwafe->next_due_date!!}</td>
                                                                                <td>{!!$flutterwafe->phone_number!!}</td>
                                                                                <td>{!!$flutterwafe->email!!}</td>
                                                                                <td>{!!$flutterwafe->cfi!!}</td>
                                                                                <td>{!!$flutterwafe->life_token!!}</td>
                                                                                <td>{!!$flutterwafe->hash_id!!}</td>
                                                                                <td>{!!$flutterwafe->txRef!!}</td>
                                                                                <td>{!!$flutterwafe->flwRef!!}</td>
                                                                                <td>{!!$flutterwafe->card_expirymonth!!}</td>
                                                                                <td>{!!$flutterwafe->card_year!!}</td>
                                                                                <td>{!!$flutterwafe->card_last4digits!!}</td>
                                                                                <td>{!!$flutterwafe->card_brand!!}</td>
                                                                                <td>{!!$flutterwafe->card_type!!}</td>
                                                                                <td>{!!$flutterwafe->amount_tokenized!!}</td>
                                                                                <td>{!!$flutterwafe->payment_type!!}</td>
                                                                                <td>{!!$flutterwafe->narration!!}</td>
                                                                                <td>{!!$flutterwafe->ravreref!!}</td>
                                                                                <td>{!!$flutterwafe->other1!!}</td>
                                                                                <td>{!!$flutterwafe->other2!!}</td>
                                                                                <td>{!!$flutterwafe->other3!!}</td>
                                                                                <td>{!!$flutterwafe->other4!!}</td>
                                                                                <td>{!!$flutterwafe->other5!!}</td>
                                                                                <td>{!!$flutterwafe->updated_at->diffForHumans()!!} </td>
                                                                                <td>
                                                                                    <button class="edit-modal btn btn-info btn-sm" data-id="{!!$flutterwafe->id!!}" data-user_id="{!!$flutterwafe->user_id!!}" data-status="{!!$flutterwafe->status!!}" data-customer_name="{!!$flutterwafe->customer_name!!}" data-customer_bank="{!!$flutterwafe->customer_bank!!}" data-purpose="{!!$flutterwafe->purpose!!}" data-frequency="{!!$flutterwafe->frequency!!}" data-amount="{!!$flutterwafe->amount!!}" data-reg_date="{!!$flutterwafe->reg_date!!}" data-tokenize_date="{!!$flutterwafe->tokenize_date!!}" data-start_date="{!!$flutterwafe->start_date!!}" data-date_end="{!!$flutterwafe->date_end!!}" data-last_trxn_date="{!!$flutterwafe->last_trxn_date!!}" data-last_trxn_status="{!!$flutterwafe->last_trxn_status!!}" data-pending_payments="{!!$flutterwafe->pending_payments!!}" data-paid_closed="{!!$flutterwafe->paid_closed!!}" data-next_due_date="{!!$flutterwafe->next_due_date!!}" data-phone_number="{!!$flutterwafe->phone_number!!}" data-email="{!!$flutterwafe->email!!}" data-cfi="{!!$flutterwafe->cfi!!}" data-life_token="{!!$flutterwafe->life_token!!}" data-hash_id="{!!$flutterwafe->hash_id!!}" data-txRef="{!!$flutterwafe->txRef!!}" data-flwRef="{!!$flutterwafe->flwRef!!}" data-card_expirymonth="{!!$flutterwafe->card_expirymonth!!}" data-card_year="{!!$flutterwafe->card_year!!}" data-card_last4digits="{!!$flutterwafe->card_last4digits!!}" data-card_brand="{!!$flutterwafe->card_brand!!}" data-card_type="{!!$flutterwafe->card_type!!}" data-amount_tokenized="{!!$flutterwafe->amount_tokenized!!}" data-payment_type="{!!$flutterwafe->payment_type!!}" data-narration="{!!$flutterwafe->narration!!}" data-ravreref="{!!$flutterwafe->ravreref!!}" data-other1="{!!$flutterwafe->other1!!}" data-other2="{!!$flutterwafe->other2!!}" data-other3="{!!$flutterwafe->other3!!}" data-other4="{!!$flutterwafe->other4!!}" data-other5="{!!$flutterwafe->other5!!}" > Edit </button>
                                                                                    <button class="delete-modal btn btn-danger btn-sm" data-id="{!!$flutterwafe->id!!}"> Delete </button>
                                                                                </td>
                                                                            </tr>
                                                                            @endforeach 
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal form to delete a form -->
                                        <!-- Modal form to delete a form -->
                                        <div id="deleteModal" class="modal fade bs-modal-sm" role="dialog" tabindex="-1" data-backdrop="static" data-keyboard="false">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-center"> Do you want to delete this Flutterwafe record </p>
                                                        <br/>
                                                        <form>
                                                            <input type="hidden" class="form-control" id="id_delete" disabled>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger delete" data-dismiss="modal"> <span id="" class='glyphicon glyphicon-trash'></span> Delete </button>
                                                        <button type="button" class="btn btn-warning" data-dismiss="modal"> <span class='glyphicon glyphicon-remove'></span> Close </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <style> .card { box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2); transition: 0.3s; padding:15px; border-radius: 5px; /* 5px rounded corners */ } </style>
                                        <!-- Page body start -->
                                        <!-- Page body end of content before includes of component-->
                                        <!-- Modal form to delete a form -->
                                        @section('scripts') 
                                        <!-- sweet alert js -->
                                        <script src="http://pirs.primera/app/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
                                        <link href="http://pirs.primera/app/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
                                        <script type="text/javascript">

    $(document).on('click', '#btn-form-create', function () {
        // alert('Thanks');
        $("#table-content-display").hide();
        $("form").trigger('reset'); //reset the form

        var $window = $(window)
        var windowSize = $window.width();
        if (windowSize > 992) {
            setTimeout(function () {
                $('#creator-form').show().addClass('animated bounceInRight');
            });
        }
        else($('#creator-form').show().removeClass('animated bounce'));

        $('#creator-form').show();
    });

    $(document).on('click', '#btn-form-close', function () {

        // alert('Thanks');
        $("#creator-form").hide();
        $("#edit-form").hide();
        //  $("form").trigger('reset'); //reset the form

        var $window = $(window)
        var windowSize = $window.width();
        if (windowSize > 992) {
            setTimeout(function () {
                $('#table-content-display').show().addClass('animated bounceInRight');
            });
        }
        else($('#table-content-display').show().removeClass('animated bounce'));

        $('#table-content-display').show();
    });


</script>
                                        <!-- AJAX CRUD operations -->
                                        <script type="text/javascript">
    // add a new post
    $(document).on('click', '.add-modal', function () {
        $('.modal-title').text('Add');
        $('#addModal').modal('show');
    });
    $('.modal-footer').on('click', '.add', function () {
        $.ajax({
            type: 'POST',
            url: 'flutterwafe',
            data: $("#add_kc_form").serialize(),
            success: function (data) {
                $('.errorTitle').addClass('hidden');
                $('.errorContent').addClass('hidden');

                if ((data.errors)) {
                    setTimeout(function () {
                        var errorsHtml= '';
                        $.each( data.errors, function( key, value ) {
                            errorsHtml += '<li>' + value[0] + '</li>';
                        });
                        toastr.error( errorsHtml, 'Error:', {timeOut: 5000});
                    }, 500);


                } else {
                    toastr.success('Successfully Posted', 'Success Alert', {timeOut: 5000});
                    $('#PostContent').append("<tr class='item" + data.id + "'> <td>" + data.user_id + "</td> <td>" + data.status + "</td> <td>" + data.customer_name + "</td> <td>" + data.customer_bank + "</td> <td>" + data.purpose + "</td> <td>" + data.frequency + "</td> <td>" + data.amount + "</td> <td>" + data.reg_date + "</td> <td>" + data.tokenize_date + "</td> <td>" + data.start_date + "</td> <td>" + data.date_end + "</td> <td>" + data.last_trxn_date + "</td> <td>" + data.last_trxn_status + "</td> <td>" + data.pending_payments + "</td> <td>" + data.paid_closed + "</td> <td>" + data.next_due_date + "</td> <td>" + data.phone_number + "</td> <td>" + data.email + "</td> <td>" + data.cfi + "</td> <td>" + data.life_token + "</td> <td>" + data.hash_id + "</td> <td>" + data.txRef + "</td> <td>" + data.flwRef + "</td> <td>" + data.card_expirymonth + "</td> <td>" + data.card_year + "</td> <td>" + data.card_last4digits + "</td> <td>" + data.card_brand + "</td> <td>" + data.card_type + "</td> <td>" + data.amount_tokenized + "</td> <td>" + data.payment_type + "</td> <td>" + data.narration + "</td> <td>" + data.ravreref + "</td> <td>" + data.other1 + "</td> <td>" + data.other2 + "</td> <td>" + data.other3 + "</td> <td>" + data.other4 + "</td> <td>" + data.other5 + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-user_id='" + data.user_id + "'   data-status='" + data.status + "'   data-customer_name='" + data.customer_name + "'   data-customer_bank='" + data.customer_bank + "'   data-purpose='" + data.purpose + "'   data-frequency='" + data.frequency + "'   data-amount='" + data.amount + "'   data-reg_date='" + data.reg_date + "'   data-tokenize_date='" + data.tokenize_date + "'   data-start_date='" + data.start_date + "'   data-date_end='" + data.date_end + "'   data-last_trxn_date='" + data.last_trxn_date + "'   data-last_trxn_status='" + data.last_trxn_status + "'   data-pending_payments='" + data.pending_payments + "'   data-paid_closed='" + data.paid_closed + "'   data-next_due_date='" + data.next_due_date + "'   data-phone_number='" + data.phone_number + "'   data-email='" + data.email + "'   data-cfi='" + data.cfi + "'   data-life_token='" + data.life_token + "'   data-hash_id='" + data.hash_id + "'   data-txRef='" + data.txRef + "'   data-flwRef='" + data.flwRef + "'   data-card_expirymonth='" + data.card_expirymonth + "'   data-card_year='" + data.card_year + "'   data-card_last4digits='" + data.card_last4digits + "'   data-card_brand='" + data.card_brand + "'   data-card_type='" + data.card_type + "'   data-amount_tokenized='" + data.amount_tokenized + "'   data-payment_type='" + data.payment_type + "'   data-narration='" + data.narration + "'   data-ravreref='" + data.ravreref + "'   data-other1='" + data.other1 + "'   data-other2='" + data.other2 + "'   data-other3='" + data.other3 + "'   data-other4='" + data.other4 + "'   data-other5='" + data.other5 + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");

                    //table.ajax.reload();   /// reloads the table


                    /* START Closing the form after successful post*/
                    // alert('Thanks');
                    $("#creator-form").hide();
                    //  $("form").trigger('reset'); //reset the form

                    var $window = $(window)
                    var windowSize = $window.width();
                    if (windowSize > 992) {
                        setTimeout(function () {
                            $('#table-content-display').show().addClass('animated bounceInRight');
                        });
                    }
                    else($('#table-content-display').show().removeClass('animated bounce'));

                    $('#table-content-display').show();
                    /*END Closing the form after successful post*/



                }
            },
        });
    });

</script>
                                        <script>


    // Edit a post
    $(document).on('click', '.edit-modal', function () {
        //////////////////////////////////////////////////////////////////
        // alert('Thanks');
        $("#table-content-display").hide();
        $("form").trigger('reset'); //reset the form

        var $window = $(window)
        var windowSize = $window.width();
        if (windowSize > 992) {
            setTimeout(function () {
                $('#edit-form').show().addClass('animated bounceInRight');
            });
        }
        else($('#edit-form').show().removeClass('animated bounce'));

        $('#edit-form').show();
        //////////////////////////////////////////////////////////////////

        $('.modal-title').text('Edit');
        $('#id_edit').val($(this).data('id'));
                                                    $('#user_id_edit').val($(this).data('user_id'));
                                                    $('#status_edit').val($(this).data('status'));
                                                    $('#customer_name_edit').val($(this).data('customer_name'));
                                                    $('#customer_bank_edit').val($(this).data('customer_bank'));
                                                    $('#purpose_edit').val($(this).data('purpose'));
                                                    $('#frequency_edit').val($(this).data('frequency'));
                                                    $('#amount_edit').val($(this).data('amount'));
                                                    $('#reg_date_edit').val($(this).data('reg_date'));
                                                    $('#tokenize_date_edit').val($(this).data('tokenize_date'));
                                                    $('#start_date_edit').val($(this).data('start_date'));
                                                    $('#date_end_edit').val($(this).data('date_end'));
                                                    $('#last_trxn_date_edit').val($(this).data('last_trxn_date'));
                                                    $('#last_trxn_status_edit').val($(this).data('last_trxn_status'));
                                                    $('#pending_payments_edit').val($(this).data('pending_payments'));
                                                    $('#paid_closed_edit').val($(this).data('paid_closed'));
                                                    $('#next_due_date_edit').val($(this).data('next_due_date'));
                                                    $('#phone_number_edit').val($(this).data('phone_number'));
                                                    $('#email_edit').val($(this).data('email'));
                                                    $('#cfi_edit').val($(this).data('cfi'));
                                                    $('#life_token_edit').val($(this).data('life_token'));
                                                    $('#hash_id_edit').val($(this).data('hash_id'));
                                                    $('#txRef_edit').val($(this).data('txRef'));
                                                    $('#flwRef_edit').val($(this).data('flwRef'));
                                                    $('#card_expirymonth_edit').val($(this).data('card_expirymonth'));
                                                    $('#card_year_edit').val($(this).data('card_year'));
                                                    $('#card_last4digits_edit').val($(this).data('card_last4digits'));
                                                    $('#card_brand_edit').val($(this).data('card_brand'));
                                                    $('#card_type_edit').val($(this).data('card_type'));
                                                    $('#amount_tokenized_edit').val($(this).data('amount_tokenized'));
                                                    $('#payment_type_edit').val($(this).data('payment_type'));
                                                    $('#narration_edit').val($(this).data('narration'));
                                                    $('#ravreref_edit').val($(this).data('ravreref'));
                                                    $('#other1_edit').val($(this).data('other1'));
                                                    $('#other2_edit').val($(this).data('other2'));
                                                    $('#other3_edit').val($(this).data('other3'));
                                                    $('#other4_edit').val($(this).data('other4'));
                                                    $('#other5_edit').val($(this).data('other5'));
                                                id = $('#id_edit').val();

        // $('#editModal').modal('show');
    });
    $('.modal-footer').on('click', '.edit', function () {
        $.ajax({
            type: 'PUT',
            url: 'flutterwafe/' + id,
            data: $("#edit_kc_form").serialize(),
            success: function (data) {
                $('.errorTitle').addClass('hidden');
                $('.errorContent').addClass('hidden');

                if ((data.errors)) {
                    setTimeout(function () {
                        var errorsHtml= '';
                        $.each( data.errors, function( key, value ) {
                            errorsHtml += '<li>' + value[0] + '</li>';
                        });
                        toastr.error( errorsHtml, 'Error:', {timeOut: 5000});
                    }, 500);

                    if (data.errors.title) {
                        $('.errorTitle').removeClass('hidden');
                        $('.errorTitle').text(data.errors.title);
                    }
                    if (data.errors.content) {
                        $('.errorContent').removeClass('hidden');
                        $('.errorContent').text(data.errors.content);
                    }
                } else {
                    toastr.success('Successfully Updated', 'Success Alert', {timeOut: 5000});
                    $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'> <td>" + data.user_id + "</td> <td>" + data.status + "</td> <td>" + data.customer_name + "</td> <td>" + data.customer_bank + "</td> <td>" + data.purpose + "</td> <td>" + data.frequency + "</td> <td>" + data.amount + "</td> <td>" + data.reg_date + "</td> <td>" + data.tokenize_date + "</td> <td>" + data.start_date + "</td> <td>" + data.date_end + "</td> <td>" + data.last_trxn_date + "</td> <td>" + data.last_trxn_status + "</td> <td>" + data.pending_payments + "</td> <td>" + data.paid_closed + "</td> <td>" + data.next_due_date + "</td> <td>" + data.phone_number + "</td> <td>" + data.email + "</td> <td>" + data.cfi + "</td> <td>" + data.life_token + "</td> <td>" + data.hash_id + "</td> <td>" + data.txRef + "</td> <td>" + data.flwRef + "</td> <td>" + data.card_expirymonth + "</td> <td>" + data.card_year + "</td> <td>" + data.card_last4digits + "</td> <td>" + data.card_brand + "</td> <td>" + data.card_type + "</td> <td>" + data.amount_tokenized + "</td> <td>" + data.payment_type + "</td> <td>" + data.narration + "</td> <td>" + data.ravreref + "</td> <td>" + data.other1 + "</td> <td>" + data.other2 + "</td> <td>" + data.other3 + "</td> <td>" + data.other4 + "</td> <td>" + data.other5 + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-user_id='" + data.user_id + "'   data-status='" + data.status + "'   data-customer_name='" + data.customer_name + "'   data-customer_bank='" + data.customer_bank + "'   data-purpose='" + data.purpose + "'   data-frequency='" + data.frequency + "'   data-amount='" + data.amount + "'   data-reg_date='" + data.reg_date + "'   data-tokenize_date='" + data.tokenize_date + "'   data-start_date='" + data.start_date + "'   data-date_end='" + data.date_end + "'   data-last_trxn_date='" + data.last_trxn_date + "'   data-last_trxn_status='" + data.last_trxn_status + "'   data-pending_payments='" + data.pending_payments + "'   data-paid_closed='" + data.paid_closed + "'   data-next_due_date='" + data.next_due_date + "'   data-phone_number='" + data.phone_number + "'   data-email='" + data.email + "'   data-cfi='" + data.cfi + "'   data-life_token='" + data.life_token + "'   data-hash_id='" + data.hash_id + "'   data-txRef='" + data.txRef + "'   data-flwRef='" + data.flwRef + "'   data-card_expirymonth='" + data.card_expirymonth + "'   data-card_year='" + data.card_year + "'   data-card_last4digits='" + data.card_last4digits + "'   data-card_brand='" + data.card_brand + "'   data-card_type='" + data.card_type + "'   data-amount_tokenized='" + data.amount_tokenized + "'   data-payment_type='" + data.payment_type + "'   data-narration='" + data.narration + "'   data-ravreref='" + data.ravreref + "'   data-other1='" + data.other1 + "'   data-other2='" + data.other2 + "'   data-other3='" + data.other3 + "'   data-other4='" + data.other4 + "'   data-other5='" + data.other5 + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");


                    /* START Closing the form after successful post*/
                    // alert('Thanks');
                    $("#edit-form").hide();
                    //  $("form").trigger('reset'); //reset the form

                    var $window = $(window)
                    var windowSize = $window.width();
                    if (windowSize > 992) {
                        setTimeout(function () {
                            $('#table-content-display').show().addClass('animated bounceInRight');
                        });
                    }
                    else($('#table-content-display').show().removeClass('animated bounce'));

                    $('#table-content-display').show();
                    /*END Closing the form after successful post*/



                }
            }
        });
    });


</script>
                                        <script>

    // Show a post
    $(document).on('click', '.show-modal', function () {
        $('.modal-title').text('Show');
        
        $('#showModal').modal('show');
    });

    // reloading data from table


    // delete a post
    $(document).on('click', '.delete-modal', function () {
        $('.modal-title').text('Delete');
        $('#id_delete').val($(this).data('id'));
                        $('#deleteModal').modal('show');
                        id = $('#id_delete').val();

    });
    $('.modal-footer').on('click', '.delete', function () {
        $.ajax({
            type: 'DELETE',
            url: 'flutterwafe/' + id,
            data: {
                '_token': $('input[name=_token]').val(),
            },
            success: function (data) {
                toastr.success('Successfully deleted', 'Success Alert', {timeOut: 5000});
                $('.item' + data['id']).remove();
            }
        });
    });
</script>
                                        @endsection @section('styles') 
                                        <!-- sweet alert framework -->
                                        <link rel="stylesheet" type="text/css" href="http://pirs.primera/app/bower_components/sweetalert/dist/sweetalert.css">
                                        <!-- animation nifty modal window effects css -->
                                        <link rel="stylesheet" type="text/css" href="http://pirs.primera/app/assets/css/component.css">
                                        @endsection 
                                        <!-- Page body start -->
                                        
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <script type="text/javascript">

    $(document).ready(function () {


        //$(this).dataTable().fnClearTable();
        // $(this).dataTable().fnDestroy();

    });
</script>
                @endsection