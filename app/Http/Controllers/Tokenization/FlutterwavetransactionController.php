<?php

namespace App\Http\Controllers\Tokenization;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Flutterwavetransaction;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;




/**
* Class FlutterwavetransactionController.
*
* @author  The scaffold-interface created at 2019-03-06 03:23:53pm
* @link  https://github.com/amranidev/scaffold-interface
* Copywrite @ www.webguru.com.ng
*/


class FlutterwavetransactionController extends Controller
{
//setting validations
protected $rules =
[

    'token_id' => 'required',


    'transaction_id' => 'required',


    'transaction_reference' => 'required',


    'processor_reference' => 'required',


    'amount' => 'required',


    'currency' => 'required',


    'amount_charged' => 'required',


    'rave_fee' => 'required',


    'merchant_fee' => 'required',


    'merchant_bore_fee' => 'required',


    'processor_response_code' => 'required',


    'processor_response_message' => 'required',


    'auth_model' => 'required',


    'customer_ip' => 'required',


    'narration' => 'required',


    'status' => 'required',


    'payment_entity' => 'required',


    'payment_entity_id' => 'required',


    'date_created' => 'required',


    'unique_reference' => 'required',


    'amount_due_merchant' => 'required',


    'customer_id' => 'required',


    'customer_email' => 'required',


    'customer_phonenumber' => 'required',


    'customer_fullname' => 'required',


    'customer_date_created' => 'required',


    'card_id' => 'required',


    'masked_pan' => 'required',


    'expiry_year' => 'required',


    'expiry_month' => 'required',


    'type' => 'required',


    'country' => 'required',


    'issuer_info' => 'required',


    'date_created' => 'required',


    'merchant_id' => 'required',


    'payment_count' => 'required',


    'other1' => 'required',


    'other2' => 'required',


    'other3' => 'required',


    'other4' => 'required',


    'other5' => 'required',

];

/**
* Display a listing of the resource.
*
* @return  \Illuminate\Http\Response
*/
public function index()
{
//return view('flutterwavetransaction.index')->with('flutterwavetransactions', Flutterwavetransaction::all());

        $amount = 100;

$today = Carbon::today();
// $date = new Carbon();
$chartDatas = Flutterwavetransaction::select([
    DB::raw('DATE(created_at) AS date1'),
    DB::raw('COUNT(id) AS count1'),
     DB::raw('sum(amount) AS amount1'),
 ])
   ->where('status', '=', 'successful')
   ->where('status', '=', 'successful')
 ->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])
 ->groupBy('date1')
 ->orderBy('date1', 'ASC')
 ->get()
 ->toArray();

  $lastday = Carbon::now()->addDays(1);





//$table = Flutterwavetransaction::whereBetween('created_at', [$today->startOfMonth(), $today->endOfMonth()])->count();

 //dd($chartDatas);

   $title = "Card Transactions / Collections";



        $flutterwavetransactions = Flutterwavetransaction::where('amount', '!=',  $amount)->orderBy('created_at', 'desc')->get();

        $total_successful = Flutterwavetransaction::where('amount', '!=',  $amount)
            ->where('status', '=', 'successful')->sum('amount');

         $total_failed = Flutterwavetransaction::where('amount', '!=',  $amount)
            ->where('status', '!=', 'successful')->sum('amount');

             $total_monthly = Flutterwavetransaction::where('amount', '!=',  $amount)
            ->where('status', '=', 'successful')
                 ->whereRaw('MONTH(`created_at`) = ?', array(date('m')))->sum('amount');

                 $total_daily = Flutterwavetransaction::where('amount', '!=',  $amount)
            ->where('status', '=', 'successful')
                 ->whereRaw('Date(created_at) = CURDATE()')->sum('amount');



return view('flutterwavetransaction.index')->with('flutterwavetransactions', $flutterwavetransactions)

