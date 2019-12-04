@extends('layouts.app') 
@section('page_title')LIQUIDATION AND PART LIQUIDATION  @endsection

@section('content') 
<?php
use App\User;
?>
<!-- BEGIN CONTENT -->

@include('liquidation.menu')

<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title">
            Liquidation 
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
                <li> <a href="#">Liquidation </a> </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card">
                    <div class="card-header">
                        <div class="caption"> <i class="fa fa-globe"></i>Liquidation </div>
                        <div class="actions"></div>
                    </div>
                    <div class="card-body
                        <div class="" id="creator-form">
                            <div class="card">
                                <div class="card-header">
                                    <h2>
                                     Edit Liquidation
                                    </h2>
                                    <span>Edit Liquidation</span> 
                                    
                                    </div>
                                    <div class="card-body
                                        <div class="row">
                                            <div class="col-lg-12 col-xl-12">
                                                <!-- Date card start -->
                                                <div class="card">
                                                    <div class="card-header"></div>
                                                    <div class="card-bodytyle="">



    <form action = '{!! url("liquidation")!!}/{!!$liquidation->
        id!!}/update' class="form-horizontal"  method="post"  enctype="multipart/form-data"> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <!-- <div class="form-group">
            <label for="staff_id">staff_id</label>
            
        </div> -->
      <!--   <div class="form-group">
            <label for="customer_name">customer_name</label>
            <input id="customer_name" name = "customer_name" type="text" class="form-control" value="{!!$liquidation->
            customer_name!!}"> 
        </div>
        <div class="form-group">
            <label for="amount_paid">amount_paid</label>
            <input id="amount_paid" name = "amount_paid" type="text" class="form-control" value="{!!$liquidation->
            amount_paid!!}"> 
        </div>
        <div class="form-group">
            <label for="date_paid">date_paid</label>
            <input id="date_paid" name = "date_paid" type="text" class="form-control" value="{!!$liquidation->
            date_paid!!}"> 
        </div>
        <div class="form-group">
            <label for="payee">payee</label>
            <input id="payee" name = "payee" type="text" class="form-control" value="{!!$liquidation->
            payee!!}"> 
        </div>
        <div class="form-group">
            <label for="liquidation_type">liquidation_type</label>
            <input id="liquidation_type" name = "liquidation_type" type="text" class="form-control" value="{!!$liquidation->
            liquidation_type!!}"> 
        </div>
        <div class="form-group">
            <label for="documents">documents</label>
            <input id="documents" name = "documents" type="text" class="form-control" value="{!!$liquidation->
            documents!!}"> 
        </div>
        <div class="form-group">
            <label for="product_type">product_type</label>
            <input id="product_type" name = "product_type" type="text" class="form-control" value="{!!$liquidation->
            product_type!!}"> 
        </div>
        <div class="form-group">
            <label for="amount_confirmed">amount_confirmed</label>
            <input id="amount_confirmed" name = "amount_confirmed" type="text" class="form-control" value="{!!$liquidation->
            amount_confirmed!!}"> 
        </div>
        <div class="form-group">
            <label for="ld">ld</label>
            <input id="ld" name = "ld" type="text" class="form-control" value="{!!$liquidation->
            ld!!}"> 
        </div>
        <div class="form-group">
            <label for="liquidation_type_ops">liquidation_type_ops</label>
            <input id="liquidation_type_ops" name = "liquidation_type_ops" type="text" class="form-control" value="{!!$liquidation->
            liquidation_type_ops!!}"> 
        </div>
        <div class="form-group">
            <label for="t24_acc_no">t24_acc_no</label>
            <input id="t24_acc_no" name = "t24_acc_no" type="text" class="form-control" value="{!!$liquidation->
            t24_acc_no!!}"> 
        </div>
        <div class="form-group">
            <label for="approved_by_ops">approved_by_ops</label>
            <input id="approved_by_ops" name = "approved_by_ops" type="text" class="form-control" value="{!!$liquidation->
            approved_by_ops!!}"> 
        </div>
        <div class="form-group">
            <label for="approved_by_cad">approved_by_cad</label>
            <input id="approved_by_cad" name = "approved_by_cad" type="text" class="form-control" value="{!!$liquidation->
            approved_by_cad!!}"> 
        </div>
        <div class="form-group">
            <label for="status_ops">status_ops</label>
            <input id="status_ops" name = "status_ops" type="text" class="form-control" value="{!!$liquidation->
            status_ops!!}"> 
        </div>
        <div class="form-group">
            <label for="status_cad">status_cad</label>
            <input id="status_cad" name = "status_cad" type="text" class="form-control" value="{!!$liquidation->
            status_cad!!}"> 
        </div>
        <div class="form-group">
            <label for="comment">comment</label>
            <input id="comment" name = "comment" type="text" class="form-control" value="{!!$liquidation->
            comment!!}"> 
        </div>
        <div class="form-group">
            <label for="other1">other1</label>
            <input id="other1" name = "other1" type="text" class="form-control" value="{!!$liquidation->
            other1!!}"> 
        </div>
        <div class="form-group">
            <label for="other2">other2</label>
            <input id="other2" name = "other2" type="text" class="form-control" value="{!!$liquidation->
            other2!!}"> 
        </div>
        <div class="form-group">
            <label for="other3">other3</label>
            <input id="other3" name = "other3" type="text" class="form-control" value="{!!$liquidation->
            other3!!}"> 
        </div>
    -->




    <input id="staff_id" name = "staff_id" type="hidden" class="form-control" value="{!!$liquidation->
    staff_id!!}"> 

    <div class="form-group">
        <label class="control-label col-md-3">Name of Customer  
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input type="text" id="customer_name_edit" value="{!!$liquidation->
            amount_paid!!}" name = "customer_name"  required placeholder="Name of Customer "
            class="form-control" />
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-md-3">Amount Paid 
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input type="text" id="amount_paid_edit"  value="{!!$liquidation->
            amount_paid!!}" name = "amount_paid"  required placeholder="Amount Paid"
            class="form-control" />
        </div>
    </div>



    <div class="form-group">
        <label class="control-label col-md-3">Payee Name 
            <span class="required"> * </span>
        </label>
        <div class="col-md-4">
            <input type="text" id="payee_edit" value="{!!$liquidation->
            payee!!}" name = "payee"  required placeholder="Payee Name"
            class="form-control" />
        </div>
    </div>


    <div class="form-group">

     <label class="control-label col-md-3">Payment Date :

         <span class="required"> * </span>

     </label>



     <div class="col-md-4">

         <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">

             <input type="text" required="required" value="{!!$liquidation->
             date_paid!!}" class="form-control" readonly  id="date_paid_add" name = "date_paid">

             <span class="input-group-btn">

                 <button class="btn default" type="button">

                     <i class="fa fa-calendar"></i>

                 </button>

             </span>

         </div>

         <!-- /input-group -->



     </div>

 </div>

 <div class="form-group">
    <label class="control-label col-md-3">Payment Bank :
        <span class="required"> * </span>
    </label>
    <div class="col-md-4">
        <select class="form-control select2me" required id="other3_edit" name = "other3">
            <option value="{!!$liquidation->
                other3!!}">{!!$liquidation->
            other3!!}</option>

            <option value="First Bank of Nigeria account 1 - 2032866997">First Bank of Nigeria account 1 - 2032866997</option>
            <option value="First Bank of Nigeria account 2 - 2032867059">First Bank of Nigeria account 2 - 2032867059</option>
            <option value="Access Bank - 0690430853">Access Bank - 0690430853</option>
            <option value="LSETF Access Bank 2017 - 0723377436">LSETF Access Bank 2017 - 0723377436</option>
            <option value="Diamond(Access) Bank -  0045414308">Diamond(Access) Bank -  0045414308</option>
            <option value="Zenith Bank - 1013871717">Zenith Bank - 1013871717</option>
            <option value="First Bank of Nigeria - 2024806710">First Bank of Nigeria - 2024806710</option>
            <option value="GTB Repayment - 0154349320">GTB Repayment - 0154349320</option>
            <option value="Polaris Bank - 1771721597">Polaris Bank - 1771721597</option>
            <option value="GTB MC - 0460076587">GTB MC - 0460076587</option>
            <option value="GTB SME 1 - 0420937578">GTB SME 1 - 0420937578</option>
            <option value="GTB SME 2 - 0420938180">GTB SME 2 - 0420938180</option>
            <option value="GTB SME 3 - 0420938135">GTB SME 3 - 0420938135</option>
            <option value="GTB SME 4 - 0463913393">GTB SME 4 - 0463913393</option>
            <option value="GTB SME 5 - 0463913609">GTB SME 5 - 0463913609</option>
            <option value="GTB INFORMAL - 0217896514">GTB INFORMAL - 0217896514</option>








        </select>
    </div>
