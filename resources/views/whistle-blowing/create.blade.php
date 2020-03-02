@extends('layouts.app')


@section('content')
<div class="container mt-6">
    <h1>Whistle Blower Form</h1>
    <div class="alert alert-default">
    <p>We urge you to kindly report any suspected improper activities or misconduct by our Staff, Management and other Stakeholders. </p>
    <p>Your confidentiality shall be fully respected.</p>
    </div>
    
    <div class="card">
        <div class="card-body">
            {!! form($form) !!}        
        </div>
    </div>
</div>
@endsection
