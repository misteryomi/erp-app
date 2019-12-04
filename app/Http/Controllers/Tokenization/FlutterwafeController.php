<?php

namespace App\Http\Controllers\Tokenization;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Flutterwafe;
use App\Flutterwave_permission;
use App\Flutterwavetransaction;
use App\Card_mandate;
use App\Flutterwave_sector;
use App\User;
use Auth;



use Amranidev\Ajaxis\Ajaxis;
use URL;
use DB;
use Carbon\Carbon;

use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;




/**
* Class FlutterwafeController.
*
* @author  The scaffold-interface created at 2019-03-05 10:35:38am
* @link  https://github.com/amranidev/scaffold-interface
* Copywrite @ www.webguru.com.ng
*/


class FlutterwafeController extends Controller
{
//setting validations
	protected $rules =
	[

 /*   'user_id' => 'required',


	'status' => 'required',


	'customer_name' => 'required',


	'customer_bank' => 'required',


	'purpose' => 'required',


	'frequency' => 'required',


	'amount' => 'required',


	'reg_date' => 'required',


	'tokenize_date' => 'required',


	'start_date' => 'required',


	'date_end' => 'required',


	'last_trxn_date' => 'required',


	'last_trxn_status' => 'required',


	'pending_payments' => 'required',


	'paid_closed' => 'required',


	'next_due_date' => 'required',


	'phone_number' => 'required',


	'email' => 'required',


	'cfi' => 'required',


	'life_token' => 'required',


	'hash_id' => 'required',


	'txRef' => 'required',


	'flwRef' => 'required',


	'card_expirymonth' => 'required',


	'card_year' => 'required',


	'card_last4digits' => 'required',


	'card_brand' => 'required',


	'card_type' => 'required',


	'amount_tokenized' => 'required',


	'payment_type' => 'required',


	'narration' => 'required',


	'ravreref' => 'required',


	'other1' => 'required',


	'other2' => 'required',


	'other3' => 'required',


	'other4' => 'required',


	'other5' => 'required',*/

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


      //$headers = array('info@primeramfbank.com,From: Primera MFB');
	$headers = 'From: Primera Microfinance Bank <info@primeramfbank.com>' . "\r\n";
     // $headers = "Bcc: kchukwuemeka@primeramfbank.com";
	$headers = "MIME-Version: 1.0\r\n";
	$headers = "Content-Type: text/html; charset=UTF-8\r\n";

     // $headers[] = 'Cc: copy_to_1@email.com';
	  //$headers[] = 'Cc: copy_to_2@email.com';


//$headers[] = 'Bcc: bcc_to_2@email.com';

        //Send the email
        //add_filter('wp_mail_content_type', create_function('', 'return "text/html"; '));
	wp_mail(''.$email.'', $subject, $body, $headers);
        //remove_filter('wp_mail_content_type', 'set_html_content_type');



}






public function __construct()
{
        //$this->middleware('auth');
	$this->middleware('auth', ['only' => ['create']]);
	$this->middleware('auth', ['only' => ['index']]);
	$this->middleware('auth',   ['only' => ['edit']]);
	$this->middleware('web',   ['only' => ['show']]);
}



public function index()
{
//



	$today = Carbon::today();
// $date = new Carbon();
	$chartDatas = Flutterwafe::select([
		DB::raw('DATE(created_at) AS date1'),
		DB::raw('COUNT(id) AS count1'),
		DB::raw('sum(amount_tokenized) AS amount1'),
	])

	->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])
	->groupBy('date1')
	->whereNull('amount')
	->orderBy('date1', 'ASC')
	->get()
	->toArray();

	$lastday = Carbon::now()->addDays(1);






	$flutterwaves = Flutterwafe::orderBy('id', 'DESC')->whereNull('amount')->get();

	$title = "Tokenization - Pending Mandate";

//	dd(file_get_contents(route('tokenize.transactions')));
	return view('flutterwafe.index')->with('flutterwaves', $flutterwaves)->with('title', $title)->with('chart', $chartDatas)->with('lastday', $lastday)->with('flutterwave_sectors', Flutterwave_sector::all());

}






public function index_completed()
{
//



	$today = Carbon::today();
// $date = new Carbon();
	$chartDatas = Flutterwafe::select([
		DB::raw('DATE(created_at) AS date1'),
		DB::raw('COUNT(id) AS count1'),
		DB::raw('sum(amount_tokenized) AS amount1'),
	])

	->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])
	->whereNotNull('amount')
	->groupBy('date1')
	->orderBy('date1', 'ASC')
	->get()
	->toArray();

	$lastday = Carbon::now()->addDays(1);






	$flutterwaves = Flutterwafe::orderBy('id', 'DESC')->whereNotNull('amount')->get();

	$title = "Completed Mandate - Tokenization";

//	dd(file_get_contents(route('tokenize.transactions')));
	return view('flutterwafe.index_completed')->with('flutterwaves', $flutterwaves)->with('title', $title)->with('chart', $chartDatas)->with('lastday', $lastday)->with('flutterwave_sectors', Flutterwave_sector::all());

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

