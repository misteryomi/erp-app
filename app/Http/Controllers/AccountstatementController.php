<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Accountstatement;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use bcrypt;
use Hash;
use Auth;
use App\User;

use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;




/**
* Class AccountstatementController.
*
* @author  The scaffold-interface created at 2019-05-24 12:54:02pm
* @link  https://github.com/amranidev/scaffold-interface
* Copywrite @ www.webguru.com.ng
*/


class AccountstatementController extends Controller
{
//setting validations
    protected $rules =
    [

        'staff' => 'required',


        'accout_no' => 'required',


        'body' => 'required',


        'customer_name' => 'required',


        'customer_cif' => 'required',


        'opening_balance' => 'required',


        'closing_balance' => 'required',


        'transaction_count' => 'required',


        'start_date' => 'required',


        'end_date' => 'required',


        'cust_email' => 'required',


        'cust_phone' => 'required',


        'others' => 'required',

    ];






    public function send_email($name,$email,$content,$link,$title,$button_title){

      $body = '

      <!doctype html>
      <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="ROBOTS" content="NOINDEX, NOFOLLOW"><meta name="referrer" content="no-referrer">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style type="text/css">

      .maintable {
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        text-align: left;
        padding: 8px;
      }

      .maintable tr:nth-child(even){background-color: #f2f2f2}

      th {
        background-color: #4CAF50;
        color: white;
      }
      </style>
      </head>
      <body>
      <div style="background-color: #ccc;">
      <table width="830" border="0" cellspacing="0" cellpadding="0" style="font-family:Calibri,Candara,Segoe,&quot;Segoe UI&quot;,Optima,Arial,sans-serif;letter-spacing:normal;text-indent:0px;text-transform:none;word-spacing:0px;text-decoration:none;margin:0px auto;background-color:rgb(255,255,255)">
      <tbody>
      <tr style="background-color: #f22f2f2; height: 30px;">  </tr>

      <tr style="background-color: #f2f2f2;">
      <td>
      <table>
      <tbody>
      <tr>
      <td width="610">&nbsp;</td>
      <td width="130"  style="padding: 15px;" align="left" valign="bottom"><img src="http://www.primeramfbank.com/sites/default/files/primera.png" alt="Primera Logo" width="278"  class="CToWUd"></td>
      <td width="610">&nbsp;</td>
      </tr>
      </tbody>
      </table>
      </td>
      </tr>

      <tr style="background-color: #f22f2f2; height: 30px;">  </tr>

      <tr>
      <td style="padding:50px 40px 10px;font-size:20px">Dear '.$name.',</td>
      </tr>
      <tr>
      <td style="padding:10px 40px;color:#093263;font-size:36px;letter-spacing:-1px;font-weight:bold"><span style="text-decoration:underline; text-align: center;">'.$title.' </span><span class="m_4920298691540864634Apple-converted-space">&nbsp;</span></td>
      </tr>
      <tr>
      <td style="padding:10px 40px 20px; font-size:17px"><br> '.$content.' </td>

      </tr>



      <tr><td style="padding:10px 40px 20px">Please click Button Below to proceed <br> <br></tr><tr>
      <td style="padding:10px 40px 20px">   <a href="'.$link.'"> <button style="background-color: #093263; color: #fff;font-size: 20px;border-radius: 8px; padding: 10px; cursor: pointer;"> '.$button_title.' </button></a></td>
      </tr><tr>
      <td style="padding:20px 40px 40px"><br><br>For further enquiries, please send an email to<span class="m_4920298691540864634Apple-converted-space">&nbsp;</span><a href="mailto:irs@primeramfbank.com" target="_blank">irs@primeramfbank.com</a><span class="m_4920298691540864634Apple-converted-space">&nbsp;</span>
      <br><br>Your partner for growth.<br><br>Regards,<br><br><br><span style="font-weight:bold">Primera Internal Resource Stream.</span></td>
      </tr><tr>
      <td style="padding:10px 40px;background-color:rgb(238,238,238)">
      <table width="300" border="0" cellspacing="0" cellpadding="0">
      </table>
      </td>
      </tr>
      <br><br>
      <tr style="background-color: #f22f2f2; height: 30px;">  </tr>

      <tr style="background-color: #f1f1f1;">
      <td>
      <table border="0" cellspacing="8" cellpadding="8" style="text-align: center;"> <br><br>
      <tbody>
      <tr valign="top" align="center">

      <td width="220" height="50"> <center><a href="http://www.primeramfbank.com" style="color:rgb(62,70,81);text-decoration:none;font-weight:bold" target="_blank"><span style="color:rgb(62,70,81);text-decoration:none">IRS LOGIN</span></a><br><a href="http://irs.primeramfbank.com/" style="color:rgb(62,70,81);text-decoration:none" target="_blank" ><span style="color:rgb(62,70,81);text-decoration:none;font-size:10px">irs.primeramfbank.com</span></a></center></td>
      <td width="230" height="50"><center><a href="mailto:irs@primeramfbank.com" style="color:rgb(62,70,81);text-decoration:none;font-weight:bold" target="_blank"><span style="color:rgb(62,70,81);text-decoration:none">Email</span></a><br><a href="mailto:irs@primeramfbank.com" style="color:rgb(62,70,81);text-decoration:none" target="_blank"><span style="color:rgb(62,70,81);text-decoration:none;font-size:10px">irs@primeramfbank.com</span></a><br></center></td>
      <td width="230" height="50"><center><a href="http://www.primeramfbank.com" style="color:rgb(62,70,81);text-decoration:none;font-weight:bold" target="_blank"><span style="color:rgb(62,70,81);text-decoration:none">Website</span></a><br><a href="http://www.primeramfbank.com/" style="color:rgb(62,70,81);text-decoration:none" target="_blank"><span style="color:rgb(62,70,81);text-decoration:none;font-size:10px">www.primeramfbank.com</span></a></center></td>
      </tr>
      </tbody>
      </table>
      </td>
      </tr>
      <tr style="background-color: #f22f2f2; height: 30px;">  </tr>

      <tr style="background-color: #f1f1f1;">
      <td style="height:50px">&nbsp;</td>
      </tr>
      </tbody>
      </table>
      </div>
      </body>
      </html>

      ';



      $subject = ''.$title.'';


      $headers = array('info@primeramfbank.com,From: Primera Internal Resource Stream');
      $headers = "MIME-Version: 1.0\r\n";
      $headers = "Content-Type: text/html; charset=UTF-8\r\n";

        //Send the email
        //add_filter('wp_mail_content_type', create_function('', 'return "text/html"; '));
      wp_mail(''.$email.'', $subject, $body, $headers);
        //remove_filter('wp_mail_content_type', 'set_html_content_type');



    }

/**
* Display a listing of the resource.
*
* @return  \Illuminate\Http\Response
*/
public function index()
{
//

    $accountstatement_display = Accountstatement::where('staff', '=', Auth::user()->ID)->get();
    return view('accountstatement.index')->with('accountstatements', $accountstatement_display);

}

/**
* Show the form for creating a new resource.
*
* @return  \Illuminate\Http\Response
*/
public function create()
{
//
}

/**
* Store a newly created resource in storage.
*
* @param    \Illuminate\Http\Request  $request
* @return  \Illuminate\Http\Response
*/
public function store(Request $request)
{
//
    $validator = Validator::make(Input::all(), $this->rules);
    if ($validator->fails()) {
        return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
    } else {
        $accountstatement = new Accountstatement();


        $accountstatement->staff = $request->staff;


        $accountstatement->accout_no = $request->accout_no;


        $accountstatement->body = $request->body;


        $accountstatement->customer_name = $request->customer_name;


        $accountstatement->customer_cif = $request->customer_cif;


        $accountstatement->opening_balance = $request->opening_balance;


        $accountstatement->closing_balance = $request->closing_balance;


        $accountstatement->transaction_count = $request->transaction_count;


        $accountstatement->start_date = $request->start_date;


        $accountstatement->end_date = $request->end_date;


        $accountstatement->cust_email = $request->cust_email;


        $accountstatement->cust_phone = $request->cust_phone;


        $accountstatement->others = $request->others;



        $accountstatement->save();

        return response()->json($accountstatement);
    }

}

/**
* Display the specified resource.
*
* @param    int  $id
* @return  \Illuminate\Http\Response
*/
public function show($id)
{
//

/*  $query = array(
            "accountNo" => "0011067634",
            "startDate" => "31-12-2015",
            "endDate" => "01-03-2019",
            "hash" => "$2a$04$2onSKmvJ8300DERK8LoIFOb8WcmPIoZAIHOkVghJJBIjf62r7uHM."
        );

        $data_string = json_encode($query);

        $ch = curl_init('http://197.255.61.54:8080/PrimeraRestGateway/webresources/EnquiryResource/AccountStatement');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','APIKey: $2a$14$K2ioxv6hwVvg07ULavvFSO','applicationID:PEP','authenticationID:18374348407130226108'));

        $response = curl_exec($ch);

        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);

        curl_close($ch);

        $resp = json_decode($response, true);


       // print_r($resp);





        $paymentStatus = $resp['0']['AccountNumber'];
        $chargeResponsecode = $resp['0']['CustomerName'];
        $chargeAmount = $resp['0']['ClosingBalance'];
        $chargeCurrency = $resp['0']['TransactionDate'];


        echo $paymentStatus;
        echo $chargeResponsecode ;
        echo $chargeAmount;
        dd($resp); */



        $accountstatement = Accountstatement::findOrFail($id);

//  return view('post.show', ['post' => $post]);
        return view('accountstatement.show')->with('accountstatement',$accountstatement);
    }

/**
* Show the form for editing the specified resource.
*
* @param    int  $id
* @return  \Illuminate\Http\Response
*/
public function edit($id)
{
//
}

/**
* Update the specified resource in storage.
*
* @param    \Illuminate\Http\Request  $request
* @param    int  $id
* @return  \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
//
    $validator = Validator::make(Input::all(), $this->rules);
    if ($validator->fails()) {
        return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
    } else {
        $accountstatement = Accountstatement::findOrfail($id);

        $accountstatement->staff = $request->staff;

        $accountstatement->accout_no = $request->accout_no;

        $accountstatement->body = $request->body;

        $accountstatement->customer_name = $request->customer_name;

        $accountstatement->customer_cif = $request->customer_cif;

        $accountstatement->opening_balance = $request->opening_balance;

        $accountstatement->closing_balance = $request->closing_balance;

        $accountstatement->transaction_count = $request->transaction_count;

        $accountstatement->start_date = $request->start_date;

        $accountstatement->end_date = $request->end_date;

        $accountstatement->cust_email = $request->cust_email;

        $accountstatement->cust_phone = $request->cust_phone;

        $accountstatement->others = $request->others;


        $accountstatement->save();
        return response()->json($accountstatement);

    }
}

/**
* Remove the specified resource from storage.
*
* @param    int  $id
* @return  \Illuminate\Http\Response
*/
public function destroy($id)
{
//

    $accountstatement = Accountstatement::findOrfail($id);
    $accountstatement->delete();

    return response()->json($accountstatement);
}

/////////////////////// FUNCTIONS //////////////////////////////
public  function  hashcode($strtohash){

    @$hashing = $hash = bcrypt(''.$strtohash.'', ['rounds' => 4]); //Hash::make(');   //bcrypt('001106763431-12-201501-03-2019$2a$14$K2ioxv6hwVvg07ULavvFSO',  $options);


    $hashing_rebuilt =  substr_replace($hashing,"$2a",0,3);


    return $hashing_rebuilt;
}



public  function  get_cif_from_account_number($accountNo){

    $mycif =  substr_replace($accountNo,"",0,3);
    $cif_rebuild = substr($mycif, 0, 6);


    return  $cif_rebuild;
}
///////////// END OF FUNCTIONS ////////////////////////////////////


public function accountstatement_call(Request $request)
{

    $account_no = $request->account_number;
    $start_date = $request->from;
    $end_date =  $request->to;



//print($hashing_rebuilt);
//dd($hashing);
    $query = array(
        "accountNo" => $account_no,
        "startDate" => $start_date,
        "endDate" =>$end_date,
        "hash" => $this->hashcode(''.$account_no.''.$start_date.''.$end_date.'$2a$14$K2ioxv6hwVvg07ULavvFSO')
    );

    $data_string = json_encode($query);

    $ch = curl_init('http://197.255.61.54:8080/PrimeraRestGateway/webresources/EnquiryResource/AccountStatement');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','APIKey: $2a$14$K2ioxv6hwVvg07ULavvFSO','applicationID:PEP','authenticationID:18374348407130226108'));

    $response = curl_exec($ch);

    $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $header = substr($response, 0, $header_size);
    $body = substr($response, $header_size);

    curl_close($ch);

    $resp = json_decode($response, true);


       // print_r($resp);

    if(isset($resp['0']['AccountNumber'])) {





        $AccountNumber = $resp['0']['AccountNumber'];
        $CustomerName = $resp['0']['CustomerName'];
        $ClosingBalance = $resp['0']['ClosingBalance'];
        $TransactionDate = $resp['0']['TransactionDate'];





                            ///////////////// GET THE CIF DETAILS FROM T24 //////////




                      //   dd($cif_rebuild);


                        //print($hashing_rebuilt);
                        //dd($hashing); {"customerNo":"106728","hash":"$2a$04$iMoRUjoxXXXfrd5lBXDluuB33z0ibvUHjHkvax37HNgiYUU24bWAm"}

        $customer_cif_no = $this->get_cif_from_account_number(''.$account_no.'');
        $query1 = array(
            "customerNo" => $customer_cif_no,
            "hash" => $this->hashcode(''.$customer_cif_no.'$2a$14$K2ioxv6hwVvg07ULavvFSO')
        );

        $data_string1 = json_encode($query1);

        $ch1 = curl_init('http://197.255.61.54:8080/PrimeraRestGateway/webresources/EnquiryResource/CustomerDetails');
        curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $data_string1);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Content-Type: application/json','APIKey: $2a$14$K2ioxv6hwVvg07ULavvFSO','applicationID:PEP','authenticationID:18374348407130226108'));

        $response1 = curl_exec($ch1);

        $header_size1 = curl_getinfo($ch1, CURLINFO_HEADER_SIZE);
        $header1 = substr($response1, 0, $header_size1);
        $body1 = substr($response1, $header_size1);

        curl_close($ch1);

        $resp1 = json_decode($response1, true);



         $accountstatement = new Accountstatement();
                       // dd($resp1);

        if(isset($resp1['CustomerNumber'])) {

          $CIF = $resp1['CustomerNumber'];
       //   $HomeAddress = $resp1['HomeAddress'];
          $Surname = $resp1['Surname'];
          $FirstName = $resp1['FirstName'];
          $PreferredName = $resp1['PreferredName'];
          $Address = $resp1['Address'];
          $AccountOfficer = $resp1['AccountOfficer'];
          $Age = $resp1['Age'];
          $Email = $resp1['Email'];
          $TelephoneNo = $resp1['TelephoneNo'];
          $EmployerAddress = $resp1['EmployerAddress'];
          $NextofKinName = $resp1['NextofKinName'];
          $NextofKinTelephonenumber = $resp1['NextofKinTelephonenumber'];
          $Gender = $resp1['Gender'];
          $LoanType = $resp1['LoanType'];
          $BVNNumber = $resp1['BVNNumber'];



          $accountstatement->customer_cif = $CIF;
          $accountstatement->cust_email = $Email;
          $accountstatement->cust_phone =  $TelephoneNo;


          $accountstatement->firstname = $FirstName;
          $accountstatement->surname = $Surname;
          $accountstatement->preferedname = $PreferredName;
          $accountstatement->address = $Address;
          $accountstatement->employer = $EmployerAddress;
          $accountstatement->gender = $Gender;
          $accountstatement->loantype = $LoanType;
          $accountstatement->account_officer = $AccountOfficer;
          $accountstatement->bvn = $BVNNumber;
          $accountstatement->age = $Age;
          $accountstatement->next_of_kin = $NextofKinName;
          $accountstatement->next_of_kin_phone = $NextofKinTelephonenumber;

         }


      //dd($HomeAddress);

                        //////////////////// END OF CIF DETAILS FROM T24 ////////


      $accountstatement->staff = auth::id();

      $accountstatement->accout_no = $AccountNumber;
      $accountstatement->body =$resp;
      $accountstatement->customer_name = $CustomerName;
      $accountstatement->opening_balance = $ClosingBalance;
      $accountstatement->closing_balance = $ClosingBalance;
      $accountstatement->transaction_count = 1;

      $accountstatement->start_date =  $start_date;

      $accountstatement->end_date = $end_date;

      $accountstatement->others = '';

      $accountstatement->save();


       //sending email staff
      $message_requester = "Account Statement has been Successfully generated for ".$accountstatement->customer_name.". Kindly click the button below to download";
           $link = "https://irs.primeramfbank.com/app/download/download-statement.php?id=".$accountstatement->id."";
           $title = "".$accountstatement->customer_name." Account Statement";
           $button_title = "Click To Download";
           $this->send_email("".User::find($accountstatement->staff)->display_name."","".User::find( $accountstatement->staff)->email."",$message_requester,$link,$title,$button_title);
                //end of send email




      return response()->json(['result'=>'1','message'=> "Successfully Generated Account Statement, Redirecting you to the Statement Page", 'id' => $accountstatement->id]);

  }


 /// dd($resp);

  return response()->json(['result'=>'0','message'=> "Invalid Account Number / T24 OFFLINE "]);

}






}
