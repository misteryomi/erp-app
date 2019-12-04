<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Liquidation;
use App\Flutterwave_permission;
use App\WorkflowAction;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use App\User;
use Auth;
use DB; 
use Carbon\Carbon;

use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;




/**
* Class LiquidationController.
*
* @author  The scaffold-interface created at 2019-07-01 12:38:44pm
* @link  https://github.com/amranidev/scaffold-interface
* Copywrite @ www.webguru.com.ng
*/


class LiquidationController extends Controller
{
//setting validations
    protected $rules =
    [

        /*'staff_id' => 'required',
        

        'customer_name' => 'required',
        

        'amount_paid' => 'required',
        

        'date_paid' => 'required',
        

        'payee' => 'required',
        

        'liquidation_type' => 'required',
        

        'documents' => 'required',
        

        'product_type' => 'required',
        

        'amount_confirmed' => 'required',
        

        'ld' => 'required',
        

        'liquidation_type_ops' => 'required',
        

        't24_acc_no' => 'required',
        

        'approved_by_ops' => 'required',
        

        'approved_by_cad' => 'required',
        

        'status_ops' => 'required',
        

        'status_cad' => 'required',
        

        'comment' => 'required',
        

        'other1' => 'required',
        

        'other2' => 'required',
        

        'other3' => 'required',*/
        
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
$headers = 'From: Primera Microfinance Bank <irs@primeramfbank.com>' . "\r\n";
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
    $this->middleware('auth');
}




public function index()
{
//
 $user_permission = Flutterwave_permission::where('staff',Auth::user()->ID)->first();

 if(isset($user_permission)){

    if( ($user_permission->staff_permission == 'liquidation') && ($user_permission->staff_department == 'operations') ){

        $user_permission_group = "operations"; 

        $liquidation_display = Liquidation::whereNull('status_ops')->orderBy('updated_at', 'DESC')->get();


    }elseif( ($user_permission->staff_permission == 'liquidation') && ($user_permission->staff_department == 'cad') ){

        $user_permission_group = "cad"; 

        $liquidation_display = Liquidation::whereNull('status_cad')->where('status_ops', '=' ,'1')->orderBy('updated_at', 'DESC')->get();


    }else{

        $user_permission_group = "sales"; 

        $liquidation_display = Liquidation::where('staff_id', '=', Auth::user()->ID)->whereNull('status_ops')->whereNull('status_cad')->orderBy('updated_at', 'DESC')->get();

    }
}else{

 $user_permission_group = "sales"; 

 $liquidation_display = Liquidation::where('staff_id', '=', Auth::user()->ID)->whereNull('status_ops')->whereNull('status_cad')->orderBy('updated_at', 'DESC')->get();

}


return view('liquidation.index')->with('liquidations', $liquidation_display)->with('user_permission_group', $user_permission_group);

}





public function complete()
{
//
 $user_permission = Flutterwave_permission::where('staff',Auth::user()->ID)->first();

 if(isset($user_permission)){

    if( ($user_permission->staff_permission == 'liquidation') && ($user_permission->staff_department == 'operations') ){

        $user_permission_group = "operations"; 

        $liquidation_display = Liquidation::where('status_ops', '=' ,'1')->orderBy('updated_at', 'DESC')->get();


    }elseif( ($user_permission->staff_permission == 'liquidation') && ($user_permission->staff_department == 'cad') ){

        $user_permission_group = "cad"; 

        $liquidation_display = Liquidation::where('status_cad', '=' ,'1')->orderBy('updated_at', 'DESC')->get();


    }else{

        $user_permission_group = "sales"; 

        $liquidation_display = Liquidation::where('staff_id', '=', Auth::user()->ID)->where('status_cad', '=' ,'1')->orderBy('updated_at', 'DESC')->get();

    }

}else{

  $user_permission_group = "sales"; 

  $liquidation_display = Liquidation::where('staff_id', '=', Auth::user()->ID)->where('status_cad', '=' ,'1')->orderBy('updated_at', 'DESC')->get();

}


return view('liquidation.complete')->with('liquidations', $liquidation_display)->with('user_permission_group', $user_permission_group);

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
    $validator = Validator::make($request->all(), [
     'staff_id' => 'required',


     'customer_name' => 'required',


     'amount_paid' => 'required',


     'date_paid' => 'required',


     'payee' => 'required',


     'liquidation_type' => 'required',


     'product_type' => 'required',

 ]);




    if ($validator->fails()) {
        return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
    } else {
        $liquidation = new Liquidation();


        $liquidation->staff_id = $request->staff_id;


        $liquidation->customer_name = $request->customer_name;


        $liquidation->amount_paid = $request->amount_paid;


        $liquidation->date_paid = $request->date_paid;


        $liquidation->payee = $request->payee;


        $liquidation->liquidation_type = $request->liquidation_type;


     // $liquidation->documents = $request->documents;

            // Handle File Upload
        if($request->hasFile('documents')) {
                        // Get filename with extension           
            $filenameWithExt = $request->file('documents')->getClientOriginalName();
                        // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);            
                     // Get just ext
            $extension = $request->file('documents')->getClientOriginalExtension();
                        //Filename to store
            $fileNameToStore = $request->staff_id.'_'.time().'.'.$extension;                       
                    // Upload Image
           // $path = $request->file('documents')->storeAs('liquidation_files', $fileNameToStore);

            $path =  $request->file('documents')->move(public_path("../../public_html/app/liquidation_files"), $fileNameToStore);

            $liquidation->documents =  $fileNameToStore;
        } else {        
            $fileNameToStore = 'noimage.jpg';
        }




        $liquidation->product_type = $request->product_type;


        $liquidation->amount_confirmed = $request->amount_confirmed;


        $liquidation->ld = $request->ld;


        $liquidation->liquidation_type_ops = $request->liquidation_type_ops;


        $liquidation->t24_acc_no = $request->t24_acc_no;


        $liquidation->approved_by_ops = $request->approved_by_ops;


        $liquidation->approved_by_cad = $request->approved_by_cad;


        $liquidation->status_ops = $request->status_ops;


        $liquidation->status_cad = $request->status_cad;


        $liquidation->comment = $request->comment;


        $liquidation->other1 = $request->other1;


        $liquidation->other2 = $request->other2;


        $liquidation->other3 = $request->other3;



        $liquidation->save();


/*
           //sending email cad
            $link1 = route('liquidation.show', ['id' => $liquidation->id]);
            $title31 = "Liquidation Successfully Submitted ".$liquidation->customer_name."";
            $button_title21 = "Thanks";
            $cad_staff1 =
            "Please be informed that mandate has been successfully set by operations for ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->user_id)->display_name.") and Transaction ID is ".$liquidation->txRef.". Kindly proceed with loan booking. <br/> <br /> Start Date : ".$liquidation->start_date."(collection starts same day next month) <br/> <br /> End Date : ".$liquidation->date_end." <br/> <br /> Repayment Amount : N".$liquidation->amount." <br/> <br />  Account Number : ".$liquidation->cfi."";
            $this->send_email("CAD","creditadmin@primeracredit.com",$cad_staff1,$link1,$title31,$button_title21);
            
            */
            
            
            //sending email operations
            $link2 = route('liquidation.show', ['id' => $liquidation->id]);
            $title32 = "Liquidation Submitted For ".$liquidation->customer_name." Pending Approval";
            $button_title22 = "Click to View Liquidation";
            $cad_staff2 =
            "Please be informed that ".User::find(auth::id())->display_name."  has successfully submitted Liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name."). Kindly find details below. <br/> <br /> 
            Customer Name : ".$liquidation->customer_name."   <br/> <br />
            Amount : N".$liquidation->amount_paid." <br/> <br />
            Payment Date : ".$liquidation->date_paid." <br/> <br />  
            Liquidation Type : ".$liquidation->liquidation_type."";
            $this->send_email("Operations","operations@primeracredit.com",$cad_staff2,$link2,$title32,$button_title22);
           //  $this->send_email("Operations","kelelogy@gmail.com",$cad_staff2,$link2,$title32,$button_title22);
            
            //sending email operations
            $link3 = route('liquidation.show', ['id' => $liquidation->id]);
            $title33 = "Liquidation Successfully Submitted For ".$liquidation->customer_name."";
            $button_title23 = "Click to View Liquidation";
            $cad_staff3 =
            "Please be informed that ".User::find(auth::id())->display_name."  has successfully submitted Liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name."). Kindly find details below. <br/> <br /> 
            Customer Name : ".$liquidation->customer_name."   <br/> <br />
            Amount : N".$liquidation->amount_paid." <br/> <br />
            Payment Date : ".$liquidation->date_paid." <br/> <br />  
            Liquidation Type : ".$liquidation->liquidation_type."";
            $this->send_email(User::find($liquidation->staff_id)->display_name,User::find($liquidation->staff_id)->email,$cad_staff3,$link3,$title33,$button_title23);
            

            
            



