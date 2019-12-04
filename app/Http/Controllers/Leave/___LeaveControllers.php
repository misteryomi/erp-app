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
                been sent to ".User::find($request->supervisor)->name." for approval.";
            $message_suppervisor = " ".User::find(auth::id())->name." needs your approval for
                ".$the_diff_date." day(s) leave application.";
            $message_reliever = "Please note you have been selected as the reliever for ".User::find(auth::id())->name." ".$the_diff_date." day(s) leave application.";

            //send notification to users
            auth()->user()->notify(new LeaveNotification($post,$message_requester) );
            User::find($request->supervisor)->notify(new LeaveNotification($post,$message_suppervisor) );
            User::find($request->reliever)->notify(new LeaveNotification($post, $message_reliever) );

            // fire leavePublished event after post is successfully added to database
           // event(new leavePublished($post));


            return response()->json(['result'=>'1','message'=> "Your ".$post->no_days." day(s) application was
            successful,
            pending approval
            from supervisor( ".User::find($post->supervisor_id)->name." )"]);
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
        if((auth::id() == '162') || (auth::id() == '168')) {


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
                been approved by ".User::find($leave->supervisor_id)->name.".";

                       $message_suppervisor = " You have successfully approved ".User::find($leave->user_id)->name."
                       ".$leave->no_days." day(s) ".$leave->leave_category." leave
                       application, pushed to HR for approval.";

                       $message_reliever = "".User::find($leave->user_id)->name."  ".$leave->no_days." day(s) ".$leave->leave_category." leave
                       application has
                been approved by ".User::find($leave->supervisor_id)->name.".";

                       $message_hr = " ".User::find(auth::id())->name." needs your approval for
                ".$leave->no_days." day(s) ".$leave->leave_category." leave application.";

                       //send notification to users
                       auth()->user()->notify(new LeaveNotification($leave,$message_suppervisor));
                       $toHr1->notify(new LeaveNotification($leave,$message_hr));
                       $toHr2->notify(new LeaveNotification($leave,$message_hr));
                       $torequester->notify(new LeaveNotification($leave,$message_requester));
                       $toreliever->notify(new LeaveNotification($leave,$message_reliever));


                       /*auth()->user()->notify(new LeaveNotification($post,$message_requester) );
                       User::find($request->supervisor)->notify(new LeaveNotification($post,$message_suppervisor) );
                       User::find($request->reliever)->notify(new LeaveNotification($post, $message_reliever) );*/




                       // fire leavePublished event after post is successfully added to database
                // event(new leavePublished($post));




                return response()->json(['result'=>'1','message'=> "You have successfully approved ".User::find
                    ($leave->user_id)->name." ".$leave->no_days." day(s) leave application. "]);

            }  elseif((auth::id() == '162') || (auth::id() == '168')) {

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
                been approved by ".User::find(auth::id())->name.". (HR)";

                       $message_suppervisor = "".User::find($leave->user_id)->name."  ".$leave->no_days." day(s) ".$leave->leave_category." leave
                       application has
                been approved by ".User::find(auth::id())->name." (HR)";

                       $message_reliever = "".User::find($leave->user_id)->name."  ".$leave->no_days." day(s) ".$leave->leave_category." leave
                       application has
                been approved by ".User::find(auth::id())->name." (HR)";

                       $message_hr =  " ".User::find(auth::id())->name." successfully approved ".User::find($leave->user_id)->name."
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

                       return response()->json(['result'=>'1','message'=> "You have successfully approved ".User::find
                           ($leave->user_id)->name." ".$leave->no_days." day(s) leave application."]);




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
                been declined by ".User::find($leave->supervisor_id)->name.". - ".$request->comment."";

            $message_suppervisor = " You have rejected ".User::find($leave->user_id)->name."
                       ".$leave->no_days." day(s) ".$leave->leave_category." leave
                       application.";

            $message_reliever = "".User::find($leave->user_id)->name."  ".$leave->no_days." day(s) ".$leave->leave_category." leave
                       application has
                been rejected by ".User::find($leave->supervisor_id)->name.".";

            /*$message_hr = " ".User::find(auth::id())->name." needs your approval for
                ".$leave->no_days." day(s) ".$leave->leave_category." leave application.";*/

            //send notification to users
            auth()->user()->notify(new LeaveNotification($leave,$message_suppervisor));
            /*$toHr1->notify(new LeaveNotification($leave,$message_hr));
            $toHr2->notify(new LeaveNotification($leave,$message_hr));*/
            $torequester->notify(new LeaveNotification($leave,$message_requester));
            $toreliever->notify(new LeaveNotification($leave,$message_reliever));

            // fire leavePublished event after post is successfully added to database
            // event(new leavePublished($post));

            return response()->json(['result'=>'1','message'=> "You have rejected ".User::find
                ($leave->user_id)->name." ".$leave->no_days." day(s) leave application. "]);

        }  elseif((auth::id() == '162') || (auth::id() == '168')) {


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
                been declined by ".User::find(auth::id())->name.". (HR) - ".$request->comment."";

            $message_suppervisor = "".User::find($leave->user_id)->name."  ".$leave->no_days." day(s) ".$leave->leave_category." leave
                       application has
                been declined by ".User::find(auth::id())->name." (HR)";

            $message_reliever = "".User::find($leave->user_id)->name."  ".$leave->no_days." day(s) ".$leave->leave_category." leave
                       application has
                been declined by ".User::find(auth::id())->name." (HR)";

            $message_hr =  " ".User::find(auth::id())->name." declined ".User::find($leave->user_id)->name."
                       ".$leave->no_days." day(s) ".$leave->leave_category." leave
                       application.";

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

            return response()->json(['result'=>'1','message'=> "You have rejected ".User::find
                ($leave->user_id)->name." ".$leave->no_days." day(s) leave application. "]);

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
