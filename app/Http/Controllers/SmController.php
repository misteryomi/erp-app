<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sm;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use bcrypt;
use Hash;
use Auth;
use DB;
use Carbon\Carbon;


use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;




/**
* Class SmController.
*
* @author  The scaffold-interface created at 2019-07-19 12:50:39pm
* @link  https://github.com/amranidev/scaffold-interface
* Copywrite @ www.webguru.com.ng
*/


class SmController extends Controller
{
//setting validations
	protected $rules =
	[

		/*'staff_id' => 'required',


		'name' => 'required',


		'phone' => 'required',


		'email' => 'required',


		'cif' => 'required',


		'message' => 'required',


		'sent' => 'required',


		'body' => 'required',


		'other1' => 'required',


		'other2' => 'required',*/

	];

/**
* Display a listing of the resource.
*
* @return  \Illuminate\Http\Response
*/





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
      <td style="padding:20px 40px 40px"><br><br>For further enquiries, please send an email to<span class="m_4920298691540864634Apple-converted-space">&nbsp;</span><a href="mailto:info@primeramfbank.com" target="_blank">info@primeramfbank.com</a><span class="m_4920298691540864634Apple-converted-space">&nbsp;</span>
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

      <td width="220" height="50"> <center><a href="http://www.primeramfbank.com" style="color:rgb(62,70,81);text-decoration:none;font-weight:bold" target="_blank"><span style="color:rgb(62,70,81);text-decoration:none">VISIT WEBSITE</span></a><br><a href="http://www.primeramfbank.com/" style="color:rgb(62,70,81);text-decoration:none" target="_blank" ><span style="color:rgb(62,70,81);text-decoration:none;font-size:10px">www.primeramfbank.com</span></a></center></td>
      <td width="230" height="50"><center><a href="mailto:info@primeramfbank.com" style="color:rgb(62,70,81);text-decoration:none;font-weight:bold" target="_blank"><span style="color:rgb(62,70,81);text-decoration:none">Email</span></a><br><a href="mailto:info@primeramfbank.com" style="color:rgb(62,70,81);text-decoration:none" target="_blank"><span style="color:rgb(62,70,81);text-decoration:none;font-size:10px">info@primeramfbank.com</span></a><br></center></td>
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




public function index()
{
//

	$display = Sm::whereNull('message')->orderBy('id', 'desc')->get();
	return view('sm.index')->with('sms', $display);

}


public function sent()
{
//

	$display = Sm::whereNotNull('message')->orderBy('id', 'desc')->get();


	return view('sm.sms')->with('sms', $display);

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
		$sm = new Sm();


		$sm->staff_id = $request->staff_id;


		$sm->name = $request->name;


		$sm->phone = $request->phone;


		$sm->email = $request->email;


		$sm->cif = $request->cif;


		$sm->message = $request->message;


		$sm->sent = $request->sent;


		$sm->body = $request->body;


		$sm->other1 = $request->other1;


		$sm->other2 = $request->other2;



		$sm->save();

		//return response()->json($sm);

		return redirect()->route('sms.index');
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
	$sm = Sm::findOrFail($id);

//  return view('post.show', ['post' => $post]);
	return view('sm.show')->with('sm',$sm);
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
		$sm = Sm::findOrfail($id);

		$sm->staff_id = $request->staff_id;

		$sm->name = $request->name;

		$sm->phone = $request->phone;

		$sm->email = $request->email;

		$sm->cif = $request->cif;

		$sm->message = $request->message;

		$sm->sent = $request->sent;

		$sm->body = $request->body;

		$sm->other1 = $request->other1;

		$sm->other2 = $request->other2;


		$sm->save();
		return response()->json($sm);

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

	$sm = Sm::findOrfail($id);
	$sm->delete();

	return response()->json($sm);
}









////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////// FUNCTIONS //////////////////////////////
public  function  hashcode($strtohash){

		@$hashing = $hash = bcrypt(''.$strtohash.'', ['rounds' => 4]); //Hash::make(');   //bcrypt('001106763431-12-201501-03-2019$2a$14$K2ioxv6hwVvg07ULavvFSO',  $options);


		$hashing_rebuilt =  substr_replace($hashing,"$2a",0,3);


		return $hashing_rebuilt;
	}



