@extends('layouts.app')


@section('content')
<div class="container mt-6">
    <h1>Board Room Booking Blower Form</h1>
    <div class="alert alert-default">
    <p>IN THE BID TO ENSURE PROPER COORDINATION AND USE OF THE BOARDROOM, ALL STAFF MEMBERS ARE REQUIRED TO MAKE RESERVATIONS FOR THE USE OF THE BOARDROOM A DAY BEFORE USE.</p>
    </div>
    
    <div class="card">
        <div class="card-body">
            {!! form($form) !!}        
        </div>
    </div>
</div>
@endsection