->with('total_successful', $total_successful)
->with('total_failed', $total_failed)
->with('total_monthly', $total_monthly)
->with('total_daily', $total_daily)
->with('chart', $chartDatas)
->with('lastday', $lastday)->with('title', $title);

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
$flutterwavetransaction = new Flutterwavetransaction();


    $flutterwavetransaction->token_id = $request->token_id;


    $flutterwavetransaction->transaction_id = $request->transaction_id;


    $flutterwavetransaction->transaction_reference = $request->transaction_reference;


    $flutterwavetransaction->processor_reference = $request->processor_reference;


    $flutterwavetransaction->amount = $request->amount;


    $flutterwavetransaction->currency = $request->currency;


    $flutterwavetransaction->amount_charged = $request->amount_charged;


    $flutterwavetransaction->rave_fee = $request->rave_fee;


    $flutterwavetransaction->merchant_fee = $request->merchant_fee;


    $flutterwavetransaction->merchant_bore_fee = $request->merchant_bore_fee;


    $flutterwavetransaction->processor_response_code = $request->processor_response_code;


    $flutterwavetransaction->processor_response_message = $request->processor_response_message;


    $flutterwavetransaction->auth_model = $request->auth_model;


    $flutterwavetransaction->customer_ip = $request->customer_ip;


    $flutterwavetransaction->narration = $request->narration;


    $flutterwavetransaction->status = $request->status;


    $flutterwavetransaction->payment_entity = $request->payment_entity;


    $flutterwavetransaction->payment_entity_id = $request->payment_entity_id;


    $flutterwavetransaction->date_created = $request->date_created;


    $flutterwavetransaction->unique_reference = $request->unique_reference;


    $flutterwavetransaction->amount_due_merchant = $request->amount_due_merchant;


    $flutterwavetransaction->customer_id = $request->customer_id;


    $flutterwavetransaction->customer_email = $request->customer_email;


    $flutterwavetransaction->customer_phonenumber = $request->customer_phonenumber;


    $flutterwavetransaction->customer_fullname = $request->customer_fullname;


    $flutterwavetransaction->customer_date_created = $request->customer_date_created;


    $flutterwavetransaction->card_id = $request->card_id;


    $flutterwavetransaction->masked_pan = $request->masked_pan;


    $flutterwavetransaction->expiry_year = $request->expiry_year;


    $flutterwavetransaction->expiry_month = $request->expiry_month;


    $flutterwavetransaction->type = $request->type;


    $flutterwavetransaction->country = $request->country;


    $flutterwavetransaction->issuer_info = $request->issuer_info;


    $flutterwavetransaction->date_created = $request->date_created;


    $flutterwavetransaction->merchant_id = $request->merchant_id;


    $flutterwavetransaction->payment_count = $request->payment_count;


    $flutterwavetransaction->other1 = $request->other1;


    $flutterwavetransaction->other2 = $request->other2;


    $flutterwavetransaction->other3 = $request->other3;


    $flutterwavetransaction->other4 = $request->other4;


    $flutterwavetransaction->other5 = $request->other5;



$flutterwavetransaction->save();

return response()->json($flutterwavetransaction);
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
$flutterwavetransaction = Flutterwavetransaction::findOrFail($id);

