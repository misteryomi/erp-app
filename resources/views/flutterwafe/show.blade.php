                

                                    <!DOCTYPE html>
                                    <html lang="en">
                                    <head>


                                      <style type="text/css">

                                    /*  @import url("https://fonts.googleapis.com/css?family=Nunito");*/
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
                                  border-radius: 20px;
                                  transition: border .5s;
                                  -webkit-transition: border .5s; }



                                  .wrapper .content .login-form .input-group select {
                                    padding: 15px;
                                    font-size: 13px;
                                    border: unset;
                                    background: #e4eff8;
                                    border: 1px solid #e4eff8;
                                    border-radius: 20px;
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
                                          font-size: 16px;
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

                                                      @if($flutterwafe->other5 == 'one-time-payment')

                                                      <meta charset="UTF-8">
                                                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                                      <meta http-equiv="X-UA-Compatible" content="ie=edge">
                                                      <title> Primera MFB - Pay with Your Card</title>

                                                    </head>
                                                    <body>

                                                      <center><img src="http://www.primeramfbank.com/sites/default/files/primera.png" width="200px" style="margin-top: 100px" /></center>
                                                      <section class="wrapper">

                                                         @if(isset($flutterwafe->txRef)) 

                                                           <div class="content">
                                                          <header>
                                                            <h2 style="padding: 30px; color:red;"> This link has expired. Thanks  </h2>


                                                          </header>
                                                  
                                                      </div>


                                                         @else


                                                         

                                                  <!--   <input type="submit" style="cursor:pointer;" value="Pay Now"  /> -->
                                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                                                  <script type="text/javascript" src="{{ config('global.LiveFlutterwaveURL') }}flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                                                  <script type="text/javascript">
                                                    document.addEventListener("DOMContentLoaded", function(event) {
                                                      document.getElementById('submit').addEventListener('click', function (evt) {

                                                       evt.preventDefault();


                                                       var flw_ref = "", chargeResponse = "", id = "{!!$flutterwafe->id!!}" , trxref = "{!!$flutterwafe->id!!}.{!!$flutterwafe->cfi!!}.PRIMERA"+ Math.random(), API_publicKey = "{{ config('global.LivePublicKey') }}";

                                                       getpaidSetup(
                                                       {
                                                        PBFPubKey: "{{ config('global.LivePublicKey') }}",
                                                        customer_email: "{!!$flutterwafe->email!!}",
                                                        amount: {!!$flutterwafe->amount!!},
                                                        customer_phone: "{!!$flutterwafe->phone_number!!}",
                                                        currency: "NGN",
                                                        customer_firstname: "{!!$flutterwafe->customer_name!!}", 
                                                        customer_lastname: "",
                                                        custom_logo: "{{ asset('assets/icon.png') }}",
                                                        custom_title: "PRIMERA MFB - LOAN REPAYMENT",
                                                        payment_method: "both",
                                                        txref: trxref,

                                                        meta: [{metaname: "token_id", metavalue: "{!!$flutterwafe->id!!}"}],
                                                        onclose:function(response) {
                                                        },
                                                        callback:function(response) {
                                                          txref = response.tx.txRef, chargeResponse = response.tx.chargeResponseCode;
                                                          if (chargeResponse == "00" || chargeResponse == "0") {
                       window.location = "{{ config('global.irs_url') }}app/tokenize_mandate/{!!$flutterwafe->id!!}/"+txref; //Add your success page here
                     } else {
                        //  window.location = "http://pirs.primera/app/tokenize_mandate/"+id+"/"+txref;  //Add your failure page here
                      }
                    }
                  }
                  );
                                                     });
                                                    });
                                                  </script>

                                                        <div class="content">
                                                          <header>
                                                            <h1>{!!$flutterwafe->customer_name!!}</h1>
                                                            <p style="padding: 20px;"> {!!$flutterwafe->purpose!!}. Click <strong> proceed </strong> and enter your card details to complete this payment </p>


                                                          </header>
                                                          <section>

                                                           <form class="login-form" action="#">

                                                            <div class="input-group">
                                                              <label for="username">Loan Repayment Amount: <strong> N{!! number_format($flutterwafe->amount,2) !!} </strong></label>

                                                            </div>

                                                            <div class="input-group">
                                                              <label for="username"> Phone Number: <strong> {!!$flutterwafe->phone_number!!} </strong></label>
                                                            </div>


                                                            <div class="input-group">
                                                              <label for="username"> Email Adrress: <strong> {!!$flutterwafe->email!!} </strong></label>
                                                            </div>

                                                            <div class="social-login">

                                                            </div>


                                                            <div class="input-group">
                                                              <button id="submit" >Proceed</button>
                                                            </div>
                                                          </form>
                                                        </section>
                                                        <footer>
                                                          <a href="#" title="Forgot Password">Terms and Conditions</a>
                                                        </footer>
                                                      </div>

                                                      @endif
                                                    </section>
                                                  </body>
                                                  </html>





                                                  @else 


                                                  <meta charset="UTF-8">
                                                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                                  <meta http-equiv="X-UA-Compatible" content="ie=edge">
                                                  <title>Tokenize and Pay with Your Card</title>

                                                </head>
                                                <body>

                                                  <center><img src="http://www.primeramfbank.com/sites/default/files/primera.png" width="200px" style="margin-top: 100px" /></center>
                                                  <section class="wrapper">

                                                     @if(isset($flutterwafe->txRef)) 

                                                           <div class="content">
                                                          <header>
                                                            <h2 style="padding: 30px;  color:red;"> This link has expired. Thanks  </h2>


                                                          </header>
                                                  
                                                      </div>


                                                         @else


                                                         <!--   <input type="submit" style="cursor:pointer;" value="Pay Now"  /> -->
                                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                                                <script type="text/javascript" src="{{ config('global.LiveFlutterwaveURL') }}flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                                                <script type="text/javascript">
                                                  document.addEventListener("DOMContentLoaded", function(event) {
                                                    document.getElementById('submit').addEventListener('click', function (evt) {

                                                     evt.preventDefault();


                                                     var flw_ref = "", chargeResponse = "", id = "{!!$flutterwafe->id!!}" , trxref = "{!!$flutterwafe->id!!}.{!!$flutterwafe->cfi!!}.PRIMERA"+ Math.random(), API_publicKey = "{{ config('global.LivePublicKey') }}";

                                                     getpaidSetup(
                                                     {
                                                      PBFPubKey:  "{{ config('global.LivePublicKey') }}",
                                                      customer_email: "{!!$flutterwafe->email!!}",
                                                      amount: 100,
                                                      customer_phone: "{!!$flutterwafe->phone_number!!}",
                                                      currency: "NGN",
                                                      customer_firstname: "{!!$flutterwafe->customer_name!!}", 
                                                      customer_lastname: "",
                                                      custom_logo: "{{ asset('assets/icon.png') }}",
                                                      custom_title: "TOKENIZE YOUR CARD FOR LOAN REPAYMENT",
                                                      payment_method: "both",
                                                      txref: trxref,

                                                      meta: [{metaname: "token_id", metavalue: "{!!$flutterwafe->id!!}"}],
                                                      onclose:function(response) {
                                                      },
                                                      callback:function(response) {
                                                        txref = response.tx.txRef, chargeResponse = response.tx.chargeResponseCode;
                                                        if (chargeResponse == "00" || chargeResponse == "0") {
                       window.location = "{{ config('global.irs_url') }}app/tokenize_mandate/{!!$flutterwafe->id!!}/"+txref; //Add your success page here
                     } else {
                        //  window.location = "http://pirs.primera/app/tokenize_mandate/"+id+"/"+txref;  //Add your failure page here
                      }
                    }
                  }
                  );
                                                   });
                                                  });
                                                </script>
                                                    <div class="content">
                                                      <header>
                                                        <h1>{!!$flutterwafe->customer_name!!}</h1>
                                                        <p style="padding: 20px;"> {!!$flutterwafe->purpose!!}. Click <strong> proceed </strong> and enter your {!!$flutterwafe->customer_bank !!} card details to complete the tokenization </p>


                                                      </header>
                                                      <section>
                                                        <div class="social-login">

                                                        </div>
                                                        <form class="login-form" action="#">

                                                          <div class="input-group">
                                                            <label for="username"> Account Number:</label>
                                                            <input type="text" placeholder="Account Number" readonly id="account_no" value="{!!$flutterwafe->other4!!}">
                                                          </div>

                                                          <div class="input-group">
                                                            <label for="username">Bank:</label>
                                                            <input type="text" placeholder="Credit/Debit Card Account Number" readonly id="account_no" value="{!!$flutterwafe->customer_bank!!}">
                                                          </div>


                                                          <div class="input-group">
                                                            <button id="submit" >Proceed</button>
                                                          </div>
                                                        </form>
                                                      </section>
                                                      <footer>
                                                        <a href="#"> Please note that a non-refundable charge of N100 is required to complete this transition </a>

                                                        <a href="#" title="Forgot Password">Terms and Conditions</a>


                                                      </footer>
                                                    </div>

                                                    @endif
                                                  </section>
                                                </body>
                                                </html>




                                                


                                                @endif





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







