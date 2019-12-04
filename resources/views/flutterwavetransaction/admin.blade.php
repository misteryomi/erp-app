@extends('layouts.app') @section('content') 
<!-- BEGIN CONTENT -->
@section('page_title')Card Collections @endsection

  <?php
            use App\User;
            ?>
<!-- BEGIN CONTENT -->
@include('flutterwafe.menu')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title">
            Card Collection 
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
                <li> <a href="#">Card Collection </a> </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card">
                    <div class="card-header">
                        <div class="caption"> <i class="fa fa-globe"></i>Card Collection </div>
                        <div class="actions"></div>
                    </div>
                    <div class="card-body
                        <div class="" style="display:none;" id="creator-form">
                            <div class="card">
                                <div class="card-header">
                                    <h2>
                                        Add New Card Collection
                                    </h2>
                                    <span>Adding new records for Card Collection</span> 
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
                                                                <input type="hidden" name="_token" value="Aq80piw7362mYMissu1A8UdyZwRjdH9hd5xODb4h">
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="token_id">token_id</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="token_id_add" name = "token_id" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="transaction_id">transaction_id</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="transaction_id_add" name = "transaction_id" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="transaction_reference">transaction_reference</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="transaction_reference_add" name = "transaction_reference" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="processor_reference">processor_reference</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="processor_reference_add" name = "processor_reference" type="text" class="form-control">
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
                                                                        <label class="col-form-label" for="currency">currency</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="currency_add" name = "currency" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="amount_charged">amount_charged</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="amount_charged_add" name = "amount_charged" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="rave_fee">rave_fee</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="rave_fee_add" name = "rave_fee" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="merchant_fee">merchant_fee</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="merchant_fee_add" name = "merchant_fee" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="merchant_bore_fee">merchant_bore_fee</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="merchant_bore_fee_add" name = "merchant_bore_fee" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="processor_response_code">processor_response_code</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="processor_response_code_add" name = "processor_response_code" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="processor_response_message">processor_response_message</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="processor_response_message_add" name = "processor_response_message" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="auth_model">auth_model</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="auth_model_add" name = "auth_model" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="customer_ip">customer_ip</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="customer_ip_add" name = "customer_ip" type="text" class="form-control">
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
                                                                        <label class="col-form-label" for="status">status</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="status_add" name = "status" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="payment_entity">payment_entity</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="payment_entity_add" name = "payment_entity" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="payment_entity_id">payment_entity_id</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="payment_entity_id_add" name = "payment_entity_id" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="date_created">date_created</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="date_created_add" name = "date_created" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="unique_reference">unique_reference</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="unique_reference_add" name = "unique_reference" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="amount_due_merchant">amount_due_merchant</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="amount_due_merchant_add" name = "amount_due_merchant" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="customer_id">customer_id</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="customer_id_add" name = "customer_id" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="customer_email">customer_email</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="customer_email_add" name = "customer_email" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="customer_phonenumber">customer_phonenumber</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="customer_phonenumber_add" name = "customer_phonenumber" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="customer_fullname">customer_fullname</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="customer_fullname_add" name = "customer_fullname" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="customer_date_created">customer_date_created</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="customer_date_created_add" name = "customer_date_created" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="card_id">card_id</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="card_id_add" name = "card_id" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="masked_pan">masked_pan</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="masked_pan_add" name = "masked_pan" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="expiry_year">expiry_year</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="expiry_year_add" name = "expiry_year" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="expiry_month">expiry_month</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="expiry_month_add" name = "expiry_month" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="type">type</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="type_add" name = "type" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="country">country</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="country_add" name = "country" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="issuer_info">issuer_info</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="issuer_info_add" name = "issuer_info" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="date_created">date_created</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="date_created_add" name = "date_created" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="merchant_id">merchant_id</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="merchant_id_add" name = "merchant_id" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="payment_count">payment_count</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input id="payment_count_add" name = "payment_count" type="text" class="form-control">
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
                                                Editing flutterwavetransaction
                                            </h2>
                                            <span>Editing flutterwavetransaction</span> 
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
                                                                        <input type="hidden" name="_token" value="Aq80piw7362mYMissu1A8UdyZwRjdH9hd5xODb4h">
                                                                        <input type="hidden" class="form-control" id="id_edit" disabled>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="token_id">token_id</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="token_id_edit" name = "token_id" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="transaction_id">transaction_id</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="transaction_id_edit" name = "transaction_id" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="transaction_reference">transaction_reference</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="transaction_reference_edit" name = "transaction_reference" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="processor_reference">processor_reference</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="processor_reference_edit" name = "processor_reference" type="text" class="form-control">
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
                                                                                <label class="col-form-label" for="currency">currency</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="currency_edit" name = "currency" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="amount_charged">amount_charged</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="amount_charged_edit" name = "amount_charged" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="rave_fee">rave_fee</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="rave_fee_edit" name = "rave_fee" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="merchant_fee">merchant_fee</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="merchant_fee_edit" name = "merchant_fee" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="merchant_bore_fee">merchant_bore_fee</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="merchant_bore_fee_edit" name = "merchant_bore_fee" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="processor_response_code">processor_response_code</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="processor_response_code_edit" name = "processor_response_code" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="processor_response_message">processor_response_message</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="processor_response_message_edit" name = "processor_response_message" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="auth_model">auth_model</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="auth_model_edit" name = "auth_model" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="customer_ip">customer_ip</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="customer_ip_edit" name = "customer_ip" type="text" class="form-control">
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
                                                                                <label class="col-form-label" for="status">status</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="status_edit" name = "status" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="payment_entity">payment_entity</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="payment_entity_edit" name = "payment_entity" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="payment_entity_id">payment_entity_id</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="payment_entity_id_edit" name = "payment_entity_id" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="date_created">date_created</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="date_created_edit" name = "date_created" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="unique_reference">unique_reference</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="unique_reference_edit" name = "unique_reference" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="amount_due_merchant">amount_due_merchant</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="amount_due_merchant_edit" name = "amount_due_merchant" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="customer_id">customer_id</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="customer_id_edit" name = "customer_id" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="customer_email">customer_email</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="customer_email_edit" name = "customer_email" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="customer_phonenumber">customer_phonenumber</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="customer_phonenumber_edit" name = "customer_phonenumber" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="customer_fullname">customer_fullname</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="customer_fullname_edit" name = "customer_fullname" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="customer_date_created">customer_date_created</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="customer_date_created_edit" name = "customer_date_created" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="card_id">card_id</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="card_id_edit" name = "card_id" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="masked_pan">masked_pan</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="masked_pan_edit" name = "masked_pan" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="expiry_year">expiry_year</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="expiry_year_edit" name = "expiry_year" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="expiry_month">expiry_month</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="expiry_month_edit" name = "expiry_month" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="type">type</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="type_edit" name = "type" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="country">country</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="country_edit" name = "country" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="issuer_info">issuer_info</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="issuer_info_edit" name = "issuer_info" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="date_created">date_created</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="date_created_edit" name = "date_created" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="merchant_id">merchant_id</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="merchant_id_edit" name = "merchant_id" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label" for="payment_count">payment_count</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input id="payment_count_edit" name = "payment_count" type="text" class="form-control">
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
                                                        Card Collection
                                                    </h2>
                                                    <span>Displaying Card Collection</span> 
                                                    <button id="btn-form-create" class="btn btn-lg btn-success" style="margin:30px;" > Add new Card Collection </button>
                                                    <div class="card-header-right"> <i class="icofont icofont-rounded-down"></i> <i class="icofont icofont-refresh"></i> <i class="icofont icofont-close-circled"></i> </div>
                                                </div>
                                                <div class="card-body
                                                    <div>
                                                        <div id="new-cons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 table-responsive">
                                                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th>token_id</th>
                                                                                <th>transaction_id</th>
                                                                                <th>transaction_reference</th>
                                                                                <th>processor_reference</th>
                                                                                <th>amount</th>
                                                                                <th>currency</th>
                                                                                <th>amount_charged</th>
                                                                                <th>rave_fee</th>
                                                                                <th>merchant_fee</th>
                                                                                <th>merchant_bore_fee</th>
                                                                                <th>processor_response_code</th>
                                                                                <th>processor_response_message</th>
                                                                                <th>auth_model</th>
                                                                                <th>customer_ip</th>
                                                                                <th>narration</th>
                                                                                <th>status</th>
                                                                                <th>payment_entity</th>
                                                                                <th>payment_entity_id</th>
                                                                                <th>date_created</th>
                                                                                <th>unique_reference</th>
                                                                                <th>amount_due_merchant</th>
                                                                                <th>customer_id</th>
                                                                                <th>customer_email</th>
                                                                                <th>customer_phonenumber</th>
                                                                                <th>customer_fullname</th>
                                                                                <th>customer_date_created</th>
                                                                                <th>card_id</th>
                                                                                <th>masked_pan</th>
                                                                                <th>expiry_year</th>
                                                                                <th>expiry_month</th>
                                                                                <th>type</th>
                                                                                <th>country</th>
                                                                                <th>issuer_info</th>
                                                                                <th>date_created</th>
                                                                                <th>merchant_id</th>
                                                                                <th>payment_count</th>
                                                                                <th>other1</th>
                                                                                <th>other2</th>
                                                                                <th>other3</th>
                                                                                <th>other4</th>
                                                                                <th>other5</th>
                                                                                <th>Last Update</th>
                                                                                <th>Actions</th>
                                                                            </tr>
                                                                            <input type="hidden" name="_token" value="Aq80piw7362mYMissu1A8UdyZwRjdH9hd5xODb4h">
                                                                        </thead>
                                                                        <tbody id="PostContent">
                                                                            @foreach($flutterwavetransactions as $flutterwavetransaction) 

                                                                           

                                                                            <tr  @if($flutterwavetransaction->status == "successful") style="color:green" @else style="color:red" @endif class="item{!!$flutterwavetransaction->
                                                                                id!!}" > 
                                                                                <td>{!!$flutterwavetransaction->token_id!!}</td>
                                                                                <td>{!!$flutterwavetransaction->transaction_id!!}</td>
                                                                                <td>{!!$flutterwavetransaction->transaction_reference!!}</td>
                                                                                <td>{!!$flutterwavetransaction->processor_reference!!}</td>
                                                                                <td>{!!$flutterwavetransaction->amount!!}</td>
                                                                                <td>{!!$flutterwavetransaction->currency!!}</td>
                                                                                <td>{!!$flutterwavetransaction->amount_charged!!}</td>
                                                                                <td>{!!$flutterwavetransaction->rave_fee!!}</td>
                                                                                <td>{!!$flutterwavetransaction->merchant_fee!!}</td>
                                                                                <td>{!!$flutterwavetransaction->merchant_bore_fee!!}</td>
                                                                                <td>{!!$flutterwavetransaction->processor_response_code!!}</td>
                                                                                <td>{!!$flutterwavetransaction->processor_response_message!!}</td>
                                                                                <td>{!!$flutterwavetransaction->auth_model!!}</td>
                                                                                <td>{!!$flutterwavetransaction->customer_ip!!}</td>
                                                                                <td>{!!$flutterwavetransaction->narration!!}</td>
                                                                                <td>{!!$flutterwavetransaction->status!!}</td>
                                                                                <td>{!!$flutterwavetransaction->payment_entity!!}</td>
                                                                                <td>{!!$flutterwavetransaction->payment_entity_id!!}</td>
                                                                                <td>{!!$flutterwavetransaction->date_created!!}</td>
                                                                                <td>{!!$flutterwavetransaction->unique_reference!!}</td>
                                                                                <td>{!!$flutterwavetransaction->amount_due_merchant!!}</td>
                                                                                <td>{!!$flutterwavetransaction->customer_id!!}</td>
                                                                                <td>{!!$flutterwavetransaction->customer_email!!}</td>
                                                                                <td>{!!$flutterwavetransaction->customer_phonenumber!!}</td>
                                                                                <td>{!!$flutterwavetransaction->customer_fullname!!}</td>
                                                                                <td>{!!$flutterwavetransaction->customer_date_created!!}</td>
                                                                                <td>{!!$flutterwavetransaction->card_id!!}</td>
                                                                                <td>{!!$flutterwavetransaction->masked_pan!!}</td>
                                                                                <td>{!!$flutterwavetransaction->expiry_year!!}</td>
                                                                                <td>{!!$flutterwavetransaction->expiry_month!!}</td>
                                                                                <td>{!!$flutterwavetransaction->type!!}</td>
                                                                                <td>{!!$flutterwavetransaction->country!!}</td>
                                                                                <td>{!!$flutterwavetransaction->issuer_info!!}</td>
                                                                                <td>{!!$flutterwavetransaction->date_created!!}</td>
                                                                                <td>{!!$flutterwavetransaction->merchant_id!!}</td>
                                                                                <td>{!!$flutterwavetransaction->payment_count!!}</td>
                                                                                <td>{!!$flutterwavetransaction->other1!!}</td>
                                                                                <td>{!!$flutterwavetransaction->other2!!}</td>
                                                                                <td>{!!$flutterwavetransaction->other3!!}</td>
                                                                                <td>{!!$flutterwavetransaction->other4!!}</td>
                                                                                <td>{!!$flutterwavetransaction->other5!!}</td>
                                                                                <td>{!!$flutterwavetransaction->updated_at->diffForHumans()!!} </td>
                                                                                <td>
                                                                                    <button class="edit-modal btn btn-info btn-sm" data-id="{!!$flutterwavetransaction->id!!}" data-token_id="{!!$flutterwavetransaction->token_id!!}" data-transaction_id="{!!$flutterwavetransaction->transaction_id!!}" data-transaction_reference="{!!$flutterwavetransaction->transaction_reference!!}" data-processor_reference="{!!$flutterwavetransaction->processor_reference!!}" data-amount="{!!$flutterwavetransaction->amount!!}" data-currency="{!!$flutterwavetransaction->currency!!}" data-amount_charged="{!!$flutterwavetransaction->amount_charged!!}" data-rave_fee="{!!$flutterwavetransaction->rave_fee!!}" data-merchant_fee="{!!$flutterwavetransaction->merchant_fee!!}" data-merchant_bore_fee="{!!$flutterwavetransaction->merchant_bore_fee!!}" data-processor_response_code="{!!$flutterwavetransaction->processor_response_code!!}" data-processor_response_message="{!!$flutterwavetransaction->processor_response_message!!}" data-auth_model="{!!$flutterwavetransaction->auth_model!!}" data-customer_ip="{!!$flutterwavetransaction->customer_ip!!}" data-narration="{!!$flutterwavetransaction->narration!!}" data-status="{!!$flutterwavetransaction->status!!}" data-payment_entity="{!!$flutterwavetransaction->payment_entity!!}" data-payment_entity_id="{!!$flutterwavetransaction->payment_entity_id!!}" data-date_created="{!!$flutterwavetransaction->date_created!!}" data-unique_reference="{!!$flutterwavetransaction->unique_reference!!}" data-amount_due_merchant="{!!$flutterwavetransaction->amount_due_merchant!!}" data-customer_id="{!!$flutterwavetransaction->customer_id!!}" data-customer_email="{!!$flutterwavetransaction->customer_email!!}" data-customer_phonenumber="{!!$flutterwavetransaction->customer_phonenumber!!}" data-customer_fullname="{!!$flutterwavetransaction->customer_fullname!!}" data-customer_date_created="{!!$flutterwavetransaction->customer_date_created!!}" data-card_id="{!!$flutterwavetransaction->card_id!!}" data-masked_pan="{!!$flutterwavetransaction->masked_pan!!}" data-expiry_year="{!!$flutterwavetransaction->expiry_year!!}" data-expiry_month="{!!$flutterwavetransaction->expiry_month!!}" data-type="{!!$flutterwavetransaction->type!!}" data-country="{!!$flutterwavetransaction->country!!}" data-issuer_info="{!!$flutterwavetransaction->issuer_info!!}" data-date_created="{!!$flutterwavetransaction->date_created!!}" data-merchant_id="{!!$flutterwavetransaction->merchant_id!!}" data-payment_count="{!!$flutterwavetransaction->payment_count!!}" data-other1="{!!$flutterwavetransaction->other1!!}" data-other2="{!!$flutterwavetransaction->other2!!}" data-other3="{!!$flutterwavetransaction->other3!!}" data-other4="{!!$flutterwavetransaction->other4!!}" data-other5="{!!$flutterwavetransaction->other5!!}" > Edit </button>
                                                                                    <button class="delete-modal btn btn-danger btn-sm" data-id="{!!$flutterwavetransaction->id!!}"> Delete </button>
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
                                                        <p class="text-center"> Do you want to delete this Card Collection record </p>
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
            url: 'flutterwavetransaction',
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
                    $('#PostContent').append("<tr class='item" + data.id + "'> <td>" + data.token_id + "</td> <td>" + data.transaction_id + "</td> <td>" + data.transaction_reference + "</td> <td>" + data.processor_reference + "</td> <td>" + data.amount + "</td> <td>" + data.currency + "</td> <td>" + data.amount_charged + "</td> <td>" + data.rave_fee + "</td> <td>" + data.merchant_fee + "</td> <td>" + data.merchant_bore_fee + "</td> <td>" + data.processor_response_code + "</td> <td>" + data.processor_response_message + "</td> <td>" + data.auth_model + "</td> <td>" + data.customer_ip + "</td> <td>" + data.narration + "</td> <td>" + data.status + "</td> <td>" + data.payment_entity + "</td> <td>" + data.payment_entity_id + "</td> <td>" + data.date_created + "</td> <td>" + data.unique_reference + "</td> <td>" + data.amount_due_merchant + "</td> <td>" + data.customer_id + "</td> <td>" + data.customer_email + "</td> <td>" + data.customer_phonenumber + "</td> <td>" + data.customer_fullname + "</td> <td>" + data.customer_date_created + "</td> <td>" + data.card_id + "</td> <td>" + data.masked_pan + "</td> <td>" + data.expiry_year + "</td> <td>" + data.expiry_month + "</td> <td>" + data.type + "</td> <td>" + data.country + "</td> <td>" + data.issuer_info + "</td> <td>" + data.date_created + "</td> <td>" + data.merchant_id + "</td> <td>" + data.payment_count + "</td> <td>" + data.other1 + "</td> <td>" + data.other2 + "</td> <td>" + data.other3 + "</td> <td>" + data.other4 + "</td> <td>" + data.other5 + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-token_id='" + data.token_id + "'   data-transaction_id='" + data.transaction_id + "'   data-transaction_reference='" + data.transaction_reference + "'   data-processor_reference='" + data.processor_reference + "'   data-amount='" + data.amount + "'   data-currency='" + data.currency + "'   data-amount_charged='" + data.amount_charged + "'   data-rave_fee='" + data.rave_fee + "'   data-merchant_fee='" + data.merchant_fee + "'   data-merchant_bore_fee='" + data.merchant_bore_fee + "'   data-processor_response_code='" + data.processor_response_code + "'   data-processor_response_message='" + data.processor_response_message + "'   data-auth_model='" + data.auth_model + "'   data-customer_ip='" + data.customer_ip + "'   data-narration='" + data.narration + "'   data-status='" + data.status + "'   data-payment_entity='" + data.payment_entity + "'   data-payment_entity_id='" + data.payment_entity_id + "'   data-date_created='" + data.date_created + "'   data-unique_reference='" + data.unique_reference + "'   data-amount_due_merchant='" + data.amount_due_merchant + "'   data-customer_id='" + data.customer_id + "'   data-customer_email='" + data.customer_email + "'   data-customer_phonenumber='" + data.customer_phonenumber + "'   data-customer_fullname='" + data.customer_fullname + "'   data-customer_date_created='" + data.customer_date_created + "'   data-card_id='" + data.card_id + "'   data-masked_pan='" + data.masked_pan + "'   data-expiry_year='" + data.expiry_year + "'   data-expiry_month='" + data.expiry_month + "'   data-type='" + data.type + "'   data-country='" + data.country + "'   data-issuer_info='" + data.issuer_info + "'   data-date_created='" + data.date_created + "'   data-merchant_id='" + data.merchant_id + "'   data-payment_count='" + data.payment_count + "'   data-other1='" + data.other1 + "'   data-other2='" + data.other2 + "'   data-other3='" + data.other3 + "'   data-other4='" + data.other4 + "'   data-other5='" + data.other5 + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");

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
                                                    $('#token_id_edit').val($(this).data('token_id'));
                                                    $('#transaction_id_edit').val($(this).data('transaction_id'));
                                                    $('#transaction_reference_edit').val($(this).data('transaction_reference'));
                                                    $('#processor_reference_edit').val($(this).data('processor_reference'));
                                                    $('#amount_edit').val($(this).data('amount'));
                                                    $('#currency_edit').val($(this).data('currency'));
                                                    $('#amount_charged_edit').val($(this).data('amount_charged'));
                                                    $('#rave_fee_edit').val($(this).data('rave_fee'));
                                                    $('#merchant_fee_edit').val($(this).data('merchant_fee'));
                                                    $('#merchant_bore_fee_edit').val($(this).data('merchant_bore_fee'));
                                                    $('#processor_response_code_edit').val($(this).data('processor_response_code'));
                                                    $('#processor_response_message_edit').val($(this).data('processor_response_message'));
                                                    $('#auth_model_edit').val($(this).data('auth_model'));
                                                    $('#customer_ip_edit').val($(this).data('customer_ip'));
                                                    $('#narration_edit').val($(this).data('narration'));
                                                    $('#status_edit').val($(this).data('status'));
                                                    $('#payment_entity_edit').val($(this).data('payment_entity'));
                                                    $('#payment_entity_id_edit').val($(this).data('payment_entity_id'));
                                                    $('#date_created_edit').val($(this).data('date_created'));
                                                    $('#unique_reference_edit').val($(this).data('unique_reference'));
                                                    $('#amount_due_merchant_edit').val($(this).data('amount_due_merchant'));
                                                    $('#customer_id_edit').val($(this).data('customer_id'));
                                                    $('#customer_email_edit').val($(this).data('customer_email'));
                                                    $('#customer_phonenumber_edit').val($(this).data('customer_phonenumber'));
                                                    $('#customer_fullname_edit').val($(this).data('customer_fullname'));
                                                    $('#customer_date_created_edit').val($(this).data('customer_date_created'));
                                                    $('#card_id_edit').val($(this).data('card_id'));
                                                    $('#masked_pan_edit').val($(this).data('masked_pan'));
                                                    $('#expiry_year_edit').val($(this).data('expiry_year'));
                                                    $('#expiry_month_edit').val($(this).data('expiry_month'));
                                                    $('#type_edit').val($(this).data('type'));
                                                    $('#country_edit').val($(this).data('country'));
                                                    $('#issuer_info_edit').val($(this).data('issuer_info'));
                                                    $('#date_created_edit').val($(this).data('date_created'));
                                                    $('#merchant_id_edit').val($(this).data('merchant_id'));
                                                    $('#payment_count_edit').val($(this).data('payment_count'));
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
            url: 'flutterwavetransaction/' + id,
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
                    $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'> <td>" + data.token_id + "</td> <td>" + data.transaction_id + "</td> <td>" + data.transaction_reference + "</td> <td>" + data.processor_reference + "</td> <td>" + data.amount + "</td> <td>" + data.currency + "</td> <td>" + data.amount_charged + "</td> <td>" + data.rave_fee + "</td> <td>" + data.merchant_fee + "</td> <td>" + data.merchant_bore_fee + "</td> <td>" + data.processor_response_code + "</td> <td>" + data.processor_response_message + "</td> <td>" + data.auth_model + "</td> <td>" + data.customer_ip + "</td> <td>" + data.narration + "</td> <td>" + data.status + "</td> <td>" + data.payment_entity + "</td> <td>" + data.payment_entity_id + "</td> <td>" + data.date_created + "</td> <td>" + data.unique_reference + "</td> <td>" + data.amount_due_merchant + "</td> <td>" + data.customer_id + "</td> <td>" + data.customer_email + "</td> <td>" + data.customer_phonenumber + "</td> <td>" + data.customer_fullname + "</td> <td>" + data.customer_date_created + "</td> <td>" + data.card_id + "</td> <td>" + data.masked_pan + "</td> <td>" + data.expiry_year + "</td> <td>" + data.expiry_month + "</td> <td>" + data.type + "</td> <td>" + data.country + "</td> <td>" + data.issuer_info + "</td> <td>" + data.date_created + "</td> <td>" + data.merchant_id + "</td> <td>" + data.payment_count + "</td> <td>" + data.other1 + "</td> <td>" + data.other2 + "</td> <td>" + data.other3 + "</td> <td>" + data.other4 + "</td> <td>" + data.other5 + "</td>  <td>just now</td><td><button class='edit-modal btn btn-info btn-sm'  data-id='" + data.id + "'  data-token_id='" + data.token_id + "'   data-transaction_id='" + data.transaction_id + "'   data-transaction_reference='" + data.transaction_reference + "'   data-processor_reference='" + data.processor_reference + "'   data-amount='" + data.amount + "'   data-currency='" + data.currency + "'   data-amount_charged='" + data.amount_charged + "'   data-rave_fee='" + data.rave_fee + "'   data-merchant_fee='" + data.merchant_fee + "'   data-merchant_bore_fee='" + data.merchant_bore_fee + "'   data-processor_response_code='" + data.processor_response_code + "'   data-processor_response_message='" + data.processor_response_message + "'   data-auth_model='" + data.auth_model + "'   data-customer_ip='" + data.customer_ip + "'   data-narration='" + data.narration + "'   data-status='" + data.status + "'   data-payment_entity='" + data.payment_entity + "'   data-payment_entity_id='" + data.payment_entity_id + "'   data-date_created='" + data.date_created + "'   data-unique_reference='" + data.unique_reference + "'   data-amount_due_merchant='" + data.amount_due_merchant + "'   data-customer_id='" + data.customer_id + "'   data-customer_email='" + data.customer_email + "'   data-customer_phonenumber='" + data.customer_phonenumber + "'   data-customer_fullname='" + data.customer_fullname + "'   data-customer_date_created='" + data.customer_date_created + "'   data-card_id='" + data.card_id + "'   data-masked_pan='" + data.masked_pan + "'   data-expiry_year='" + data.expiry_year + "'   data-expiry_month='" + data.expiry_month + "'   data-type='" + data.type + "'   data-country='" + data.country + "'   data-issuer_info='" + data.issuer_info + "'   data-date_created='" + data.date_created + "'   data-merchant_id='" + data.merchant_id + "'   data-payment_count='" + data.payment_count + "'   data-other1='" + data.other1 + "'   data-other2='" + data.other2 + "'   data-other3='" + data.other3 + "'   data-other4='" + data.other4 + "'   data-other5='" + data.other5 + "'   > Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "'>Delete</button></td></tr>");


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
            url: 'flutterwavetransaction/' + id,
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