public  function shortenurl($url){

	/*$login = 'kcking';
	$api_key = '42b9d03dfef7accd0d2d53c128869c134c10bf51';

	$ch = curl_init('http://api.bilty.com/v3/shorten?login='.$login.'&apiKey='.$api_key.'&longUrl='.$url.'');

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$result = curl_exec($ch);
	$res = json_decode($result, true);

	echo $res['data']['url']; */




	$query = array(
		'longUrl' => 'https://dev.bitly.com/v4_documentation.html#operation/'
	);

	$data_string = json_encode($query);

	$ch = curl_init('https://www.googleapis.com/urlshortener/v1/url?key=AIzaSyAEyYa0p7tEzTeXbcE7XHiGungyFevn4BQ');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

	$response = curl_exec($ch);

	$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
	$header = substr($response, 0, $header_size);
	$body = substr($response, $header_size);

	curl_close($ch);

	$resp = json_decode($response, true);

	dd($resp);


/*
	$query = array(
			"longUrl" => "https://dev.bitly.com/v4_documentation.html#operation/createBitlink",
			"access_token" => "42b9d03dfef7accd0d2d53c128869c134c10bf51"
		);

		$data_string = json_encode($query);

		$ch = curl_init('https://api-ssl.bitly.com/v4/shorten');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

		$response = curl_exec($ch);

		$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
		$header = substr($response, 0, $header_size);
		$body = substr($response, $header_size);

		curl_close($ch);

		$resp = json_decode($response, true);

		dd($resp);

*/


	}



	public function store(Request $request)
	{
//
		$validator = Validator::make(Input::all(), $this->rules);
		if ($validator->fails()) {
			return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
		} else {



			$start_date_field = carbon::parse($request->start_date);
			$end_date_field = carbon::parse($request->date_end);





			$flutterwafe = new Flutterwafe();


			$flutterwafe->user_id = $request->user_id;


			$flutterwafe->status = $request->status;


			$flutterwafe->customer_name = $request->customer_name;


			$flutterwafe->customer_bank = $request->customer_bank;


			$flutterwafe->purpose = $request->purpose;


			$flutterwafe->frequency = $request->frequency;


			$flutterwafe->amount = $request->amount;


			$flutterwafe->reg_date = $request->reg_date;


			$flutterwafe->tokenize_date = $request->tokenize_date;


			$flutterwafe->start_date = $start_date_field;


			$flutterwafe->date_end =  $end_date_field;


			$flutterwafe->last_trxn_date = $request->last_trxn_date;


			$flutterwafe->last_trxn_status = $request->last_trxn_status;


			$flutterwafe->pending_payments = $request->pending_payments;


			$flutterwafe->paid_closed = $request->paid_closed;


			$flutterwafe->next_due_date = $request->next_due_date;


			$flutterwafe->phone_number = $request->phone_number;


			$flutterwafe->email = $request->email;


			$flutterwafe->cfi = $request->cfi;


			$flutterwafe->life_token = $request->life_token;


			$flutterwafe->hash_id = $request->hash_id;


			$flutterwafe->txRef = $request->txRef;


			$flutterwafe->flwRef = $request->flwRef;


			$flutterwafe->card_expirymonth = $request->card_expirymonth;


			$flutterwafe->card_year = $request->card_year;


			$flutterwafe->card_last4digits = $request->card_last4digits;


			$flutterwafe->card_brand = $request->card_brand;


			$flutterwafe->card_type = $request->card_type;


			$flutterwafe->amount_tokenized = $request->amount_tokenized;


			$flutterwafe->payment_type = $request->payment_type;


			$flutterwafe->narration = $request->narration;

			$flutterwafe->sector = $request->sector;


			$flutterwafe->ravreref = $request->ravreref;


			$flutterwafe->other1 = $request->other1;


			$flutterwafe->other2 = $request->other2;


			$flutterwafe->other3 = $request->other3;


			$flutterwafe->other4 = $request->other4;


			$flutterwafe->other5 = $request->other5;






			$flutterwafe->save();


			//updating the url
			$flutterwafe2 = Flutterwafe::findOrfail($flutterwafe->id);

			$url = "https://irs.primeramfbank.com/app/tokenize/".$flutterwafe->id."";

			$flutterwafe2->url = $url;

			$flutterwafe2->save();





				////////////// SENDING EMAILS ///////////////

                              //sending email staff
			$link = route('tokenize.show', ['id' => $flutterwafe->id]);
			$title = "Tokenize Your Card";
			$button_title = "Click to tokenize card";
			$message_customer ="Kindly click the link below to tokenize your card";
			//$this->send_email("".$flutterwafe->customer_name."","".$flutterwafe->email."",$message_customer,$link,$title,$button_title);
			$this->send_email("".$flutterwafe->customer_name."","".$flutterwafe->email."",$message_customer,$url,$title,$button_title);

                //end of send email


                 //sending email reliever
			$link = route('tokenize.show', ['id' => $flutterwafe->id]);
			$title2 = "Successfully Initiated Card Tokenization For ".$flutterwafe->customer_name."";
			$button_title2 = "Click here to view";
			$message_staff ="You have Successfully initiated the card tokenization for ".$flutterwafe->customer_name."";
			//$this->send_email("".User::find(auth::id())->display_name."","".User::find(auth::id())->user_email."",$message_staff,$link,$title2,$button_title2);
			$this->send_email("".User::find(auth::id())->display_name."","".User::find(auth::id())->user_email."",$message_staff,$url,$title2,$button_title2);

          // $this->send_email("".User::find($leave->reliever_id)->name."","".User::find($leave->reliever_id)->user_email."",$message_reliever,$link,$title2,$button_title,"".User::find($leave->user_id)->name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->name."","".User::find($leave->reliever_id)->name."");
                //end of send email












			return response()->json($flutterwafe);


		}
		if ($flutterwafe->exists) {
	// Model exists in the database
			//return response()->json($flutterwafe);

		}else{

			return response()->json(['result' => '0', 'message' => "errors "]);

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
	$flutterwafe = Flutterwafe::findOrFail($id);


 /*  $link =  $this->shortenurl('https://dev.bitly.com/v4_documentation.html#operation/createBitlink');

 dd($link); */




//  return view('post.show', ['post' => $post]);
 return view('flutterwafe.show')->with('flutterwafe',$flutterwafe);
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
		$flutterwafe = Flutterwafe::findOrfail($id);


		$start_date_field = carbon::parse($request->start_date);
		$end_date_field = carbon::parse($request->date_end);


		if(isset($request->cad_set_mandate)){
		//if setting up mandate by CAD

			$flutterwafe->customer_name = $request->customer_name;
			$flutterwafe->ld = $request->ld;
			$flutterwafe->sector = $request->sector;
			$flutterwafe->frequency = $request->frequency;

			$flutterwafe->amount = $request->amount;

			$flutterwafe->start_date = $start_date_field;

			$flutterwafe->date_end = $end_date_field;

			$flutterwafe->cfi = $request->cfi;

			$flutterwafe->other3 = $request->other3;



		//////////////////////////START OF INPUTER UPDATE /////////
			$flutterwafe->inputer = auth::id();
			$flutterwafe->inputer_status = "1";
			$flutterwafe->inputer_date = now();
			$flutterwafe->authorizer_status = "0";
			$flutterwafe->approval = "0";
			$flutterwafe->authorizer = $request->authorizer;
		//////////////////////////END OF INPUTER UPDATE /////////
			$flutterwafe->save();
		// seeting the mandate




		}else{

			$flutterwafe->user_id = $request->user_id;

			$flutterwafe->status = $request->status;

			$flutterwafe->customer_name = $request->customer_name;

			$flutterwafe->customer_bank = $request->customer_bank;

			$flutterwafe->purpose = $request->purpose;

			$flutterwafe->frequency = $request->frequency;

			$flutterwafe->amount = $request->amount;

			$flutterwafe->reg_date = $request->reg_date;

			$flutterwafe->tokenize_date = $request->tokenize_date;

			$flutterwafe->start_date = $start_date_field;

			$flutterwafe->date_end = $end_date_field;

			$flutterwafe->last_trxn_date = $request->last_trxn_date;

			$flutterwafe->last_trxn_status = $request->last_trxn_status;

			$flutterwafe->pending_payments = $request->pending_payments;

			$flutterwafe->paid_closed = $request->paid_closed;

			$flutterwafe->next_due_date = $request->next_due_date;

			$flutterwafe->phone_number = $request->phone_number;

			$flutterwafe->email = $request->email;

			$flutterwafe->cfi = $request->cfi;

			$flutterwafe->life_token = $request->life_token;

			$flutterwafe->hash_id = $request->hash_id;

			$flutterwafe->txRef = $request->txRef;

			$flutterwafe->flwRef = $request->flwRef;

			$flutterwafe->card_expirymonth = $request->card_expirymonth;

			$flutterwafe->card_year = $request->card_year;

			$flutterwafe->card_last4digits = $request->card_last4digits;

			$flutterwafe->card_brand = $request->card_brand;

			$flutterwafe->card_type = $request->card_type;

			$flutterwafe->amount_tokenized = $request->amount_tokenized;

			$flutterwafe->payment_type = $request->payment_type;

			$flutterwafe->narration = $request->narration;

			$flutterwafe->ravreref = $request->ravreref;

			$flutterwafe->other1 = $request->other1;

			$flutterwafe->other2 = $request->other2;

			$flutterwafe->other3 = $request->other3;

			$flutterwafe->other4 = $request->other4;

			$flutterwafe->other5 = $request->other5;


			$flutterwafe->save();
		}



            //sending email operations
			$link3 = route('tokenize.view_mandate', ['id' => $flutterwafe->id]);
			$title33 = "Successfully Submitted Pending Authorization for  ".$flutterwafe->customer_name."";
			$button_title23 = "Click to View";
			$cad_staff3 =
			"You have successfully sent mandate to ".User::find($flutterwafe->authorizer)->display_name." to authorize for  customer ( ".$flutterwafe->customer_name." ) and Transaction ID is ".$flutterwafe->txRef.". <br/> <br /> Start Date : ".$flutterwafe->start_date." (collection starts same day next month)  <br/> <br /> End Date : ".$flutterwafe->date_end." <br/> <br /> Repayment Amount : N".$flutterwafe->amount." <br/> <br />  Account Number : ".$flutterwafe->cfi."";
			$this->send_email(User::find($flutterwafe->inputer)->display_name,User::find($flutterwafe->inputer)->user_email,$cad_staff3,$link3,$title33,$button_title23);




            //sending email operations
			$link3 = ''.route('tokenize.view_mandate', ['id' => $flutterwafe->id]).'?approval=yes';
			$title33 = "Pending Authorization For ".$flutterwafe->customer_name."";
			$button_title23 = "Click to Authorize";
			$cad_staff3 =
			"Please be informed that mandate has been sent to you for authorization with customer name: ".$flutterwafe->customer_name." and Transaction ID is ".$flutterwafe->txRef.". <br/> <br /> Start Date : ".$flutterwafe->start_date." (collection starts same day next month)  <br/> <br /> End Date : ".$flutterwafe->date_end." <br/> <br /> Repayment Amount : N".$flutterwafe->amount." <br/> <br />  Account Number : ".$flutterwafe->cfi."";
			$this->send_email(User::find($flutterwafe->authorizer)->display_name,User::find($flutterwafe->authorizer)->user_email,$cad_staff3,$link3,$title33,$button_title23);



		return response()->json($flutterwafe);

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

	$flutterwafe = Flutterwafe::findOrfail($id);
	$flutterwafe->delete();

	return response()->json($flutterwafe);
}





//this does the tokenization

public function tokenize_mandate($id,$ref)
{


	if (isset($id)) {


		$flutterwafe = Flutterwafe::findOrfail($id);


		$id = $id;
		$ref = $ref;

		if($flutterwafe->other5 == 'one-time-payment'){

			$amount = $flutterwafe->amount;
		}else{
		$amount = "100"; //Correct Amount from Server

	}

		$currency = "NGN"; //Correct Currency from Server




	/*	$query = array(
			"SECKEY" => config('global.LiveSecretKey'),
			"txref" => $ref
		);

		$data_string = json_encode($query);

		$ch = curl_init('config("global.LiveFlutterwaveURL")flwv3-pug/getpaidx/api/v2/verify');     */


		$query = array(
			"SECKEY" => config('global.LiveSecretKey'),
			"txref" => $ref
		);

		$data_string = json_encode($query);

		$ch = curl_init(''.config("global.LiveFlutterwaveURL").'flwv3-pug/getpaidx/api/v2/verify');


		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

		$response = curl_exec($ch);

		$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
		$header = substr($response, 0, $header_size);
		$body = substr($response, $header_size);

		curl_close($ch);

		$resp = json_decode($response, true);

		$paymentStatus = $resp['data']['status'];
		$chargeResponsecode = $resp['data']['chargecode'];
		$chargeAmount = $resp['data']['amount'];
		$chargeCurrency = $resp['data']['currency'];

	   // print_r($resp);
//dd($resp);
		//dd(config("global.LiveFlutterwaveURL"));

		if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {
		  // transaction was successful...
			 // please check other things like whether you already gave value for this ref
		  // if the email matches the customer who owns the product etc
		  //Give Value and return to Success page
		 // print_r($resp);


		//    $dt = ;


			$txref = $resp['data']['txref'];
			$flwref = $resp['data']['flwref'];
			$chargedamount = $resp['data']['chargedamount'];
			$chargeCurrency = $resp['data']['currency'];
			$narration = $resp['data']['narration'];
			$paymenttype = $resp['data']['paymenttype'];
			$raveref = $resp['data']['raveref'];
			$amountsettledforthistransaction = $resp['data']['amountsettledforthistransaction'];
			$ip = $resp['data']['ip'];

			$expirymonth = $resp['data']['card']['expirymonth'];
			$expiryyear = $resp['data']['card']['expiryyear'];
			$last4digits = $resp['data']['card']['last4digits'];
			$brand = $resp['data']['card']['brand'];
			$embedtoken = $resp['data']['card']['card_tokens']['0']['embedtoken'];
			$type = $resp['data']['card']['type'];

			$life_time_token = $resp['data']['card']['life_time_token'];







			$flutterwafe = Flutterwafe::findOrfail($id);

/*    $flutterwafe->user_id = $request->user_id;
*/
$flutterwafe->status = "Successfully Tokenized";

/*    $flutterwafe->customer_name = $request->customer_name;
*/
/*    $flutterwafe->customer_bank = $request->customer_bank;
*/
/*    $flutterwafe->purpose = $request->purpose;
*/
/*    $flutterwafe->frequency = $request->frequency;
*/
/*    $flutterwafe->amount = $request->amount;
*/
/*    $flutterwafe->reg_date = $request->reg_date;
*/
$flutterwafe->tokenize_date = Carbon::today();

   /* $flutterwafe->start_date = $request->start_date;

   $flutterwafe->date_end = $request->date_end;*/

  /*  $flutterwafe->last_trxn_date = $request->last_trxn_date;

	$flutterwafe->last_trxn_status = $request->last_trxn_status;

	$flutterwafe->pending_payments = $request->pending_payments;

	$flutterwafe->paid_closed = $request->paid_closed;*/

	$dt =  new Carbon(''.$flutterwafe->start_date.'', 'Europe/Moscow');
	$flutterwafe->next_due_date =$dt->addMonth();

   /* $flutterwafe->phone_number = $request->phone_number;

	$flutterwafe->email = $request->email;

	$flutterwafe->cfi = $request->cfi;*/

	$flutterwafe->life_token =  $embedtoken;

/*    $flutterwafe->hash_id = $request->hash_id;
*/
$flutterwafe->txRef = $txref;

$flutterwafe->flwRef =$flwref;

$flutterwafe->card_expirymonth = $expirymonth;

$flutterwafe->card_year = $expiryyear;

$flutterwafe->card_last4digits = $last4digits;

$flutterwafe->card_brand =  $brand;

$flutterwafe->card_type =  $type;

$flutterwafe->amount_tokenized =   $chargedamount;

$flutterwafe->payment_type = $paymenttype;

$flutterwafe->narration = $narration;

$flutterwafe->ravreref = $raveref;

$flutterwafe->other1 = $amountsettledforthistransaction;

$flutterwafe->other2 = $ip;

  /*  $flutterwafe->other3 = $request->other3;

	$flutterwafe->other4 = $request->other4;

	$flutterwafe->other5 = $request->other5;*/


	$flutterwafe->save();
  //  return response()->json($flutterwafe);
 // echo" successful";

	//return view('flutterwafe.Success')->with('flutterwafe',$flutterwafe);


	////////////// SENDING EMAILS ///////////////

                              //sending email staff
	$link = route('tokenize.show', ['id' => $flutterwafe->id]);
	$title = "Successfully Tokenized Your Card";
	$button_title = "You card has been tokenized";
	$message_customer ="This is to inform you that your card has been tokenized successfully. Your Transaction ID is ".$flutterwafe->txRef." ";
	$this->send_email("".$flutterwafe->customer_name."","".$flutterwafe->email."",$message_customer,$link,$title,$button_title);
                //end of send email


            //sending email reliever
	$link = route('tokenize.show', ['id' => $flutterwafe->id]);
	$title2 = "Successfully Tokenized ".$flutterwafe->customer_name." Card";
	$button_title2 = "Thanks";
	$message_staff =" This is to inform you that  ".$flutterwafe->customer_name."'s card has been tokenized successfully. Transaction ID is ".$flutterwafe->txRef."";
	$this->send_email("".User::find($flutterwafe->user_id)->display_name."","".User::find($flutterwafe->user_id)->user_email."",$message_staff,$link,$title2,$button_title2);


            //sending email cad
	$link = route('tokenize.show', ['id' => $flutterwafe->id]);
	$title3 = "".$flutterwafe->customer_name." Successfully Tokenized Card";
	$button_title2 = "Thanks";
	$cad_staff =
	"This is to inform you that  ".$flutterwafe->customer_name."'s card has been tokenized successfully by ".$flutterwafe->customer_name." (".$flutterwafe->email.") with Relationship Officer (".User::find($flutterwafe->user_id)->display_name.") and Transaction ID is ".$flutterwafe->txRef.". Kindly send repayment schedule to Operations to sent mandate.";
	$this->send_email("CAD","creditadmin@primeracredit.com",$cad_staff,$link,$title3,$button_title2);



            //sending email cap
	$link = route('tokenize.show', ['id' => $flutterwafe->id]);
	$title4 = "".$flutterwafe->customer_name." Successfully Tokenized Card";
	$button_title2 = "Thanks";
	$cap_staff ="This is to inform you that  ".$flutterwafe->customer_name."'s card has been tokenized successfully (".$flutterwafe->email.") with Relationship Officer (".User::find($flutterwafe->user_id)->display_name.") and Transaction ID is ".$flutterwafe->txRef." ";

	$this->send_email("CAP","creditanalysis@primeracredit.com",$cap_staff,$link,$title4,$button_title2);




          // $this->send_email("".User::find($leave->reliever_id)->name."","".User::find($leave->reliever_id)->user_email."",$message_reliever,$link,$title2,$button_title,"".User::find($leave->user_id)->name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->name."","".User::find($leave->reliever_id)->name."");
                //end of send email
	////////////// END SENDING EMAILS ///////////////


} else {

//return view('flutterwafe.Success')->with('flutterwafe',$flutterwafe);
			//Dont Give Value and return to Failure page
}
}
else {
  //return view('flutterwafe.Success')->with('flutterwafe',$flutterwafe);
}

// return view('', );
//file_get_contents(route('tokenize.transactions'));
return redirect()->route('tokenize.confirmation', [$id]);
}





///send to confirmation page

public  function confirmation($id){

	$flutterwafe = Flutterwafe::findOrFail($id);


//  return view('tokenize.confirmation', ['post' => $post]);
	return view('flutterwafe.success')->with('flutterwafe',$flutterwafe);
}




///GETING THE TRANSACTIONS FROM FLUTTERWAVE
public function transaction(){


//https://developer.flutterwave.com/v2.0/reference#list-transactions


	$query = array(
		"seckey" => config('global.LiveSecretKey'),
		"page" => "1"

	);

	$data_string = json_encode($query);

	$ch = curl_init(''.config("global.LiveFlutterwaveURL").'v2/gpx/transactions/query');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

	$response = curl_exec($ch);

	$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
	$header = substr($response, 0, $header_size);
	$body = substr($response, $header_size);

	curl_close($ch);

	$resp = json_decode($response, true);

//dd($resp);

	foreach($resp['data']['transactions'] as $transaction){

		$check_id = $transaction['id'];

		////getting the token id and cif /////
		$tranref =  $transaction['transaction_reference'];
		$tranref_array = explode(".", $tranref);

		if(isset($tranref_array[3])){
			@$token_id = $tranref_array[0];
			@$cfi_id = $tranref_array[1];
		}else {

			@$token_id = 1;
			@$cfi_id = 00000000000000;

		}


		////setting up for mandate
		$tranref_array_mandate = explode("-", $tranref);
		if(isset($tranref_array_mandate[1])){
			@$mandate_id = $tranref_array_mandate[1];
		}else {

			@$mandate_id = "";

		}

		  //////////////////////////////////////////////////////////


		////setting up for transactional percentage of amount collected
		if(isset($tranref_array_mandate[2])){

			//split into 2 with @
			 $tranref_array_mandate2 = explode("@",  $tranref);
			$transaction_percentage2 = $tranref_array_mandate2[0];

			//then get the last split with -
    		$tranref_array_mandate = explode("-", $transaction_percentage2);
   			$transaction_percentage3 = $tranref_array_mandate[2];




			@$transaction_percentage = $transaction_percentage3;
		}else {

			@$transaction_percentage = "";

		}


	   //////////////////////////////////////////////////////////


		$payment_count = 1;





		$check_transaction = Flutterwavetransaction::where('transaction_id', '=', $check_id)->first();
		if (!$check_transaction) {

			$flutterwavetransaction = new Flutterwavetransaction();


			$flutterwavetransaction->token_id = $token_id;


			$flutterwavetransaction->transaction_id = $transaction['id'];


			$flutterwavetransaction->transaction_reference = $transaction['transaction_reference'];


			$flutterwavetransaction->processor_reference = $transaction['processor_reference'];


			$flutterwavetransaction->amount = $transaction['amount'];


			$flutterwavetransaction->currency = $transaction['currency'];


			$flutterwavetransaction->amount_charged = $transaction['amount_charged'];


			$flutterwavetransaction->rave_fee = $transaction['rave_fee'];


			$flutterwavetransaction->merchant_fee =$transaction['merchant_fee'];


			$flutterwavetransaction->merchant_bore_fee = $transaction['merchant_bore_fee'];


			$flutterwavetransaction->processor_response_code = $transaction['processor_response_code'];


			$flutterwavetransaction->processor_response_message = $transaction['processor_response_message'];


			$flutterwavetransaction->auth_model = $transaction['auth_model'];


			$flutterwavetransaction->customer_ip = $transaction['customer_ip'];


			$flutterwavetransaction->narration = $transaction['narration'];


			$flutterwavetransaction->status = $transaction['status'];


			$flutterwavetransaction->payment_entity = $transaction['payment_entity'];


			$flutterwavetransaction->payment_entity_id = $transaction['payment_entity_id'];


			$flutterwavetransaction->date_created = $transaction['date_created'];


			$flutterwavetransaction->unique_reference = $transaction['unique_reference'];


			$flutterwavetransaction->amount_due_merchant = $transaction['amount_due_merchant'];


			$flutterwavetransaction->customer_id = $transaction['customer']['id'];


			$flutterwavetransaction->customer_email = $transaction['customer']['customer_email'];


			$flutterwavetransaction->customer_phonenumber = $transaction['customer']['customer_phonenumber'];


			$flutterwavetransaction->customer_fullname = $transaction['customer']['customer_fullname'];


			$flutterwavetransaction->customer_date_created = $transaction['customer']['date_created'];


			if (isset($transaction['card']['id'])){
				$flutterwavetransaction->card_id = $transaction['card']['id'];


				$flutterwavetransaction->masked_pan =$transaction['card']['masked_pan'];


				$flutterwavetransaction->expiry_year =$transaction['card']['expiry_year'];


				$flutterwavetransaction->expiry_month = $transaction['card']['expiry_month'];


				$flutterwavetransaction->type = $transaction['card']['type'];


				$flutterwavetransaction->country =$transaction['card']['country'];


				$flutterwavetransaction->issuer_info = $transaction['card']['issuer_info'];


				$flutterwavetransaction->date_created =$transaction['card']['date_created'];
			}

			$flutterwavetransaction->merchant_id = $transaction['merchant']['id'];


			$flutterwavetransaction->payment_count = $payment_count;

			//USED AS CIF
			$flutterwavetransaction->other1 = $cfi_id;


			$flutterwavetransaction->other2 = $mandate_id;


			$flutterwavetransaction->other3 = $transaction_percentage;


		/* 	$flutterwavetransaction->other4 = $request->other4;


		$flutterwavetransaction->other5 = $request->other5;*/



		$flutterwavetransaction->save();

		  //  return response()->json($flutterwavetransaction);
   // user doesn't exist!
	}else{

			//echo "Already Uploaded";
	}



}


/*
		$paymentStatus = $resp['data']['status'];
		$chargeResponsecode = $resp['data']['chargecode'];
		$chargeAmount = $resp['data']['amount'];
		$chargeCurrency = $resp['data']['currency'];
*/
	   // print_r($resp);
	   // dd($resp);

	}



	public  function  set_mandate($id){


		////SETTING UP THE MANDATE ///
		$flutterwafe = Flutterwafe::findOrfail($id);

		$mandate_status = 'pending';

		for ($i=1; $i <= $flutterwafe->other3; $i++) {
	# code...

			$dt =  new Carbon(''.$flutterwafe->start_date.'', 'Europe/Moscow');
	//$flutterwafe->next_due_date =$dt->addMonth();

			///checking the frequency
			if($flutterwafe->frequency == 'monthly'){

				$flutter_date = $dt->addMonth($i);
			//print  "".$flutter_date." ------- (".$flutterwafe->start_date.")  <br />";
			}else if($flutterwafe->frequency == 'weekly'){

				$flutter_date = $dt->addWeeks($i);
			}else if($flutterwafe->frequency == 'daily'){
				$flutter_date = $dt->addDays($i);

			}else{
				$flutter_date = $dt->addMonth($i);
			}

			$check_mandate = Card_mandate::where('token_id', '=', $id)->where('payment_date', '=', $flutter_date )->first();
			if (!$check_mandate) {


				$card_mandate = new Card_mandate();


				$card_mandate->token_id = $id;

				$card_mandate->payment_date = $flutter_date;

				$card_mandate->staff_id = $flutterwafe->user_id;

				$card_mandate->status = $mandate_status;

				//insert the sector here
				$card_mandate->other4 = $flutterwafe->sector;



				$card_mandate->amount = $flutterwafe->amount;

				$card_mandate->current_position = 0;

				$card_mandate->is_active = 1;

				$card_mandate->other1 = $i;


  /*  $card_mandate->suspended_by = $request->suspended_by;

    $card_mandate->refunded_by = $request->refunded_by;

    $card_mandate->last_triggered_date = $request->last_triggered_date;


    $card_mandate->other2 = $request->other2;

    $card_mandate->other3 = $request->other3;

    $card_mandate->other4 = $request->other4;

    $card_mandate->other5 = $request->other5;*/


    $card_mandate->save();

  //  echo "Successfully posted";

}else{

	//echo "Already Uploaded";
}






	}// end mandate



}






/// RELATIONSHIP OFFICERS PAGE

public function relationship_officer_tokenize()
{
//
		if(!Auth::user())
{
return redirect('http://irs.primeramfbank.com/app/leave'); // add your desire URL in redirect function
}

	$flutterwafe = Flutterwafe::findOrFail(27);


 /*  $link =  $this->shortenurl('https://dev.bitly.com/v4_documentation.html#operation/createBitlink');

 dd($link); */

//  return view('post.show', ['post' => $post]);
 return view('flutterwafe.relationship_officer_token')->with('flutterwafe',$flutterwafe);
}







///search range
public function range(Request $request)
{
//

   // dd($request);


	$start_date_field = carbon::parse($request->start_date);
	$end_date_field = carbon::parse($request->end_date);


	$flutterwaves = Flutterwafe::whereBetween('created_at', array( $start_date_field, $end_date_field))->orderBy('created_at', 'desc')->get();
//$flutterwaves = Flutterwafe::orderBy('id', 'DESC')->get();
	$title = "Search Result from $request->start_date To $request->end_date";


//	dd(file_get_contents(route('tokenize.transactions')));
	return view('flutterwafe.index')->with('flutterwaves', $flutterwaves)->with('title', $title);



}//end range



public function view_mandate($id)
{
//
	$flutterwafe = Flutterwafe::findOrFail($id);



	if($flutterwafe->authorizer_status == 1){
	//checking if start date mandate is set
		$state_date_sent1 = Card_mandate::where('token_id', '=', $id)->orderBy('id', 'asc')->first();
		$end_date_sent1 = Card_mandate::where('token_id', '=', $id)->orderBy('id', 'desc')->first();

		$date_color = "#075B01";

		$state_date_sent = $state_date_sent1->payment_date;
		$end_date_sent = $end_date_sent1->payment_date;

	}else{
		$dt_new =  new Carbon(''.$flutterwafe->start_date.'', 'Europe/Moscow');

		 $date_color = "#BD0000";
		$state_date_sent = $dt_new->addMonth(1);
		$end_date_sent = $flutterwafe->date_end;


	}
//  return view('post.show', ['post' => $post]);
	return view('flutterwafe.view_mandate')->with('flutterwafe',$flutterwafe)->with('start_date_display',$state_date_sent)->with('end_date_display',$end_date_sent)->with('date_color',$date_color);
}



public function authorizer()
{
//


	$flutterwaves = Flutterwafe::whereNotNull('life_token')->where('approval', '=', '0')->where('authorizer',Auth::user()->ID)->orderBy('id', 'DESC')->get();

	$title = "Mandate Pending Approval by Authorizer";

	$flutterwaves_completed = Flutterwafe::whereNotNull('life_token')->where('approval', '!=', '0')->where('authorizer',Auth::user()->ID)->orderBy('id', 'DESC')->get();

	$title_completed = "Completed by Authorizer";

//	dd(file_get_contents(route('tokenize.transactions')));
	return view('flutterwafe.authorizer')->with('flutterwaves', $flutterwaves)->with('title', $title)->with('flutterwaves_completed', $flutterwaves_completed)->with('title_completed', $title_completed);

}




/////////////////////////// A P R O V A L ////////////////////
/**send approval or rejection for workflow by **/
public function do_approve(Request $request, $id){


	$flutterwafe = Flutterwafe::find($id);

	$user_permission = Flutterwave_permission::where('staff',Auth::user()->ID)->first();



	if( ($user_permission->staff_permission == 'mandate_authorizer') && ($user_permission->staff_department == 'operations') ){


	// if( ($user_permission->staff_permission == 'mandate_authorizer') && ($user_permission->staff_department == 'it') ){


		if($flutterwafe->authorizer_status == 1){

			return response()->json(['result'=>'0','message'=> "Not allowed. This Mandate has already been approved. "]);
		}





		$flutterwafe->authorizer = auth::id();



		$flutterwafe->authorizer_status = "1";

		$flutterwafe->approval = "1";

		$flutterwafe->authorizer_comment = "Successfully approved";

		$flutterwafe->authorize_date = now();




//dd($liquidation);


		$flutterwafe->save();




          //sending email cad
			$link1 = route('tokenize.show', ['id' => $flutterwafe->id]);
			$title31 = "Card Mandate Successfully Set For ".$flutterwafe->customer_name."";
			$button_title21 = "Thanks";
			$cad_staff1 =
			"Please be informed that mandate has been successfully set by operations for ".$flutterwafe->customer_name." with Relationship Officer (".User::find($flutterwafe->user_id)->display_name.") and Transaction ID is ".$flutterwafe->txRef.". Kindly proceed with loan booking. <br/> <br /> Start Date : ".$flutterwafe->start_date."(collection starts same day next month) <br/> <br /> End Date : ".$flutterwafe->date_end." <br/> <br /> Repayment Amount : N".$flutterwafe->amount." <br/> <br />  Account Number : ".$flutterwafe->cfi."";
			$this->send_email("CAD","creditadmin@primeracredit.com",$cad_staff1,$link1,$title31,$button_title21);




            //sending email operations
			$link2 = route('tokenize.show', ['id' => $flutterwafe->id]);
			$title32 = "Card Mandate Successfully Set For ".$flutterwafe->customer_name."";
			$button_title22 = "Thanks";
			$cad_staff2 =
			"Please be informed that ".User::find(auth::id())->display_name."  has successfully set mandate for  ".$flutterwafe->customer_name." with Relationship Officer (".User::find($flutterwafe->user_id)->display_name.") and Transaction ID is ".$flutterwafe->txRef.". Kindly find details below. <br/> <br /> Start Date : ".$flutterwafe->start_date." (collection starts same day next month)  <br/> <br /> End Date : ".$flutterwafe->date_end." <br/> <br /> Repayment Amount : N".$flutterwafe->amount." <br/> <br />  Account Number : ".$flutterwafe->cfi."";
			$this->send_email("Operations","operations@primeracredit.com",$cad_staff2,$link2,$title32,$button_title22);


            //sending email operations
			$link2 = route('tokenize.show', ['id' => $flutterwafe->id]);
			$title32 = "Card Mandate Successfully Set For ".$flutterwafe->customer_name."";
			$button_title22 = "Thanks";
			$cad_staff2 =
			"Please be informed that ".User::find(auth::id())->display_name."  has successfully set mandate for  ".$flutterwafe->customer_name." with Relationship Officer (".User::find($flutterwafe->user_id)->display_name.") and Transaction ID is ".$flutterwafe->txRef.". Kindly find details below. <br/> <br /> Start Date : ".$flutterwafe->start_date." (collection starts same day next month)  <br/> <br /> End Date : ".$flutterwafe->date_end." <br/> <br /> Repayment Amount : N".$flutterwafe->amount." <br/> <br />  Account Number : ".$flutterwafe->cfi."";
			$this->send_email("Operations","tokenization@primeramfbank.com",$cad_staff2,$link2,$title32,$button_title22);


			//sending email sales
			$link2 = route('tokenize.show', ['id' => $flutterwafe->id]);
			$title32 = "Card Mandate Successfully Set For ".$flutterwafe->customer_name."";
			$button_title22 = "Thanks";
			$cad_staff2 =
			"Please be informed that ".User::find(auth::id())->display_name."  has successfully set mandate for  ".$flutterwafe->customer_name." with Relationship Officer (".User::find($flutterwafe->user_id)->display_name.") and Transaction ID is ".$flutterwafe->txRef.". Kindly find details below. <br/> <br /> Start Date : ".$flutterwafe->start_date." (collection starts same day next month)  <br/> <br /> End Date : ".$flutterwafe->date_end." <br/> <br /> Repayment Amount : N".$flutterwafe->amount." <br/> <br />  Account Number : ".$flutterwafe->cfi."";
			$this->send_email("Sales","payrollstate@primeracredit.com",$cad_staff2,$link2,$title32,$button_title22);


            //sending email operations
			$link3 = route('tokenize.show', ['id' => $flutterwafe->id]);
			$title33 = "Card Mandate Successfully Set For ".$flutterwafe->customer_name."";
			$button_title23 = "Thanks";
			$cad_staff3 =
			"Please be informed that mandate has been successfully set by operations for your customer ".$flutterwafe->customer_name." and Transaction ID is ".$flutterwafe->txRef.". Kindly follow up with CAD for loan booking. <br/> <br /> Start Date : ".$flutterwafe->start_date." (collection starts same day next month)  <br/> <br /> End Date : ".$flutterwafe->date_end." <br/> <br /> Repayment Amount : N".$flutterwafe->amount." <br/> <br />  Account Number : ".$flutterwafe->cfi."";
			$this->send_email(User::find($flutterwafe->user_id)->display_name,User::find($flutterwafe->user_id)->user_email,$cad_staff3,$link3,$title33,$button_title23);










			$this->set_mandate($id);

			return response()->json(['id'=>$flutterwafe->id, 'result'=>'1','message'=> "You have successfully approved RO : ".User::find
				($flutterwafe->user_id)->display_name." mandate  with Customer Name ( ".$flutterwafe->customer_name." ). successfully pushed to CAD "]);




                                            // return response()->json($liquidation);





		}else{

			return response()->json(['result'=>'0','message'=> "You are not authorized to perform this action"]);

		}

















	}



        /**
        send approval or rejection for workflow by
         **/
        public function do_reject(Request $request, $id){

        	$flutterwafe = Flutterwafe::find($id);

        	$user_permission = Flutterwave_permission::where('staff',Auth::user()->ID)->first();



        	/*	if( ($user_permission->staff_permission == 'tokenization_authorizer') && ($user_permission->staff_department == 'operations') ){
*/

if( ($user_permission->staff_permission == 'mandate_authorizer') && ($user_permission->staff_department == 'operations') ){

        			if($flutterwafe->authorizer_status == 2){

        				return response()->json(['result'=>'0','message'=> "Not allowed. This Mandate has already been rejected. "]);
        			}





        			$flutterwafe->authorizer = auth::id();


        			$flutterwafe->approval = "2";

        			$flutterwafe->authorizer_status = "2";


        			$flutterwafe->authorizer_comment = $request->comment;

        			$flutterwafe->authorize_date = now();




//dd($liquidation);


					$flutterwafe->save();




            //sending email operations
			$link3 = route('tokenize.view_mandate', ['id' => $flutterwafe->id]);
			$title33 = "Rejected Mandate for  ".$flutterwafe->customer_name."";
			$button_title23 = "Click to View";
			$cad_staff3 =
			"Mandate rejected by ".User::find($flutterwafe->authorizer)->display_name." for  customer ( ".$flutterwafe->customer_name." ) and Transaction ID is ".$flutterwafe->txRef.". <br/> <br /> Start Date : ".$flutterwafe->start_date." (collection starts same day next month)  <br/> <br /> End Date : ".$flutterwafe->date_end." <br/> <br /> Repayment Amount : N".$flutterwafe->amount." <br/> <br />  Account Number : ".$flutterwafe->cfi."";
			$this->send_email(User::find($flutterwafe->inputer)->display_name,User::find($flutterwafe->inputer)->user_email,$cad_staff3,$link3,$title33,$button_title23);




            //sending email operations
			$link3 = ''.route('tokenize.view_mandate', ['id' => $flutterwafe->id]).'?approval=yes';
			$title33 = "Rejected Mandate for  ".$flutterwafe->customer_name."";
			$button_title23 = "Click to Authorize";
			$cad_staff3 =
			"You have rejected mandate for customer: ".$flutterwafe->customer_name." and Transaction ID is ".$flutterwafe->txRef.". <br/> <br /> Start Date : ".$flutterwafe->start_date." (collection starts same day next month)  <br/> <br /> End Date : ".$flutterwafe->date_end." <br/> <br /> Repayment Amount : N".$flutterwafe->amount." <br/> <br />  Account Number : ".$flutterwafe->cfi."";
			$this->send_email(User::find($flutterwafe->authorizer)->display_name,User::find($flutterwafe->authorizer)->user_email,$cad_staff3,$link3,$title33,$button_title23);




        			return response()->json(['id'=>$flutterwafe->id, 'result'=>'1','message'=> "You have rejected ".User::find
        				($flutterwafe->user_id)->display_name." Application with Customer Name ( ".$flutterwafe->customer_name." ). "]);





        		}else{

        			return response()->json(['result'=>'0','message'=> "You are not authorized to perform this action"]);

        		}




        	}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////





        }
