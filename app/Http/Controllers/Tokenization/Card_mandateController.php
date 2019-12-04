<?php

namespace App\Http\Controllers\Tokenization;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Card_mandate;
use App\Flutterwafe;
    use App\Flutterwave_sector;
use App\Flutterwavetransaction;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use DB;
use Auth;
use App\User;
use Carbon\Carbon;

use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;




/**
* Class Card_mandateController.
*
* @author  The scaffold-interface created at 2019-03-13 10:14:51am
* @link  https://github.com/amranidev/scaffold-interface
* Copywrite @ www.webguru.com.ng
*/


class Card_mandateController extends Controller
{
//setting validations
    protected $rules =
    [

        'token_id' => 'required',


        'payment_date' => 'required',


        'staff_id' => 'required',


        'status' => 'required',


        'suspended' => 'required',


        'refunded' => 'required',


        'trigger_no' => 'required',


        'amount' => 'required',


        'current_position' => 'required',


        'is_active' => 'required',


        'suspended_by' => 'required',


        'refunded_by' => 'required',


        'last_triggered_date' => 'required',


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







public function send_email($name,$email,$title,$content,$amount,$repayment_count, $percentage, $status,$repayment_date,$date,$repayment_amount,$account_no,$copy){

  $body = '<table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <div align="center">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="MsoNormal" style="line-height:45.0pt"><span style="font-size:45.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b">&nbsp;<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </div>

  <div align="center">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="508" style="width:381.0pt;border-collapse:collapse;border-spacing:0;float:none">
  <tbody>
  <tr>
  <td valign="top" style="border:none;border-top:solid #093263 2.5pt;padding:0in 0in 0in 0in;border-collapse:collapse!important;word-wrap:break-word">
  <p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:10.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b"><u></u>&nbsp;<u></u></span></p>

  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-collapse:collapse!important;word-wrap:break-word">
  <tbody>
  <tr>
  <td width="554" valign="top" style="width:415.5pt;padding:0in 19.5pt 12.0pt 19.5pt;border-spacing:0;display:table">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0; ">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-center" align="center" style="margin-right:0in;margin-bottom:7.5pt;margin-left:0in;text-align:center; ">
  <b><span style="font-size:16.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#093263;text-transform:uppercase">Primera Microfinance Bank<u></u><u></u></span></b></p>
  </td>
  <td width="0" valign="top" style="width:.3pt;padding:0in 0in 0in 0in"></td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>
  </div>
  <p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:1.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b"><u></u>&nbsp;<u></u></span></p>
  <div align="center">
  <table class="m_-4915605222063771016MsoNormalTable" border="1" cellspacing="0" cellpadding="0" width="508" style="width:381.0pt;background:white;border-collapse:collapse;border:none;border-spacing:0;float:none">
  <tbody>
  <tr>
  <td valign="top" style="border:none;border-top:solid #093263 2.5pt;padding:0in 0in 0in 0in;border-collapse:collapse!important;word-wrap:break-word">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-collapse:collapse!important;word-wrap:break-word">
  <tbody>
  <tr>
  <td width="554" valign="top" style="width:415.5pt;padding:0in 19.5pt 12.0pt 19.5pt;border-spacing:0;display:table">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="MsoNormal" style="line-height:23.25pt"><span style="font-size:23.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b">&nbsp;<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  <p class="m_-4915605222063771016text-dark" align="center" style="margin-right:0in;margin-bottom:7.5pt;margin-left:0in;text-align:center;font-weight:600!important">
  <span style="font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c">Dear '.$name.'<u></u><u></u></span></p>
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in;border-collapse:collapse!important;word-wrap:break-word">
  <p class="MsoNormal" style="line-height:10.5pt"><span style="font-size:10.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b">&nbsp;<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  <p class="m_-4915605222063771016nomtext" align="center" style="margin-right:0in;margin-bottom:7.5pt;margin-left:0in;text-align:center;font-weight:500!important">
  <span style="font-size:10.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#4a4a4a">'.$content.'<u></u><u></u></span></p>
  <h1 align="center" style="margin-right:0in;margin-bottom:7.5pt;margin-left:0in;text-align:center;font-weight:600!important;word-wrap:normal">
  <span style="font-size:25.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c">NGN'.$amount.'<u></u><u></u></span></h1>
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in;border-collapse:collapse!important;word-wrap:break-word">
  <p class="MsoNormal" style="line-height:15.0pt"><span style="font-size:15.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b">&nbsp;<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  <div class="MsoNormal" align="center" style="text-align:center"><span style="font-size:10.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b">
  <hr size="2" width="100%" align="center">
  </span></div>
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in;border-collapse:collapse!important;word-wrap:break-word">
  <p class="MsoNormal" style="line-height:15.0pt"><span style="font-size:15.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b">&nbsp;<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  <td width="0" style="width:.3pt;padding:0in 0in 0in 0in"></td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>
  </div>
  <p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:10.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b"><u></u>&nbsp;<u></u></span></p>
  <div align="center">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="508" style="width:381.0pt;background:#fefefe;border-collapse:collapse;border-spacing:0;float:none">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in;border-collapse:collapse!important;word-wrap:break-word">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-collapse:collapse!important;word-wrap:break-word">
  <tbody>
  <tr>
  <td width="554" valign="top" style="width:415.5pt;padding:0in 19.5pt 12.0pt 19.5pt;border-spacing:0;display:table">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-center" align="center" style="margin-right:0in;margin-bottom:7.5pt;margin-left:0in;text-align:center;font-weight:500!important">
  <span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#4a4a4a">PAYMENT DETAILS<u></u><u></u></span></p>
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody >
  <tr>
  <td width="100%" valign="top" style="width:100.0%;background:#f4f6f8;padding:20px; ">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border:0!important;border-radius:2.4px;padding:24px!important">
  <tbody>
  <tr>
  <td width="50%" valign="top" style="width:50.0%;padding:0in 0in 10.5pt 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;padding-left:0!important;padding-right:0!important">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-dark" style="margin:0in;margin-bottom:.0001pt"><span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c">Amount Paid<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  <td width="50%" style="width:50.0%;padding:0in 0in 10.5pt 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-dark" align="right" style="margin:0in;margin-bottom:.0001pt;text-align:right">
  <span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c">NGN '.$amount.'<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>


  <p class="MsoNormal"><span style="font-size:10.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b"><u></u>&nbsp;<u></u></span></p>
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-bottom:rgba(222,221,221,.25);border-spacing:0;display:table">
  <tbody style="padding: 10px;">
  <tr>
  <td width="50%" valign="top" style="width:50.0%;padding:0in 0in 10.5pt 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;padding-left:0!important;padding-right:0!important">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-dark" style="margin:0in;margin-bottom:.0001pt"><span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c">Payment Status<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  <td width="50%" style="width:50.0%;padding:0in 0in 10.5pt 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-dark" align="right" style="margin:0in;margin-bottom:.0001pt;text-align:right">
  <span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c">'.$status.'<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>



  <p class="MsoNormal"><span style="font-size:10.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b"><u></u>&nbsp;<u></u></span></p>
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-bottom:rgba(222,221,221,.25);border-spacing:0;display:table">
  <tbody style="padding: 10px;">
  <tr>
  <td width="50%" valign="top" style="width:50.0%;padding:0in 0in 10.5pt 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;padding-left:0!important;padding-right:0!important">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-dark" style="margin:0in;margin-bottom:.0001pt"><span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c">Repayment Amount<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  <td width="50%" style="width:50.0%;padding:0in 0in 10.5pt 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-dark" align="right" style="margin:0in;margin-bottom:.0001pt;text-align:right">
  <span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c">'.$repayment_amount.'<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>


  <p class="MsoNormal"><span style="font-size:10.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b"><u></u>&nbsp;<u></u></span></p>
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-bottom:rgba(222,221,221,.25);border-spacing:0;display:table">
  <tbody style="padding: 10px;">
  <tr>
  <td width="50%" valign="top" style="width:50.0%;padding:0in 0in 10.5pt 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;padding-left:0!important;padding-right:0!important">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-dark" style="margin:0in;margin-bottom:.0001pt"><span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c">Repayment Percentage<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  <td width="50%" style="width:50.0%;padding:0in 0in 10.5pt 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-dark" align="right" style="margin:0in;margin-bottom:.0001pt;text-align:right">
  <span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c">'.$percentage.'<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>


  <p class="MsoNormal"><span style="font-size:10.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b"><u></u>&nbsp;<u></u></span></p>
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-bottom:rgba(222,221,221,.25);border-spacing:0;display:table">
  <tbody>
  <tr>
  <td width="50%" valign="top" style="width:50.0%;padding:0in 0in 10.5pt 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;padding-left:0!important;padding-right:0!important">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-dark" style="margin:0in;margin-bottom:.0001pt"><span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c">Repayment Date<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  <td width="50%" style="width:50.0%;padding:0in 0in 10.5pt 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-dark" align="right" style="margin:0in;margin-bottom:.0001pt;text-align:right">
  <b><span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c;text-transform:uppercase">'.$repayment_date.'</span></b><span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c;text-transform:uppercase"><u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>
  <p class="MsoNormal"><span style="font-size:10.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b"><u></u>&nbsp;<u></u></span></p>
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-bottom:rgba(222,221,221,.25);border-spacing:0;display:table">
  <tbody>
  <tr>
  <td width="50%" valign="top" style="width:50.0%;padding:0in 0in 10.5pt 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;padding-left:0!important;padding-right:0!important">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-dark" style="margin:0in;margin-bottom:.0001pt"><span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c">Repayment Month<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  <td width="50%" style="width:50.0%;padding:0in 0in 10.5pt 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-dark" align="right" style="margin:0in;margin-bottom:.0001pt;text-align:right">
  <b><span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c">'.$repayment_count.'<wbr><wbr></span></b><span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c"><u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>
  <p class="MsoNormal"><span style="font-size:10.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b"><u></u>&nbsp;<u></u></span></p>
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0;display:table">
  <tbody>
  <tr>
  <td width="41%" valign="top" style="width:41.66%;padding:0in 0in 0in 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;padding-left:0!important;padding-right:0!important">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016text-dark" style="margin:0in;margin-bottom:.0001pt"><span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#12122c">Account Number

  <u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  <td width="58%" style="width:58.32%;padding:0in 0in 0in 0in">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in">
  <p class="m_-4915605222063771016nomtext" align="right" style="margin:0in;margin-bottom:.0001pt;text-align:right">
  <b><span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#4a4a4a">'.$account_no.'</span></b><span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#4a4a4a"><u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  <td width="0" style="width:.3pt;padding:0in 0in 0in 0in"></td>
  </tr>
  </tbody>
  </table>
  <p class="m_-4915605222063771016nomtext" align="center" style="margin-right:0in;margin-bottom:7.5pt;margin-left:0in;text-align:center;font-weight:500!important">
  <span style="font-size:9.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#4a4a4a;text-transform:uppercase">'.$date.' <br/ > Your partner for growth...<u></u><u></u></span></p>
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in;border-collapse:collapse!important;word-wrap:break-word">
  <p class="MsoNormal" style="line-height:9.4pt"><span style="font-size:9.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b">&nbsp;<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  <div class="MsoNormal" align="center" style="text-align:center"><span style="font-size:10.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b">
  <hr size="2" width="100%" align="center">
  </span></div>
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in;border-collapse:collapse!important;word-wrap:break-word">
  <p class="MsoNormal" style="line-height:9.4pt"><span style="font-size:9.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b">&nbsp;<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>
  </div>

  <div align="center">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="508" style="width:381.0pt;background:#fefefe;border-collapse:collapse;border-spacing:0;float:none">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in;border-collapse:collapse!important;word-wrap:break-word">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-collapse:collapse!important;word-wrap:break-word">
  <tbody>
  <tr>
  <td width="554" valign="top" style="width:415.5pt;padding:0in 19.5pt 27.75pt 19.5pt;border-spacing:0;display:table">
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr style="text-align: center;">
  <td valign="top" style="padding:0in 0in 0in 0in">

  <p class="m_-4915605222063771016no-margin" style="margin:0in;margin-bottom:.0001pt"><span style="font-size:10.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#4a4a4a">If you have questions or issues with this payment, contact us at
  <a href="customerservice@primeracredit.com" target="_blank"><span style="color:#007ace;text-decoration:none">customerservice@primeracredit.com</span></a> or call: 08150857750, 08150857751, 08150857754<u></u><u></u></span></p>
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in;border-collapse:collapse!important;word-wrap:break-word">
  <p class="MsoNormal" style="line-height:9.4pt"><span style="font-size:9.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b">&nbsp;<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>
  <div class="MsoNormal" align="center" style="text-align:center"><span style="font-size:10.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b">
  <hr size="2" width="100%" align="center">
  </span></div>
  <table class="m_-4915605222063771016MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border-collapse:collapse;border-spacing:0">
  <tbody>
  <tr>
  <td valign="top" style="padding:0in 0in 0in 0in;border-collapse:collapse!important;word-wrap:break-word">
  <p class="MsoNormal" style="line-height:9.4pt"><span style="font-size:9.5pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#9b9b9b">&nbsp;<u></u><u></u></span></p>
  </td>
  </tr>
  </tbody>
  </table>

  </td>
  <td width="0" style="width:.3pt;padding:0in 0in 0in 0in"></td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>
  </div>


  </td>
  </tr>
  </tbody>
  </table>

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

//
//
//      //$headers = array('info@primeramfbank.com,From: Primera MFB');
//      $headers = 'From: Primera Microfinance Bank <info@primeramfbank.com>' . "\r\n";
//     $headers = "Bcc: kchukwuemeka@primeramfbank.com";
//      $headers = "Bcc: operations@primeracredit.com";
//     $headers = "Bcc: ".$copy."";
//     // $headers = "Bcc: creditadmin@primera-africa.com";
//     // $headers = "Bcc: creditanalysis@primeracredit.com";
//
//      $headers = "MIME-Version: 1.0\r\n";
//      $headers = "Content-Type: text/html; charset=UTF-8\r\n";
//
//
//      //$headers[] = 'Cc: copy_to_2@email.com';
//
//
////$headers[] = 'Bcc: bcc_to_2@email.com';
//
//        //Send the email
//        //add_filter('wp_mail_content_type', create_function('', 'return "text/html"; '));
//      wp_mail(''.$email.'', $subject, $body, $headers);
//        //remove_filter('wp_mail_content_type', 'set_html_content_type');



}






public function index()
{
//




    $today = Carbon::today();
// $date = new Carbon();
    $chartDatas = Card_mandate::select([
        DB::raw('DATE(created_at) AS date1'),
        DB::raw('COUNT(id) AS count1'),
        DB::raw('sum(amount) AS amount1'),
    ])

    ->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])
    ->groupBy('date1')
    ->orderBy('date1', 'ASC')
    ->get()
    ->toArray();

    $lastday = Carbon::now()->addDays(1);




    $card_mandates = Card_mandate::whereRaw('Date(payment_date) >= CURDATE()')->orderBy('payment_date', 'asc')->get();
    $card_mandates_ppd = Card_mandate::whereRaw('Date(payment_date) < CURDATE()')->orderBy('payment_date', 'asc')->get();

    $card_mandates_today = Card_mandate::whereRaw('Date(payment_date) = CURDATE()')->orderBy('payment_date', 'asc')->get();

    $card_mandates_week = Card_mandate::whereRaw('Date(payment_date) < CURDATE()')->orderBy('payment_date', 'asc')->get();

    $card_mandates_month = Card_mandate::whereRaw('MONTH(`payment_date`) = ?', array(date('m')))->orderBy('payment_date', 'asc')->get();

    $title = "Card Mandate";

    return view('card_mandate.index')->with('card_mandates', $card_mandates)->with('card_mandates_ppd', $card_mandates_ppd)->with('card_mandates_today', $card_mandates_today)->with('card_mandates_week', $card_mandates_week)->with('card_mandates_month', $card_mandates_month)->with('chart', $chartDatas)
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
        $card_mandate = new Card_mandate();


        $card_mandate->token_id = $request->token_id;


        $card_mandate->payment_date = $request->payment_date;


