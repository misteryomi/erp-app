@extends('layouts.app')
@section('content')
@section('page_title') Annual Appraisal @endsection
@php


//if (isset ($_POST['pdf'])){
require("assets/mpdf-master/mpdf.php");
$mpdf=new mPDF('win-1252','A4','','',5,5,5,5,5,5);//A4 page in portrait for landscape add -L.
//$mpdf->SetHeader('|'.$school_name.' '.$school_name2.' '.date('l jS \of F Y h:i:s A').'|');
$mpdf->setFooter('�  '.$school_name.' '.$school_name2.' ( '.$school_website.' ) - powered by www.webguru.com.ng ');// Giving page number to your footer.
$mpdf->useOnlyCoreFonts = true;    // false is default
$mpdf->SetDisplayMode('fullpage');
// Buffer the following html with PHP so we can store it to a variable later
ob_start();
//}

        @endphp
<?php
use App\User;
use App\Appraisal;


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Prints Statements Of Results</title>
    <style type="text/css">
        body {  font-size: 13px; line-height: 1.5em; font-family: Arial, sans-serif; text-align: left; margin:5px; padding:0px; color:#330066; width:100%;}
        .school_name {font-size:52px; font-weight:700; line-height:1.3em; text-transform:uppercase; }
        .term {font-size:14px; font-weight:700; color:#333; line-height:0.8em }
        .address { color:#666; font-size:11px}
        .para{font-size:13px; color:#000000; font-family:Tahoma, Geneva, sans-serif; text-decoration:none}
        .head2{font-size:14px; color:#000; font-family:Arial; text-decoration:underline;}
        .title{font-size:18px; color:#000; font-family:Arial; text-decoration:underline; font-weight:600}
        .report{font-size:17px; color:#330066; font-family:Arial; text-decoration:none; font-weight:600}
        .head1{font-size:17px; color:#000; font-family:Arial; text-decoration:none}
        .head-up{font-size:18px;  padding-left:5px; color:#fff; font-family:Arial; text-decoration:none}

        /* CHECKBOX BUTTON */
        input[type="checkbox"] {
            position: relative;
            border-radius: 14px;
            width: 20px;
            height: 20px;
            background-color: #fff;
            display: inline-block;
            vertical-align: middle;
        }

    </style>


    <style>
        table {
            border-collapse: separate;
            border-spacing: 0;


            font: 13px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        th,
        td {
            padding: 4px 4px;
            vertical-align: top;
        }
        thead {
            background: #fff;


            font-size: 11px;
            text-transform: uppercase;
        }
        th:first-child {

            text-align: left;
            border: 1px solid #666;

        }
        th:last-child {
            border-top-right-radius: 5px;

        }
        tbody tr:nth-child(even) {
            background: #f0f0f2;
        }
        td {
            border-bottom: 1px solid #666;
            border-right: 1px solid #666;
        }
        td:first-child {
            border-left: 1px solid #666;
        }
        .book-title {
            color: #395870;
            display: block;
        }
        .text-offset {
            color: #7c7c80;
            font-size: 12px;
        }
        .item-stock,
        .item-qty {
            text-align: center;
        }
        .item-price {
            text-align: right;
        }
        .item-multiple {
            display: block;
        }
        tfoot {
            text-align: right;
        }
        tfoot tr:last-child {
            background: #f0f0f2;
            color: #395870;
            font-weight: bold;
        }
        tfoot tr:last-child td:first-child {
            border-bottom-left-radius: 5px;
        }
        tfoot tr:last-child td:last-child {
            border-bottom-right-radius: 5px;
        }



        .verticalText
        {
            text-align: center;
            vertical-align: middle;
            width: auto;





        }

        .mytable table{

            padding:0;
            margin:0;}

        /* Styles for rotateTableCellContent plugin*/
        table div.rotated {
            writing-mode:tb-rl;
            white-space: nowrap;
            font-family: Tahoma, Geneva, sans-serif;



            filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);  /* IE6,IE7 */
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
            -moz-transform: rotate(-90.0deg);  /* FF3.5+ */
            -ms-transform: rotate(-90.0deg);  /* IE9+ */
            -o-transform: rotate(-90.0deg);  /* Opera 10.5 */
            -webkit-transform: rotate(-90.0deg);  /* Safari 3.1+, Chrome */
            transform: rotate(-90.0deg);  /* Standard */
        }

        thead th {
            vertical-align: top;
        }

        table .vertical {
            white-space: nowrap;
        }
        .headtable td{
            border: none;


        }

    </style>


    <!-- <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">  -->


    <!--         <script type="text/javascript">

			(function ($) {
  $.fn.rotateTableCellContent = function (options) {
  /*
Version 1.0
7/2011
Written by David Votrubec (davidjs.com) and
Michal Tehnik (@Mictech) for ST-Software.com
*/

var cssClass = ((options) ? options.className : false) || "vertical";

var cellsToRotate = $('.' + cssClass, this);

var betterCells = [];
cellsToRotate.each(function () {
var cell = $(this)
, newText = cell.text()
, height = cell.height()
, width = cell.width()
, newDiv = $('<div>', { height: width, width: height })
, newInnerDiv = $('<div>', { text: newText, 'class': 'rotated' });

newInnerDiv.css('-webkit-transform-origin', (width / 2) + 'px ' + (width / 2) + 'px');
newInnerDiv.css('-moz-transform-origin', (width / 2) + 'px ' + (width / 2) + 'px');
newDiv.append(newInnerDiv);

betterCells.push(newDiv);
});

cellsToRotate.each(function (i) {
$(this).html(betterCells[i]);
});
};
})(jQuery);





$(document).ready(function(){
    $('.mytable').rotateTableCellContent();
});

</script>-->




    <style>
        .table-header-rotated td.row-header{
            width: auto;

        }

        .table-header-rotated td{


            vertical-align: middle;
            text-align: center;
            padding:4px;
        }

        .table-header-rotated td.rotate-45{
            height: 45px;
            position: relative;
            vertical-align: bottom;
            padding: 5px;
            font-size: 13px;
            padding-bottom:3px;

            font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;


        }

        .table-header-rotated td.rotate-45 > div{
            position: relative;
            top: 0px;
            /* 80 * tan(45) / 2 = 40 where 80 is the height on the cell and 45 is the transform angle*/
            height: 100%;
            padding:6px;


        }

        .table-header-rotated td.rotate-45 span {
            -ms-transform:rotate(-90deg);
            -moz-transform:rotate(-90deg);
            -webkit-transform:rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
            position: absolute;
            bottom: 40px; /* 40 cos(45) = 28 with an additional 2px margin*/
            left: -25px; /*Because it looked good, but there is probably a mathematical link here as well*/
            display: inline-block;

            width: 85px; /* 80 / cos(45) - 40 cos (45) = 85 where 80 is the height of the cell, 40 the width of the cell and 45 the transform angle*/
            text-align: left;
            white-space: nowrap; /*whether to display in one line or not*/
        }

        /*  styles for the grade */

        .table-header-rotated td.grade-45{
            height: 60px;
            position: relative;
            vertical-align: bottom;
            padding: 0;
            font-size: 12px;
            line-height: 0.8;
            padding-bottom:5px;
        }

        .table-header-rotated td.grade-45 > div{
            position: relative;
            top: 0px;
            /* 80 * tan(45) / 2 = 40 where 80 is the height on the cell and 45 is the transform angle*/
            height: 100%;
            padding:6px;


        }

        .table-header-rotated td.grade-45 span {
            -ms-transform:rotate(-90deg);
            -moz-transform:rotate(-90deg);
            -webkit-transform:rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
            position: absolute;
            bottom: 40px; /* 40 cos(45) = 28 with an additional 2px margin*/
            left: -25px; /*Because it looked good, but there is probably a mathematical link here as well*/
            display: inline-block;
        // width: 100%;
            width: 85px; /* 80 / cos(45) - 40 cos (45) = 85 where 80 is the height of the cell, 40 the width of the cell and 45 the transform angle*/
            text-align: left;
            white-space: nowrap; /*whether to display in one line or not*/
        }

        .totalbold {
            font-weight: 600;
        }
        .motto {
            font-family: 'Cookie'; font-size:28px;
        }

        th {
            background-color: #093263;
            color: #fff;
            font-weight:700;
            font-size:20px;
        }

        h3{
            font-size: 40px;
        }

        .circle_green
        {
            border: 2px solid #093263;

            background: #f2f2f2;
            padding:10px;
            border-radius: 100%;
            margin-left: auto;
            margin-right: auto;
            font-size: 30px;

        }
        .circle_primera
        {
            border: 2px solid #093263;

            background: green;
            color:#fff;
            padding:10px;
            border-radius: 100%;
            margin-left: auto;
            margin-right: auto;
            font-size: 30px;

        }
        @page {
            margin: 0cm 0cm;
        }
        table{

            width: 100%;

            border:1px solid black;

        }

        td, th{

            border:1px solid black;

        }
    </style>

    <style type="text/css">.main-body{background-image:url('../Primera Logo/icon.png'); background-image-resize:4;background-repeat: no-repeat; background-attachment: fixed; background-position: center; }

        body{ font-size: 13px; line-height: 1.5em; font-family: Arial, sans-serif; text-align: left;  padding:0px; color:#330066; width:100%;}</style>


<?php
$appraisal_contents = Appraisal::findOrFail(request()->route('id'));

?>


    <section style="alignment-adjust:central; vertical-align:central;">

        <div style="max-width:800px; padding:5px; border:1px solid #330066;">


<div class="main-body">

<table  border="3"  width="100%"  bordercolor="#093263" >
    <tr >
        <td align="center" width="30%" height="86" style="padding:15px;" ><p><img src="../Primera
        Logo/icon.png" width="92" height="224" /></p>

            </td>
        <th width="30%" style="font-size:50px; text-align:center; vertical-align:middle"> <p>PRIMERA MICROFINANCE BANK</p>
            <p>Appriasal Report<br />
            </p></th>
        <td width="30%"  style="padding:15px;">
                <p><img src="../../../Desktop/kc.png" width="192" height="195" style="vertical-align:middle" /></p></td>
    </tr>
        <tr>
            <td colspan="3" scope="row">



                <table width="100%" style="font-size:30px; text-align:center">
                    <tr>
                        <td width="30%" style="vertical-align:middle">Name: <strong>{{ User::find($appraisal_contents->user_id)->name   }}</strong></td>
                        <td width="40%" style="vertical-align:middle">Manager: <strong>{{ User::find($appraisal_contents->manager_id)->name   }}</strong></td>
                        <td width="30%" style="vertical-align:middle"> Department: <strong>Strategry and Product Development</strong></td>
                    </tr>
                </table>
                <p>&nbsp;</p>
                <table width="100%" >
                    <tr>
                        <td align="center" class="circle_green" height="108" scope="col" color="#333" style="vertical-align:middle"><p   style="font-size:60px">30%</p>
                            <p>Staff Score</p></td>
                        <td align="center" class="circle_green" scope="col" style="vertical-align:middle"><p style="font-size:60px">50%</p>
                            <p>Manager's Score</p></td>
                        <td align="center" class="circle_primera" scope="col" style="vertical-align:middle"><p style="font-size:60px">79%</p>
                            <p>Total Score</p></td>
                    </tr>
                </table>
                <p>&nbsp;</p>
                <h3>* Key Performance Indicator</h3>
                <table width="100%" >
                    <tr>
                        <th width="55%" style="vertical-align:middle" scope="col">KPI</th>
                        <th width="8%" scope="col">TARGET (%)</th>
                        <th width="7%" scope="col">WEIGHT (%)</th>
                        <th width="7%" scope="col">Self (Actual)</th>
                        <th width="8%" scope="col">Self Asses. (%) </th>
                        <th width="9%" scope="col">Managers Assesment </th>
                        <th width="6%" scope="col">Managers Assess. %</th>
                    </tr>
                    @if( !empty($appraisal_contents->kpi1_field))
                        <tr class="odd gradeX">

                            <td style="width:50%;">
                                {{ $appraisal_contents->kpi1_field }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi1_target }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi1_weight }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi1_staff }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi1_weight* $appraisal_contents->kpi1_staff/100}}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi1_manager }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi1_weight*
                                $appraisal_contents->kpi1_manager/100}}%

                            </td>

                        </tr>
                    @endif



                    @if( !empty($appraisal_contents->kpi2_field))
                        <tr class="odd gradeX">

                            <td style="width:50%;">
                                {{ $appraisal_contents->kpi2_field }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi2_target }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi2_weight }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi2_staff }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi2_weight* $appraisal_contents->kpi2_staff/100}}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi2_manager }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi2_weight*
                                $appraisal_contents->kpi2_manager/100}}%

                            </td>

                        </tr>
                    @endif


                    @if( !empty($appraisal_contents->kpi3_field))
                        <tr class="odd gradeX">

                            <td style="width:50%;">
                                {{ $appraisal_contents->kpi3_field }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi3_target }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi3_weight }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi3_staff }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi3_weight* $appraisal_contents->kpi3_staff/100}}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi3_manager }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi3_weight*
                                $appraisal_contents->kpi3_manager/100}}%

                            </td>

                        </tr>
                    @endif




                    @if( !empty($appraisal_contents->kpi4_field))
                        <tr class="odd gradeX">

                            <td style="width:50%;">
                                {{ $appraisal_contents->kpi4_field }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi4_target }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi4_weight }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi4_staff }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi4_weight* $appraisal_contents->kpi4_staff/100}}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi4_manager }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi4_weight*
                                $appraisal_contents->kpi4_manager/100}}%

                            </td>

                        </tr>
                    @endif



                    @if( !empty($appraisal_contents->kpi5_field))
                        <tr class="odd gradeX">

                            <td style="width:50%;">
                                {{ $appraisal_contents->kpi5_field }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi5_target }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi5_weight }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi5_staff }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi5_weight* $appraisal_contents->kpi5_staff/100}}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi5_manager }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi5_weight*
                                $appraisal_contents->kpi5_manager/100}}%

                            </td>

                        </tr>
                    @endif



                    @if( !empty($appraisal_contents->kpi6_field))
                        <tr class="odd gradeX">

                            <td style="width:50%;">
                                {{ $appraisal_contents->kpi6_field }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi6_target }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi6_weight }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi6_staff }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi6_weight* $appraisal_contents->kpi6_staff/100}}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi6_manager }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi6_weight*
                                $appraisal_contents->kpi6_manager/100}}%

                            </td>

                        </tr>
                    @endif


                    @if( !empty($appraisal_contents->kpi7_field))
                        <tr class="odd gradeX">

                            <td style="width:50%;">
                                {{ $appraisal_contents->kpi7_field }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi7_target }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi7_weight }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi7_staff }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi7_weight* $appraisal_contents->kpi7_staff/100}}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi7_manager }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi7_weight*
                                $appraisal_contents->kpi7_manager/100}}%

                            </td>

                        </tr>
                    @endif


                    @if( !empty($appraisal_contents->kpi8_field))
                        <tr class="odd gradeX">

                            <td style="width:50%;">
                                {{ $appraisal_contents->kpi8_field }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi8_target }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi8_weight }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi8_staff }}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi8_weight* $appraisal_contents->kpi8_staff/100}}%

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi8_manager }}

                            </td>
                            <td>
                                {{ $appraisal_contents->kpi8_weight*
                                $appraisal_contents->kpi8_manager/100}}%

                            </td>

                        </tr>
                    @endif


                    <tr>
                        <td><p><strong>Appraisee Feedback &amp; Comments: </strong> {{$appraisal_contents->kpi_comment_staff}}</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p></td>
                        <td colspan="6"><strong>Manager's Feedback &amp; Comments: </strong>{{$appraisal_contents->kpi_comment_manager}}</td>
                    </tr>
                </table>

                <h3>* Competencies</h3>
                <table width="100%" >
                    <tr>
                        <th width="55%" style="vertical-align:middle" scope="col">KPI</th>
                        <th width="8%" scope="col">TARGET (%)</th>
                        <th width="7%" scope="col">WEIGHT (%)</th>
                        <th width="7%" scope="col">Self (Actual)</th>
                        <th width="8%" scope="col">Self Asses. (%) </th>
                        <th width="9%" scope="col">Managers Assesment </th>
                        <th width="6%" scope="col">Managers Assess. %</th>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </table>

                <h3>* Behavioural Skills
                </h3>
                <table width="100%" >
                    <tr>
                        <th width="55%" style="vertical-align:middle" scope="col">KPI</th>
                        <th width="8%" scope="col">TARGET (%)</th>
                        <th width="7%" scope="col">WEIGHT (%)</th>
                        <th width="7%" scope="col">Self (Actual)</th>
                        <th width="8%" scope="col">Self Asses. (%) </th>
                        <th width="9%" scope="col">Managers Assesment </th>
                        <th width="6%" scope="col">Managers Assess. %</th>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <p>&nbsp;</p>
                <table width="100%">
                    <tr>
                        <td width="50%"><div style="font-size:20px">...........................................................................................................................................</div>
                             <div  style="font-size:20px; font-style:italic">Managers/Supervior ( Name/signature and Date)</div></td>
                        <td width="50%"><div style="font-size:20px">...........................................................................................................................................</div>
                             <div  style="font-size:20px; font-style:italic">Human Resource ( Name/signature and Date)</div></td>
                    </tr>
                </table>
                <p>&nbsp;</p>
                <p>&nbsp;</p></td>
        </tr>



</table>
</div>
            </div>
        </section>
</body>
</html>

@php


//if (isset ($_POST['pdf'])){
$html = ob_get_contents();
ob_end_clean();

//header("Content-Disposition: attachment; filename='".$student_id."'");
// Load a stylesheet
//$stylesheet = file_get_contents('css/results.css');
// send the captured HTML from the output buffer to the mPDF class for processing
$mpdf->WriteHTML($html);
//$mpdf->SetProtection(array(), 'user', 'password'); uncomment to protect your pdf page with password.
//$mpdf->Output(); unmment to save without a name
$mpdf->Output('Result).pdf','D');
exit;
//}
@endphp
@endsection
