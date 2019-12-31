<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Appraisal;
use Amranidev\Ajaxis\Ajaxis;
use URL;



use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;


    use App\User;


    use App\Appraisal_year;



use App\Notifications\LeaveNotification;
use App\WorkflowAction;
use Carbon\Carbon;



/**
* Class AppraisalController.
*
* @author  The scaffold-interface created at 2018-07-07 02:25:38pm
* @link  https://github.com/amranidev/scaffold-interface
* Copywrite @ www.webguru.com.ng
*/


class AppraisalController extends Controller
{
//setting validations
    
    
protected $rules =
[

  /*  'kpi1_field' => 'required',


    'kpi1_target' => 'required',


    'kpi1_weight' => 'required',


    'kpi1_staff' => 'required',


    'kpi1_manager' => 'required',


    'kpi2_field' => 'required',


    'kpi2_target' => 'required',


    'kpi2_weight' => 'required',


    'kpi2_staff' => 'required',


    'kpi2_manager' => 'required',


    'kpi3_field' => 'required',


    'kpi3_target' => 'required',


    'kpi3_weight' => 'required',


    'kpi3_staff' => 'required',


    'kpi3_manager' => 'required',


    'kpi4_field' => 'required',


    'kpi4_target' => 'required',


    'kpi4_weight' => 'required',


    'kpi4_staff' => 'required',


    'kpi4_manager' => 'required',


    'kpi5_field' => 'required',


    'kpi5_target' => 'required',


    'kpi5_weight' => 'required',


    'kpi5_staff' => 'required',


    'kpi5_manager' => 'required',


    'kpi6_field' => 'required',


    'kpi6_target' => 'required',


    'kpi6_weight' => 'required',


    'kpi6_staff' => 'required',


    'kpi6_manager' => 'required',


    'kpi7_field' => 'required',


    'kpi7_target' => 'required',


    'kpi7_weight' => 'required',


    'kpi7_staff' => 'required',


    'kpi7_manager' => 'required',


    'kpi8_field' => 'required',


    'kpi8_target' => 'required',


    'kpi8_weight' => 'required',


    'kpi8_staff' => 'required',


    'kpi8_manager' => 'required',


    'kpi_comment_staff' => 'required',


    'kpi_comment_manager' => 'required',


    'competency1_field' => 'required',


    'competency1_target' => 'required',


    'competency1_weight' => 'required',


    'competency1_staff' => 'required',


    'competency1_manager' => 'required',


    'competency2_field' => 'required',


    'competency2_target' => 'required',


    'competency2_weight' => 'required',


    'competency2_staff' => 'required',


    'competency2_manager' => 'required',


    'competency3_field' => 'required',


    'competency3_target' => 'required',


    'competency3_weight' => 'required',


    'competency3_staff' => 'required',


    'competency3_manager' => 'required',


    'competency_comment_staff' => 'required',


    'competency_comment_manager' => 'required',


    'behavioural1_field' => 'required',


    'behavioural1_target' => 'required',


    'behavioural1_weight' => 'required',


    'behavioural1_staff' => 'required',


    'behavioural1_manager' => 'required',


    'behavioural2_field' => 'required',


    'behavioural2_target' => 'required',


    'behavioural2_weight' => 'required',


    'behavioural2_staff' => 'required',


    'behavioural2_manager' => 'required',


    'behavioural_comment_staff' => 'required',


    'behavioural_comment_manager' => 'required',


    'development1_field' => 'required',


    'development1_target' => 'required',


    'development1_weight' => 'required',


    'development1_staff' => 'required',


    'development1_manager' => 'required',


    'development2_field' => 'required',


    'development2_target' => 'required',


    'development2_weight' => 'required',


    'development2_staff' => 'required',


    'development2_manager' => 'required',


    'development_comment_staff' => 'required',


    'development_comment_manager' => 'required',


    'final_comment_staff' => 'required',


    'final_comment_manager' => 'required',


    'promoted_to' => 'required',


    'promotion_reasons' => 'required',


    'hr_actioned' => 'required',


    'staff_actioned' => 'required',


    'manager_actioned' => 'required',


    'status' => 'required',


    'completed' => 'required',

 */
    'user_id' => 'required',


    'manager_id' => 'required',


    'year' => 'required',


   /* 'hr_id' => 'required',*/

];

/**
* Display a listing of the resource.
*
* @return  \Illuminate\Http\Response
*/
public function index()
{
    $appraisals = Appraisal::where('user_id', '=', Auth::user()->ID)->get();
    return view('appraisal.index')->with('appraisals',$appraisals);

}




    public function manager()
    {
        $appraisals = Appraisal::where('manager_id', '=', Auth::user()->ID)->get();
        return view('appraisal.manager')->with('appraisals',$appraisals);

    }




    public function hr_view_all()
    {

        return view('appraisal.hr_all_appraisal')->with('appraisals', Appraisal::all());

    }


    /**
     * @return mixed
     * chnage / reset kpi to default
     */
    public function reset_kpi()
    {

        return view('appraisal.reset_kpi')->with('appraisals', Appraisal::all());

    }

/**
* Show the form for creating a new resource.
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
        </head>
        <body>
        <div style="background-color: #ccc;">
        <table width="730" border="0" cellspacing="0" cellpadding="0" style="font-family:Calibri,Candara,Segoe,&quot;Segoe UI&quot;,Optima,Arial,sans-serif;letter-spacing:normal;text-indent:0px;text-transform:none;word-spacing:0px;text-decoration:none;margin:0px auto;background-color:rgb(255,255,255)">
        <tbody>
        <tr style="background-color: #f2f2f2;">
        <td>
        <table>
        <tbody>
        <tr>
        <td width="610">&nbsp;</td>
        <td width="130" height="130" style="padding: 15px;" align="left" valign="bottom"><img src="http://www.primeramfbank.com/sites/default/files/primera.png" alt="Primera Logo" width="278"  class="CToWUd"></td>
        <td width="610">&nbsp;</td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        <tr>
        <td style="padding:50px 40px 10px;font-size:20px">Dear '.$name.',</td>
        </tr>
        <tr>
        <td style="padding:10px 40px;color:#093263;font-size:36px;letter-spacing:-1px;font-weight:bold"><span style="text-decoration:underline; text-align: center;">'.$title.' </span><span class="m_4920298691540864634Apple-converted-space">&nbsp;</span></td>
        </tr>
        <tr>
        <td style="padding:10px 40px 20px"><br> '.$content.' </td>
        </td>
            </tr><tr><td style="padding:10px 40px 20px">Please click Button Below to process <br> <br></tr><tr>
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
            <tr style="background-color: #f1f1f1;">
            <td>
            <table border="0" cellspacing="0" cellpadding="0" > <br><br>
            <tbody>
            <tr valign="top" align="center">
            <td width="40" height="50"></td>
            <td width="220" height="50"><a href="http://www.primeramfbank.com" style="color:rgb(62,70,81);text-decoration:none;font-weight:bold" target="_blank"><span style="color:rgb(62,70,81);text-decoration:none">IRS LOGIN</span></a><br><a href="http://irs.primeramfbank.com/" style="color:rgb(62,70,81);text-decoration:none" target="_blank" ><span style="color:rgb(62,70,81);text-decoration:none;font-size:10px">irs.primeramfbank.com</span></a></td>
            <td width="40" height="50"></td><td width="230" height="50"><a href="mailto:irs@primeramfbank.com" style="color:rgb(62,70,81);text-decoration:none;font-weight:bold" target="_blank"><span style="color:rgb(62,70,81);text-decoration:none">Email</span></a><br><a href="mailto:irs@primeramfbank.com" style="color:rgb(62,70,81);text-decoration:none" target="_blank"><span style="color:rgb(62,70,81);text-decoration:none;font-size:10px">irs@primeramfbank.com</span></a><br></td>
            <td width="220" height="50"><a href="http://www.primeramfbank.com" style="color:rgb(62,70,81);text-decoration:none;font-weight:bold" target="_blank"><span style="color:rgb(62,70,81);text-decoration:none">Website</span></a><br><a href="http://www.primeramfbank.com/" style="color:rgb(62,70,81);text-decoration:none" target="_blank"><span style="color:rgb(62,70,81);text-decoration:none;font-size:10px">www.primeramfbank.com</span></a></td>
            <td width="40" height="50"></td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
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
        
        
        $headers = array('irs@primeramfbank.com,From: Primera Internal Resource Stream');
        $headers = "MIME-Version: 1.0\r\n";
        $headers = "Content-Type: text/html; charset=UTF-8\r\n";
        
        //Send the email
        //add_filter('wp_mail_content_type', create_function('', 'return "text/html"; '));
        wp_mail(''.$email.'', $subject, $body, $headers);
        //remove_filter('wp_mail_content_type', 'set_html_content_type');
        
       

    }
public function create()
{
//
    $this->send_email('Kingsley Chukwuemeka', 'kchukwuemeka@primeramfbank.com','You are doing great','http://irs.primeramfbank.com');

}


    /**
     * @param $user_id
     * @return mixed
     */
    public function start($id)
    {
        //

       /* $appraisal_contents = Appraisal::where('user_id', '=', Auth::user()->id)->where('year', '=', '2018')->get();
        $appraisal_contents = Appraisal::where('user_id', '=', $user_id)->where('year', '=', '2018')->get();*/

        $appraisal_contents = Appraisal::findOrFail($id);

        $appraisal_user = User::find($appraisal_contents->user_id);
        return view('appraisal.start')->with('users', User::all())->with('appraisal_user', $appraisal_user)->with
        ('appraisal_contents', $appraisal_contents);



    }