        $card_mandate->staff_id = $request->staff_id;


        $card_mandate->status = $request->status;


        $card_mandate->suspended = $request->suspended;


        $card_mandate->refunded = $request->refunded;


        $card_mandate->trigger_no = $request->trigger_no;


        $card_mandate->amount = $request->amount;


        $card_mandate->current_position = $request->current_position;


        $card_mandate->is_active = $request->is_active;


        $card_mandate->suspended_by = $request->suspended_by;


        $card_mandate->refunded_by = $request->refunded_by;


        $card_mandate->last_triggered_date = $request->last_triggered_date;


        $card_mandate->other1 = $request->other1;


        $card_mandate->other2 = $request->other2;


        $card_mandate->other3 = $request->other3;


        $card_mandate->other4 = $request->other4;


        $card_mandate->other5 = $request->other5;



        $card_mandate->save();

        return response()->json($card_mandate);
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
    $card_mandate = Card_mandate::findOrFail($id);

//  return view('post.show', ['post' => $post]);
    return view('card_mandate.show')->with('card_mandate',$card_mandate);
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
        $card_mandate = Card_mandate::findOrfail($id);

        $card_mandate->token_id = $request->token_id;

        $card_mandate->payment_date = $request->payment_date;

        $card_mandate->staff_id = $request->staff_id;

