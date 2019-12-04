@extends('layouts.app')

@section('content')
    <div class="doc-content-section-inner">
    <h1 class="mb-1">{{ request()->has('supervisor')? 'Supervisor ' : '' }}Exceptions</h1>
    @if(auth()->user()->isExceptionAdmin())
    @include('exceptions.exceptions_summary_template')
      @if(auth()->user()->isExceptionAdmin())
      <a href="{{ route('exceptions.new') }}" class="btn btn-primary mt-2 mb-2"><i class="fa fa-plus pr-2"></i> Raise an exception</a>
      <a href="{{ route('exceptions.list', 'display_all') }}" class="btn btn-primary mt-2 mb-2">Show all Exceptions</a>
      @endif
    <a href="?export" class="btn btn-primary mt-2 mb-2">Download Report</a>
    @endif
      <div class="card">
          <div class="card-body py-3">
              <p class="card-title ml-n1">Filter</p>
              @include('exceptions.exceptions_filter_template')
              <hr/>
          </div>
          @include('exceptions.exceptions_list_template')
      </div>
    </div>
@endsection

@include('exceptions.exceptions_scripts_template')