    public  function kpi(){

        return view('appraisal.kpi')->with('appraisals', Appraisal::all())->with('appraisal_years',
            Appraisal_year::all());

    }
    
    
    public  function supervisor_kpi(){
        
        $appraisals = Appraisal::where('manager_id', '=', Auth::user()->ID)->get();

        return view('appraisal.supervisor_edit_kpi')->with('appraisals', $appraisals)->with('appraisal_years', Appraisal_year::all());
        
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

    /*checking if user data has been entered - kc*/
    $user_id_exist = Appraisal::where('user_id',  $request->input('user_id'))->count();
    $user_app_year = Appraisal::where('year',  $request->input('year'))->count();


if ($validator->fails()) {
return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
} elseif($user_id_exist > 0 && $user_app_year > 0)
{
/*    return response()->json(array([
        'errors' => 'You have already entered data for this staff, no duplicate allowed',
        'state' => 'CA'
    ]));*/

    return Response::json(array('errors' => ["user_id" => ["You have already entered data for this staff, no duplicate allowed"]]));
}else {







    $appraisal = new Appraisal();


    $appraisal->kpi1_field = $request->kpi1_field;


    $appraisal->kpi1_target = $request->kpi1_target;


    $appraisal->kpi1_weight = $request->kpi1_weight;


    $appraisal->kpi1_staff = $request->kpi1_staff;


    $appraisal->kpi1_manager = $request->kpi1_manager;


    $appraisal->kpi2_field = $request->kpi2_field;


    $appraisal->kpi2_target = $request->kpi2_target;


    $appraisal->kpi2_weight = $request->kpi2_weight;


    $appraisal->kpi2_staff = $request->kpi2_staff;


    $appraisal->kpi2_manager = $request->kpi2_manager;


    $appraisal->kpi3_field = $request->kpi3_field;


    $appraisal->kpi3_target = $request->kpi3_target;


    $appraisal->kpi3_weight = $request->kpi3_weight;


    $appraisal->kpi3_staff = $request->kpi3_staff;


    $appraisal->kpi3_manager = $request->kpi3_manager;


    $appraisal->kpi4_field = $request->kpi4_field;


    $appraisal->kpi4_target = $request->kpi4_target;


    $appraisal->kpi4_weight = $request->kpi4_weight;


    $appraisal->kpi4_staff = $request->kpi4_staff;


    $appraisal->kpi4_manager = $request->kpi4_manager;


    $appraisal->kpi5_field = $request->kpi5_field;


    $appraisal->kpi5_target = $request->kpi5_target;


    $appraisal->kpi5_weight = $request->kpi5_weight;


    $appraisal->kpi5_staff = $request->kpi5_staff;


    $appraisal->kpi5_manager = $request->kpi5_manager;


    $appraisal->kpi6_field = $request->kpi6_field;


    $appraisal->kpi6_target = $request->kpi6_target;


    $appraisal->kpi6_weight = $request->kpi6_weight;


    $appraisal->kpi6_staff = $request->kpi6_staff;


    $appraisal->kpi6_manager = $request->kpi6_manager;


    $appraisal->kpi7_field = $request->kpi7_field;


    $appraisal->kpi7_target = $request->kpi7_target;


    $appraisal->kpi7_weight = $request->kpi7_weight;


    $appraisal->kpi7_staff = $request->kpi7_staff;


    $appraisal->kpi7_manager = $request->kpi7_manager;


    $appraisal->kpi8_field = $request->kpi8_field;


    $appraisal->kpi8_target = $request->kpi8_target;


    $appraisal->kpi8_weight = $request->kpi8_weight;


    $appraisal->kpi8_staff = $request->kpi8_staff;


    $appraisal->kpi8_manager = $request->kpi8_manager;


    $appraisal->kpi_comment_staff = $request->kpi_comment_staff;


    $appraisal->kpi_comment_manager = $request->kpi_comment_manager;


    $appraisal->competency1_field = $request->competency1_field;


    $appraisal->competency1_target = $request->competency1_target;


    $appraisal->competency1_weight = $request->competency1_weight;


    $appraisal->competency1_staff = $request->competency1_staff;


    $appraisal->competency1_manager = $request->competency1_manager;


    $appraisal->competency2_field = $request->competency2_field;


    $appraisal->competency2_target = $request->competency2_target;


    $appraisal->competency2_weight = $request->competency2_weight;


    $appraisal->competency2_staff = $request->competency2_staff;


    $appraisal->competency2_manager = $request->competency2_manager;


    $appraisal->competency3_field = $request->competency3_field;


    $appraisal->competency3_target = $request->competency3_target;


    $appraisal->competency3_weight = $request->competency3_weight;


    $appraisal->competency3_staff = $request->competency3_staff;


    $appraisal->competency3_manager = $request->competency3_manager;


    $appraisal->competency_comment_staff = $request->competency_comment_staff;


    $appraisal->competency_comment_manager = $request->competency_comment_manager;


    $appraisal->behavioural1_field = $request->behavioural1_field;


    $appraisal->behavioural1_target = $request->behavioural1_target;


    $appraisal->behavioural1_weight = $request->behavioural1_weight;


    $appraisal->behavioural1_staff = $request->behavioural1_staff;


    $appraisal->behavioural1_manager = $request->behavioural1_manager;


    $appraisal->behavioural2_field = $request->behavioural2_field;


    $appraisal->behavioural2_target = $request->behavioural2_target;


    $appraisal->behavioural2_weight = $request->behavioural2_weight;


    $appraisal->behavioural2_staff = $request->behavioural2_staff;


    $appraisal->behavioural2_manager = $request->behavioural2_manager;


    $appraisal->behavioural_comment_staff = $request->behavioural_comment_staff;


    $appraisal->behavioural_comment_manager = $request->behavioural_comment_manager;


    $appraisal->development1_field = $request->development1_field;


    $appraisal->development1_target = $request->development1_target;


    $appraisal->development1_weight = $request->development1_weight;


    $appraisal->development1_staff = $request->development1_staff;


    $appraisal->development1_manager = $request->development1_manager;


    $appraisal->development2_field = $request->development2_field;


    $appraisal->development2_target = $request->development2_target;


    $appraisal->development2_weight = $request->development2_weight;


    $appraisal->development2_staff = $request->development2_staff;


    $appraisal->development2_manager = $request->development2_manager;


    $appraisal->development_comment_staff = $request->development_comment_staff;


    $appraisal->development_comment_manager = $request->development_comment_manager;


    $appraisal->final_comment_staff = $request->final_comment_staff;


    $appraisal->final_comment_manager = $request->final_comment_manager;


    $appraisal->promoted_to = $request->promoted_to;


    $appraisal->promotion_reasons = $request->promotion_reasons;


    $appraisal->hr_actioned = $request->hr_actioned;


    $appraisal->staff_actioned = $request->staff_actioned;


    $appraisal->manager_actioned = $request->manager_actioned;


    $appraisal->status = $request->status;


    $appraisal->completed = $request->completed;


    $appraisal->user_id = $request->user_id;


    $appraisal->manager_id = $request->manager_id;


    $appraisal->year = $request->year;


    $appraisal->hr_id = $request->hr_id;

    $appraisal->hod_id = $request->hod_id;

    $appraisal->user_id = $request->user_id;


    $appraisal->appraisal_year_id = $request->appraisal_year_id;


$appraisal->save();




    $staff_notification = "Your ".$request->year." Performance Appraisal has been uploaded, please proceed with self assessment. "
        .User::find($request->manager_id)->name." as your manager will appraise you afterwards.";

    $message_manager = "".$request->year." Performance Appraisal has been set for "
        .User::find($request->user_id)->name." ";


    $message_hr = " ".User::find($request->user_id)->name." Key Performance Indicators have been set.";

    
    //send notification to users
    //auth()->user()->notify(new LeaveNotification($appraisal,$message_hr));
    /*$toHr1->notify(new LeaveNotification($leave,$message_hr));
    $toHr2->notify(new LeaveNotification($leave,$message_hr));*/
    User::find($request->user_id)->notify(new LeaveNotification($appraisal,$staff_notification));
    //User::find($request->manager_id)->notify(new LeaveNotification($appraisal,$message_manager));
    
    $link = route('appraisal.start', ['id' => $appraisal->id]);
    $title = "".$request->year." Performance Appraisal Uploaded";
    $button_title = "Click to proceed with self assessment";
    $this->send_email("".User::find($request->user_id)->name."","".User::find($request->user_id)->email."",$staff_notification,$link,$title,$button_title);



    return response()->json($appraisal);
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
$appraisal = Appraisal::findOrFail($id);

//  return view('post.show', ['post' => $post]);
return view('appraisal.show')->with('appraisal',$appraisal);
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
$appraisal = Appraisal::findOrfail($id);

    $appraisal->kpi1_field = $request->kpi1_field;

    $appraisal->kpi1_target = $request->kpi1_target;

    $appraisal->kpi1_weight = $request->kpi1_weight;

    $appraisal->kpi1_staff = $request->kpi1_staff;

    $appraisal->kpi1_manager = $request->kpi1_manager;

    $appraisal->kpi2_field = $request->kpi2_field;

    $appraisal->kpi2_target = $request->kpi2_target;

    $appraisal->kpi2_weight = $request->kpi2_weight;

    $appraisal->kpi2_staff = $request->kpi2_staff;

    $appraisal->kpi2_manager = $request->kpi2_manager;

    $appraisal->kpi3_field = $request->kpi3_field;

    $appraisal->kpi3_target = $request->kpi3_target;

    $appraisal->kpi3_weight = $request->kpi3_weight;

    $appraisal->kpi3_staff = $request->kpi3_staff;

    $appraisal->kpi3_manager = $request->kpi3_manager;

    $appraisal->kpi4_field = $request->kpi4_field;

    $appraisal->kpi4_target = $request->kpi4_target;

    $appraisal->kpi4_weight = $request->kpi4_weight;

    $appraisal->kpi4_staff = $request->kpi4_staff;

    $appraisal->kpi4_manager = $request->kpi4_manager;

    $appraisal->kpi5_field = $request->kpi5_field;

    $appraisal->kpi5_target = $request->kpi5_target;

    $appraisal->kpi5_weight = $request->kpi5_weight;

    $appraisal->kpi5_staff = $request->kpi5_staff;

    $appraisal->kpi5_manager = $request->kpi5_manager;

    $appraisal->kpi6_field = $request->kpi6_field;

    $appraisal->kpi6_target = $request->kpi6_target;

    $appraisal->kpi6_weight = $request->kpi6_weight;

    $appraisal->kpi6_staff = $request->kpi6_staff;

    $appraisal->kpi6_manager = $request->kpi6_manager;

    $appraisal->kpi7_field = $request->kpi7_field;

    $appraisal->kpi7_target = $request->kpi7_target;

    $appraisal->kpi7_weight = $request->kpi7_weight;

    $appraisal->kpi7_staff = $request->kpi7_staff;

    $appraisal->kpi7_manager = $request->kpi7_manager;

    $appraisal->kpi8_field = $request->kpi8_field;

    $appraisal->kpi8_target = $request->kpi8_target;

    $appraisal->kpi8_weight = $request->kpi8_weight;

    $appraisal->kpi8_staff = $request->kpi8_staff;

    $appraisal->kpi8_manager = $request->kpi8_manager;

    $appraisal->kpi_comment_staff = $request->kpi_comment_staff;

    $appraisal->kpi_comment_manager = $request->kpi_comment_manager;

    $appraisal->competency1_field = $request->competency1_field;

    $appraisal->competency1_target = $request->competency1_target;

    $appraisal->competency1_weight = $request->competency1_weight;

    $appraisal->competency1_staff = $request->competency1_staff;

    $appraisal->competency1_manager = $request->competency1_manager;

    $appraisal->competency2_field = $request->competency2_field;

    $appraisal->competency2_target = $request->competency2_target;

    $appraisal->competency2_weight = $request->competency2_weight;

    $appraisal->competency2_staff = $request->competency2_staff;

    $appraisal->competency2_manager = $request->competency2_manager;

    $appraisal->competency3_field = $request->competency3_field;

    $appraisal->competency3_target = $request->competency3_target;

    $appraisal->competency3_weight = $request->competency3_weight;

    $appraisal->competency3_staff = $request->competency3_staff;

    $appraisal->competency3_manager = $request->competency3_manager;

    $appraisal->competency_comment_staff = $request->competency_comment_staff;

    $appraisal->competency_comment_manager = $request->competency_comment_manager;

    $appraisal->behavioural1_field = $request->behavioural1_field;

    $appraisal->behavioural1_target = $request->behavioural1_target;

    $appraisal->behavioural1_weight = $request->behavioural1_weight;

    $appraisal->behavioural1_staff = $request->behavioural1_staff;

    $appraisal->behavioural1_manager = $request->behavioural1_manager;

    $appraisal->behavioural2_field = $request->behavioural2_field;

    $appraisal->behavioural2_target = $request->behavioural2_target;

    $appraisal->behavioural2_weight = $request->behavioural2_weight;

    $appraisal->behavioural2_staff = $request->behavioural2_staff;

    $appraisal->behavioural2_manager = $request->behavioural2_manager;

    $appraisal->behavioural_comment_staff = $request->behavioural_comment_staff;

    $appraisal->behavioural_comment_manager = $request->behavioural_comment_manager;

    $appraisal->development1_field = $request->development1_field;

    $appraisal->development1_target = $request->development1_target;

    $appraisal->development1_weight = $request->development1_weight;

    $appraisal->development1_staff = $request->development1_staff;

    $appraisal->development1_manager = $request->development1_manager;

    $appraisal->development2_field = $request->development2_field;

    $appraisal->development2_target = $request->development2_target;

    $appraisal->development2_weight = $request->development2_weight;

    $appraisal->development2_staff = $request->development2_staff;

    $appraisal->development2_manager = $request->development2_manager;

    $appraisal->development_comment_staff = $request->development_comment_staff;

    $appraisal->development_comment_manager = $request->development_comment_manager;

    $appraisal->final_comment_staff = $request->final_comment_staff;

    $appraisal->final_comment_manager = $request->final_comment_manager;

    $appraisal->promoted_to = $request->promoted_to;

    $appraisal->promotion_reasons = $request->promotion_reasons;

    $appraisal->hr_actioned = $request->hr_actioned;

    $appraisal->staff_actioned = $request->staff_actioned;

    $appraisal->manager_actioned = $request->manager_actioned;

    $appraisal->status = $request->status;

    $appraisal->completed = $request->completed;

    $appraisal->user_id = $request->user_id;

    $appraisal->manager_id = $request->manager_id;

    $appraisal->year = $request->year;

    $appraisal->hr_id = $request->hr_id;
    
     $appraisal->hod_id = $request->hod_id;


    $appraisal->user_id = $request->user_id;


    $appraisal->appraisal_year_id = $request->appraisal_year_id;


$appraisal->save();
return response()->json($appraisal);

}
}



    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update_start(Request $request, $id)
    {
//

        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $appraisal = Appraisal::findOrfail($id);


            if (auth::id() == $appraisal->user_id) {


            $appraisal->kpi1_staff = $request->kpi1_staff;


            $appraisal->kpi2_staff = $request->kpi2_staff;


            $appraisal->kpi3_staff = $request->kpi3_staff;


            $appraisal->kpi4_staff = $request->kpi4_staff;


            $appraisal->kpi5_staff = $request->kpi5_staff;


            $appraisal->kpi6_staff = $request->kpi6_staff;


            $appraisal->kpi7_staff = $request->kpi7_staff;


            $appraisal->kpi8_staff = $request->kpi8_staff;


            $appraisal->kpi_comment_staff = $request->kpi_comment_staff;


            $appraisal->competency1_staff = $request->competency1_staff;


            $appraisal->competency2_staff = $request->competency2_staff;


            $appraisal->competency3_staff = $request->competency3_staff;


            $appraisal->competency_comment_staff = $request->competency_comment_staff;


            $appraisal->behavioural1_staff = $request->behavioural1_staff;


            $appraisal->behavioural2_staff = $request->behavioural2_staff;


            $appraisal->behavioural_comment_staff = $request->behavioural_comment_staff;


            $appraisal->development1_staff = $request->development1_staff;


            $appraisal->development2_staff = $request->development2_staff;


            $appraisal->development_comment_staff = $request->development_comment_staff;


            $appraisal->final_comment_staff = $request->final_comment_staff;


            $appraisal->hr_actioned = 1;

            $appraisal->staff_actioned = 1;


  $appraisal->save();


                $staff_notification = "Your ".$request->year." Performance Appraisal has been successfully submited
                and currently sent to your manager "
                    .User::find($request->manager_id)->name."  to appraise you.  ";

                $message_manager = ""
                    .User::find($request->user_id)->name." has successfully submitted the appraisal form. Kindly
                     assess "
                    .User::find($request->user_id)->name." as the manager";


                $message_hr = "".User::find($request->user_id)->name." has successfully completed the "
                    .$request->year." performance appraisal  pending manager ".User::find($request->manager_id)->name
                    ." Appraisal ";

                //send notification to users
                User::find(46)->notify(new LeaveNotification($appraisal,$message_hr));
                /*$toHr1->notify(new LeaveNotification($leave,$message_hr));
                $toHr2->notify(new LeaveNotification($leave,$message_hr));*/
                User::find($request->user_id)->notify(new LeaveNotification($appraisal,$staff_notification));
                User::find($request->manager_id)->notify(new LeaveNotification($appraisal,$message_manager));
                
                
                //sending email staff
                $link1 = route('appraisal.start', ['id' => $appraisal->id]);
                $title1 = "Successfully Submitted ".$request->year." Performance Appraisal ";
                $button_title1 = "Click here if you wish to edit your assessment";
                $this->send_email("".User::find($request->user_id)->name."","".User::find($request->user_id)->email."",$staff_notification,$link1,$title1,$button_title1);
                //end of send email
                
                //sending email manager
                $link = route('appraisal.start', ['id' => $appraisal->id]);
                $title = "Appraise ".ucwords(User::find($request->user_id)->name)."";
                $button_title = "Click to assess ".ucwords(User::find($request->user_id)->name)."";
                $this->send_email("".User::find($request->manager_id)->name."","".User::find($request->manager_id)->email."",$message_manager,$link,$title,$button_title);
                //end of send email
                
                

                //message to popups
                $display_notification = $staff_notification;


            }elseif(auth::id() == $appraisal->manager_id) {


                $appraisal->status = 1;

                $appraisal->completed = 1;

                $appraisal->kpi1_manager = $request->kpi1_manager;


                $appraisal->kpi2_manager = $request->kpi2_manager;


                $appraisal->kpi3_manager = $request->kpi3_manager;


                $appraisal->kpi4_manager = $request->kpi4_manager;


                $appraisal->kpi5_manager = $request->kpi5_manager;


                $appraisal->kpi6_manager = $request->kpi6_manager;


                $appraisal->kpi7_manager = $request->kpi7_manager;


                $appraisal->kpi8_manager = $request->kpi8_manager;


                $appraisal->kpi_comment_manager = $request->kpi_comment_manager;


                $appraisal->competency1_manager = $request->competency1_manager;


                $appraisal->competency2_manager = $request->competency2_manager;


                $appraisal->competency3_manager = $request->competency3_manager;


                $appraisal->competency_comment_manager = $request->competency_comment_manager;


                $appraisal->behavioural1_manager = $request->behavioural1_manager;


                $appraisal->behavioural2_manager = $request->behavioural2_manager;


                $appraisal->behavioural_comment_manager = $request->behavioural_comment_manager;


                $appraisal->development1_manager = $request->development1_manager;


                $appraisal->development2_manager = $request->development2_manager;


                $appraisal->development_comment_manager = $request->development_comment_manager;


                $appraisal->final_comment_staff = $request->final_comment_staff;

                $appraisal->final_comment_manager = $request->final_comment_manager;


                $appraisal->promoted_to = $request->promoted_to;

                $appraisal->promotion_reasons = $request->promotion_reasons;


                $appraisal->manager_actioned = 1;

  $appraisal->save();

                $staff_notification = "Your manager ".User::find($request->manager_id)->name." has successfully
                completed your"
                    .$request->year." Performance Appraisal. Kindly proceed to accept or reject assessment ";

                $message_manager = " You have successfully submitted  "
                    .User::find($request->user_id)->name." "
                    .$request->year." Performance Appraisal";


                $message_hr = "".User::find($request->user_id)->name." has successfully completed the "
                    .$request->year." performance appraisal also appraised by  manager ".User::find
                    ($request->manager_id)->name
                    .". Currently pending accept/reject by ".User::find($request->user_id)->name." ";

                //send notification to users
                User::find(46)->notify(new LeaveNotification($appraisal,$message_hr));
                /*$toHr1->notify(new LeaveNotification($leave,$message_hr));
                $toHr2->notify(new LeaveNotification($leave,$message_hr));*/
                User::find($request->user_id)->notify(new LeaveNotification($appraisal,$staff_notification));
                User::find($request->manager_id)->notify(new LeaveNotification($appraisal,$message_manager));

                
                
                
                //sending email staff
                $link = route('appraisal.report', ['id' => $appraisal->id]);
                $title = "".User::find($request->manager_id)->name." Successfully Submitted Your Appraisal ";
                $button_title = "Click here to accept or reject manager's assessment";
                $this->send_email("".User::find($request->user_id)->name."","".User::find($request->user_id)->email."",$staff_notification,$link,$title,$button_title);
                //end of send email
                
                //sending email manager
                $link1 = route('appraisal.report', ['id' => $appraisal->id]);
                $title1 = "Successfully Submitted Assessment for ".ucwords(User::find($request->user_id)->name)."";
                $button_title1 = "Click to view assessment";
                $this->send_email("".User::find($request->manager_id)->name."","".User::find($request->manager_id)->email."",$message_manager,$link1,$title1,$button_title1);
                //end of send email
                
                $hr_email = "hr@primera-africa.com";
                //sending email hr
                $link2 = route('appraisal.report', ['id' => $appraisal->id]);
                $title2 = "".User::find($request->manager_id)->name."  successfully assessed  ".ucwords(User::find($request->user_id)->name)."";
                $button_title2 = "Click to view assessment & score";
                $this->send_email("HR",$hr_email,$message_hr,$link2,$title2,$button_title2);
                //end of send email
                
                
                

                $display_notification = $message_manager;
            }





          

            //send notification to user
           // Session::flash('success', 'Discussion Created Successfully');

           // return redirect()->route('appraisal.report', ['id' => $appraisal->id]); // saving the discussiong in a
            // varaible and passing it with the slug


            return response()->json(['result'=>'1','message'=> "$display_notification"]);

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

$appraisal = Appraisal::findOrfail($id);
$appraisal->delete();

return response()->json($appraisal);
}


