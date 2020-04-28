@extends('layouts.app')

@php $page_title = 'Ippis Upload Dashboard'; @endphp

@section('content')
    @include('layouts.partials.alert')
    <form action="{{ route('ippis.upload') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <input type="file" name="file" class="form-control"/>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
@endsection