@extends('layouts.app')
@section('page_title')Authorizer Mandate  @endsection

@section('content') 

<?php
use App\User;

use Carbon\Carbon;
?>
<!-- BEGIN CONTENT -->
@include('flutterwafe.menu')
<!-- BEGIN CONTENT -->
<!-- BEGIN CONTENT -->

@php
use App\Flutterwave_permission;
$user_permission = Flutterwave_permission::where('staff',Auth::user()->ID)->first();
@endphp

@if ($user_permission->staff_permission === 'mandate_authorizer') 

<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->


		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li> <i class="icon-home"></i> <a href="#">Home</a> <i class="fa fa-angle-right"></i> </li>
				<li> <a href="#">{{$title}} </a> </li>
			</ul>
		</div>




		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="card">

					<div class="card-body



						<div class=""  id="creator-form">
							<div class="card">
								<div class="card-header">


								</div>





								<div class="" id="table-content-display">

									<div class="card">
										<div class="card-header">
											<h4>
												{{$title}}
											</h4>
											<div class="actions"></div>
											<span>Displaying</span> 

											<div class="card-header-right"> <i class="icofont icofont-rounded-down"></i> <i class="icofont icofont-refresh"></i> <i class="icofont icofont-close-circled"></i> </div>
										</div>
										<div class="card-body
											<div>
												<div id="new-cons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
													<div class="row">
														<div class="actions"></div>
														<div class="col-xs-12 col-sm-12 table-responsive">
															<table class="table table-striped table-bordered table-hover table-header-fixed"  id="sample_1">
																<thead>
																	<tr role="row">


																		<th>Customer Name</th>
																		<th>Status</th>

																		<th>Primera Acc No.</th>
																		<th>LD</th>
																		<th>Repayment Amount</th>



																		<th>Frequency</th>
																		<th>Loan Tenure</th>

																		<th>Start Date</th>
																		<th>End Date</th> 


																		<th>Last Update</th>
																		<th>Actions</th>
																	</tr>
																	<input type="hidden" name="_token" value="FhNQh52osu61R1GK4s1jVfzNcQLmEhIRjYLZvvGO">
																</thead>
																<tbody id="PostContent">
																	@foreach($flutterwaves as $flutterwafe) 
																	<tr  @if($flutterwafe->life_token != "") style="color:#BD0000" @else style="color:#BD0000" @endif  class="item{!!$flutterwafe->
																		id!!}" > 
																		<td>{!!$flutterwafe->customer_name!!}</td>
																		<td>Pending </td>

																		<td>{!!$flutterwafe->cfi!!}</td>
																		<td>{!!$flutterwafe->ld!!}</td>
																		<td>{!!$flutterwafe->amount!!}</td>


																		<td>{!!$flutterwafe->frequency!!}</td>
																		<td>{!!$flutterwafe->other3!!}</td>

																		<td>{!! Carbon::parse($flutterwafe->start_date)->addMonths(1)->format('d-m-Y') !!} </td>
																		<td>{!! Carbon::parse($flutterwafe->end_date)->format('d-m-Y') !!}</td> 


<!--                                                                                 <td>{!!$flutterwafe->other5!!}</td>
-->                                                                                <td>{!!$flutterwafe->updated_at->diffForHumans()!!} </td>
									<td>

										@if($flutterwafe->life_token != "") 

										<a class="btn-success btn btn-sm" href="{!! route('tokenize.view_mandate', $flutterwafe->id)!!}?approval=yes"> Proceed </a>




										@if( ($user_permission->staff_department === 'it2') || ($user_permission->staff_department === 'it2') )

										<button class="delete-modal btn btn-danger btn-sm" data-id="{!!$flutterwafe->id!!}"> Delete </button>
										@endif
										@else 
										Not Tokenized
										@endif



									</td>
</tr>
@endforeach 