//  return view('post.show', ['post' => $post]);
return view('flutterwavetransaction.show')->with('flutterwavetransaction',$flutterwavetransaction);
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
$flutterwavetransaction = Flutterwavetransaction::findOrfail($id);

    $flutterwavetransaction->token_id = $request->token_id;

    $flutterwavetransaction->transaction_id = $request->transaction_id;

    $flutterwavetransaction->transaction_reference = $request->transaction_reference;

    $flutterwavetransaction->processor_reference = $request->processor_reference;

    $flutterwavetransaction->amount = $request->amount;

    $flutterwavetransaction->currency = $request->currency;

    $flutterwavetransaction->amount_charged = $request->amount_charged;

    $flutterwavetransaction->rave_fee = $request->rave_fee;

    $flutterwavetransaction->merchant_fee = $request->merchant_fee;

    $flutterwavetransaction->merchant_bore_fee = $request->merchant_bore_fee;

    $flutterwavetransaction->processor_response_code = $request->processor_response_code;

    $flutterwavetransaction->processor_response_message = $request->processor_response_message;

    $flutterwavetransaction->auth_model = $request->auth_model;

    $flutterwavetransaction->customer_ip = $request->customer_ip;

    $flutterwavetransaction->narration = $request->narration;

    $flutterwavetransaction->status = $request->status;

    $flutterwavetransaction->payment_entity = $request->payment_entity;

    $flutterwavetransaction->payment_entity_id = $request->payment_entity_id;

    $flutterwavetransaction->date_created = $request->date_created;

    $flutterwavetransaction->unique_reference = $request->unique_reference;

    $flutterwavetransaction->amount_due_merchant = $request->amount_due_merchant;

    $flutterwavetransaction->customer_id = $request->customer_id;

    $flutterwavetransaction->customer_email = $request->customer_email;

    $flutterwavetransaction->customer_phonenumber = $request->customer_phonenumber;

    $flutterwavetransaction->customer_fullname = $request->customer_fullname;

    $flutterwavetransaction->customer_date_created = $request->customer_date_created;

    $flutterwavetransaction->card_id = $request->card_id;

    $flutterwavetransaction->masked_pan = $request->masked_pan;

    $flutterwavetransaction->expiry_year = $request->expiry_year;

    $flutterwavetransaction->expiry_month = $request->expiry_month;

    $flutterwavetransaction->type = $request->type;

    $flutterwavetransaction->country = $request->country;

    $flutterwavetransaction->issuer_info = $request->issuer_info;

    $flutterwavetransaction->date_created = $request->date_created;

    $flutterwavetransaction->merchant_id = $request->merchant_id;

    $flutterwavetransaction->payment_count = $request->payment_count;

    $flutterwavetransaction->other1 = $request->other1;

    $flutterwavetransaction->other2 = $request->other2;

    $flutterwavetransaction->other3 = $request->other3;

    $flutterwavetransaction->other4 = $request->other4;

    $flutterwavetransaction->other5 = $request->other5;


$flutterwavetransaction->save();
return response()->json($flutterwavetransaction);

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

$flutterwavetransaction = Flutterwavetransaction::findOrfail($id);
$flutterwavetransaction->delete();

return response()->json($flutterwavetransaction);
}


public  function  token_payment(){

     // $posts = Leave::orderBy('created_at', 'desc')->paginate(6);

        $amount = 100;

        $flutterwavetransactions = Flutterwavetransaction::where('amount', '=',  $amount)->get();

        $total_successful = Flutterwavetransaction::where('amount', '=',  $amount)
            ->where('status', '=', 'successful')->sum('amount');

         $total_failed = Flutterwavetransaction::where('amount', '=',  $amount)
            ->where('status', '!=', 'successful')->sum('amount');

             $total_monthly = Flutterwavetransaction::where('amount', '=',  $amount)
            ->where('status', '=', 'successful')
                 ->whereRaw('MONTH(`created_at`) = ?', array(date('m')))->sum('amount');

                 $total_daily = Flutterwavetransaction::where('amount', '=',  $amount)
            ->where('status', '=', 'successful')
                 ->whereRaw('Date(created_at) = CURDATE()')->sum('amount');


//dd($total_successful);





return view('flutterwavetransaction.token_payment')->with('flutterwavetransactions', $flutterwavetransactions)

->with('total_successful', $total_successful)
->with('total_failed', $total_failed)
->with('total_monthly', $total_monthly)
->with('total_daily', $total_daily);

}




///search range
public function range(Request $request)
{
//

   // dd($request);


    $start_date_field = carbon::parse($request->start_date);
    $end_date_field = carbon::parse($request->end_date);


    $flutterwavetransactions = Flutterwavetransaction::whereBetween('created_at', array( $start_date_field, $end_date_field))->orderBy('created_at', 'DESC')->get();
//$flutterwaves = Flutterwafe::orderBy('id', 'DESC')->get();
    $title = "Search Result from $request->start_date To $request->end_date ";


//  dd(file_get_contents(route('tokenize.transactions')));
    return view('flutterwavetransaction.index')->with('flutterwavetransactions', $flutterwavetransactions)->with('title', $title);



}//end range


}