    /**
     * @param $id
     * @return mixed
     */
    public  function report($id){


        $appraisal_contents = Appraisal::findOrFail($id);

        $appraisal_user = User::find($appraisal_contents->user_id);
        return view('appraisal.report')->with('users', User::all())->with('appraisal_user', $appraisal_user)->with
        ('appraisal_contents', $appraisal_contents)->with('appraisal_years',
            Appraisal_year::all()) ;


    }

    /**
     * @param $id
     * @return mixed
     */
    
    
    
    
    
    //ACCEPT OR REJECT APPRAISAL
    public function do_approve(Request $request, $id){
        
        
        $appraisal = Appraisal::findOrfail($id);
        
        /* for supervisours */
        
        $appraisal->status = 1;
        
        
        $appraisal->save();
        
        
        $staff_notification = "Your have successfully accepted the "
        .$appraisal->year." Performance Appraisal ";
        
        $message_manager = "".User::find($appraisal->user_id)->name." has successfully accepted the "
        .$appraisal->year." performance appraisal";
        
        
        $message_hr = "".User::find($appraisal->user_id)->name." has successfully accepted the "
        .$appraisal->year." performance appraisal";
        
        $message_hod = "".User::find($appraisal->user_id)->name." has successfully accepted the "
        .$appraisal->year." performance appraisal. Kindly comment on ".ucwords(User::find($appraisal->user_id)->name)."  Performance Appraisal";
        
        //send notification to users
        User::find(162)->notify(new LeaveNotification($appraisal,$message_hr));
        User::find(168)->notify(new LeaveNotification($appraisal,$message_hr));
        /*$toHr1->notify(new LeaveNotification($leave,$message_hr));
         $toHr2->notify(new LeaveNotification($leave,$message_hr));*/
        User::find($appraisal->user_id)->notify(new LeaveNotification($appraisal,$staff_notification));
        User::find($appraisal->manager_id)->notify(new LeaveNotification($appraisal,$message_manager));
        
        if($appraisal->hod_id != 0){
        User::find($appraisal->hod_id)->notify(new LeaveNotification($appraisal,$message_hod));
        }
        /*auth()->user()->notify(new LeaveNotification($post,$message_requester) );
         User::find($request->supervisor)->notify(new LeaveNotification($post,$message_suppervisor) );
         User::find($request->reliever)->notify(new LeaveNotification($post, $message_reliever) );*/
        
        
        
        
        // fire leavePublished event after post is successfully added to database
        // event(new leavePublished($post));
        
        
        
        
        //sending email staff
        $link = route('appraisal.report', ['id' => $appraisal->id]);
        $title = "Successfully Accepted  ".User::find($appraisal->manager_id)->name." Assessment ";
        $button_title = "Click here to view assessment";
        $this->send_email("".User::find($appraisal->user_id)->name."","".User::find($appraisal->user_id)->email."",$staff_notification,$link,$title,$button_title);
        //end of send email
        
        //sending email manager
        $link1 = route('appraisal.report', ['id' => $appraisal->id]);
        $title1 = "".ucwords(User::find($appraisal->user_id)->name)." Accepted Your Assessment";
        $button_title1 = "Click to view assessment";
        $this->send_email("".User::find($appraisal->manager_id)->name."","".User::find($appraisal->manager_id)->email."",$message_manager,$link1,$title1,$button_title1);
        //end of send email
        
        
         if($appraisal->hod_id != 0){
        //sending email HOD
        $link2 = route('appraisal.report', ['id' => $appraisal->id]);
        $title2 = "Comment on ".ucwords(User::find($appraisal->user_id)->name)."  Performance Appraisal";
        $button_title2 = "Click to view and comment";
        $this->send_email("".User::find($appraisal->hod_id)->name."","".User::find($appraisal->hod_id)->email."",$message_hod,$link2,$title2,$button_title2);
        //end of send email
         }
        
        
        $hr_email = "hr@primera-africa.com";
        //sending email hr
        $link3 = route('appraisal.report', ['id' => $appraisal->id]);
        $title3 = "".User::find($appraisal->manager_id)->name." Assessment accepted by ".ucwords(User::find($appraisal->user_id)->name)."";
        $button_title3 = "Click to view assessment & score";
        $this->send_email("HR",$hr_email,$message_hr,$link3,$title3,$button_title3);
        //end of send email
        
        
        
        
        
        return response()->json(['result'=>'1','message'=> "Your have successfully accepted the "
                                .$appraisal->year." Performance Appraisal."]);
        
    }
    
    
    
