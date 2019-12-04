@extends('layouts.app')
@section('page_title')Card Tokenization @endsection
@section('content')



<style type="text/css">
    
    .expense{
        border-top:none;
        font-size: 40px!important;
    }

    .table td, .table th {
    font-size: 20px!important;
}


.modal {
    display: block !important;
    overflow: hidden !important;
    position: fixed !important;
   
    z-index: 1050 !important;
    -webkit-overflow-scrolling: touch !important;
    outline: 0!important;
     left: 50%!important;
    bottom: auto!important;
    right: auto!important;
    padding: 0;
     border: 1px solid #999999;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 6px !important;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.5)!important;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.5)!important;
    background-clip: padding-box !important;
       width: auto !important;
    /* margin-left: -250px; */
    /* background-color: #ffffff; */


    margin-left: -250px!important;
    background-color: transparent !important;
    /* border: 1px solid #999999; */
    /* border: 1px solid rgba(0, 0, 0, 0.2); */
    /* border-radius: 6px; */
}


</style>








<!-- <section class="content">
    <h1>
        Show flutterwafe
    </h1>
    <br>
    <a href='{!!url("flutterwafe")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Flutterwafe Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>user_id</b> </td>
                <td>{!!$flutterwafe->user_id!!}</td>
            </tr>
            <tr>
                <td> <b>status</b> </td>
                <td>{!!$flutterwafe->status!!}</td>
            </tr>
            <tr>
                <td> <b>customer_name</b> </td>
                <td>{!!$flutterwafe->customer_name!!}</td>
            </tr>
            <tr>
                <td> <b>customer_bank</b> </td>
                <td>{!!$flutterwafe->customer_bank!!}</td>
            </tr>
            <tr>
                <td> <b>purpose</b> </td>
                <td>{!!$flutterwafe->purpose!!}</td>
            </tr>
            <tr>
                <td> <b>frequency</b> </td>
                <td>{!!$flutterwafe->frequency!!}</td>
            </tr>
            <tr>
                <td> <b>amount</b> </td>
                <td>{!!$flutterwafe->amount!!}</td>
            </tr>
            <tr>
                <td> <b>reg_date</b> </td>
                <td>{!!$flutterwafe->reg_date!!}</td>
            </tr>
            <tr>
                <td> <b>tokenize_date</b> </td>
                <td>{!!$flutterwafe->tokenize_date!!}</td>
            </tr>
            <tr>
                <td> <b>start_date</b> </td>
                <td>{!!$flutterwafe->start_date!!}</td>
            </tr>
            <tr>
                <td> <b>date_end</b> </td>
                <td>{!!$flutterwafe->date_end!!}</td>
            </tr>
            <tr>
                <td> <b>last_trxn_date</b> </td>
                <td>{!!$flutterwafe->last_trxn_date!!}</td>
            </tr>
            <tr>
                <td> <b>last_trxn_status</b> </td>
                <td>{!!$flutterwafe->last_trxn_status!!}</td>
            </tr>
            <tr>
                <td> <b>pending_payments</b> </td>
                <td>{!!$flutterwafe->pending_payments!!}</td>
            </tr>
            <tr>
                <td> <b>paid_closed</b> </td>
                <td>{!!$flutterwafe->paid_closed!!}</td>
            </tr>
            <tr>
                <td> <b>next_due_date</b> </td>
                <td>{!!$flutterwafe->next_due_date!!}</td>
            </tr>
            <tr>
                <td> <b>phone_number</b> </td>
                <td>{!!$flutterwafe->phone_number!!}</td>
            </tr>
            <tr>
                <td> <b>email</b> </td>
                <td>{!!$flutterwafe->email!!}</td>
            </tr>
            <tr>
                <td> <b>cfi</b> </td>
                <td>{!!$flutterwafe->cfi!!}</td>
            </tr>
            <tr>
                <td> <b>life_token</b> </td>
                <td>{!!$flutterwafe->life_token!!}</td>
            </tr>
            <tr>
                <td> <b>hash_id</b> </td>
                <td>{!!$flutterwafe->hash_id!!}</td>
            </tr>
            <tr>
                <td> <b>txRef</b> </td>
                <td>{!!$flutterwafe->txRef!!}</td>
            </tr>
            <tr>
                <td> <b>flwRef</b> </td>
                <td>{!!$flutterwafe->flwRef!!}</td>
            </tr>
            <tr>
                <td> <b>card_expirymonth</b> </td>
                <td>{!!$flutterwafe->card_expirymonth!!}</td>
            </tr>
            <tr>
                <td> <b>card_year</b> </td>
                <td>{!!$flutterwafe->card_year!!}</td>
            </tr>
            <tr>
                <td> <b>card_last4digits</b> </td>
                <td>{!!$flutterwafe->card_last4digits!!}</td>
            </tr>
            <tr>
                <td> <b>card_brand</b> </td>
                <td>{!!$flutterwafe->card_brand!!}</td>
            </tr>
            <tr>
                <td> <b>card_type</b> </td>
                <td>{!!$flutterwafe->card_type!!}</td>
            </tr>
            <tr>
                <td> <b>amount_tokenized</b> </td>
                <td>{!!$flutterwafe->amount_tokenized!!}</td>
            </tr>
            <tr>
                <td> <b>payment_type</b> </td>
                <td>{!!$flutterwafe->payment_type!!}</td>
            </tr>
            <tr>
                <td> <b>narration</b> </td>
                <td>{!!$flutterwafe->narration!!}</td>
            </tr>
            <tr>
                <td> <b>ravreref</b> </td>
                <td>{!!$flutterwafe->ravreref!!}</td>
            </tr>
            <tr>
                <td> <b>other1</b> </td>
                <td>{!!$flutterwafe->other1!!}</td>
            </tr>
            <tr>
                <td> <b>other2</b> </td>
                <td>{!!$flutterwafe->other2!!}</td>
            </tr>
            <tr>
                <td> <b>other3</b> </td>
                <td>{!!$flutterwafe->other3!!}</td>
            </tr>
            <tr>
                <td> <b>other4</b> </td>
                <td>{!!$flutterwafe->other4!!}</td>
            </tr>
            <tr>
                <td> <b>other5</b> </td>
                <td>{!!$flutterwafe->other5!!}</td>
            </tr>
        </tbody>
    </table>