       // return response()->json($liquidation);

            return redirect()->route('liquidation.show', $liquidation);
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

 $user_permission_group = "sales"; 


 $user_permission = Flutterwave_permission::where('staff',Auth::user()->ID)->first();


 if(isset($user_permission)){



    if( ($user_permission->staff_permission == 'liquidation') && ($user_permission->staff_department == 'operations') ){

        $user_permission_group = "operations"; 

      //  $liquidation_display = Liquidation::whereNull('status_ops')->orderBy('updated_at', 'DESC')->get();


    }elseif( ($user_permission->staff_permission == 'liquidation') && ($user_permission->staff_department == 'cad') ){

        $user_permission_group = "cad"; 

      //  $liquidation_display = Liquidation::whereNull('status_cad')->where('status_ops', '=' ,'1')->orderBy('updated_at', 'DESC')->get();


    }
}else{

    $user_permission_group = "sales"; 
}



$liquidation = Liquidation::findOrFail($id);

//  return view('post.show', ['post' => $post]);
return view('liquidation.show')->with('liquidation',$liquidation)->with('user_permission_group', $user_permission_group);
}

/**
* Show the form for editing the specified resource.
*
* @param    int  $id
* @return  \Illuminate\Http\Response
*/
public function edit($id)
{

    $liquidation = Liquidation::findOrFail($id);
    $user_permission_group = "sales"; 

    if(($liquidation->status_ops != '1' ) && ($liquidation->staff_id == auth::id()) ){
        return view('liquidation.edit')->with('liquidation',$liquidation)->with('user_permission_group', $user_permission_group);
    }
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
        $liquidation = Liquidation::findOrfail($id);

    //  $liquidation->staff_id = $request->staff_id;

        $liquidation->customer_name = $request->customer_name;

        $liquidation->amount_paid = $request->amount_paid;

        $liquidation->date_paid = $request->date_paid;

        $liquidation->payee = $request->payee;

        $liquidation->liquidation_type = $request->liquidation_type;

     // $liquidation->documents = $request->documents;

        $liquidation->product_type = $request->product_type;

        $liquidation->amount_confirmed = $request->amount_confirmed;

        $liquidation->ld = $request->ld;

        $liquidation->liquidation_type_ops = $request->liquidation_type_ops;

        $liquidation->t24_acc_no = $request->t24_acc_no;

        $liquidation->approved_by_ops = $request->approved_by_ops;

        $liquidation->approved_by_cad = $request->approved_by_cad;

        $liquidation->status_ops = $request->status_ops;

        $liquidation->status_cad = $request->status_cad;

        $liquidation->comment = $request->comment;

        $liquidation->other1 = $request->other1;

        $liquidation->other2 = $request->other2;

        $liquidation->other3 = $request->other3;

                 // Handle File Upload
        if($request->hasFile('documents')) {
                        // Get filename with extension           
            $filenameWithExt = $request->file('documents')->getClientOriginalName();
                        // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);            
                     // Get just ext
            $extension = $request->file('documents')->getClientOriginalExtension();
                        //Filename to store
            $fileNameToStore =  $request->staff_id.'_'.time().'.'.$extension;                       
                    // Upload Image
//$path = $request->file('documents')->storeAs('liquidation', $fileNameToStore);

            $path =  $request->file('documents')->move(public_path("../../public_html/app/liquidation_files"), $fileNameToStore);


            $liquidation->documents =  $fileNameToStore;
        } else {
            $fileNameToStore = 'noimage.jpg';
        }


//dd($liquidation);


        $liquidation->save();
        /* return response()->json($liquidation);*/


        //sending email operations
        $link2 = route('liquidation.show', ['id' => $liquidation->id]);
        $title32 = "Liquidation Updated For ".$liquidation->customer_name." Pending Approval";
        $button_title22 = "Click to View Liquidation";
        $cad_staff2 =
        "Please be informed that ".User::find(auth::id())->display_name."  has updated liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name."). Kindly find details below. <br/> <br /> 
        Customer Name : ".$liquidation->customer_name."   <br/> <br />
        Amount : N".$liquidation->amount_paid." <br/> <br />
        Payment Date : ".$liquidation->date_paid." <br/> <br />  
        Liquidation Type : ".$liquidation->liquidation_type."";
        $this->send_email("Operations","operations@primeracredit.com",$cad_staff2,$link2,$title32,$button_title22);
           //  $this->send_email("Operations","kelelogy@gmail.com",$cad_staff2,$link2,$title32,$button_title22);
        
            //sending email operations
        $link3 = route('liquidation.show', ['id' => $liquidation->id]);
        $title33 = "Liquidation Successfully Updated For ".$liquidation->customer_name."";
        $button_title23 = "Click to View Liquidation";
        $cad_staff3 =
        "Please be informed that ".User::find(auth::id())->display_name."  has successfully updated liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name."). Kindly find details below. <br/> <br /> 
        Customer Name : ".$liquidation->customer_name."   <br/> <br />
        Amount : N".$liquidation->amount_paid." <br/> <br />
        Payment Date : ".$liquidation->date_paid." <br/> <br />  
        Liquidation Type : ".$liquidation->liquidation_type."";
        $this->send_email(User::find($liquidation->staff_id)->display_name,User::find($liquidation->staff_id)->email,$cad_staff3,$link3,$title33,$button_title23);
        

        
        



       // return response()->json($liquidation);

        return redirect()->route('liquidation.show', $liquidation);

    }
}




        /**
                send approval or rejection for workflow by
         **/
                public function do_approve(Request $request, $id){


                    $liquidation = Liquidation::find($id);

                    $user_permission = Flutterwave_permission::where('staff',Auth::user()->ID)->first();



                    if( ($user_permission->staff_permission == 'liquidation') && ($user_permission->staff_department == 'operations') ){



                        if($liquidation->status_cad == 1){

                            return response()->json(['result'=>'0','message'=> "Not allowed. This Liquidation has already been approved by CAD. "]);
                        }




                        $liquidation->amount_confirmed = $request->amount_confirmed;

                        $liquidation->ld = $request->ld;

                        $liquidation->liquidation_type_ops = $request->liquidation_type_ops;

                        $liquidation->t24_acc_no = $request->t24_acc_no;

                        $liquidation->approved_by_ops = auth::id();



                        $liquidation->status_ops = 1; 


                        $liquidation->comment = $request->comment;

                    //    $liquidation->other1 = $request->other1;

                    //    $liquidation->other2 = $request->other2;

                       // $liquidation->other3 = $request->other3;


//dd($liquidation);


                        $liquidation->save();





           //sending email cad
                        $link1 = route('liquidation.show', ['id' => $liquidation->id]);
                        $title31 = "Operations Successfully Approved Liquidation For ".$liquidation->customer_name." Pending CAD Approval";
                        $button_title21 = "Click to View Liquidation";
                        $cad_staff1 =
                        "Please be informed that ".User::find(auth::id())->display_name."  has successfully Approved Liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name.").<br />  <br />  Kindly find details below. <br/> <br /> 
                        Customer Name : ".$liquidation->customer_name."   <br/> <br />
                        Amount : N".$liquidation->amount_paid." <br/> <br />
                        Payment Date : ".$liquidation->date_paid." <br/> <br />  
                        Liquidation Type : ".$liquidation->liquidation_type."";
                        $this->send_email("CAD","creditadmin@primeracredit.com",$cad_staff1,$link1,$title31,$button_title21);
            //$this->send_email("CAD","kelelogy@yahoo.com",$cad_staff1,$link1,$title31,$button_title21);
                        
                        
                        
            //sending email operations
                        $link2 = route('liquidation.show', ['id' => $liquidation->id]);
                        $title32 = "Successful Approved Liquidation For ".$liquidation->customer_name." Pushed to CAD";
                        $button_title22 = "Click to View Liquidation";
                        $cad_staff2 =
                        "".User::find(auth::id())->display_name."  Successfully approved Liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name."). Currently Pushed to CAD for approval. <br />  <br />  Kindly find details below. <br/> <br /> 
                        Customer Name : ".$liquidation->customer_name."   <br/> <br />
                        Amount : N".$liquidation->amount_paid." <br/> <br />
                        Payment Date : ".$liquidation->date_paid." <br/> <br />  
                        Liquidation Type : ".$liquidation->liquidation_type."";
                        $this->send_email("Operations","operations@primeracredit.com",$cad_staff2,$link2,$title32,$button_title22);
            //$this->send_email("Operations","kelelogy@gmail.com",$cad_staff2,$link2,$title32,$button_title22);
                        
                        
            //sending email operations
                        $link3 = route('liquidation.show', ['id' => $liquidation->id]);
                        $title33 = "Operations Successfully Approved Liquidation  For ".$liquidation->customer_name."";
                        $button_title23 = "Click to View Liquidation";
                        $cad_staff3 =
                        "".User::find(auth::id())->display_name." (Operations) successfully approved liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name."). <br />  <br />  Kindly find details below. <br/> <br /> 
                        Customer Name : ".$liquidation->customer_name."   <br/> <br />
                        Amount : N".$liquidation->amount_paid." <br/> <br />
                        Payment Date : ".$liquidation->date_paid." <br/> <br />  
                        Liquidation Type : ".$liquidation->liquidation_type."";
                        $this->send_email(User::find($liquidation->staff_id)->display_name,User::find($liquidation->staff_id)->email,$cad_staff3,$link3,$title33,$button_title23);
                        
                        



                        return response()->json(['id'=>$liquidation->id, 'result'=>'1','message'=> "You have successfully approved ".User::find
                            ($liquidation->staff_id)->display_name." Liquidation Request with Customer Name ( ".$liquidation->customer_name." )  ".$liquidation->liquidation_type.". successfully pushed to CAD "]);




                                            // return response()->json($liquidation);





                    }elseif ( ($user_permission->staff_permission == 'liquidation') && ($user_permission->staff_department == 'cad') ) {//for CAD



                        if($liquidation->status_ops != 1){

                            return response()->json(['result'=>'0','message'=> "This Liquidation has not been approved by Operations yet"]);
                        }


                        $liquidation->approved_by_cad =  auth::id();
                        $liquidation->status_cad = 1;
                        $liquidation->other1 = $request->other1;

                        $liquidation->other2 = $request->other2;
                        $liquidation->save();






           //sending email cad
                        $link1 = route('liquidation.show', ['id' => $liquidation->id]);
                        $title31 = "CAD Successfully Approved Liquidation For ".$liquidation->customer_name."";
                        $button_title21 = "Click to View Liquidation";
                        $cad_staff1 =
                        "".User::find(auth::id())->display_name."(CAD)  Successfully approved Liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name."). Currently Pushed to CAD for approval. <br />  <br />  Kindly find details below. <br/> <br /> 
                        Customer Name : ".$liquidation->customer_name."   <br/> <br />
                        Amount : N".$liquidation->amount_paid." <br/> <br />
                        Payment Date : ".$liquidation->date_paid." <br/> <br />  
                        Liquidation Type : ".$liquidation->liquidation_type."";
                        $this->send_email("CAD","creditadmin@primeracredit.com",$cad_staff1,$link1,$title31,$button_title21);
                        //$this->send_email("CAD","kelelogy@yahoo.com",$cad_staff1,$link1,$title31,$button_title21);

                        
                        
                        
            //sending email operations
                        $link2 = route('liquidation.show', ['id' => $liquidation->id]);
                        $title32 = "CAD Successful Approved Liquidation For ".$liquidation->customer_name."";
                        $button_title22 = "Click to View Liquidation";
                        $cad_staff2 =
                        "".User::find(auth::id())->display_name." (CAD) Successfully approved Liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name.").  <br />  <br />  Kindly find details below. <br/> <br /> 
                        Customer Name : ".$liquidation->customer_name."   <br/> <br />
                        Amount : N".$liquidation->amount_paid." <br/> <br />
                        Payment Date : ".$liquidation->date_paid." <br/> <br />  
                        Liquidation Type : ".$liquidation->liquidation_type."";
                        $this->send_email("Operations","operations@primeracredit.com",$cad_staff2,$link2,$title32,$button_title22);
           // $this->send_email("Operations","kelelogy@gmail.com",$cad_staff2,$link2,$title32,$button_title22);
                        
            //sending email operations
                        $link3 = route('liquidation.show', ['id' => $liquidation->id]);
                        $title33 = "CAD Successfully Approved Liquidation For ".$liquidation->customer_name."";
                        $button_title23 = "Click to View Liquidation";
                        $cad_staff3 =
                        "".User::find(auth::id())->display_name." (CAD) successfully approved liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name."). <br />  <br />  Kindly find details below. <br/> <br /> 
                        Customer Name : ".$liquidation->customer_name."   <br/> <br />
                        Amount : N".$liquidation->amount_paid." <br/> <br />
                        Payment Date : ".$liquidation->date_paid." <br/> <br />  
                        Liquidation Type : ".$liquidation->liquidation_type."";
                        $this->send_email(User::find($liquidation->staff_id)->display_name,User::find($liquidation->staff_id)->email,$cad_staff3,$link3,$title33,$button_title23);
                        
                        






                        return response()->json(['id'=>$liquidation->id, 'result'=>'1','message'=> "You have successfully approved ".User::find
                            ($liquidation->staff_id)->display_name." Application with Customer Name ( ".$liquidation->customer_name." )  ".$liquidation->liquidation_type.". "]);





                    }else{

                        return response()->json(['result'=>'0','message'=> "You are not authorized to perform this action"]);

                    }

















                }



        /**
        send approval or rejection for workflow by
         **/
        public function do_reject(Request $request, $id){

         $liquidation = Liquidation::find($id);

         $user_permission = Flutterwave_permission::where('staff',Auth::user()->ID)->first();



         if( ($user_permission->staff_permission == 'liquidation') && ($user_permission->staff_department == 'operations') ){




            $liquidation->approved_by_ops = auth::id();

            $liquidation->status_ops = 2; 


            $liquidation->comment = $request->comment;




//dd($liquidation);


            $liquidation->save();




          /* //sending email cad
            $link1 = route('liquidation.show', ['id' => $liquidation->id]);
            $title31 = "Operations Successfully Approved Liquidation For ".$liquidation->customer_name." Pending CAD Approval";
            $button_title21 = "Click to View Liquidation";
            $cad_staff1 =
            "Please be informed that ".User::find(auth::id())->display_name."  has successfully Approved Liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name.").<br />  <br />  Kindly find details below. <br/> <br /> 
            Customer Name : ".$liquidation->customer_name."   <br/> <br />
            Amount : N".$liquidation->amount_paid." <br/> <br />
            Payment Date : ".$liquidation->date_paid." <br/> <br />  
            Liquidation Type : ".$liquidation->liquidation_type."";
            $this->send_email("CAD","creditadmin@primeracredit.com",$cad_staff1,$link1,$title31,$button_title21);
            */
            
            
            
            //sending email operations
            $link2 = route('liquidation.show', ['id' => $liquidation->id]);
            $title32 = "Rejected Liquidation For ".$liquidation->customer_name." ";
            $button_title22 = "Click to View Liquidation";
            $cad_staff2 =
            "".User::find(auth::id())->display_name."  Rejected Liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name."). <br />  <br />  Kindly find details below. <br/> <br /> 
            Comment: ".$liquidation->comment."   <br/> <br />
            Customer Name : ".$liquidation->customer_name."   <br/> <br />
            Amount : N".$liquidation->amount_paid." <br/> <br />
            Payment Date : ".$liquidation->date_paid." <br/> <br />  
            Liquidation Type : ".$liquidation->liquidation_type."";
            $this->send_email("Operations","operations@primeracredit.com",$cad_staff2,$link2,$title32,$button_title22);
            //$this->send_email("Operations","kelelogy@gmail.com",$cad_staff2,$link2,$title32,$button_title22);
            
            
            //sending email operations
            $link3 = route('liquidation.show', ['id' => $liquidation->id]);
            $title33 = "Operations Rejected Liquidation For ".$liquidation->customer_name."";
            $button_title23 = "Click to View Liquidation";
            $cad_staff3 =
            "".User::find(auth::id())->display_name." rejected  Liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name."). <br />  <br />  Kindly find details below. <br/> <br /> 
            Comment: ".$liquidation->comment."   <br/> <br />
            Customer Name : ".$liquidation->customer_name."   <br/> <br />
            Amount : N".$liquidation->amount_paid." <br/> <br />
            Payment Date : ".$liquidation->date_paid." <br/> <br />  
            Liquidation Type : ".$liquidation->liquidation_type."";
            $this->send_email(User::find($liquidation->staff_id)->display_name,User::find($liquidation->staff_id)->email,$cad_staff3,$link3,$title33,$button_title23);
            

            /**/


            return response()->json(['id'=>$liquidation->id, 'result'=>'1','message'=> "You have rejected  ".User::find
                ($liquidation->staff_id)->display_name." Application with Customer Name ( ".$liquidation->customer_name." )  ".$liquidation->liquidation_type.". successfully pushed back to ".User::find
                ($liquidation->staff_id)->display_name." "]);




                                            // return response()->json($liquidation);





                    }elseif ( ($user_permission->staff_permission == 'liquidation') && ($user_permission->staff_department == 'cad') ) {//for CAD

                     $liquidation->status_ops = 0; 
                     $liquidation->approved_by_cad =  auth::id();
                     $liquidation->status_cad = 2;
                     

                     $liquidation->other2 = $request->comment;
                     $liquidation->save();




           //sending email cad
                     $link1 = route('liquidation.show', ['id' => $liquidation->id]);
                     $title31 = "Rejected  Approved Liquidation For ".$liquidation->customer_name."";
                     $button_title21 = "Click to View Liquidation";
                     $cad_staff1 =
                     "".User::find(auth::id())->display_name."  Rejected Liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name."). <br />  <br />  Kindly find details below. <br/> <br /> 
                     Comment: ". $liquidation->other2."   <br/> <br />
                     Customer Name : ".$liquidation->customer_name."   <br/> <br />
                     Amount : N".$liquidation->amount_paid." <br/> <br />
                     Payment Date : ".$liquidation->date_paid." <br/> <br />  
                     Liquidation Type : ".$liquidation->liquidation_type."";
                     $this->send_email("CAD","creditadmin@primeracredit.com",$cad_staff1,$link1,$title31,$button_title21);
                     
                     
                     
                     
            //sending email operations
                     $link2 = route('liquidation.show', ['id' => $liquidation->id]);
                     $title32 = "CAD Rejected Liquidation For ".$liquidation->customer_name." ";
                     $button_title22 = "Click to View Liquidation";
                     $cad_staff2 =
                     "".User::find(auth::id())->display_name."  Rejected Liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name."). <br />  <br />  Kindly find details below. <br/> <br /> 
                     Comment: ". $liquidation->other2."   <br/> <br />
                     Customer Name : ".$liquidation->customer_name."   <br/> <br />
                     Amount : N".$liquidation->amount_paid." <br/> <br />
                     Payment Date : ".$liquidation->date_paid." <br/> <br />  
                     Liquidation Type : ".$liquidation->liquidation_type."";
                     $this->send_email("Operations","operations@primeracredit.com",$cad_staff2,$link2,$title32,$button_title22);
                     
                     
            //sending email operations
                     $link3 = route('liquidation.show', ['id' => $liquidation->id]);
                     $title33 = "CAD Rejected Liquidation For ".$liquidation->customer_name."";
                     $button_title23 = "Click to View Liquidation";
                     $cad_staff3 =
                     "".User::find(auth::id())->display_name."  CAD rejected  Liquidation for  ".$liquidation->customer_name." with Relationship Officer (".User::find($liquidation->staff_id)->display_name."). <br />  <br />  Kindly find details below. <br/> <br /> 
                     Comment: ". $liquidation->other2."   <br/> <br />
                     Customer Name : ".$liquidation->customer_name."   <br/> <br />
                     Amount : N".$liquidation->amount_paid." <br/> <br />
                     Payment Date : ".$liquidation->date_paid." <br/> <br />  
                     Liquidation Type : ".$liquidation->liquidation_type."";
                     $this->send_email(User::find($liquidation->staff_id)->display_name,User::find($liquidation->staff_id)->email,$cad_staff3,$link3,$title33,$button_title23);
                     



                     return response()->json(['id'=>$liquidation->id, 'result'=>'1','message'=> "You have rejected ".User::find
                        ($liquidation->staff_id)->display_name." Application with Customer Name ( ".$liquidation->customer_name." )  ".$liquidation->liquidation_type.". successfully pushed back to Operations Department "]);





                 }else{

                    return response()->json(['result'=>'0','message'=> "You are not authorized to perform this action"]);

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

    $liquidation = Liquidation::findOrfail($id);
    $liquidation->delete();

    return response()->json($liquidation);
}