</div>



<div class="form-group">
    <label class="control-label col-md-3">Liquidation Option:
        <span class="required"> * </span>
    </label>
    <div class="col-md-4">
        <select class="form-control select2me" required id="liquidation_type_edit" value="" name = "liquidation_type">
            <option value="{!!$liquidation->
                liquidation_type!!}">{!!$liquidation->
            liquidation_type!!}</option>
            <option value="part liquidation">Part Liquidation</option>
            <option value="full liquidation">Full Liquidation</option>


        </select>
    </div>
</div>


<div class="form-group">
    <label class="control-label col-md-3">Product Type:
        <span class="required"> * </span>
    </label>
    <div class="col-md-4">
        <select class="form-control select2me" required id="product_type_edit" name = "product_type">
            <option value="{!!$liquidation->
                product_type!!}">{!!$liquidation->
            product_type!!}</option>
            <option value="Swift Cash">Swift Cash</option>
            <option value="Easy Money Federal">Easy Money Federal</option>
            <option value="Easy Money State">Easy Money State</option>
            <option value="SME Individual">SME Individual</option>
            <option value="SME Corporate">SME Corporate</option>
            <option value="Microcredit Individual">Microcredit Individual</option>
            <option value="Microcredit State">Microcredit State</option>
            <option value="Staff Loan">Staff Loan</option>



        </select>
    </div>
</div>


<div class="form-group">
    <label class="control-label col-md-3">Upload Document:
        <span class="required"> * </span>
    </label>
    <div class="col-md-6">
        <input type="file" id="documents_edit" name= "documents" accept="application/pdf">
    </div>
</div>






<hr /> 





<button style="margin: 20px; float: right;" class = 'btn btn-success btn-lg m-b-0' type ='submit'><i class="fa fa-floppy-o"></i> Update Liquidation </button>
</form></div>
                                                        </div>
                                                        <!-- Date card end -->
                                                    </div>
                                                </div>
                                                <div class="text-center modal-footer">
                                                   <!--  <button type="submit" id="submit_button" class="btn btn-primary btn-lg m-b-0 add">Submit</button> -->
                                               </div>
                                           </div>
                                       </div>
                                   </div>







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

@include('includes.scripts_table')