    public function do_reject(Request $request, $id){
        
        
        $appraisal = Appraisal::findOrfail($id);
        
        /* for supervisours */
        
        $appraisal->status = 2;
        $appraisal->reject_cotent = $request->comment;
        
        $appraisal->save();
        
        
        
        $staff_notification = "You have rejected ".User::find
        ($appraisal->manager_id)->name." assessment for ".$appraisal->year." performance appraisal. Your comment has been sent to HR.";
        
        $message_manager = "".User::find($appraisal->user_id)->name." rejected your assessment";
        
        
        $message_hr = "".User::find($appraisal->user_id)->name." rejected ".User::find($appraisal->manager_id)->name." assessment for"
        .$appraisal->year." performance appraisal with comment: ".$request->comment.""  ;
        
        $message_hod = "".User::find($appraisal->user_id)->name." has been successfully assessed on the "
        .$appraisal->year." performance appraisal. Kindly comment on ".ucwords(User::find($appraisal->user_id)->name)."  Performance Appraisal";
        
        
        //send notification to users
        User::find(162)->notify(new LeaveNotification($appraisal,$message_hr));
        User::find(168)->notify(new LeaveNotification($appraisal,$message_hr));
        /*$toHr1->notify(new LeaveNotification($leave,$message_hr));
         $toHr2->notify(new LeaveNotification($leave,$message_hr));*/
        User::find($appraisal->user_id)->notify(new LeaveNotification($appraisal,$staff_notification));
        //User::find($appraisal->manager_id)->notify(new LeaveNotification($appraisal,$message_manager));
        
        
        
        
        
        //sending email staff
        $link = route('appraisal.report', ['id' => $appraisal->id]);
        $title = "Rejected  ".User::find($appraisal->manager_id)->name." Assessment ";
        $button_title = "Click here to view assessment";
        $this->send_email("".User::find($appraisal->user_id)->name."","".User::find($appraisal->user_id)->email."",$staff_notification,$link,$title,$button_title);
        //end of send email
        
        //sending email manager
        //$link = route('appraisal.report', ['id' => $appraisal->id]);
       // $title = "".ucwords(User::find($appraisal->user_id)->name)." Accepted Your Assessment";
        //$button_title = "Click to view assessment";
        //$this->send_email("".User::find($appraisal->manager_id)->name."","".User::find($appraisal->manager_id)->email."",$message_manager,$link,$title,$button_title);
        //end of send email
        
        
        //sending email HOD
        $link1 = route('appraisal.report', ['id' => $appraisal->id]);
        $title1 = "Comment on ".ucwords(User::find($appraisal->user_id)->name)."  Performance Appraisal";
        $button_title1 = "Click to view and comment";
        $this->send_email("".User::find($appraisal->hod_id)->name."","".User::find($appraisal->hod_id)->email."",$message_hod,$link1,$title1,$button_title1);
        //end of send email
        
        
        
        $hr_email = "hr@primera-africa.com";
        //sending email hr
        $link2 = route('appraisal.report', ['id' => $appraisal->id]);
        $title2 = "".User::find($appraisal->manager_id)->name." Assessment Rejected by ".ucwords(User::find($appraisal->user_id)->name)."";
        $button_title2 = "Click to view assessment & score";
        $this->send_email("HR",$hr_email,$message_hr,$link2,$title2,$button_title2);
        //end of send email
        
        
        
        
        
        
        return response()->json(['result'=>'1','message'=> "You have rejected ".User::find
                                ($appraisal->manager_id)->name." assessment for ".$appraisal->year." performance appraisal. Your comment has been sent to HR. "]);
        
    }
    
    
    
    
    
    
    public function hod_comment(Request $request, $id){
        
        
        $appraisal = Appraisal::findOrfail($id);
        
        /* for supervisours */
        
        $appraisal->hod_actioned = 1;
        $appraisal->final_comment_staff = $request->comment;
        
        $appraisal->save();
        
        
        
        $staff_notification = "Final comment for your ".$appraisal->year." performance appraisal was submitted by  ".User::find
        ($appraisal->hod_id)->name.". Comment: ".$request->comment."";
        
        $message_manager = " ".User::find
        ($appraisal->hod_id)->name." sent final comment for ".User::find
        ($appraisal->user_id)->name."  ".$appraisal->year." performance appraisal.  Comment: ".$request->comment."";
        
        
        $message_hr = " ".User::find
        ($appraisal->hod_id)->name." sent final comment for ".User::find
        ($appraisal->user_id)->name."  ".$appraisal->year." performance appraisal .  Comment: ".$request->comment."";
        
        
        $message_hod = "Successfully submitted final comment for ".ucwords(User::find($appraisal->user_id)->name)."  Performance Appraisal";
        
        //send notification to users
        User::find(162)->notify(new LeaveNotification($appraisal,$message_hr));
        User::find(168)->notify(new LeaveNotification($appraisal,$message_hr));
        /*$toHr1->notify(new LeaveNotification($leave,$message_hr));
         $toHr2->notify(new LeaveNotification($leave,$message_hr));*/
        User::find($appraisal->user_id)->notify(new LeaveNotification($appraisal,$staff_notification));
        User::find($appraisal->manager_id)->notify(new LeaveNotification($appraisal,$message_manager));
        
        
        
        
        //sending email staff
        $link = route('appraisal.report', ['id' => $appraisal->id]);
        $title = "".User::find($appraisal->hod_id)->name." Successful sent final comment";
        $button_title = "Click here to view assessment";
        $this->send_email("".User::find($appraisal->user_id)->name."","".User::find($appraisal->user_id)->email."",$staff_notification,$link,$title,$button_title);
        //end of send email
        
        //sending email manager
        $link1 = route('appraisal.report', ['id' => $appraisal->id]);
        $title1 = "".User::find($appraisal->hod_id)->name." Successful sent comment for ".User::find($appraisal->user_id)->name."";
        $button_title1 = "Click to view assessment";
        $this->send_email("".User::find($appraisal->manager_id)->name."","".User::find($appraisal->manager_id)->email."",$message_manager,$link1,$title1,$button_title1);
        //end of send email
        
        
        //sending email HOD
        $link2 = route('appraisal.report', ['id' => $appraisal->id]);
        $title2 = "Successfully Commented on ".ucwords(User::find($appraisal->user_id)->name)."  Performance Appraisal";
        $button_title2 = "Click to view assessment";
        $this->send_email("".User::find($appraisal->hod_id)->name."","".User::find($appraisal->hod_id)->email."",$message_hod,$link2,$title2,$button_title2);
        //end of send email
        
        
        
        $hr_email = "hr@primera-africa.com";
        //sending email hr
        $link3 = route('appraisal.report', ['id' => $appraisal->id]);
        $title3 = "".User::find($appraisal->hod_id)->name." Successful sent comment for ".User::find($appraisal->user_id)->name."";
        $button_title3 = "Click to view assessment & score";
        $this->send_email("HR",$hr_email,$message_hr,$link3,$title3,$button_title3);
        //end of send email
        
        
        
        return response()->json(['result'=>'1','message'=> "Final comment for ".User::find
                                ($appraisal->user_id)->name."  ".$appraisal->year." performance appraisal was successful."]);
        
    }
    
    //END OF ACCEPT OR REJECT APPRAISAL
    public  function download($id){



        $appraisal_contents = Appraisal::findOrFail($id);

        $appraisal_user = User::find($appraisal_contents->user_id);

       // dd($appraisal_contents);
            $data = [ 'users' => User::all() ];

        $data2 = [ 'appraisal_user' => $appraisal_user];

        $data3 = ['appraisal_contents' => $appraisal_contents];

        $data4 = ['appraisal_years' => Appraisal_year::all() ];


      /*  $pdf = PDF::loadView('appraisal.download', compact('data','data2','data3','data4' ));*/
       /* return $pdf->download('report.pdf',compact('data','data2','data3','data4' ));*/

      /*  return $pdf->download('appraisal_report.pdf');*/

        return view('appraisal.download')->with('users', User::all())->with('appraisal_user', $appraisal_user)->with
        ('appraisal_contents', $appraisal_contents)->with('appraisal_years',
            Appraisal_year::all()) ;





    }
}
