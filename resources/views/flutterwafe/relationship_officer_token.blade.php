@include('layouts.login_snippet')
<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
    background-color: #e4eff8;
    margin-top: 30px;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>

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
                                                      <!DOCTYPE html>
                                                      <html lang="en">
                                                      <head>
                                                        <meta charset="UTF-8">
                                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                                        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                                                        <title>Tokenize Your Card</title>

                                                      </head>
                                                      <body>

                                                        <center><img src="http://www.primeramfbank.com/sites/default/files/primera.png" width="200px" style="margin-top: 50px; margin-bottom: 50px" /></center>  




                                                        <section class="wrapper">

                                                          <div class="content">


                                                            <form class="login-form" id="leave_apply"  method = 'POST' action = '{!!url("flutterwafe")!!}'>

                                                             <center><H2 style="padding: 10px;">Tokenize Customer's Card</H2></center>   

<!-- {{ config('global.siteTitle') }} -->


                                                             <input id="user_id_add" name = "user_id" type="hidden" value="{{ Auth::user()->ID }}" class="form-control">


                                                             <input id="user_id_add" name = "purpose" type="hidden" value="KIndly Tokenize Your Credit / Debit Card for Loan Repayment" class="form-control">




                                                             {{ csrf_field() }}   

                                                             <div class="input-group">
                                                              <label for="username"><strong>Customer Full Name:</strong></label>
                                                              <input type="text" name="customer_name" id="customer_name">
                                                            </div>


                                                            <div class="input-group">
                                                              <label for="username"><strong>Customer Email:</strong></label>
                                                              <input type="email"  name="email" id="email">
                                                            </div>


                                                            <div class="input-group">
                                                              <label for="username"><strong>Customer Phone Number: </strong></label>
                                                              <input type="text"  name="phone_number" id="customer_phone">
                                                            </div>

                                                            <div class="input-group">
                                                              <label for="username"><strong>Customer Salary Account No: </strong></label>
                                                              <input type="text" name="other4"  id="other4" >
                                                            </div>

                                                            <div class="input-group">
                                                              <label for="password"><strong>Select Bank</strong></label>
                                                              <select class="form-control select2me" required id="customer_bank" name = "customer_bank" >
                                                                <option value="" selected>Choose</option>
                                                                <option value="ACCESS BANK" >ACCESS BANK</option>
                                                                <option value="DIAMOND BANK" >DIAMOND BANK</option>
                                                                <option value="ECO BANK" >ECO BANK</option>
                                                                <option value="ENTERPRISE BANK" >ENTERPRISE BANK</option>
                                                                <option value="FCMB" >FCMB</option>
                                                                <option value="FIDELITY BANK" >FIDELITY BANK</option>
                                                                <option value="FIRST BANK" >FIRST BANK</option>
                                                                <option value="GTBANK" >GTBANK</option>
                                                                <option value="HERITAGE BANK" >HERITAGE BANK</option>
                                                                <option value="KEYSTONE BANK" >KEYSTONE</option>
                                                                <option value="MAINSTREET BANK" >MAINSTREET BANK</option>
                                                                <option value="SKYE BANK" >SKYE BANK</option>
                                                                <option value="STANBIC IBTC BANK" >STANBIC IBTC BANK</option>
                                                                <option value="STANDARD CHARTERED BANK" >STANDARD CHARTERED BANK</option>
                                                                <option value="STERLING BANK" >STERLING BANK</option>
                                                                <option value="UBA" >UBA</option>
                                                                <option value="UNION BANK" >UNION BANK</option>
                                                                <option value="UNITY BANK" >UNITY BANK</option>
                                                                <option value="WEMA BANK" >WEMA</option>
                                                                <option value="ZENITH BANK" >ZENITH BANK</option>
                                                                <option value="JAIZ BANK" >JAIZ BANK</option>

                                                              </select>

                                                            </div>


                                                            <div class="input-group">
                                                              <button id="submit" type="submit">Proceed</button>
                                                            </div>
                                                          </form>
                                                        </div>

                                                      </section>
                                                      {{--  <br /><br />
<center>                                                      <a href="http://irs.primeramfbank.com/" class="previous">&laquo; Back to IRS Dashboard</a>
</center>  --}}
                                                    </body>
                                                    </html>


    <script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
                                                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



                                                    <script>
                                                      /*using the been here before completed and successful*/
                                                      $(function(){
                                                        $("#leave_apply").submit(function(evt){
                                                          evt.preventDefault();
                                                        $('#submit').empty().prepend('Loading...').attr('disabled','disabled');
                                          
                                                          var url = $(this).attr('action');
                                                          var postData = $(this).serialize();
                                                          $.post(url, postData, function(data){
                                              

                                                          $('#submit').empty().prepend('Proceed').removeAttr('disabled');
                                           


                                                           if ((data.errors)) {

                                                            swal("Error!", 'Error: Initiating Customer Card Tokenization', "error");


                                                          } else {


                                                             $("#leave_apply").trigger('reset'); //reset the form

                                                             swal("Success", "Successfully Initiated " + data.customer_name + "  Card Tokenization, Link has been sent to customer email(" + data.email + ").", "success");
                                                           }
                                                         }, 'json');

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