public function reports()
{



    $today = Carbon::today();
// $date = new Carbon();
    $chartDatas = Liquidation::select([
        DB::raw('DATE(created_at) AS date1'),
        DB::raw('COUNT(id) AS count1'),
        DB::raw('sum(amount_paid) AS amount1'),
    ])

    ->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])
    ->groupBy('date1')
    ->orderBy('date1', 'ASC')
    ->get()
    ->toArray();

    $lastday = Carbon::now()->addDays(1); 

    $title = "PAR - Card Mandate";

//
    return view('liquidation.admin')->with('liquidations', Liquidation::all())->with('chart', $chartDatas)->with('title', $title)->with('lastday', $lastday);

}




/*

public  function  fasttrack_tat($start_date,$end_date){




/*
'mysql' => [
    'read' => [
        'host' => '192.168.1.1',
    ],
    'write' => [
        'host' => '196.168.1.2'
    ],
    'driver'    => 'mysql',
    'database'  => 'database',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
],
*


$results = DB::connection('fasttrack')->select('select l.track_id as "LOAN TRACK ID",  u.first_name as "FIRST NAME", u.last_name as "LAST NAME", u.email_address as "EMAIL ADDRESS", u.loan_count as "LOAN COUNT" , d.name as "DEPARTMENT" , r.name as "ROLE", r.tat as "EXPECTED TAT" ,  TIMEDIFF((lh.updated_at), (lh.created_at)) as "DROP ACTUAL TAT",  TIMEDIFF((lh.updated_at), (lh.opened_at)) as "OPEN ACTUAL TAT", l.account_officer_name as "ACCOUNT OFFICER", lh.created_at as "DATE CREATED", lh.opened_at as "DATE OPENED", lh.updated_at as "DATE SUBMITED" from fasttrack.loan_histories lh  INNER JOIN fasttrack.loans l ON l.id = lh.loan_id INNER JOIN fasttrack.departments d ON lh.department_id = d.id INNER JOIN fasttrack.users u ON lh.target_id = u.id INNER JOIN fasttrack.roles r ON r.id = u.role_id  WHERE lh.created_at >= :start_date AND lh.created_at <= :end_date order by lh.id desc ', ['start_date' => $start_date, 'end_date' => $end_date]); 



        /*$results = DB::connection('fasttrack')->select('select * from users'); 
*


        dd($results); 

        return response()->json($results);


    }
*/


}
