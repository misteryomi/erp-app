@extends('layouts.app')

@section('content')
    <div style="height: 600px;">
        <div id="fm"></div>
    </div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endsection
