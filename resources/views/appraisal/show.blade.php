@extends('scaffold-interface.layouts.app')
@section('page_title')Annual Appraisal KPI @endsection
@section('content')
    @include('appraisal.menu')
<section class="content">
    <h1>
        Show appraisal
    </h1>
    <br>
    <a href='{!!url("appraisal")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Appraisal Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>kpi1_field</b> </td>
                <td>{!!$appraisal->kpi1_field!!}</td>
            </tr>
            <tr>
                <td> <b>kpi1_target</b> </td>
                <td>{!!$appraisal->kpi1_target!!}</td>
            </tr>
            <tr>
                <td> <b>kpi1_weight</b> </td>
                <td>{!!$appraisal->kpi1_weight!!}</td>
            </tr>
            <tr>
                <td> <b>kpi1_staff</b> </td>
                <td>{!!$appraisal->kpi1_staff!!}</td>
            </tr>
            <tr>
                <td> <b>kpi1_manager</b> </td>
                <td>{!!$appraisal->kpi1_manager!!}</td>
            </tr>
            <tr>
                <td> <b>kpi2_field</b> </td>
                <td>{!!$appraisal->kpi2_field!!}</td>
            </tr>
            <tr>
                <td> <b>kpi2_target</b> </td>
                <td>{!!$appraisal->kpi2_target!!}</td>
            </tr>
            <tr>
                <td> <b>kpi2_weight</b> </td>
                <td>{!!$appraisal->kpi2_weight!!}</td>
            </tr>
            <tr>
                <td> <b>kpi2_staff</b> </td>
                <td>{!!$appraisal->kpi2_staff!!}</td>
            </tr>
            <tr>
                <td> <b>kpi2_manager</b> </td>
                <td>{!!$appraisal->kpi2_manager!!}</td>
            </tr>
            <tr>
                <td> <b>kpi3_field</b> </td>
                <td>{!!$appraisal->kpi3_field!!}</td>
            </tr>
            <tr>
                <td> <b>kpi3_target</b> </td>
                <td>{!!$appraisal->kpi3_target!!}</td>
            </tr>
            <tr>
                <td> <b>kpi3_weight</b> </td>
                <td>{!!$appraisal->kpi3_weight!!}</td>
            </tr>
            <tr>
                <td> <b>kpi3_staff</b> </td>
                <td>{!!$appraisal->kpi3_staff!!}</td>
            </tr>
            <tr>
                <td> <b>kpi3_manager</b> </td>
                <td>{!!$appraisal->kpi3_manager!!}</td>
            </tr>
            <tr>
                <td> <b>kpi4_field</b> </td>
                <td>{!!$appraisal->kpi4_field!!}</td>
            </tr>
            <tr>
                <td> <b>kpi4_target</b> </td>
                <td>{!!$appraisal->kpi4_target!!}</td>
            </tr>
            <tr>
                <td> <b>kpi4_weight</b> </td>
                <td>{!!$appraisal->kpi4_weight!!}</td>
            </tr>
            <tr>
                <td> <b>kpi4_staff</b> </td>
                <td>{!!$appraisal->kpi4_staff!!}</td>
            </tr>
            <tr>
                <td> <b>kpi4_manager</b> </td>
                <td>{!!$appraisal->kpi4_manager!!}</td>
            </tr>
            <tr>
                <td> <b>kpi5_field</b> </td>
                <td>{!!$appraisal->kpi5_field!!}</td>
            </tr>
            <tr>
                <td> <b>kpi5_target</b> </td>
                <td>{!!$appraisal->kpi5_target!!}</td>
            </tr>
            <tr>
                <td> <b>kpi5_weight</b> </td>
                <td>{!!$appraisal->kpi5_weight!!}</td>
            </tr>
            <tr>
                <td> <b>kpi5_staff</b> </td>
                <td>{!!$appraisal->kpi5_staff!!}</td>
            </tr>
            <tr>
                <td> <b>kpi5_manager</b> </td>
                <td>{!!$appraisal->kpi5_manager!!}</td>
            </tr>
            <tr>
                <td> <b>kpi6_field</b> </td>
                <td>{!!$appraisal->kpi6_field!!}</td>
            </tr>
            <tr>
                <td> <b>kpi6_target</b> </td>
                <td>{!!$appraisal->kpi6_target!!}</td>
            </tr>
            <tr>
                <td> <b>kpi6_weight</b> </td>
                <td>{!!$appraisal->kpi6_weight!!}</td>
            </tr>
            <tr>
                <td> <b>kpi6_staff</b> </td>
                <td>{!!$appraisal->kpi6_staff!!}</td>
            </tr>
            <tr>
                <td> <b>kpi6_manager</b> </td>
                <td>{!!$appraisal->kpi6_manager!!}</td>
            </tr>
            <tr>
                <td> <b>kpi7_field</b> </td>
                <td>{!!$appraisal->kpi7_field!!}</td>
            </tr>
            <tr>
                <td> <b>kpi7_target</b> </td>
                <td>{!!$appraisal->kpi7_target!!}</td>
            </tr>
            <tr>
                <td> <b>kpi7_weight</b> </td>
                <td>{!!$appraisal->kpi7_weight!!}</td>
            </tr>
            <tr>
                <td> <b>kpi7_staff</b> </td>
                <td>{!!$appraisal->kpi7_staff!!}</td>
            </tr>
            <tr>
                <td> <b>kpi7_manager</b> </td>
                <td>{!!$appraisal->kpi7_manager!!}</td>
            </tr>
            <tr>
                <td> <b>kpi8_field</b> </td>
                <td>{!!$appraisal->kpi8_field!!}</td>
            </tr>
            <tr>
                <td> <b>kpi8_target</b> </td>
                <td>{!!$appraisal->kpi8_target!!}</td>
            </tr>
            <tr>
                <td> <b>kpi8_weight</b> </td>
                <td>{!!$appraisal->kpi8_weight!!}</td>
            </tr>
            <tr>
                <td> <b>kpi8_staff</b> </td>
                <td>{!!$appraisal->kpi8_staff!!}</td>
            </tr>
            <tr>
                <td> <b>kpi8_manager</b> </td>
                <td>{!!$appraisal->kpi8_manager!!}</td>
            </tr>
            <tr>
                <td> <b>kpi_comment_staff</b> </td>
                <td>{!!$appraisal->kpi_comment_staff!!}</td>
            </tr>
            <tr>
                <td> <b>kpi_comment_manager</b> </td>
                <td>{!!$appraisal->kpi_comment_manager!!}</td>
            </tr>
            <tr>
                <td> <b>competency1_field</b> </td>
                <td>{!!$appraisal->competency1_field!!}</td>
            </tr>
            <tr>
                <td> <b>competency1_target</b> </td>
                <td>{!!$appraisal->competency1_target!!}</td>
            </tr>
            <tr>
                <td> <b>competency1_weight</b> </td>
                <td>{!!$appraisal->competency1_weight!!}</td>
            </tr>
            <tr>
                <td> <b>competency1_staff</b> </td>
                <td>{!!$appraisal->competency1_staff!!}</td>
            </tr>
            <tr>
                <td> <b>competency1_manager</b> </td>
                <td>{!!$appraisal->competency1_manager!!}</td>
            </tr>
            <tr>
                <td> <b>competency2_field</b> </td>
                <td>{!!$appraisal->competency2_field!!}</td>
            </tr>
            <tr>
                <td> <b>competency2_target</b> </td>
                <td>{!!$appraisal->competency2_target!!}</td>
            </tr>
            <tr>
                <td> <b>competency2_weight</b> </td>
                <td>{!!$appraisal->competency2_weight!!}</td>
            </tr>
            <tr>
                <td> <b>competency2_staff</b> </td>
                <td>{!!$appraisal->competency2_staff!!}</td>
            </tr>
            <tr>
                <td> <b>competency2_manager</b> </td>
                <td>{!!$appraisal->competency2_manager!!}</td>
            </tr>
            <tr>
                <td> <b>competency3_field</b> </td>
                <td>{!!$appraisal->competency3_field!!}</td>
            </tr>
            <tr>
                <td> <b>competency3_target</b> </td>
                <td>{!!$appraisal->competency3_target!!}</td>
            </tr>
            <tr>
                <td> <b>competency3_weight</b> </td>
                <td>{!!$appraisal->competency3_weight!!}</td>
            </tr>
            <tr>
                <td> <b>competency3_staff</b> </td>
                <td>{!!$appraisal->competency3_staff!!}</td>
            </tr>
            <tr>
                <td> <b>competency3_manager</b> </td>
                <td>{!!$appraisal->competency3_manager!!}</td>
            </tr>
            <tr>
                <td> <b>competency_comment_staff</b> </td>
                <td>{!!$appraisal->competency_comment_staff!!}</td>
            </tr>
            <tr>
                <td> <b>competency_comment_manager</b> </td>
                <td>{!!$appraisal->competency_comment_manager!!}</td>
            </tr>
            <tr>
                <td> <b>behavioural1_field</b> </td>
                <td>{!!$appraisal->behavioural1_field!!}</td>
            </tr>
            <tr>
                <td> <b>behavioural1_target</b> </td>
                <td>{!!$appraisal->behavioural1_target!!}</td>
            </tr>
            <tr>
                <td> <b>behavioural1_weight</b> </td>
                <td>{!!$appraisal->behavioural1_weight!!}</td>
            </tr>
            <tr>
                <td> <b>behavioural1_staff</b> </td>
                <td>{!!$appraisal->behavioural1_staff!!}</td>
            </tr>
            <tr>
                <td> <b>behavioural1_manager</b> </td>
                <td>{!!$appraisal->behavioural1_manager!!}</td>
            </tr>
            <tr>
                <td> <b>behavioural2_field</b> </td>
                <td>{!!$appraisal->behavioural2_field!!}</td>
            </tr>
            <tr>
                <td> <b>behavioural2_target</b> </td>
                <td>{!!$appraisal->behavioural2_target!!}</td>
            </tr>
            <tr>
                <td> <b>behavioural2_weight</b> </td>
                <td>{!!$appraisal->behavioural2_weight!!}</td>
            </tr>
            <tr>
                <td> <b>behavioural2_staff</b> </td>
                <td>{!!$appraisal->behavioural2_staff!!}</td>
            </tr>
            <tr>
                <td> <b>behavioural2_manager</b> </td>
                <td>{!!$appraisal->behavioural2_manager!!}</td>
            </tr>
            <tr>
                <td> <b>behavioural_comment_staff</b> </td>
                <td>{!!$appraisal->behavioural_comment_staff!!}</td>
            </tr>
            <tr>
                <td> <b>behavioural_comment_manager</b> </td>
                <td>{!!$appraisal->behavioural_comment_manager!!}</td>
            </tr>
            <tr>
                <td> <b>development1_field</b> </td>
                <td>{!!$appraisal->development1_field!!}</td>
            </tr>
            <tr>
                <td> <b>development1_target</b> </td>
                <td>{!!$appraisal->development1_target!!}</td>
            </tr>
            <tr>
                <td> <b>development1_weight</b> </td>
                <td>{!!$appraisal->development1_weight!!}</td>
            </tr>
            <tr>
                <td> <b>development1_staff</b> </td>
                <td>{!!$appraisal->development1_staff!!}</td>
            </tr>
            <tr>
                <td> <b>development1_manager</b> </td>
                <td>{!!$appraisal->development1_manager!!}</td>
            </tr>
            <tr>
                <td> <b>development2_field</b> </td>
                <td>{!!$appraisal->development2_field!!}</td>
            </tr>
            <tr>
                <td> <b>development2_target</b> </td>
                <td>{!!$appraisal->development2_target!!}</td>
            </tr>
            <tr>
                <td> <b>development2_weight</b> </td>
                <td>{!!$appraisal->development2_weight!!}</td>
            </tr>
            <tr>
                <td> <b>development2_staff</b> </td>
                <td>{!!$appraisal->development2_staff!!}</td>
            </tr>
            <tr>
                <td> <b>development2_manager</b> </td>
                <td>{!!$appraisal->development2_manager!!}</td>
            </tr>
            <tr>
                <td> <b>development_comment_staff</b> </td>
                <td>{!!$appraisal->development_comment_staff!!}</td>
            </tr>
            <tr>
                <td> <b>development_comment_manager</b> </td>
                <td>{!!$appraisal->development_comment_manager!!}</td>
            </tr>
            <tr>
                <td> <b>final_comment_staff</b> </td>
                <td>{!!$appraisal->final_comment_staff!!}</td>
            </tr>
            <tr>
                <td> <b>final_comment_manager</b> </td>
                <td>{!!$appraisal->final_comment_manager!!}</td>
            </tr>
            <tr>
                <td> <b>promoted_to</b> </td>
                <td>{!!$appraisal->promoted_to!!}</td>
            </tr>
            <tr>
                <td> <b>promotion_reasons</b> </td>
                <td>{!!$appraisal->promotion_reasons!!}</td>
            </tr>
            <tr>
                <td> <b>hr_actioned</b> </td>
                <td>{!!$appraisal->hr_actioned!!}</td>
            </tr>
            <tr>
                <td> <b>staff_actioned</b> </td>
                <td>{!!$appraisal->staff_actioned!!}</td>
            </tr>
            <tr>
                <td> <b>manager_actioned</b> </td>
                <td>{!!$appraisal->manager_actioned!!}</td>
            </tr>
            <tr>
                <td> <b>status</b> </td>
                <td>{!!$appraisal->status!!}</td>
            </tr>
            <tr>
                <td> <b>completed</b> </td>
                <td>{!!$appraisal->completed!!}</td>
            </tr>
            <tr>
                <td> <b>user_id</b> </td>
                <td>{!!$appraisal->user_id!!}</td>
            </tr>
            <tr>
                <td> <b>manager_id</b> </td>
                <td>{!!$appraisal->manager_id!!}</td>
            </tr>
            <tr>
                <td> <b>year</b> </td>
                <td>{!!$appraisal->year!!}</td>
            </tr>
            <tr>
                <td> <b>hr_id</b> </td>
                <td>{!!$appraisal->hr_id!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$appraisal->user->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$appraisal->user->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>password : </i></b>
                </td>
                <td>{!!$appraisal->user->password!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>avatar : </i></b>
                </td>
                <td>{!!$appraisal->user->avatar!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>admin : </i></b>
                </td>
                <td>{!!$appraisal->user->admin!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>department : </i></b>
                </td>
                <td>{!!$appraisal->user->department!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sub_unit : </i></b>
                </td>
                <td>{!!$appraisal->user->sub_unit!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>level : </i></b>
                </td>
                <td>{!!$appraisal->user->level!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>designation : </i></b>
                </td>
                <td>{!!$appraisal->user->designation!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>dob : </i></b>
                </td>
                <td>{!!$appraisal->user->dob!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sex : </i></b>
                </td>
                <td>{!!$appraisal->user->sex!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>remember_token : </i></b>
                </td>
                <td>{!!$appraisal->user->remember_token!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$appraisal->user->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$appraisal->user->updated_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>year : </i></b>
                </td>
                <td>{!!$appraisal->appraisal_year->year!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>title : </i></b>
                </td>
                <td>{!!$appraisal->appraisal_year->title!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$appraisal->appraisal_year->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$appraisal->appraisal_year->updated_at!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection
