@extends('layouts.app')

@section('content')
      <div class="row">
          <div class="col-12 pt-5 pb-4">
            <h4>All Tickets assigned to me</h4>
          </div>
      </div>
      <div class="card">
          <div class="card-body">
            <p class="card-title ml-n1 mb-2">Filter tickets</p>

            @include('tickets.tickets_filter_template')
            <hr/>
          </div>

          @include('tickets.vendor.tickets_list_template')
      </div>
@endsection

@include('tickets.tickets_scripts_template')
