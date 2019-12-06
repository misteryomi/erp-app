<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    IRS @yield('page_title')
  </title>
  <!-- Favicon -->
  <link href="{{ asset('assets/img/brand/favicon.png') }}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('assets/css/argon.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />

  {{-- <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css" rel="stylesheet" /> --}}
  <!-- Page plugins -->
  <!-- Argon CSS -->
  {{-- <link rel="stylesheet" href="assets/css/argon.min9f1e.css?v=1.1.0" type="text/css"> --}}
  @yield('kc_styles')
  @yield('styles')
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
</head>
