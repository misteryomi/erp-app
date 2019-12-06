@extends('layouts.app')

@section('content')
@include('tickets.admin.layouts.menu')
      <div class="row">
          <div class="col-12 pt-5 pb-4">
            <h4>All Tickets</h4>
            <div class="text-right">
                <a href="{{ request()->fullUrlWithQuery(['export' => true]) }}" class="btn btn-primary">
                  <span class="mdi mdi-cloud-download mr-3"></span> Download Report
                </a>
            </div>
          </div>
      </div>
      <div class="card">
          <div class="card-body">
            <p class="card-title ml-n1 mb-2">Filter tickets</p>

            @include('tickets.tickets_filter_template')
            <hr/>
          </div>

          @include('tickets.admin.tickets.tickets_list_template')
      </div>
@endsection

@include('tickets.tickets_scripts_template')