</section> -->









                <input type="submit" style="cursor:pointer;" value="Pay Now" id="submit" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById('submit').addEventListener('click', function () {

    var flw_ref = "", chargeResponse = "", id = "{!!$flutterwafe->id!!}" , trxref = "PRIMERA"+ Math.random(), API_publicKey = "FLWPUBK-ece6a8e53ce35adeb9f8a56abdaca66d-X";

    getpaidSetup(
      {
        PBFPubKey: "FLWPUBK-ece6a8e53ce35adeb9f8a56abdaca66d-X",
        customer_email: "{!!$flutterwafe->email!!}",
        amount: 100,
        customer_phone: "{!!$flutterwafe->phone_number!!}",
        currency: "NGN",
        payment_method: "both",
        txref: trxref,
        meta: [{metaname:"CIF", metavalue: "{!!$flutterwafe->cfi!!}", metaname: "LD", metavalue: "9388723232"}],
        onclose:function(response) {
        },
        callback:function(response) {
          txref = response.tx.txRef, chargeResponse = response.tx.chargeResponseCode;
          if (chargeResponse == "00" || chargeResponse == "0") {
           window.location = "http://pirs.primera/app/tokenize_mandate/{!!$flutterwafe->id!!}/"+txref; //Add your success page here
          } else {
                //  window.location = "http://pirs.primera/app/tokenize_mandate/"+id+"/"+txref;  //Add your failure page here
          }
        }
      }
    );
    });
  });
</script>
@endsection