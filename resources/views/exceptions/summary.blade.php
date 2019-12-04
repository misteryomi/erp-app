@extends('layouts.app')

@section('content')
    <div class="doc-content-section-inner">

      @include('exceptions.exceptions_summary_template')

      @if(auth()->user()->isExceptionAdmin())
      <a href="{{ route('exceptions.new') }}" class="btn btn-primary mt-2 mb-2"><i class="fa fa-plus pr-2"></i> Raise an exception</a>
      <a href="{{ route('exceptions.list', 'display_all') }}" class="btn btn-primary mt-2 mb-2">Show all Exceptions</a>
      @endif
      <div class="card mb-4">
        <div class="card-body py-3">
          <p class="card-title ml-n1">Recently created exceptions</p>
        </div>
          @php $viewMoreRoute = route('exceptions.list'); @endphp
          @include('exceptions.exceptions_list_template')
      </div>
    </div>
@endsection