	public  function  get_cif_from_account_number($accountNo){

		///$mycif =  substr_replace($accountNo,"",0,3);

		$mycif =  substr_replace($accountNo,"",0,1);


		$cif_rebuild = substr($mycif, 0, 6);


		return  $cif_rebuild;
	}
///////////// END OF FUNCTIONS ////////////////////////////////////







	public function poupulate_t24($id)
	{
//

//
		$sm = Sm::findOrFail($id);



 // use of explode
		$string =  $sm->body;
		$str_arr = explode (",", $string);
//print_r($str_arr);





		foreach ($str_arr as $key => $value)

		{
		# code...

			//print('this number: '.$value.'');


			$account_no = $value;


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

			//$ch1 = curl_init('http://172.16.16.14:8080/PrimeraRestGateway/webresources/EnquiryResource/CustomerDetails');

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



			$accountstatement = new Sm();
										//  dd($resp1);

			if(isset($resp1['CustomerNumber']))

			{

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



				$accountstatement->staff_id =Auth::id();
				$accountstatement->name = $FirstName;
				$accountstatement->email = $Email;
				$accountstatement->phone =  $TelephoneNo;


				$accountstatement->cif = $CIF;
				$accountstatement->other1 = $BVNNumber;
				$message = " Dear ".ucwords($FirstName).", kindly ensure this (".$CIF." )  number is used as reference when making payments for your facility. Thanks" ;

				$accountstatement->message = $message;
					/*

	 /*
					$accountstatement->preferedname = $PreferredName;
					$accountstatement->address = $Address;
					$accountstatement->employer = $EmployerAddress;
					$accountstatement->gender = $Gender;
					$accountstatement->loantype = $LoanType;
					$accountstatement->account_officer = $AccountOfficer;
					$accountstatement->bvn = $BVNNumber;
					$accountstatement->age = $Age;
					$accountstatement->next_of_kin = $NextofKinName;
					$accountstatement->next_of_kin_phone = $NextofKinTelephonenumber;*/
					$accountstatement->sent =1;


////check the email and sms

					if(!isset($Email)){

						$mail_report = "Email not sent , No customer email. ";

					}
					else{
						$mail_report = "Email Successfully sent  ";
					}

					if(!isset($TelephoneNo)){

						$sms_report = "SMS failed , No customer phone number. ";

					}
					else{
						$sms_report = "SMS Successfully sent  ";
					}


					$accountstatement->other2 = "".$sms_report.". ".$mail_report."";
//////////////////////////////////////////// end check sms and email  /////////////////////////

					$accountstatement->save();



			 //sending email staff
					$message_requester = "kindly ensure this (".$CIF." )  number is used as reference when making payments for your facility. Thanks";
					$link = "https://primeramfbank.com/";
					$title = "PRIMERAMFBANK REFERENCE NUMBER FOR LOAN REPLAYMENT";
					$button_title = "VISIT OUR WEBSITE";
					 $this->send_email("".$FirstName." ".$Surname ."","".$Email."",$message_requester,$link,$title,$button_title);
								//end of send email


/*http://www.smslive247.com/http/index.aspx?cmd=sendquickmsg&owneremail=xxx&subacct=
xxx&subacctpwd=xxx&message=xxx&sender=xxx&sendto=xxx&msgtype=0

*/
////// SEND SMS /////


/********************************************************************************
Sample code for sending SMS through HTTP API.
Author: Ayodeji Ajala, iDevWorks Technologies Limited <deji@idevorks.com>
Application granted only for SMSLive247 customers.
********************************************************************************/
/* Variables with the values to be sent. */
$owneremail="customerservice@primeracredit.com";
$subacct="IRS";
$subacctpwd="Password@2019";
$sendto="".$TelephoneNo.""; /* destination number */
//$sendto="09027622692"; /* destination number */
$sender="PRIMERA"; /* sender id */
$message="".$message.""; /* message to be sent */
/* create the required URL */
$url = "http://www.smslive247.com/http/index.aspx?cmd=sendquickmsg&owneremail=".UrlEncode($owneremail)."&subacct=".UrlEncode($subacct)."&subacctpwd=".UrlEncode($subacctpwd)."&message=".UrlEncode($message)."&sender=".$sender."&sendto=".$sendto."&msgtype=0";
/* call the URL */
if ($f = @fopen($url, "r"))
{
	$answer = fgets($f, 255);
	if (substr($answer, 0, 1) == "+")
	{
		$sms_response =  "SMS to $dnr was successful.";
	}
	else
	{
		$sms_response = "an error has occurred: [$answer].";
	}
}
else
{
	$sms_response  =  "Error: URL could not be opened.";
}



////// END OF SENDING SMS ////


//dd($accountstatement);
//Flash::success(['result'=>'1','message'=> 'Successfully Sent SMS and Email  TO '.$FirstName.' '.$Surname.'']);


//return response()->json(['result'=>'1','message'=> 'Successfully Sent SMS and Email  TO '.$FirstName.' '.$Surname.'']);

}else {


 /// dd($resp);

	//return response()->json(['result'=>'0','message'=> "Invalid Account Number / T24 OFFLINE ".$customer_cif_no.""]);

}




}
        return response()->json(['result'=>'1','message'=> 'Successfully Sent SMS and Email']);


return redirect()->route('sms.sent');
// $accountstatement->save();
			//dd($HomeAddress);

												//////////////////// END OF CIF DETAILS FROM T24 ////////



}




////////////////FOR FASTTRACK TAT ////////////////////



public  function  fasttrack(){

$display = Sm::whereNull('message')->orderBy('id', 'desc')->get();
	return view('sm.fasttrack_index')->with('sms', $display);

}


public  function  fasttrack_tat(Request $request)
{

    $title = $request->title;
    $start_date =carbon::parse($request->from);
    $end_date =  carbon::parse($request->to);


/* $start_date_field = carbon::parse($request->from);
        $end_date_field = carbon::parse($request->to);*/


	/*$results = DB::connection('fasttrack')->select('select l.track_id as load_track_id,  u.first_name as first_name, u.last_name as last_name, u.email_address as email_address, u.loan_count as loan_count , d.name as department , r.name as role, r.tat as exepcted_tat ,  TIMEDIFF((lh.updated_at), (lh.created_at)) as drop_actual_tat,  TIMEDIFF((lh.updated_at), (lh.opened_at)) as open_actual_tat, l.account_officer_name as account_officer, lh.created_at as date_created, lh.opened_at as date_opened, lh.updated_at as date_submitted from fasttrack.loan_histories lh  INNER JOIN fasttrack.loans l ON l.id = lh.loan_id INNER JOIN fasttrack.departments d ON lh.department_id = d.id INNER JOIN fasttrack.users u ON lh.target_id = u.id INNER JOIN fasttrack.roles r ON r.id = u.role_id  WHERE lh.created_at >= :start_date AND lh.created_at <= :end_date order by lh.id desc ', ['start_date' => $start_date, 'end_date' => $end_date]); */



    $results = DB::connection('fasttrack')->select('select l.track_id as load_track_id,  u.first_name as first_name, u.last_name as last_name, u.email_address as email_address, u.loan_count as loan_count , d.name as department , r.name as role, r.tat as exepcted_tat ,  TIMEDIFF((lh.updated_at), (lh.created_at)) as drop_actual_tat,  TIMEDIFF((lh.updated_at), (lh.opened_at)) as open_actual_tat, l.account_officer_name as account_officer,lh.status as status,  lh.created_at as date_created, lh.opened_at as date_opened, lh.updated_at as date_submitted from loan_histories lh  INNER JOIN loans l ON l.id = lh.loan_id INNER JOIN departments d ON lh.department_id = d.id INNER JOIN users u ON lh.target_id = u.id INNER JOIN roles r ON r.id = u.role_id  WHERE lh.created_at >= :start_date AND lh.created_at <= :end_date AND lh.department_id != :get_id order by lh.id desc ', ['start_date' => $start_date, 'end_date' => $end_date, 'get_id' => 1]);



		/*$results = DB::connection('fasttrack')->select('select * from users');
*/


//dd($results);


	return view('sm.fasttrack_show')->with('sms', $results)->with('title_display', $title)->with('start_date', $start_date)->with('end_date', $end_date);

	//return response()->json($results);


}


//////////////////////////// END OF FOR FASTTRACK TAT ////////////////////////////


}
