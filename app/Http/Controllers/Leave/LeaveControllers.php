<?php

namespace App\Http\Controllers\Leave;

use App\Leave;
use App\Notifications\LeaveNotification;
use App\WorkflowAction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;

class LeaveControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //setting validations
    protected $rules =
    [
      'leave_category' => 'required|min:2|max:132',
      'from' => 'required',
      'to' => 'required',
      'supervisor' => 'required',
      'reliever' => 'required',
      'handover' => 'required'

    ];





    public function send_email($name,$email,$content,$link,$title,$button_title,$leave_name, $leave_category,$leave_duration,$leave_date,$leave_year,$supervisor,$reliever){

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


      <tr>
      <td style="padding:10px 40px 20px"><br>



      <h2>LEAVE DETAILS</h2>



      <table class="maintable">

      <tr>
      <td>Name</td>
      <td>'.$leave_name.'</td>

      </tr>
      <tr>
      <td>Leave Category: </td>
      <td>'.ucwords($leave_category).'</td>
      </tr>
      <tr>

      <td>Leave Duration: </td>
      <td>'.$leave_duration.' day(s)</td>
      </tr>
      <tr>

      <td>Leave Year: </td>
      <td>'.$leave_year.'</td>
      </tr>
      <tr>

      <td>Start Date - Resumption Date: </td>
      <td>'.$leave_date.'</td>
      </tr>
      <tr>

      <td>Name of Supervisor: </td>
      <td>'.$supervisor.'</td>
      </tr>
      <tr>
      <td>Name of Reliever:</td>
      <td>'.$reliever.'</td>

      </tr>

      </table> </td>


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


    public function __construct()
    {
      $this->middleware('auth');
    }


    public function index()
    {
        //

       // $posts = Leave::orderBy('created_at', 'desc')->paginate(6);

      $leaves = Leave::where('user_id', '=', Auth::user()->ID)->get();

      $total_annual = Leave::where('user_id', '=', Auth::user()->ID)
      ->where('hr_action', '=', '1')
      ->whereRaw('year(`created_at`) = ?', array(date('Y')))
      ->whereIn('leave_category', ['annual','casual'])->sum('no_days');

      $total_examination = Leave::where('user_id', '=', Auth::user()->ID)
      ->where('hr_action', '=', '1')
      ->whereRaw('year(`created_at`) = ?', array(date('Y')))
      ->where('leave_category',  '=', 'examination')->sum('no_days');

      $total_compassionate= Leave::where('user_id', '=', Auth::user()->ID)
      ->where('hr_action', '=', '1')
      ->whereRaw('year(`created_at`) = ?', array(date('Y')))
      ->where('leave_category',  '=', 'compassionate')->sum('no_days');

      $total_sick= Leave::where('user_id', '=', Auth::user()->ID)
      ->where('hr_action', '=', '1')
      ->whereRaw('year(`created_at`) = ?', array(date('Y')))
      ->where('leave_category',  '=', 'sick')->sum('no_days');


       // return view('leave.index', compact('leaves'))->with('users', User::all());


      return view('leave.index')->with('users', User::all())->with('leaves', $leaves)
      ->with('total_annual', $total_annual)
      ->with('total_examination', $total_examination)
      ->with('total_compassionate', $total_compassionate)
      ->with('total_sick', $total_sick);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       // auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        // use this to clear off notifications - kc best
        /*$id = auth()->user()->unreadNotifications[0]->ID;
        auth()->user()->unreadNotifications->where('id', $id)->markAsRead();*/

        return view('leave.apply')->with('users', User::all());
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      $string_here = [];
        /*$string_here = implode(',', $request->handover);
        $string_here);*/
        /*@foreach($string_here as $array)
        dd($array);
        @endforeach*/
        //


        // print $checkboxValues;






        $total_compassionate = Leave::where('user_id', '=', Auth::user()->ID)
        ->where('hr_action', '=', '1')
        ->whereRaw('year(`created_at`) = ?', array(date('Y')))
        ->where('leave_category', '=', 'compassionate')->sum('no_days');

        $total_sick = Leave::where('user_id', '=', Auth::user()->ID)
        ->where('hr_action', '=', '1')
        ->whereRaw('year(`created_at`) = ?', array(date('Y')))
        ->where('leave_category', '=', 'sick')->sum('no_days');

        $start_date_field = carbon::parse($request->from);
        $end_date_field = carbon::parse($request->to);

        $the_diff_date = $start_date_field->diffinweekdays($end_date_field);

        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            // return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
            /*  $response = [];
              foreach ($validator->messages()->toArray() as $key => $value) {
                  $obj = new \stdClass();
                  $obj->name = $key;
                  $obj->message = $value[0];

                  array_push($response, $obj);
                }*/

                return response()->json(['result' => '0', 'message' => $validator->messages()->all()]);

            // return response()->json($validator->errors(), 422)
              } else {


// check if annual is greater than 20
                if(($request->leave_category == "annual") || ($request->leave_category == "casual")  ){
                  $total_annual = Leave::where('user_id', '=', Auth::user()->ID)
                  ->where('hr_action', '=', '1')
                  ->whereRaw('year(`created_at`) = ?', array(date('Y')))
                  ->whereIn('leave_category', ['annual', 'casual'])->sum('no_days');


                  if (($total_annual + $the_diff_date) > 20) {

                    return response()->json(['result' => '0', 'message' => "Your leave duration exceeds
                      your annual leave
                      balance, please reduce to ".(20 -$total_annual + $the_diff_date)." days "]);

                  }
                }

            // check if examination is greater than 7
                if($request->leave_category == "examination"){
                  $total_examination = Leave::where('user_id', '=', Auth::user()->ID)
                  ->where('hr_action', '=', '1')
                  ->whereRaw('year(`created_at`) = ?', array(date('Y')))
                  ->where('leave_category', '=', 'examination')->sum('no_days');


                  if (($total_examination + $the_diff_date) > 7) {

                    return response()->json(['result' => '0', 'message' => "Your leave duration exceeds
                      your examination leave
                      balance, please reduce to ".(7 -$total_examination + $the_diff_date)." days "]);

                  }
                }


            // check if compassionate is greater than 5
                if($request->leave_category == "compassionate"){
                  $total_compassionate = Leave::where('user_id', '=', Auth::user()->ID)
                  ->where('hr_action', '=', '1')
                  ->whereRaw('year(`created_at`) = ?', array(date('Y')))
                  ->where('leave_category', '=', 'compassionate')->sum('no_days');


                  if (($total_compassionate + $the_diff_date) > 7) {

                    return response()->json(['result' => '0', 'message' => "Your leave duration exceeds
                      your compassionate leave
                      balance, please reduce to ".(5 -$total_compassionate + $the_diff_date)." days "]);

                  }
                }

            //check for examination

                //getting the task and status array kingsley cool
            /*$storedarray = [];
            @foreach($article->tags()->where('type', 'person')->get() as $person)
                $storedarray[] = $person->name;
@endforeach
$string = implode(', ', $storedarray);*/



$post = new leave();
$post->leave_category = $request->leave_category;
$post->supervisor_id = $request->supervisor;
$post->reliever_id = $request->reliever;
$post->no_days =$the_diff_date;
$post->leave_year = $request->leave_year;
$post->type = "full";
$post->start_date = $start_date_field;
$post->end_date = $end_date_field;

$post->handover_task =$request->handover;
           /* $post->handover_task =  implode('|', array_column($request->handover, 'task'));
           $post->handover_status =  implode('|', array_column($request->handover, 'status'));*/
           /// $post->task =  implode(',', $request->handover[status]);



           $post->user_id = auth::id();
           $post->save();

           $message_requester = "Your ".$the_diff_date." day(s) leave application has
           been sent to ".User::find($request->supervisor)->display_name." for approval.";
           $message_suppervisor = " ".User::find(auth::id())->display_name." needs your approval for
           ".$the_diff_date." day(s) leave application.";
           $message_reliever = "Please note you have been selected as the reliever for ".User::find(auth::id())->display_name." ".$the_diff_date." day(s) leave application.";

            //send notification to users
           auth()->user()->notify(new LeaveNotification($post,$message_requester) );
           User::find($request->supervisor)->notify(new LeaveNotification($post,$message_suppervisor) );
           User::find($request->reliever)->notify(new LeaveNotification($post, $message_reliever) );

            // fire leavePublished event after post is successfully added to database
           // event(new leavePublished($post));

            //$leave_name, $leave_category,$leave_duration,$leave_date,$leave_year,$supervisor,$reliever

             //sending email staff
           $link = route('leave.show', ['id' => $post->id]);
           $title = "Your Leave Request Submitted Successfully";
           $button_title = "Click to view";
           $leave_date = "".$start_date_field." to ".$post->end_date."";
           $this->send_email("".User::find($post->user_id)->display_name."","".User::find( $post->user_id)->user_email."",$message_requester,$link,$title,$button_title,"".User::find($post->user_id)->display_name."",$request->leave_category,$the_diff_date,$leave_date,$request->leave_year,"".User::find($request->supervisor)->display_name."","".User::find($request->reliever)->display_name."");
                //end of send email


                 //sending email reliever
           $link = route('leave.show', ['id' => $post->id]);
           $title2 = "Leave Request From ".ucwords(User::find($post->user_id)->display_name)."";
           $button_title = "Click here to view";
           $leave_date = "".$start_date_field." to ".$post->end_date."";
           $this->send_email("".User::find($request->reliever)->display_name."","".User::find($request->reliever)->user_email."",$message_reliever,$link,$title2,$button_title,"".User::find($post->user_id)->display_name."",$request->leave_category,$the_diff_date,$leave_date,$request->leave_year,"".User::find($request->supervisor)->display_name."","".User::find($request->reliever)->display_name."");
                //end of send email

                 //sending email manager
           $link = route('leave.show', ['id' => $post->id]);
           $title2 = "Leave Request From ".ucwords(User::find($post->user_id)->display_name)."";
           $button_title = "Click here to view";
           $leave_date = "".$start_date_field." to ".$post->end_date."";
           $this->send_email("".User::find($request->supervisor)->display_name."","".User::find($request->supervisor)->user_email."",$message_suppervisor,$link,$title2,$button_title,"".User::find($post->user_id)->display_name."",$request->leave_category,$the_diff_date,$leave_date,$request->leave_year,"".User::find($request->supervisor)->display_name."","".User::find($request->reliever)->display_name."");
                //end of send email





           return response()->json(['result'=>'1','message'=> "Your ".$post->no_days." day(s) application was
            successful,
            pending approval
            from supervisor( ".User::find($post->supervisor_id)->display_name." )"]);
         }

       /*
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {

            //pass validator errors as errors object for ajax response

            return response()->json(['errors'=>$validator->errors()]);
        }

        else{
            Lesson::create($request->all());
            return $this->respondCreated('Lesson created successfully');
          }*/


        }

/**
    show the approval page for supervisor and HR
 **/
    public function approve(){


        // $posts = Leave::orderBy('created_at', 'desc')->paginate(6);


//dd($leave);
        //get for HR
      if((auth::id() == '162') || (auth::id() == '168') || (auth::id() == '182')) {


        $leaves = Leave::where('supervisor_action', '=', '1')->where('hr_action', '=', '0')->get();

        $leaves_count = Leave::where('supervisor_action', '=', '1')->where('hr_action', '=', '0')->count();

        $leaves_completed = Leave::where('hr_action', '!=', '0')->get();

        $leaves_completed_count = Leave::where('hr_action', '!=', '0')->count();



        }else{ // ELSE IT IS A SUPERVISOR

          $leaves = Leave::where('supervisor_id', '=', Auth::user()->ID)
          ->where('supervisor_action', '=', '0')->get();

          $leaves_count = Leave::where('supervisor_id', '=', Auth::user()->ID)
          ->where('supervisor_action', '=', '0')->count();

          $leaves_completed = Leave::where('supervisor_id', '=', Auth::user()->ID)
          ->where('supervisor_action', '!=', '0')->get();

          $leaves_completed_count = Leave::where('supervisor_id', '=', Auth::user()->ID)
          ->where('supervisor_action', '!=', '0')->count();

          /* $leaves = Leave::where('supervisor_id', '=', Auth::user()->ID)->get();*/

        }
            // return view('leave.index', compact('leaves'))->with('users', User::all());


        return view('leave.approve')->with('users', User::all())->with('leaves', $leaves)
        ->with('leaves_completed', $leaves_completed)
        ->with('leaves_count', $leaves_count)
        ->with('leaves_completed_count', $leaves_completed_count);

      }

    /**
        send approval or rejection for workflow by
     **/
        public function do_approve(Request $request, $id){


          $leave = Leave::find($id);

          /* for supervisours */
          if(auth::id() == $leave->supervisor_id){

            $leave->supervisor_action = 1;
            $leave->current_position = 1;
            $leave->leave_status = 1;
            $leave->leave_message = "Approved by Supervisor, Pending HR approval";

            $leave->save();



            $action = WorkflowAction::create([

              'type' => 'leave',
              'user_id' =>Auth::id(),
              'post_id' => $id,
              'status' => 'approved',
              'comments' => 'Pending HR approval',
              'position' => 'Supervisor',
              'sent_to' => 162

            ]);

                /////////////////////////////////////////////send notification to users
            $toHr1 = User::find(162);
            $toHr2 = User::find(168);
            $torequester = User::find($leave->user_id);
            $toreliever = User::find($leave->reliever_id);

                /*auth()->user()->notify(new LeaveNotification($leave));
                       $toHr1->notify(new LeaveNotification($leave));
                       $toHr2->notify(new LeaveNotification($leave));
                       $torequester->notify(new LeaveNotification($leave));*/


                       $message_requester = "Your ".$leave->no_days." day(s) ".$leave->leave_category." leave
                       application has
                       been approved by ".User::find($leave->supervisor_id)->display_name.".";

                       $message_suppervisor = " You have successfully approved ".User::find($leave->user_id)->display_name."
                       ".$leave->no_days." day(s) ".$leave->leave_category." leave
                       application, pushed to HR for approval.";

                       $message_reliever = "".User::find($leave->user_id)->display_name."  ".$leave->no_days." day(s) ".$leave->leave_category." leave
                       application has
                       been approved by ".User::find($leave->supervisor_id)->display_name.".";

                       $message_hr = " ".User::find($leave->user_id)->display_name."  needs your approval for
                       ".$leave->no_days." day(s) ".$leave->leave_category." leave application as supervisor (".User::find($leave->supervisor_id)->display_name.") has successfully approved this leave application.";

                       //send notification to users
                       auth()->user()->notify(new LeaveNotification($leave,$message_suppervisor));
                       //$toHr1->notify(new LeaveNotification($leave,$message_hr));
                       //$toHr2->notify(new LeaveNotification($leave,$message_hr));
                       $torequester->notify(new LeaveNotification($leave,$message_requester));
                       $toreliever->notify(new LeaveNotification($leave,$message_reliever));


                       /*auth()->user()->notify(new LeaveNotification($post,$message_requester) );
                       User::find($request->supervisor)->notify(new LeaveNotification($post,$message_suppervisor) );
                       User::find($request->reliever)->notify(new LeaveNotification($post, $message_reliever) );*/

      //sending email staff
           $link = route('leave.show', ['id' => $leave->id]);
           $title = "Your Leave Request";
           $button_title = "Click to view";
           $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $this->send_email("".User::find($leave->user_id)->display_name."","".User::find( $leave->user_id)->user_email."",$message_requester,$link,$title,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email


                 //sending email reliever
           $link = route('leave.show', ['id' => $leave->id]);
           $title2 = "Leave Request From ".ucwords(User::find($leave->user_id)->display_name)."";
           $button_title = "Click here to view";
             $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $this->send_email("".User::find($leave->reliever_id)->display_name."","".User::find($leave->reliever_id)->user_email."",$message_reliever,$link,$title2,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email

                 //sending email manager
           $link = route('leave.show', ['id' => $leave->id]);
           $title2 = "Leave Request From ".ucwords(User::find($leave->user_id)->display_name)."";
           $button_title = "Click here to Approve / Decline";
             $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $this->send_email("".User::find($leave->supervisor_id)->display_name."","".User::find($leave->supervisor_id)->user_email."",$message_suppervisor,$link,$title2,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email


            //sending email HR
           $link = route('leave.show', ['id' => $leave->id]);
           $title2 = "Leave Request From ".ucwords(User::find($leave->user_id)->display_name)."";
           $button_title = "Click here to Approve / Decline ";
            $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $hr_email = "hr@primera-africa.com";
           $this->send_email("HR",$hr_email,$message_hr,$link,$title2,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email





                       // fire leavePublished event after post is successfully added to database
                // event(new leavePublished($post));




                       return response()->json(['result'=>'1','message'=> "You have successfully approved ".User::find
                        ($leave->user_id)->display_name." ".$leave->no_days." day(s) leave application. "]);

                     }  elseif((auth::id() == '162') || (auth::id() == '168') || (auth::id() == '182')) {

                       /*FOR HR APPROVAL*/


                       $leave->hr_action = 1;
                       $leave->current_position = 3;
                       $leave->leave_status = 3;
                       $leave->leave_message = "Approved by Supervisor and HR";

                       $leave->save();



                       $action = WorkflowAction::create([

                         'type' => 'leave',
                         'user_id' =>Auth::id(),
                         'post_id' => $id,
                         'status' => 'approved',
                         'comments' => 'Approved by HR',
                         'position' => 'HR',
                         'sent_to' => 162

                       ]);


                       //send notification to users
                       $toHr1 = User::find(162);
                       $toHr2 = User::find(168);
                       $torequester = User::find($leave->user_id);
                       $toreliever = User::find($leave->reliever_id);
                       $tosupervisor = User::find($leave->supervisor_id);

                       /*auth()->user()->notify(new LeaveNotification($leave));
                              $toHr1->notify(new LeaveNotification($leave));
                              $toHr2->notify(new LeaveNotification($leave));
                              $torequester->notify(new LeaveNotification($leave));*/


                              $message_requester = "Your ".$leave->no_days." day(s) ".$leave->leave_category." leave
                              application has
                              been approved by ".User::find(auth::id())->display_name.". (HR)";

                              $message_suppervisor = "".User::find($leave->user_id)->display_name."  ".$leave->no_days." day(s) ".$leave->leave_category." leave
                              application has
                              been approved by ".User::find(auth::id())->display_name." (HR)";

                              $message_reliever = "".User::find($leave->user_id)->display_name."  ".$leave->no_days." day(s) ".$leave->leave_category." leave
                              application has
                              been approved by ".User::find(auth::id())->display_name." (HR)";

                              $message_hr =  " ".User::find(auth::id())->display_name." successfully approved ".User::find($leave->user_id)->display_name."
                              ".$leave->no_days." day(s) ".$leave->leave_category." leave
                              application.";

                       //send notification to users
                      // auth()->user()->notify(new LeaveNotification($leave,$message_suppervisor));
                              $toHr1->notify(new LeaveNotification($leave,$message_hr));
                              $toHr2->notify(new LeaveNotification($leave,$message_hr));
                              $torequester->notify(new LeaveNotification($leave,$message_requester));
                              $toreliever->notify(new LeaveNotification($leave,$message_reliever));
                              $tosupervisor->notify(new LeaveNotification($leave,$message_suppervisor));

                       // fire leavePublished event after post is successfully added to database
                       // event(new leavePublished($post));


                              //sending email staff
           $link = route('leave.show', ['id' => $leave->id]);
           $title = "Your Leave Request";
           $button_title = "Click to view";
           $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $this->send_email("".User::find($leave->user_id)->display_name."","".User::find( $leave->user_id)->user_email."",$message_requester,$link,$title,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email


                 //sending email reliever
           $link = route('leave.show', ['id' => $leave->id]);
           $title2 = "Leave Request From ".ucwords(User::find($leave->user_id)->display_name)."";
           $button_title = "Click here to view";
             $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $this->send_email("".User::find($leave->reliever_id)->display_name."","".User::find($leave->reliever_id)->user_email."",$message_reliever,$link,$title2,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email

                 //sending email manager
           $link = route('leave.show', ['id' => $leave->id]);
           $title2 = "Leave Request From ".ucwords(User::find($leave->user_id)->display_name)."";
           $button_title = "Click here to Approve / Decline";
             $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $this->send_email("".User::find($leave->supervisor_id)->display_name."","".User::find($leave->supervisor_id)->user_email."",$message_suppervisor,$link,$title2,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email


            //sending email HR
           $link = route('leave.show', ['id' => $leave->id]);
           $title2 = "Leave Request From ".ucwords(User::find($leave->user_id)->display_name)."";
           $button_title = "Click here to Approve / Decline ";
            $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $hr_email = "hr@primera-africa.com";
           $this->send_email("HR",$hr_email,$message_hr,$link,$title2,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email









                              return response()->json(['result'=>'1','message'=> "You have successfully approved ".User::find
                               ($leave->user_id)->display_name." ".$leave->no_days." day(s) leave application."]);




                            }else{

                             return response()->json(['result'=>'0','message'=> "You are not authorized"]);

                           }





                         }



    /**
    send approval or rejection for workflow by
     **/
    public function do_reject(Request $request, $id){


      $leave = Leave::find($id);

      if(auth::id() == $leave->supervisor_id){

        $leave->supervisor_action = 2;
        $leave->current_position = 0;
        $leave->leave_status = 2;
        $leave->leave_message = "Rejected by Supervisor";
        $leave->reject_comment = $request->comment;
        $leave->rejected_by = Auth::id();

        $leave->save();



        $action = WorkflowAction::create([

          'type' => 'leave',
          'user_id' =>Auth::id(),
          'post_id' => $id,
          'status' => 'rejected',
          'comments' => 'Rejected by Supervisor',
          'position' => 'Supervisor',
          'sent_to' => 162

        ]);

            /////////////////////////////////////////////send notification to users
        $toHr1 = User::find(162);
        $toHr2 = User::find(168);
        $torequester = User::find($leave->user_id);
        $toreliever = User::find($leave->reliever_id);

            /*auth()->user()->notify(new LeaveNotification($leave));
                   $toHr1->notify(new LeaveNotification($leave));
                   $toHr2->notify(new LeaveNotification($leave));
                   $torequester->notify(new LeaveNotification($leave));*/


                   $message_requester = "Your ".$leave->no_days." day(s) ".$leave->leave_category." leave
                   application has
                   been declined by ".User::find($leave->supervisor_id)->display_name.". - ".$request->comment."";

                   $message_suppervisor = " You have rejected ".User::find($leave->user_id)->display_name."
                   ".$leave->no_days." day(s) ".$leave->leave_category." leave
                   application. Comment: ".$request->comment."";

                   $message_reliever = "".User::find($leave->user_id)->display_name."  ".$leave->no_days." day(s) ".$leave->leave_category." leave
                   application has
                   been rejected by ".User::find($leave->supervisor_id)->display_name.". Comment:  ".$request->comment."";

            /*$message_hr = " ".User::find(auth::id())->display_name." needs your approval for
            ".$leave->no_days." day(s) ".$leave->leave_category." leave application.";*/

            //send notification to users
            auth()->user()->notify(new LeaveNotification($leave,$message_suppervisor));
            /*$toHr1->notify(new LeaveNotification($leave,$message_hr));
            $toHr2->notify(new LeaveNotification($leave,$message_hr));*/
            $torequester->notify(new LeaveNotification($leave,$message_requester));
            $toreliever->notify(new LeaveNotification($leave,$message_reliever));

            // fire leavePublished event after post is successfully added to database


                  //sending email staff
           $link = route('leave.show', ['id' => $leave->id]);
           $title = "Your Leave Request";
           $button_title = "Click to view";
           $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $this->send_email("".User::find($leave->user_id)->display_name."","".User::find( $leave->user_id)->user_email."",$message_requester,$link,$title,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email


                 //sending email reliever
           $link = route('leave.show', ['id' => $leave->id]);
           $title2 = "Leave Request From ".ucwords(User::find($leave->user_id)->display_name)."";
           $button_title = "Click here to view";
             $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $this->send_email("".User::find($leave->reliever_id)->display_name."","".User::find($leave->reliever_id)->user_email."",$message_reliever,$link,$title2,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email

                 //sending email manager
           $link = route('leave.show', ['id' => $leave->id]);
           $title2 = "Leave Request From ".ucwords(User::find($leave->user_id)->display_name)."";
           $button_title = "Click here to Approve / Decline";
             $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $this->send_email("".User::find($leave->supervisor_id)->display_name."","".User::find($leave->supervisor_id)->user_email."",$message_suppervisor,$link,$title2,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email



                //end of send email





            // event(new leavePublished($post));

            return response()->json(['result'=>'1','message'=> "You have rejected ".User::find
              ($leave->user_id)->display_name." ".$leave->no_days." day(s) leave application. "]);

          }  elseif((auth::id() == '162') || (auth::id() == '168') || (auth::id() == '182')) {


            $leave->hr_action = 2;
            $leave->current_position = 4;
            $leave->leave_status = 4;
            $leave->leave_message = "Rejected by HR";
            $leave->reject_comment = $request->comment;
            $leave->rejected_by = Auth::id();

            $leave->save();



            $action = WorkflowAction::create([

              'type' => 'leave',
              'user_id' =>Auth::id(),
              'post_id' => $id,
              'status' => 'rejected',
              'comments' => 'Rejected by HR',
              'position' => 'HR',
              'sent_to' => 162

            ]);



            //send notification to users
            $toHr1 = User::find(162);
            $toHr2 = User::find(168);
            $torequester = User::find($leave->user_id);
            $toreliever = User::find($leave->reliever_id);
            $tosupervisor = User::find($leave->supervisor_id);

            /*auth()->user()->notify(new LeaveNotification($leave));
                   $toHr1->notify(new LeaveNotification($leave));
                   $toHr2->notify(new LeaveNotification($leave));
                   $torequester->notify(new LeaveNotification($leave));*/


                   $message_requester = "Your ".$leave->no_days." day(s) ".$leave->leave_category." leave
                   application has
                   been declined by ".User::find(auth::id())->display_name.". (HR). Comment - ".$request->comment."";

                   $message_suppervisor = "".User::find($leave->user_id)->display_name."  ".$leave->no_days." day(s) ".$leave->leave_category." leave
                   application has
                   been declined by ".User::find(auth::id())->display_name." (HR). Comment - ".$request->comment."";

                   $message_reliever = "".User::find($leave->user_id)->display_name."  ".$leave->no_days." day(s) ".$leave->leave_category." leave
                   application has
                   been declined by ".User::find(auth::id())->display_name." (HR). Comment - ".$request->comment."";

                   $message_hr =  " ".User::find(auth::id())->display_name." declined ".User::find($leave->user_id)->display_name."
                   ".$leave->no_days." day(s) ".$leave->leave_category." leave
                   application. Comment - ".$request->comment."";

            //send notification to users
            //auth()->user()->notify(new LeaveNotification($leave,$message_suppervisor));
                   $toHr1->notify(new LeaveNotification($leave,$message_hr));
                   $toHr2->notify(new LeaveNotification($leave,$message_hr));
                   $torequester->notify(new LeaveNotification($leave,$message_requester));
                   $toreliever->notify(new LeaveNotification($leave,$message_reliever));
                   $tosupervisor->notify(new LeaveNotification($leave,$message_suppervisor));

            // fire leavePublished event after post is successfully added to database
            // event(new leavePublished($post));

            // fire leavePublished event after post is successfully added to database
            // event(new leavePublished($post));

                         //sending email staff
           $link = route('leave.show', ['id' => $leave->id]);
           $title = "Your Leave Request";
           $button_title = "Click to view";
           $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $this->send_email("".User::find($leave->user_id)->display_name."","".User::find( $leave->user_id)->user_email."",$message_requester,$link,$title,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email


                 //sending email reliever
           $link = route('leave.show', ['id' => $leave->id]);
           $title2 = "Leave Request From ".ucwords(User::find($leave->user_id)->display_name)."";
           $button_title = "Click here to view";
             $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $this->send_email("".User::find($leave->reliever_id)->display_name."","".User::find($leave->reliever_id)->user_email."",$message_reliever,$link,$title2,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email

                 //sending email manager
           $link = route('leave.show', ['id' => $leave->id]);
           $title2 = "Leave Request From ".ucwords(User::find($leave->user_id)->display_name)."";
           $button_title = "Click here to Approve / Decline";
             $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $this->send_email("".User::find($leave->supervisor_id)->display_name."","".User::find($leave->supervisor_id)->user_email."",$message_suppervisor,$link,$title2,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email


            //sending email HR
           $link = route('leave.show', ['id' => $leave->id]);
           $title2 = "Leave Request From ".ucwords(User::find($leave->user_id)->display_name)."";
           $button_title = "Click here to Approve / Decline ";
            $leave_date = "".$leave->start_date." to ".$leave->end_date."";
           $hr_email = "hr@primera-africa.com";
           $this->send_email("HR",$hr_email,$message_hr,$link,$title2,$button_title,"".User::find($leave->user_id)->display_name."",$leave->leave_category,$leave->no_days,$leave_date,$leave->leave_year,"".User::find($leave->supervisor_id)->display_name."","".User::find($leave->reliever_id)->display_name."");
                //end of send email





                   return response()->json(['result'=>'1','message'=> "You have rejected ".User::find
                    ($leave->user_id)->display_name." ".$leave->no_days." day(s) leave application. "]);

                 }else{

                  return response()->json(['result'=>'0','message'=> "You are not authorized"]);

                }





              }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //
      $leave = Leave::findOrFail($id);

//  return view('post.show', ['post' => $post]);
      return view('leave.show')->with('leave',$leave)
      ->with('users', User::all());
    }




//display all leave and just for HR
    public  function leaveAdmin(){

      $leaves = Leave::orderBy('id', 'desc')->get();

      $total_annual = Leave::where('hr_action', '=', '1')
      ->whereRaw('year(`created_at`) = ?', array(date('Y')))
      ->whereIn('leave_category', ['annual','casual'])->sum('no_days');

      $total_examination = Leave::where('hr_action', '=', '1')
      ->whereRaw('year(`created_at`) = ?', array(date('Y')))
      ->where('leave_category',  '=', 'examination')->sum('no_days');

      $total_compassionate= Leave::where('hr_action', '=', '1')
      ->whereRaw('year(`created_at`) = ?', array(date('Y')))
      ->where('leave_category',  '=', 'compassionate')->sum('no_days');

      $total_sick= Leave::where('hr_action', '=', '1')
      ->whereRaw('year(`created_at`) = ?', array(date('Y')))
      ->where('leave_category',  '=', 'sick')->sum('no_days');


        // return view('leave.index', compact('leaves'))->with('users', User::all());


      return view('leave.admin')->with('users', User::all())->with('leaves', $leaves)
      ->with('total_annual', $total_annual)
      ->with('total_examination', $total_examination)
      ->with('total_compassionate', $total_compassionate)
      ->with('total_sick', $total_sick);



    }


    //display all leave and just for HR
    public  function viewApplications(){

      $leaves = Leave::orderBy('id', 'desc')->get();

      $total_annual = Leave::where('hr_action', '=', '1')
      ->whereRaw('year(`created_at`) = ?', array(date('Y')))
      ->whereIn('leave_category', ['annual','casual'])->sum('no_days');

      $total_examination = Leave::where('hr_action', '=', '1')
      ->whereRaw('year(`created_at`) = ?', array(date('Y')))
      ->where('leave_category',  '=', 'examination')->sum('no_days');

      $total_compassionate= Leave::where('hr_action', '=', '1')
      ->whereRaw('year(`created_at`) = ?', array(date('Y')))
      ->where('leave_category',  '=', 'compassionate')->sum('no_days');

      $total_sick= Leave::where('hr_action', '=', '1')
      ->whereRaw('year(`created_at`) = ?', array(date('Y')))
      ->where('leave_category',  '=', 'sick')->sum('no_days');


        // return view('leave.index', compact('leaves'))->with('users', User::all());


      return view('leave.view')->with('users', User::all())->with('leaves', $leaves)
      ->with('total_annual', $total_annual)
      ->with('total_examination', $total_examination)
      ->with('total_compassionate', $total_compassionate)
      ->with('total_sick', $total_sick);



    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Check the difference between two dates
     */

    function  carbonDiffWithoutWeekends($startdate,$enddate){

      $dt = $startdate;
      $dt2 = $enddate;
      $daysForExtraCoding = $dt->diffInDaysFiltered(function(Carbon $date) { return
        !$date->isWeekend();
      }, $dt2);

      return $daysForExtraCoding;

    }
    function checkDateDiff($startdate,$enddate){

      $start = new DateTime('2012-09-06');
      $end = new DateTime('2012-09-11');
// otherwise the  end date is excluded (bug?)
      $end->modify('+1 day');

      $interval = $end->diff($start);

// total days
      $days = $interval->days;

// create an iterateable period of date (P1D equates to 1 day)
      $period = new DatePeriod($start, new DateInterval('P1D'), $end);

// best stored as array, so you can add more than one
      $holidays = array('2012-09-07');

      foreach($period as $dt) {
        $curr = $dt->format('D');

            // substract if Saturday or Sunday
        if ($curr == 'Sat' || $curr == 'Sun') {
          $days--;
        }

            // (optional) for the updated question
        elseif (in_array($dt->format('Y-m-d'), $holidays)) {
          $days--;
        }
      }


        echo $days; // 4
      }
    }
