
<style type="text/css">

@import url("https://fonts.googleapis.com/css?family=Nunito");
/*:root {
  --body-background-start: #5433FF;
  --body-background-end: #20BDFF; }*/

  :root {
  --body-background-start: #ffffff;
  --body-background-end: #093263; }

  body {
    font-family: 'Nunito', sans-serif;
  background: linear-gradient(to bottom, var(--body-background-start), var(--body-background-end));
    margin: 0;
    height: 100vh; }

    .wrapper {
      height: 68%;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center; }

      .wrapper .content {
        background-color: #fff;
        padding: 30px 15px;
        border-radius: 10px;
        width: 100%;
        max-width: 500px;
        min-width: 200px; }

        .wrapper .content button {
          padding: 15px;
          width: 150px;
          border: 1px solid #eee;
          background: transparent;
          border-radius: 50px;
          color: #333; }

          .wrapper .content button:focus {
            outline: none; }

            .wrapper .content header {
              text-align: center; }

              .wrapper .content header h1 {
                margin-top: 0;
                font-size: 190%; }

                .wrapper .content .social-login {
                  padding: 10px;
                  text-align: center;
                  margin-bottom: 20px;
                  display: flex;
                  justify-content: center; }

                  .wrapper .content .social-login button {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    cursor: pointer;
                    transition: background .5s;
  --webkit-transition: background .5s; }

  .wrapper .content .social-login button:first-child {
    margin-right: 10px; }

    .wrapper .content .social-login button:hover {
      background: #eee; }

      .wrapper .content .social-login button span {
        font-size: 17px;
        color: #777;
        margin-left: 5px; }

        .wrapper .content .login-form {
          padding: 0 20px;
          display: flex;
          flex-direction: column;
          align-items: center; }

          .wrapper .content .login-form .input-group {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
            width: 100%;
            max-width: 310px; }

            .wrapper .content .login-form .input-group input {
              padding: 15px;
              font-size: 13px;
              border: unset;
              background: #e4eff8;
              border: 1px solid #e4eff8;
              border-radius: 50px;
              transition: border .5s;
              -webkit-transition: border .5s; }



              .wrapper .content .login-form .input-group select {
                padding: 15px;
                font-size: 13px;
                border: unset;
                background: #e4eff8;
                border: 1px solid #e4eff8;
                border-radius: 50px;
                transition: border .5s;
                -webkit-transition: border .5s; } 


                .wrapper .content .login-form .input-group select:focus {
                  outline: none;
                  border-color: #20BDFF; }


                  .wrapper .content .login-form .input-group input:focus {
                    outline: none;
                    border-color: #20BDFF; }

                    .wrapper .content .login-form .input-group label {
                      color: #093263;
                      font-size: 12px;
                      margin-bottom: 3px;
                      margin-left: 8px; }

                      .wrapper .content .login-form .input-group button {
                        border: unset;
                        background: #093263;
                        color: #fff;
                        align-self: center;
                        margin-top: 15px;
                        cursor: pointer;
                        transition: background .3s;
                        -webkit-transition: background .5s; }

                        .wrapper .content .login-form .input-group button:hover {
                          background: #1d5806; }

                          .wrapper .content .form-footer {
                            text-align: center;
                            padding-top: 15px; }

                            .wrapper .content footer {
                              padding-top: 15px;
                              text-align: center; }

                              .wrapper .content footer a {
                                color: #999;
                                text-decoration: none;
                                font-size: 11px; }

                                @media screen and (max-width: 720px) {
                                  .wrapper .content {
                                    padding-right: 0;
                                    padding-left: 0;
                                    margin: 0 10px; } }


                                    </style>
                                    <!DOCTYPE html>
                                    <html lang="en">
                                    <head>
                                    <meta charset="UTF-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                                    <title>Tokenize Your Card</title>

                                    </head>
                                    <body>

                                    <center><img src="http://www.primeramfbank.com/sites/default/files/primera.png" width="200px" style="margin-top: 100px" /></center>
                                    <section class="wrapper">
                                    <div class="content">

                                    @if(isset($flutterwafe->txRef))
                                    <header>
                                    <div style="color: green; ">
                                    <h4>Dear {!!$flutterwafe->customer_name!!}, </h4>
                                       @if($flutterwafe->other5 == 'one-time-payment')
                                    <p>  Your loan repayment was successful, kindly find your Transaction ID: <strong> {!!$flutterwafe->txRef!!} </strong></p>
                                    @else

                                     <p>  Your card tokenization  was successful, kindly find your Transaction ID: <strong> {!!$flutterwafe->txRef!!} </strong></p>
 
                                    @endif
                                    </div>
                                    </header>

                                    @else

                                    <header>
                                    <div style="color: red; ">
                                    <h4>Dear {!!$flutterwafe->customer_name!!}, </h4>
                                    <p>  Your card tokenization failed, kindly retry.</p>
                                    </div>
                                    </header>


                                    @endif
                                    </div>
                                    </section>
                                    </body>
                                    </html>





              <!--   <input type="submit" style="cursor:pointer;" value="Pay Now"  /> -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
              <script type="text/javascript" src="https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
              <script type="text/javascript">
              document.addEventListener("DOMContentLoaded", function(event) {
                document.getElementById('submit').addEventListener('click', function (evt) {

                 evt.preventDefault();


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







