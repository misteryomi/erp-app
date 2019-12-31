@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit appraisal
    </h1>
    <a href="{!!url('appraisal')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Appraisal Index</a>
    <br>
    <form method = 'POST' action = '{!! url("appraisal")!!}/{!!$appraisal->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="kpi1_field">kpi1_field</label>
            <input id="kpi1_field" name = "kpi1_field" type="text" class="form-control" value="{!!$appraisal->
            kpi1_field!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi1_target">kpi1_target</label>
            <input id="kpi1_target" name = "kpi1_target" type="text" class="form-control" value="{!!$appraisal->
            kpi1_target!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi1_weight">kpi1_weight</label>
            <input id="kpi1_weight" name = "kpi1_weight" type="text" class="form-control" value="{!!$appraisal->
            kpi1_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi1_staff">kpi1_staff</label>
            <input id="kpi1_staff" name = "kpi1_staff" type="text" class="form-control" value="{!!$appraisal->
            kpi1_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi1_manager">kpi1_manager</label>
            <input id="kpi1_manager" name = "kpi1_manager" type="text" class="form-control" value="{!!$appraisal->
            kpi1_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi2_field">kpi2_field</label>
            <input id="kpi2_field" name = "kpi2_field" type="text" class="form-control" value="{!!$appraisal->
            kpi2_field!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi2_target">kpi2_target</label>
            <input id="kpi2_target" name = "kpi2_target" type="text" class="form-control" value="{!!$appraisal->
            kpi2_target!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi2_weight">kpi2_weight</label>
            <input id="kpi2_weight" name = "kpi2_weight" type="text" class="form-control" value="{!!$appraisal->
            kpi2_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi2_staff">kpi2_staff</label>
            <input id="kpi2_staff" name = "kpi2_staff" type="text" class="form-control" value="{!!$appraisal->
            kpi2_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi2_manager">kpi2_manager</label>
            <input id="kpi2_manager" name = "kpi2_manager" type="text" class="form-control" value="{!!$appraisal->
            kpi2_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi3_field">kpi3_field</label>
            <input id="kpi3_field" name = "kpi3_field" type="text" class="form-control" value="{!!$appraisal->
            kpi3_field!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi3_target">kpi3_target</label>
            <input id="kpi3_target" name = "kpi3_target" type="text" class="form-control" value="{!!$appraisal->
            kpi3_target!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi3_weight">kpi3_weight</label>
            <input id="kpi3_weight" name = "kpi3_weight" type="text" class="form-control" value="{!!$appraisal->
            kpi3_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi3_staff">kpi3_staff</label>
            <input id="kpi3_staff" name = "kpi3_staff" type="text" class="form-control" value="{!!$appraisal->
            kpi3_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi3_manager">kpi3_manager</label>
            <input id="kpi3_manager" name = "kpi3_manager" type="text" class="form-control" value="{!!$appraisal->
            kpi3_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi4_field">kpi4_field</label>
            <input id="kpi4_field" name = "kpi4_field" type="text" class="form-control" value="{!!$appraisal->
            kpi4_field!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi4_target">kpi4_target</label>
            <input id="kpi4_target" name = "kpi4_target" type="text" class="form-control" value="{!!$appraisal->
            kpi4_target!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi4_weight">kpi4_weight</label>
            <input id="kpi4_weight" name = "kpi4_weight" type="text" class="form-control" value="{!!$appraisal->
            kpi4_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi4_staff">kpi4_staff</label>
            <input id="kpi4_staff" name = "kpi4_staff" type="text" class="form-control" value="{!!$appraisal->
            kpi4_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi4_manager">kpi4_manager</label>
            <input id="kpi4_manager" name = "kpi4_manager" type="text" class="form-control" value="{!!$appraisal->
            kpi4_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi5_field">kpi5_field</label>
            <input id="kpi5_field" name = "kpi5_field" type="text" class="form-control" value="{!!$appraisal->
            kpi5_field!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi5_target">kpi5_target</label>
            <input id="kpi5_target" name = "kpi5_target" type="text" class="form-control" value="{!!$appraisal->
            kpi5_target!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi5_weight">kpi5_weight</label>
            <input id="kpi5_weight" name = "kpi5_weight" type="text" class="form-control" value="{!!$appraisal->
            kpi5_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi5_staff">kpi5_staff</label>
            <input id="kpi5_staff" name = "kpi5_staff" type="text" class="form-control" value="{!!$appraisal->
            kpi5_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi5_manager">kpi5_manager</label>
            <input id="kpi5_manager" name = "kpi5_manager" type="text" class="form-control" value="{!!$appraisal->
            kpi5_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi6_field">kpi6_field</label>
            <input id="kpi6_field" name = "kpi6_field" type="text" class="form-control" value="{!!$appraisal->
            kpi6_field!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi6_target">kpi6_target</label>
            <input id="kpi6_target" name = "kpi6_target" type="text" class="form-control" value="{!!$appraisal->
            kpi6_target!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi6_weight">kpi6_weight</label>
            <input id="kpi6_weight" name = "kpi6_weight" type="text" class="form-control" value="{!!$appraisal->
            kpi6_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi6_staff">kpi6_staff</label>
            <input id="kpi6_staff" name = "kpi6_staff" type="text" class="form-control" value="{!!$appraisal->
            kpi6_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi6_manager">kpi6_manager</label>
            <input id="kpi6_manager" name = "kpi6_manager" type="text" class="form-control" value="{!!$appraisal->
            kpi6_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi7_field">kpi7_field</label>
            <input id="kpi7_field" name = "kpi7_field" type="text" class="form-control" value="{!!$appraisal->
            kpi7_field!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi7_target">kpi7_target</label>
            <input id="kpi7_target" name = "kpi7_target" type="text" class="form-control" value="{!!$appraisal->
            kpi7_target!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi7_weight">kpi7_weight</label>
            <input id="kpi7_weight" name = "kpi7_weight" type="text" class="form-control" value="{!!$appraisal->
            kpi7_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi7_staff">kpi7_staff</label>
            <input id="kpi7_staff" name = "kpi7_staff" type="text" class="form-control" value="{!!$appraisal->
            kpi7_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi7_manager">kpi7_manager</label>
            <input id="kpi7_manager" name = "kpi7_manager" type="text" class="form-control" value="{!!$appraisal->
            kpi7_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi8_field">kpi8_field</label>
            <input id="kpi8_field" name = "kpi8_field" type="text" class="form-control" value="{!!$appraisal->
            kpi8_field!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi8_target">kpi8_target</label>
            <input id="kpi8_target" name = "kpi8_target" type="text" class="form-control" value="{!!$appraisal->
            kpi8_target!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi8_weight">kpi8_weight</label>
            <input id="kpi8_weight" name = "kpi8_weight" type="text" class="form-control" value="{!!$appraisal->
            kpi8_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi8_staff">kpi8_staff</label>
            <input id="kpi8_staff" name = "kpi8_staff" type="text" class="form-control" value="{!!$appraisal->
            kpi8_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi8_manager">kpi8_manager</label>
            <input id="kpi8_manager" name = "kpi8_manager" type="text" class="form-control" value="{!!$appraisal->
            kpi8_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi_comment_staff">kpi_comment_staff</label>
            <input id="kpi_comment_staff" name = "kpi_comment_staff" type="text" class="form-control" value="{!!$appraisal->
            kpi_comment_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="kpi_comment_manager">kpi_comment_manager</label>
            <input id="kpi_comment_manager" name = "kpi_comment_manager" type="text" class="form-control" value="{!!$appraisal->
            kpi_comment_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="competency1_field">competency1_field</label>
            <input id="competency1_field" name = "competency1_field" type="text" class="form-control" value="{!!$appraisal->
            competency1_field!!}"> 
        </div>
        <div class="form-group">
            <label for="competency1_target">competency1_target</label>
            <input id="competency1_target" name = "competency1_target" type="text" class="form-control" value="{!!$appraisal->
            competency1_target!!}"> 
        </div>
        <div class="form-group">
            <label for="competency1_weight">competency1_weight</label>
            <input id="competency1_weight" name = "competency1_weight" type="text" class="form-control" value="{!!$appraisal->
            competency1_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="competency1_staff">competency1_staff</label>
            <input id="competency1_staff" name = "competency1_staff" type="text" class="form-control" value="{!!$appraisal->
            competency1_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="competency1_manager">competency1_manager</label>
            <input id="competency1_manager" name = "competency1_manager" type="text" class="form-control" value="{!!$appraisal->
            competency1_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="competency2_field">competency2_field</label>
            <input id="competency2_field" name = "competency2_field" type="text" class="form-control" value="{!!$appraisal->
            competency2_field!!}"> 
        </div>
        <div class="form-group">
            <label for="competency2_target">competency2_target</label>
            <input id="competency2_target" name = "competency2_target" type="text" class="form-control" value="{!!$appraisal->
            competency2_target!!}"> 
        </div>
        <div class="form-group">
            <label for="competency2_weight">competency2_weight</label>
            <input id="competency2_weight" name = "competency2_weight" type="text" class="form-control" value="{!!$appraisal->
            competency2_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="competency2_staff">competency2_staff</label>
            <input id="competency2_staff" name = "competency2_staff" type="text" class="form-control" value="{!!$appraisal->
            competency2_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="competency2_manager">competency2_manager</label>
            <input id="competency2_manager" name = "competency2_manager" type="text" class="form-control" value="{!!$appraisal->
            competency2_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="competency3_field">competency3_field</label>
            <input id="competency3_field" name = "competency3_field" type="text" class="form-control" value="{!!$appraisal->
            competency3_field!!}"> 
        </div>
        <div class="form-group">
            <label for="competency3_target">competency3_target</label>
            <input id="competency3_target" name = "competency3_target" type="text" class="form-control" value="{!!$appraisal->
            competency3_target!!}"> 
        </div>
        <div class="form-group">
            <label for="competency3_weight">competency3_weight</label>
            <input id="competency3_weight" name = "competency3_weight" type="text" class="form-control" value="{!!$appraisal->
            competency3_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="competency3_staff">competency3_staff</label>
            <input id="competency3_staff" name = "competency3_staff" type="text" class="form-control" value="{!!$appraisal->
            competency3_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="competency3_manager">competency3_manager</label>
            <input id="competency3_manager" name = "competency3_manager" type="text" class="form-control" value="{!!$appraisal->
            competency3_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="competency_comment_staff">competency_comment_staff</label>
            <input id="competency_comment_staff" name = "competency_comment_staff" type="text" class="form-control" value="{!!$appraisal->
            competency_comment_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="competency_comment_manager">competency_comment_manager</label>
            <input id="competency_comment_manager" name = "competency_comment_manager" type="text" class="form-control" value="{!!$appraisal->
            competency_comment_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="behavioural1_field">behavioural1_field</label>
            <input id="behavioural1_field" name = "behavioural1_field" type="text" class="form-control" value="{!!$appraisal->
            behavioural1_field!!}"> 
        </div>
        <div class="form-group">
            <label for="behavioural1_target">behavioural1_target</label>
            <input id="behavioural1_target" name = "behavioural1_target" type="text" class="form-control" value="{!!$appraisal->
            behavioural1_target!!}"> 
        </div>
        <div class="form-group">
            <label for="behavioural1_weight">behavioural1_weight</label>
            <input id="behavioural1_weight" name = "behavioural1_weight" type="text" class="form-control" value="{!!$appraisal->
            behavioural1_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="behavioural1_staff">behavioural1_staff</label>
            <input id="behavioural1_staff" name = "behavioural1_staff" type="text" class="form-control" value="{!!$appraisal->
            behavioural1_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="behavioural1_manager">behavioural1_manager</label>
            <input id="behavioural1_manager" name = "behavioural1_manager" type="text" class="form-control" value="{!!$appraisal->
            behavioural1_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="behavioural2_field">behavioural2_field</label>
            <input id="behavioural2_field" name = "behavioural2_field" type="text" class="form-control" value="{!!$appraisal->
            behavioural2_field!!}"> 
        </div>
        <div class="form-group">
            <label for="behavioural2_target">behavioural2_target</label>
            <input id="behavioural2_target" name = "behavioural2_target" type="text" class="form-control" value="{!!$appraisal->
            behavioural2_target!!}"> 
        </div>
        <div class="form-group">
            <label for="behavioural2_weight">behavioural2_weight</label>
            <input id="behavioural2_weight" name = "behavioural2_weight" type="text" class="form-control" value="{!!$appraisal->
            behavioural2_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="behavioural2_staff">behavioural2_staff</label>
            <input id="behavioural2_staff" name = "behavioural2_staff" type="text" class="form-control" value="{!!$appraisal->
            behavioural2_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="behavioural2_manager">behavioural2_manager</label>
            <input id="behavioural2_manager" name = "behavioural2_manager" type="text" class="form-control" value="{!!$appraisal->
            behavioural2_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="behavioural_comment_staff">behavioural_comment_staff</label>
            <input id="behavioural_comment_staff" name = "behavioural_comment_staff" type="text" class="form-control" value="{!!$appraisal->
            behavioural_comment_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="behavioural_comment_manager">behavioural_comment_manager</label>
            <input id="behavioural_comment_manager" name = "behavioural_comment_manager" type="text" class="form-control" value="{!!$appraisal->
            behavioural_comment_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="development1_field">development1_field</label>
            <input id="development1_field" name = "development1_field" type="text" class="form-control" value="{!!$appraisal->
            development1_field!!}"> 
        </div>
        <div class="form-group">
            <label for="development1_target">development1_target</label>
            <input id="development1_target" name = "development1_target" type="text" class="form-control" value="{!!$appraisal->
            development1_target!!}"> 
        </div>
        <div class="form-group">
            <label for="development1_weight">development1_weight</label>
            <input id="development1_weight" name = "development1_weight" type="text" class="form-control" value="{!!$appraisal->
            development1_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="development1_staff">development1_staff</label>
            <input id="development1_staff" name = "development1_staff" type="text" class="form-control" value="{!!$appraisal->
            development1_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="development1_manager">development1_manager</label>
            <input id="development1_manager" name = "development1_manager" type="text" class="form-control" value="{!!$appraisal->
            development1_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="development2_field">development2_field</label>
            <input id="development2_field" name = "development2_field" type="text" class="form-control" value="{!!$appraisal->
            development2_field!!}"> 
        </div>
        <div class="form-group">
            <label for="development2_target">development2_target</label>
            <input id="development2_target" name = "development2_target" type="text" class="form-control" value="{!!$appraisal->
            development2_target!!}"> 
        </div>
        <div class="form-group">
            <label for="development2_weight">development2_weight</label>
            <input id="development2_weight" name = "development2_weight" type="text" class="form-control" value="{!!$appraisal->
            development2_weight!!}"> 
        </div>
        <div class="form-group">
            <label for="development2_staff">development2_staff</label>
            <input id="development2_staff" name = "development2_staff" type="text" class="form-control" value="{!!$appraisal->
            development2_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="development2_manager">development2_manager</label>
            <input id="development2_manager" name = "development2_manager" type="text" class="form-control" value="{!!$appraisal->
            development2_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="development_comment_staff">development_comment_staff</label>
            <input id="development_comment_staff" name = "development_comment_staff" type="text" class="form-control" value="{!!$appraisal->
            development_comment_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="development_comment_manager">development_comment_manager</label>
            <input id="development_comment_manager" name = "development_comment_manager" type="text" class="form-control" value="{!!$appraisal->
            development_comment_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="final_comment_staff">final_comment_staff</label>
            <input id="final_comment_staff" name = "final_comment_staff" type="text" class="form-control" value="{!!$appraisal->
            final_comment_staff!!}"> 
        </div>
        <div class="form-group">
            <label for="final_comment_manager">final_comment_manager</label>
            <input id="final_comment_manager" name = "final_comment_manager" type="text" class="form-control" value="{!!$appraisal->
            final_comment_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="promoted_to">promoted_to</label>
            <input id="promoted_to" name = "promoted_to" type="text" class="form-control" value="{!!$appraisal->
            promoted_to!!}"> 
        </div>
        <div class="form-group">
            <label for="promotion_reasons">promotion_reasons</label>
            <input id="promotion_reasons" name = "promotion_reasons" type="text" class="form-control" value="{!!$appraisal->
            promotion_reasons!!}"> 
        </div>
        <div class="form-group">
            <label for="hr_actioned">hr_actioned</label>
            <input id="hr_actioned" name = "hr_actioned" type="text" class="form-control" value="{!!$appraisal->
            hr_actioned!!}"> 
        </div>
        <div class="form-group">
            <label for="staff_actioned">staff_actioned</label>
            <input id="staff_actioned" name = "staff_actioned" type="text" class="form-control" value="{!!$appraisal->
            staff_actioned!!}"> 
        </div>
        <div class="form-group">
            <label for="manager_actioned">manager_actioned</label>
            <input id="manager_actioned" name = "manager_actioned" type="text" class="form-control" value="{!!$appraisal->
            manager_actioned!!}"> 
        </div>
        <div class="form-group">
            <label for="status">status</label>
            <input id="status" name = "status" type="text" class="form-control" value="{!!$appraisal->
            status!!}"> 
        </div>
        <div class="form-group">
            <label for="completed">completed</label>
            <input id="completed" name = "completed" type="text" class="form-control" value="{!!$appraisal->
            completed!!}"> 
        </div>
        <div class="form-group">
            <label for="user_id">user_id</label>
            <input id="user_id" name = "user_id" type="text" class="form-control" value="{!!$appraisal->
            user_id!!}"> 
        </div>
        <div class="form-group">
            <label for="manager_id">manager_id</label>
            <input id="manager_id" name = "manager_id" type="text" class="form-control" value="{!!$appraisal->
            manager_id!!}"> 
        </div>
        <div class="form-group">
            <label for="year">year</label>
            <input id="year" name = "year" type="text" class="form-control" value="{!!$appraisal->
            year!!}"> 
        </div>
        <div class="form-group">
            <label for="hr_id">hr_id</label>
            <input id="hr_id" name = "hr_id" type="text" class="form-control" value="{!!$appraisal->
            hr_id!!}"> 
        </div>
        <div class="form-group">
            <label>users Select</label>
            <select name = 'user_id' class = "form-control">
                @foreach($users as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label>appraisal_years Select</label>
            <select name = 'appraisal_year_id' class = "form-control">
                @foreach($appraisal_years as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection