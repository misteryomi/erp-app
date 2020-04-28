@extends('layouts.app')

@php $page_title = 'Pay Slip Upload Dashboard';  @endphp

@section('content')
    @include('layouts.partials.alert')
    <form action="{{ route('layouts.payslip.upload') }}" enctype="multipart/form-data" method="post">
        @csrf
        
        <div class="form-group">
            <input type="file" name="file" class="form-control"/>
        </div>
        <div class="form-group row">
            <div class="col-md-4">
                <select name="month" required class="form-control">
                <option name="">Month</option>
                @for($i = 1; $i <= 12; $i++)
                    <option name="{{ $i }}">{{ $i }}</option>
                @endfor
                </select>
            </div>
            <div class="col-md-4">
                <select name="year" required class="form-control">
                    <option name="">Year</option>
                    @for($i = date('Y') - 2; $i <= date('Y'); $i++)
                    <option name="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <input type="checkbox" name="override"/> Override
        </div>


        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
@endsection