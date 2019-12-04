<?php

namespace App\Http\Controllers\Tokenization;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Flutterwave_permission;
use Amranidev\Ajaxis\Ajaxis;
use URL;

    use App\User;
    use Auth;


use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;




/**
* Class Flutterwave_permissionController.
*
* @author  The scaffold-interface created at 2019-04-29 01:29:51pm
* @link  https://github.com/amranidev/scaffold-interface
* Copywrite @ www.webguru.com.ng
*/


class Flutterwave_permissionController extends Controller
{
//setting validations
protected $rules =
[

    'staff' => 'required',


    'staff_department' => 'required',



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


            //$headers = array('info@primeramfbank.com,From: Primera MFB');
            $headers = 'From: Primera Microfinance Bank <info@primeramfbank.com>' . "\r\n";

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






/**
* Display a listing of the resource.
*
* @return  \Illuminate\Http\Response
*/
public function index()
{
//
return view('flutterwave_permission.index')->with('flutterwave_permissions', Flutterwave_permission::all());

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
$flutterwave_permission = new Flutterwave_permission();


    $flutterwave_permission->staff = $request->staff;


    $flutterwave_permission->staff_department = $request->staff_department;


    $flutterwave_permission->staff_permission = $request->staff_permission;


    $flutterwave_permission->staff_email = $request->staff_email;


    $flutterwave_permission->staff_status = $request->staff_status;


    $flutterwave_permission->permitted_by = $request->permitted_by;


    $flutterwave_permission->others = $request->others;



$flutterwave_permission->save();




    ////////////// SENDING EMAILS ///////////////

    //sending email reliever
    $link = route('tokenize.index');
    $title2 = "Permission Successfully Activated on IRS ";
    $button_title2 = "Thanks";
    $message_staff =" This is to inform you that  ".User::find($flutterwave_permission->permitted_by)->display_name." has successfully activated your profile with permission ".$flutterwave_permission->staff_permission." / ". $flutterwave_permission->staff_department ." on IRS. Kindly login to IRS to verify.   Thanks";
    $this->send_email("".User::find($flutterwave_permission->staff)->display_name."","".User::find($flutterwave_permission->staff)->email."",$message_staff,$link,$title2,$button_title2);





return response()->json($flutterwave_permission);
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
$flutterwave_permission = Flutterwave_permission::findOrFail($id);

//  return view('post.show', ['post' => $post]);
return view('flutterwave_permission.show')->with('flutterwave_permission',$flutterwave_permission);
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
$flutterwave_permission = Flutterwave_permission::findOrfail($id);

    $flutterwave_permission->staff = $request->staff;

    $flutterwave_permission->staff_department = $request->staff_department;

    $flutterwave_permission->staff_permission = $request->staff_permission;

    $flutterwave_permission->staff_email = $request->staff_email;

    $flutterwave_permission->staff_status = $request->staff_status;

    $flutterwave_permission->permitted_by = $request->permitted_by;

    $flutterwave_permission->others = $request->others;


$flutterwave_permission->save();
return response()->json($flutterwave_permission);

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

$flutterwave_permission = Flutterwave_permission::findOrfail($id);
$flutterwave_permission->delete();

return response()->json($flutterwave_permission);
}
}
