
@extends('layouts.app') @section('content') 


@section('page_title')Account Statement  @endsection


<?php
use App\User;

use App\Card_mandate;

use Carbon\Carbon;
?>
<style type="text/css">
#featuredbox{

    display: none!important; 
    visibility: hidden!important;
}
</style>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title">
            Account Statement 
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
                <li> <a href="#">Account Statement </a> </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card">
                    <div class="card-header">
                        <div class="caption"> <i class="fa fa-globe"></i>Account Statement </div>
                        <div class="actions"></div>
                    </div>
                    <div class="card-body">



                        <div class="col-md-12" style="background-color: #f2f2f2">

                            <div class="col-md-6">

                               <table class="table responsive " width="100%" cellpadding="40" border="1" bordercolor="#000" style=" margin-top:80px; padding:40px; border:1px solid #000; text-align: left">
                                <tr class="tr_row"> 

                                    <td> Name: </td> <td style="font-weight: 600;"> {!!$accountstatement->firstname!!} {!!$accountstatement->surname!!} {!!$accountstatement->preferedname!!}</td>


                                </tr>

                               

                                  <tr class="tr_row"> <td> Gender: </td> <td style="font-weight: 600;"> {!!$accountstatement->gender!!} </td> </tr>
                                  <tr class="tr_row"> <td> Phone: </td> <td style="font-weight: 600;"> {!!$accountstatement->cust_phone!!} </td> </tr>
                                  <tr class="tr_row"> <td> Address: </td> <td style="font-weight: 600;"> {!!$accountstatement->address!!} </td> </tr>
                                  <tr class="tr_row"> <td> Employer: </td> <td style="font-weight: 600;"> {!!$accountstatement->employer!!} </td> </tr>
                                 <tr class="tr_row">  <td> Loan Type: </td> <td style="font-weight: 600;"> {!!$accountstatement->loantype!!} </td> </tr>


                         </table>


                     </div>
                     <div class="col-md-6">


                        <table class="table responsive " width="100%" cellpadding="40" border="1" bordercolor="#000" style=" margin-top:80px; padding:40px; border:1px solid #000; text-align: left">
                            <tr class="tr_row">  <td> Opening Balance: </td> <td style="font-weight: 600;"> {!!$accountstatement->opening_balance!!} </td> </tr>

                             <tr class="tr_row">  <td> Start Date: </td> <td style="font-weight: 600;"> {!!$accountstatement->start_date!!} </td> </tr>

                              <tr class="tr_row">  <td> End Date: </td> <td style="font-weight: 600;"> {!!$accountstatement->end_date!!} </td> </tr>

                               <tr class="tr_row">  <td> Account No.: </td> <td style="font-weight: 600;"> {!!$accountstatement->accout_no!!} </td> </tr>

                                <tr class="tr_row">  <td> Account Officer: </td> <td style="font-weight: 600;"> {!!$accountstatement->account_officer!!} </td> </tr>

                                <tr class="tr_row">  <td> Next Of Kin: </td> <td style="font-weight: 600;"> {!!$accountstatement->next_of_kin!!} ({!!$accountstatement->next_of_kin_phone!!}) </td> </tr>
                                

                     </table>



                 </div>

             </div>

             <div class="" id="table-content-display">
                <div class="card">

                    <div class="card-body">
                      <br /> <br />
                    </div>
                </div>
            </div>
            <!-- Modal form to delete a form -->





            <style>
            .pdfobject-container { height: 90rem; border: 1rem solid rgba(0,0,0,.1); }
        </style>


        <table class="table responsive " width="100%" cellpadding="40" border="1" bordercolor="#000" style=" margin-top:80px; padding:40px; border:1px solid #000; text-align: left; ">
          <tr bgcolor="#003366" style="color:#fff;text-align:left;">
            <th scope="col" >Booking Date</th>
            <th scope="col">Value Date</th>
            <th scope="col">Description</th>
            <th scope="col" >Debit</th>
            <th scope="col">Credit</th>
            <th scope="col">Closing Balance</th>
        </tr>


        @if(!empty($accountstatement->body))

        @foreach ($accountstatement->body as $samplej => $dataj)


        <tr style="text-align:left; font-size:16px"> 

          <td>{{$dataj['BookingDate']}}  <br />  </td>
          <td>{{$dataj['ValueDate']}} <br /></td>

          <td>{{$dataj['Description']}} </td>
          <td>{{$dataj['DebitAmount']}} </td>
          <td>{{$dataj['CreditAmount']}} </td>
          <td>{{$dataj['ClosingBalance']}} </td>

      </tr>





      @endforeach

      @endif


  </table>




<a href="https://irs.primeramfbank.com/app/download/download-statement.php?id={{$accountstatement->id}}"><button  style="padding:30px;  "  class="btn green btn-block btn-lg m-icon-big">DOWNLOAD ACCOUNT STATEMENT IN PDF
                                                                        <i class="m-icon-big-swapright m-icon-white"></i>
                                                                    </button>






  @endsection