</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Modal form to delete a form -->








								<div class="" id="table-content-display">

									<div class="card">
										<div class="card-header">
											<h4>
												Authorized Mandate 
											</h4>
											<div class="actions"></div>
											<span>Displaying</span> 

											<div class="card-header-right"> <i class="icofont icofont-rounded-down"></i> <i class="icofont icofont-refresh"></i> <i class="icofont icofont-close-circled"></i> </div>
										</div>
										<div class="card-body
											<div>
												<div id="new-cons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
													<div class="row">
														<div class="actions"></div>
														<div class="col-xs-12 col-sm-12 table-responsive">
															<table class="table table-striped table-bordered table-hover table-header-fixed"  id="sample_2">
																<thead>
																	<tr role="row">


																		<th>Customer Name</th>
																		<th>Status</th>

																		<th>Primera Acc No.</th>
																		<th>LD</th>
																		<th>Repayment Amount</th>



																		<th>Frequency</th>
																		<th>Loan Tenure</th>

																		<th>Start Date</th>
																		<th>End Date</th> 


																		<th>Last Update</th>
																		<th>Actions</th>
																	</tr>
																	<input type="hidden" name="_token" value="FhNQh52osu61R1GK4s1jVfzNcQLmEhIRjYLZvvGO">
																</thead>
																<tbody id="PostContent">
																	

	@foreach($flutterwaves_completed as $flutterwafe_completed) 
																	<tr  @if($flutterwafe_completed->life_token != "") style="color:#075B01" @else style="color:#075B01" @endif  class="item{!!$flutterwafe_completed->
																		id!!}" > 
																		<td>{!!$flutterwafe_completed->customer_name!!}</td>
																		<td >@if($flutterwafe_completed->authorizer_status == 1)<span style="color:#075B01"> {!!$flutterwafe_completed->authorizer_comment!!} </span> @elseif($flutterwafe_completed->authorizer_status == 2)<span style="color:#BD0000"> Rejected : ({!!$flutterwafe_completed->authorizer_comment!!}) </span> @else <span style="color:#BD0000"> Pending Authorization </span> @endif</td>

																		<td>{!!$flutterwafe_completed->cfi!!}</td>
																		<td>{!!$flutterwafe_completed->ld!!}</td>
																		<td>{!!$flutterwafe_completed->amount!!}</td>


																		<td>{!!$flutterwafe_completed->frequency!!}</td>
																		<td>{!!$flutterwafe_completed->other3!!}</td>
																		
																		<td>{!! Carbon::parse($flutterwafe_completed->start_date)->addMonths(1)->format('d-m-Y') !!} </td>
																		<td>{!! Carbon::parse($flutterwafe_completed->end_date)->format('d-m-Y') !!}</td> 
																		

<!--                                                                                 <td>{!!$flutterwafe_completed->other5!!}</td>
-->                                                                                <td>{!!$flutterwafe_completed->updated_at->diffForHumans()!!} </td>
									<td>

										@if($flutterwafe_completed->life_token != "") 

										<a class="btn-success btn btn-sm" href="{!! route('tokenize.view_mandate', $flutterwafe_completed->id)!!}"> View Mandate </a>




										@if( ($user_permission->staff_department === 'it2') || ($user_permission->staff_department === 'it2') )

										<button class="delete-modal btn btn-danger btn-sm" data-id="{!!$flutterwafe_completed->id!!}"> Delete </button>
										@endif
										@else 
										Not Tokenized
										@endif



									</td>
</tr>
@endforeach 




</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Modal form to delete a form -->
<!-- Modal form to delete a form -->
<div id="deleteModal" class="modal fade bs-modal-sm" role="dialog" tabindex="-1" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">�</button>
			</div>
			<div class="modal-body">
				<p class="text-center"> Do you want to delete this Card Tokenization record </p>
				<br/>
				<form>
					<input type="hidden" class="form-control" id="id_delete" disabled>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger delete" data-dismiss="modal"> <span id="" class='glyphicon glyphicon-trash'></span> Delete </button>
				<button type="button" class="btn btn-warning" data-dismiss="modal"> <span class='glyphicon glyphicon-remove'></span> Close </button>
			</div>
		</div>
	</div>
</div>
<style> .card { box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2); transition: 0.3s; padding:15px; border-radius: 5px; /* 5px rounded corners */ } </style>
<!-- Page body start -->
<!-- Page body end of content before includes of component-->
<!-- Modal form to delete a form -->
@section('scripts') 
<!-- sweet alert js -->
@endsection @section('styles') 
<!-- sweet alert framework -->

@endsection 
<!-- Page body start -->

</div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->
</div>
</div>
</div>
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<!-- <script type="text/javascript">

	$(document).ready(function () {


		//$(this).dataTable().fnClearTable();
		// $(this).dataTable().fnDestroy();

	});
</script> -->



@else 

<center> <h2 style="color:red">PERMISSION GRANTED FAILED</h2> </center>

@endif
@endsection

@include('includes.scripts_table')

@include('includes.scripts_form')