        $card_mandate->status = $request->status;

        $card_mandate->suspended = $request->suspended;

        $card_mandate->refunded = $request->refunded;

        $card_mandate->trigger_no = $request->trigger_no;

        $card_mandate->amount = $request->amount;

        $card_mandate->current_position = $request->current_position;

        $card_mandate->is_active = $request->is_active;

        $card_mandate->suspended_by = $request->suspended_by;

        $card_mandate->refunded_by = $request->refunded_by;

        $card_mandate->last_triggered_date = $request->last_triggered_date;

        $card_mandate->other1 = $request->other1;

        $card_mandate->other2 = $request->other2;

        $card_mandate->other3 = $request->other3;

        $card_mandate->other4 = $request->other4;

        $card_mandate->other5 = $request->other5;


        $card_mandate->save();
        return response()->json($card_mandate);

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

    $card_mandate = Card_mandate::findOrfail($id);
    $card_mandate->delete();

    return response()->json($card_mandate);
}






public function mandate_collection_api($id,$percentage)
{
        # code...
         //////////////////////////////////////V E R I F Y  P A Y M E N T ////////////////////////////////////////////////////////////////////
        //  $transactionreference = $result['data']['flwRef'];
        //  $otp = 12345;

    $secretkey = config('global.LiveSecretKey');

    $card_mandate = Card_mandate::findOrfail($id);



   // echo $card_mandate->id;
   // $check_mandate = Card_mandate::where('id', '=', $card_mandate->id)->where('is_active', '!=', 2 )->first(); //other3 is the percentage collected
    $check_mandates = Card_mandate::where('id', '=', $card_mandate->id)->where('other3', '!=', 100 )->first(); //other3 is the percentage collected

   //
   // dd($check_mandates);


    if ($check_mandates)

    {


        //check if percentage is more than what is left
        $current_payment_percentage_left = 100 - $card_mandate->other3;
        if(  $percentage > $current_payment_percentage_left ) {

           return false;
           exit();

       }else{

       // dd($check_mandates);

        $flutterwafe = Flutterwafe::findOrfail($card_mandate->token_id);


        ////SETTING UP THE MANDATE ///
//dd(  $card_mandate);

        $postdata_verify = array(
         'SECKEY' => $secretkey,
         'token' =>  $flutterwafe->life_token,
         'currency' =>  $flutterwafe->currency,
         'country' => 'NG',
         'amount' =>  $card_mandate->amount*$percentage/100,
         'email' => $flutterwafe->email,
         'firstname' =>$flutterwafe->customer_name,
         'lastname' => $flutterwafe->customer_name,
         'narration' =>$flutterwafe->narration,
         'txRef' => "".$flutterwafe->txRef."".str_random(2)."-".$card_mandate->id."-".$percentage."@".$flutterwafe->cfi."",
     );

            //  print $transactionreference;
            //  print $otp;

     /* 'meta'=> [{"metaname": "Account Number", "metavalue": "".$flutterwafe->cfi.""}],
              'meta'=> [ {"metaname": "TOKEN ID", "metavalue": "".$flutterwafe->id.""}],
       'meta'=> [ {"metaname": "CUSTOMER NAME", "metavalue": "".$flutterwafe->customer_name.""}]
              'meta'=> [{"metaname": "Account Number", "metavalue": "".$flutterwafe->cfi.""}, {"metaname": "TOKEN ID", "metavalue": "".$flutterwafe->id.""}, {"metaname": "CUSTOMER NAME", "metavalue": "".$flutterwafe->customer_name.""}]

*/

              $ch_verify = curl_init();

              curl_setopt($ch_verify, CURLOPT_URL, "".config("global.LiveFlutterwaveURL")."flwv3-pug/getpaidx/api/tokenized/charge");
              curl_setopt($ch_verify, CURLOPT_POST, 1);
            curl_setopt($ch_verify, CURLOPT_POSTFIELDS, json_encode($postdata_verify)); //Post Fields
            curl_setopt($ch_verify, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch_verify, CURLOPT_CONNECTTIMEOUT, 200);
            curl_setopt($ch_verify, CURLOPT_TIMEOUT, 200);


            $headers_verify = array('Content-Type: application/json');

            curl_setopt($ch_verify, CURLOPT_HTTPHEADER, $headers_verify);

            $request_verify = curl_exec($ch_verify);

            if ($request_verify)
            {
                $result_verify = json_decode($request_verify, true);
                //echo "<pre>";
                //print_r($result_verify);
            }else{
                if(curl_error($ch_verify))
                {
                  // echo 'error:' . curl_error($ch_verify);
                }
            }

            curl_close($ch_verify);



            $resp = json_decode($request_verify, true);
            //// process payment

            //dd($resp);

            $response_reply = $resp['status'];
            $chargeResponseMessage_failed = $resp['data']['chargeResponseMessage'];


            if($response_reply != "error"){


                $paymentStatus = $resp['data']['status'];
                $chargeResponsecode = $resp['data']['chargeResponseCode'];

                $charged_amount = $resp['data']['charged_amount'];
                $merchant_amount_collected = $resp['data']['amount'];
                $paymentId = $resp['data']['paymentId'];
                $createdAt = Carbon::today();
                $chargeResponseMessage = $resp['data']['chargeResponseMessage'];
                $vbvrespmessage = $resp['data']['vbvrespmessage'];



                /*if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($paymentStatus == 'successful')  && ($response_reply == 'success')) {*/
                    //check if exist


                    $card_mandate->status =  $paymentStatus;



                    $card_mandate->trigger_no = $card_mandate->trigger_no+1;


                    $card_mandate->current_position =  1;

                    if($paymentStatus == 'successful'){

                        $card_mandate->is_active = 2;

                        $card_mandate->other3 = $card_mandate->other3+$percentage;

                         $card_mandate->amount_paid = $card_mandate->amount_paid+$merchant_amount_collected;

                    }else {
                # code...
                        $card_mandate->is_active = 3;
                        $card_mandate->other3 =$card_mandate->other3+0;

                    }



                    $card_mandate->last_triggered_date = $createdAt;


                $card_mandate->other2 = $charged_amount; //charged amount

       /* $card_mandate->other3 = $request->other3;

        $card_mandate->other4 = $request->other4;

        $card_mandate->other5 = $request->other5;*/


        $card_mandate->save();


        //send emails


                ////////////// SENDING EMAILS ///////////////
 //public function send_email($name,$email,$content,$amount,$repayment_count, $percentage, $status,$repayment_date,$date,$repayment_amount,$account_no){

        if($card_mandate->status == 'successful'){
                              //sending email staff
           //$link = route('tokenize.show', ['id' => $flutterwafe->id]);
         $title = "".$flutterwafe->customer_name." Loan Replayment for month ".$card_mandate->other1."";
         $repayment_count = "".$card_mandate->other1." of ".$flutterwafe->other3." ( ".$flutterwafe->frequency." )";
         if($card_mandate->other3 != 100){
         $message_customer_partial = "Due to insufficient funds we were able to deduct $card_mandate->other3% of the repayment for month ".$card_mandate->other1.". Kindly fund your account to enabe full deduction. Thanks";
        }else{
            $message_customer_partial = "";

        }
        $message_customer = "Your loan repayment was successful and has been received. ".$message_customer_partial."";
         $this->send_email("".$flutterwafe->customer_name."","".$flutterwafe->email."", $title,$message_customer,"".$card_mandate->other2."",$repayment_count, "".$card_mandate->other3."%", "".$card_mandate->status."", "".$card_mandate->payment_date."","".$card_mandate->updated_at."","".$card_mandate->amount."","".$flutterwafe->cfi."","".User::find($flutterwafe->user_id)->user_email."");
                //end of send email

         $message_operations = "We have successfully received payment, kindly post into CBA accordingly";
         $this->send_email("Operations","operations@primeracredit.com", $title,$message_operations,"".$card_mandate->other2."",$repayment_count, "".$card_mandate->other3."%", "".$card_mandate->status."", "".$card_mandate->payment_date."","".$card_mandate->updated_at."","".$card_mandate->amount."","".$flutterwafe->cfi."","".User::find($flutterwafe->user_id)->user_email."");


         $message_staff = "".$flutterwafe->customer_name." has successfully made loan repayment. ".$message_customer_partial."";
         $this->send_email("".User::find($flutterwafe->user_id)->display_name."","".User::find($flutterwafe->user_id)->user_email."", $title,$message_staff,"".$card_mandate->other2."",$repayment_count, "".$card_mandate->other3."%", "".$card_mandate->status."", "".$card_mandate->payment_date."","".$card_mandate->updated_at."","".$card_mandate->amount."","".$flutterwafe->cfi."","".User::find($flutterwafe->user_id)->user_email."");


         $message_control = "".$flutterwafe->customer_name." has successfully made loan repayment (RO: ".User::find($flutterwafe->user_id)->display_name."). ".$message_customer_partial."";
         $this->send_email("Loan Monitoring","loan-monitoring@primeracredit.com", $title,$message_control,"".$card_mandate->other2."",$repayment_count, "".$card_mandate->other3."%", "".$card_mandate->status."", "".$card_mandate->payment_date."","".$card_mandate->updated_at."","".$card_mandate->amount."","".$flutterwafe->cfi."","".User::find($flutterwafe->user_id)->user_email."");



                 //sending email reliever
        }else{



            $title = "".$flutterwafe->customer_name." Failed Loan Replayment for month ".$card_mandate->other1."";
         $repayment_count = "".$card_mandate->other1." of ".$flutterwafe->other3." ( ".$flutterwafe->frequency." )";


         $message_staff = "".$flutterwafe->customer_name." loan repayment failed. Kindly ensure this customer funds account to enable full deduction. Falied Message : ".$chargeResponseMessage_failed."";
         $this->send_email("".User::find($flutterwafe->user_id)->display_name."","".User::find($flutterwafe->user_id)->user_email."", $title,$message_staff,"".$card_mandate->other2."",$repayment_count, "".$card_mandate->other3."%", "".$card_mandate->status."", "".$card_mandate->payment_date."","".$card_mandate->updated_at."","".$card_mandate->amount."","".$flutterwafe->cfi."","".User::find($flutterwafe->user_id)->user_email."");


         $message_control = "".$flutterwafe->customer_name." loan repayment failed (RO: ".User::find($flutterwafe->user_id)->display_name."). Kindly follow-up with RO to ensure this customer funds his/her account to enable full deduction. Falied Message : ".$chargeResponseMessage_failed."";
         $this->send_email("Loan Monitoring","loan-monitoring@primeracredit.com", $title,$message_control,"".$card_mandate->other2."",$repayment_count, "".$card_mandate->other3."%", "".$card_mandate->status."", "".$card_mandate->payment_date."","".$card_mandate->updated_at."","".$card_mandate->amount."","".$flutterwafe->cfi."","".User::find($flutterwafe->user_id)->user_email."");


        }



        //update transaction
     file_get_contents(route('tokenize.transactions'));


        ///get 75% of the repayment
     if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($paymentStatus == 'successful')  && ($response_reply == 'success')) {

        return true;
    }else{

        return false;
    }

        }//end of if error


    } // end if percentate check


} else{

  return false;
   // echo "ALREADY COLLECTED 100%";


}

}


/// this function does the collection via the collection api above

function mandate_collection($id){

    $percentage = 100;
    $call =  $this->mandate_collection_api($id,$percentage);

  /*  if ($call == true){

        echo "true";
           //    $percentage_75 = 75;
            //$call_75 =  $this->mandate_collection_api($id,$percentage);

    }else {

         echo "false";
    }

*/
    ///////////////////////////////////////////
    if ($call == false){

        $call_75 =  $this->mandate_collection_api($id,75);

        if ($call_75 == false){

           $call_50 =  $this->mandate_collection_api($id,50);

           if ($call_50 == false){   $call_25 =  $this->mandate_collection_api($id,25);  }
       }
   }









}



// getting mannual collection by id

public function make_mannual_collection($id){

    $this->mandate_collection($id);
}




///search range
public function range(Request $request)
{
//

   // dd($request);


    $start_date_field = carbon::parse($request->start_date);
    $end_date_field = carbon::parse($request->end_date);


    $card_mandates = Card_mandate::whereBetween('created_at', array( $start_date_field, $end_date_field))->orderBy('payment_date', 'asc')->get();

    $title = "Search Result from $request->start_date To $request->end_date ";
    $card_mandates_ppd = Card_mandate::whereRaw('Date(payment_date) < CURDATE()')->orderBy('payment_date', 'asc')->get();

    $card_mandates_today = Card_mandate::whereRaw('Date(payment_date) = CURDATE()')->orderBy('payment_date', 'asc')->get();

    $card_mandates_week = Card_mandate::whereRaw('Date(payment_date) < CURDATE()')->orderBy('payment_date', 'asc')->get();

    $card_mandates_month = Card_mandate::whereRaw('MONTH(`payment_date`) = ?', array(date('m')))->orderBy('payment_date', 'asc')->get();

    return view('card_mandate.index')->with('card_mandates', $card_mandates)->with('card_mandates_ppd', $card_mandates_ppd)->with('card_mandates_today', $card_mandates_today)->with('card_mandates_week', $card_mandates_week)->with('card_mandates_month', $card_mandates_month)->with('title', $title);
}//end range




//getting all customer mandates

public function customer_mandate($id){



    $card_mandate = Card_mandate::findOrFail($id);

//  return view('post.show', ['post' => $post]);
    $card_mandates = Card_mandate::where('token_id', '=', $id)->orderBy('payment_date', 'asc')->get();


    return view('card_mandate.user_mandate')->with('card_mandates',$card_mandates);



}//end of customer mandate




//getting all  transactions that took place in a mandates

public function mandate_transactions($id){



    $card_mandate = Card_mandate::findOrFail($id);

//  return view('post.show', ['post' => $post]);
    $flutterwavetransaction = Flutterwavetransaction::where('other2', '=', $id)->orderBy('id', 'asc')->get();


    return view('card_mandate.mandate_transactions')->with('flutterwavetransactions',$flutterwavetransaction);



}//end of customer mandate




public function par()
{
//




    $today = Carbon::today();
// $date = new Carbon();
    $chartDatas = Card_mandate::select([
        DB::raw('DATE(created_at) AS date1'),
        DB::raw('COUNT(id) AS count1'),
        DB::raw('sum(amount) AS amount1'),
    ])
    ->whereRaw('Date(payment_date) > CURDATE()')
    ->where('status' , '!=', 'successful')
    ->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])
    ->groupBy('date1')
    ->orderBy('date1', 'ASC')
    ->get()
    ->toArray();

    $lastday = Carbon::now()->addDays(1);




    $card_mandates = Card_mandate::whereRaw('Date(payment_date) < CURDATE()')->where('status' , '!=', 'successful')->orderBy('payment_date', 'desc')->get();


    $title = "PAR - Card Mandate";

    return view('card_mandate.par_mandate')->with('card_mandates', $card_mandates)->with('chart', $chartDatas)
    ->with('lastday', $lastday)->with('title', $title);

}



public function suspend(Request $request, $id)
{
//

    $card_mandate = Card_mandate::findOrfail($id);

    $status ="suspended";
    $suspended = 1;
    $is_active = 0;


    $card_mandate->status =  $status;

    $card_mandate->suspended = $suspended ;


    $card_mandate->is_active = $is_active;

    $card_mandate->suspended_by = Auth::id();


    $card_mandate->save();
    return response()->json($card_mandate);


}




///reactive mandate

public function reactivate(Request $request, $id)
{
//

    $card_mandate = Card_mandate::findOrfail($id);

    $status ="pending";
    $suspended = "2";
    $is_active = 1;


    $card_mandate->status =  $status;

    $card_mandate->suspended = $suspended ;


    $card_mandate->is_active = $is_active;

    $card_mandate->suspended_by = Auth::id();


    $card_mandate->save();
    return response()->json($card_mandate);


}




//collect our money from customer daily, monthly or yearly

public  function  cronjobs_collection(){



//    $to = 'kchukwuemeka@primeramfbank.com';
//    $subject = 'Cron Jobs sent';
//    $message = 'Just got the mail for testing cron';

   // wp_mail( $to, $subject, $message );


    $card_mandates = Card_mandate::whereRaw('Date(payment_date) = CURDATE()')->where('status' , '!=', 'successful')->whereNull('suspended')->orderByRaw('RAND()')->get();

//dd($card_mandates);

    foreach ($card_mandates as $key => $card_mandate) {

        $id = $card_mandate->id;


        try {
    // code that throws exception

          $this->mandate_collection($id);

///tesint email





//            $subject = 'Chrome Working Now';
//
//
//            //$headers = array('info@primeramfbank.com,From: Primera MFB');
//            $headers = 'From: Primera Microfinance Bank <info@primeramfbank.com>' . "\r\n";
//
//
//            $headers = "MIME-Version: 1.0\r\n";
//            $headers = "Content-Type: text/html; charset=UTF-8\r\n";
//
//            $body ="Testing the cron jobs";
//            //$headers[] = 'Cc: copy_to_2@email.com';
//
//
//            //$headers[] = 'Bcc: bcc_to_2@email.com';
//
//            //Send the email
//            //add_filter('wp_mail_content_type', create_function('', 'return "text/html"; '));
//            wp_mail('kchukwuemeka@primeramfbank.com', $subject, $body, $headers);


            ///end
      } catch (\Exception $e) {
    // whatever you want to do if exception is thrown

        $errors = "error occured ".$id."";
    }
// you can continue running code here that will run regardless if the exception is thrown.

    print_r ($id);
}

  //  dd($card_mandates);



//return view('card_mandate.cronjobs_collection')->with('card_mandates', $card_mandates)->with('erorrs', $error);

} ////////////////end of cron jobs



//collect our money from customer daily, monthly or yearly for par

public  function  cronjobs_collection_par(){


    $card_mandates = Card_mandate::whereRaw('Date(payment_date) < CURDATE()')->where('status' , '!=', 'successful')->whereNull('suspended')->orderByRaw('RAND()')->get();

 //dd($card_mandates);
    foreach ($card_mandates as $key => $card_mandate) {

        $id = $card_mandate->id;

        $id_token = $card_mandate->token_id;


        try {
    // code that throws exception

          $this->mandate_collection($id);

      } catch (\Exception $e) {
    // whatever you want to do if exception is thrown

        $errors = "error occured ".$id."";
    }
// you can continue running code here that will run regardless if the exception is thrown.

   // print_r ($id);

}


$card_mandates_100 = Card_mandate::whereRaw('Date(payment_date) < CURDATE()')->where('other3', '!=', 100 )->whereNull('suspended')->orderByRaw('RAND()')->get();

       // dd($card_mandates_100);
foreach ($card_mandates_100 as $key => $card_mandated) {

    $id2 = $card_mandated->id;

    $id_token2 = $card_mandated->token_id;


    try {
                // code that throws exception

     $this->mandate_collection($id2);

 } catch (\Exception $e) {
                // whatever you want to do if exception is thrown

    $errors = "error occured ".$id2."";
}
            // you can continue running code here that will run regardless if the exception is thrown.





}
//dd($id_token);

    //echo "".$id_token." <br />";
  //  dd($card_mandates);



//return view('card_mandate.cronjobs_collection')->with('card_mandates', $card_mandates)->with('erorrs', $error);

}
////////////////end of cron jobs  par



public function reports()
{
        //




       /* $today = Carbon::today();
        // $date = new Carbon();
        $chartDatas = Card_mandate::select([
                                           DB::raw('DATE(created_at) AS date1'),
                                           DB::raw('COUNT(id) AS count1'),
                                           DB::raw('sum(amount) AS amount1'),
                                           ])
        ->whereRaw('Date(payment_date) > CURDATE()')
        ->where('status' , '!=', 'successful')
        ->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])
        ->groupBy('date1')
        ->orderBy('date1', 'ASC')
        ->get()
        ->toArray();

        $lastday = Carbon::now()->addDays(1);
        */

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





        $flutterwaves = Flutterwafe::whereNotNull('txRef')->orderBy('id', 'DESC')->get();



        $card_mandates = Card_mandate::whereRaw('Date(payment_date) <= CURDATE()')->orderBy('payment_date', 'desc')->get();


        $title = "Tokenization Report";
         $title_token = "All Card Tokenized";

        return view('card_mandate.reports')->with('card_mandates', $card_mandates)->with('chart', $chartDatas)->with('flutterwaves', $flutterwaves)
        ->with('lastday', $lastday)->with('title', $title)->with('title_token', $title_token);

    }






///search range
public function report_range(Request $request)
{
//

   // dd($request);





    $start_date_field = carbon::parse($request->start_date);
    $end_date_field = carbon::parse($request->end_date);



        $flutterwaves = Flutterwafe::whereBetween('created_at', array( $start_date_field, $end_date_field))->whereNotNull('txRef')->orderBy('id', 'DESC')->get();



    $card_mandates = Card_mandate::whereBetween('payment_date', array( $start_date_field, $end_date_field))->orderBy('payment_date', 'asc')->get();


        $title = "Tokenization Report - Repayment from $request->start_date To $request->end_date";

        $title_token = "Card Tokenized from $request->start_date To $request->end_date";

        return view('card_mandate.reports')->with('card_mandates', $card_mandates)->with('flutterwaves', $flutterwaves)->with('title', $title)->with('title_token', $title_token);




}//end range




public function reports_analysis()
{


        $amount = 100;





        $flutterwave_new_sectors = Flutterwave_sector::all();


        $title = "Tokenization Deduction Analysis";


        $flutterwaves = Flutterwafe::orderBy('id', 'DESC')->get();

        return view('card_mandate.reports_analysis')->with('flutterwave_new_sectors', $flutterwave_new_sectors)->with('title', $title)->with('flutterwaves', $flutterwaves);

    }



    /////search report analysis range
public function reports_analysis_range(Request $request)
{
//

   // dd($request);





    $start_date_field = carbon::parse($request->start_date);
    $end_date_field = carbon::parse($request->end_date);


/*
        $flutterwaves = Flutterwafe::whereBetween('created_at', array( $start_date_field, $end_date_field))->whereNotNull('txRef')->orderBy('id', 'DESC')->get();



    $card_mandates = Card_mandate::whereBetween('payment_date', array( $start_date_field, $end_date_field))->orderBy('payment_date', 'asc')->get();


        $title = "Tokenization Report - Repayment from $request->start_date To $request->end_date";

        $title_token = "Card Tokenized from $request->start_date To $request->end_date";

        return view('card_mandate.reports')->with('card_mandates', $card_mandates)->with('flutterwaves', $flutterwaves)->with('title', $title)->with('title_token', $title_token);



         $amount = 100;

        */



        $flutterwave_new_sectors = Flutterwave_sector::all();


        $title = "Tokenization Analysis - Repayment from $request->start_date To $request->end_date";


        $flutterwaves = Flutterwafe::orderBy('id', 'DESC')->get();

        return view('card_mandate.reports_analysis')->with('flutterwave_new_sectors', $flutterwave_new_sectors)->with('title', $title)->with('flutterwaves', $flutterwaves)->with('start_date_field', $start_date_field)->with('end_date_field', $end_date_field);




}//end range



    //collect our money from customer daily, monthly or yearly mannually

    public  function  trigger_mannual_collection($id){



        try {
    // code that throws exception

          $this->mandate_collection($id);

///tesint email



            ///end
      } catch (\Exception $e) {
    // whatever you want to do if exception is thrown

        $errors = "error occured ".$id."";
    }


    echo("successfully triggered collection with ID ".$id.". Please refresh the mandate page to see transaction. ");


    return redirect()->back();

        } ////////////////end of cron jobs



}
