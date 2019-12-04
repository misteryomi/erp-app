<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>IRS Helpdesk Vendor</title>
    <!-- plugins:css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.css')}}">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2-styles/select2-bootstrap4.min.css')}}">
    <!-- Layout style -->
    <link rel="shortcut icon" href="#" />
    @yield('styles')
    @yield('helpdesk_styles')
  </head>
  <body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper d-none d-lg-block">
        <a href="index.html">
          <!-- <img class="logo" src="{{ asset('assets/images/logo.svg')}}" alt="">
          <img class="logo-mini" src="{{ asset('assets/images/logo_mini.svg')}}" alt=""> -->
        </a>
      </div>
      <div class="t-header-content-wrapper">
        <div class="t-header-content">
          <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
            <i class="mdi mdi-menu"></i>
          </button>
          <form action="{{ route('tickets.admin.tickets.list') }}" class="t-header-search-box">
            <div class="input-group">
              <input type="text" name="ticket_id" class="form-control" id="inlineFormInputGroup" placeholder="Search tickets" autocomplete="off">
              <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
            </div>
          </form>
          <ul class="nav ml-auto">
            <li class="nav-item">
             <a class="nav-link" href="{{ route('tickets.vendor.logout') }}">
                Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
      <!-- partial:partials/_sidebar.html -->
      <div class="sidebar">
        <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <!-- <img class="profile-img img-lg rounded-circle" src="{{ asset('asets/images/profile/male/image_1.png')}}" alt=""> -->
          </div>
          <div class="info-wrapper">
            <p class="user-name">{{ auth()->user()->name }}</p>
            <!-- <h6 class="display-income">$3,400,00</h6> -->
          </div>
        </div>
        <ul class="navigation-menu">
          @php
            $routes = [
                [ "route" => route('tickets.vendor.dashboard'), "name" => "Dashboard", "icon" => 'mdi-gauge'],
                [ "route" => route('tickets.vendor.list'), "name" => "My tickets", "icon" => 'mdi-view-list'],
                [ "route" => route('tickets.vendor.list', ['department']), "name" => "Department tickets", "icon" => 'mdi-view-list'],
                [ "route" => route('tickets.vendor.new'), "name" => "Create Ticket for Staff", "icon" => 'mdi-view-list'],
                [ "route" => route('tickets.vendor.password.reset'), "name" => "Reset Password", "icon" => 'mdi-key'],
              ]
          @endphp
          @foreach($routes as $route)
          <li {{ (request()->fullUrl() === $route['route']) ? 'class=active' : ''}}>
            <a href="{{ $route['route'] }}">
              <span class="link-title">{{ $route['name'] }}</span>
              <i class="mdi {{ $route['icon'] }} link-icon"></i>
            </a>
          </li>

          @endforeach
          <!-- <li>
            <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">Sample Pages</span>
              <i class="mdi mdi-flask link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="sample-pages">
              <li>
                <a href="pages/sample-pages/login_1.html" target="_blank">Login</a>
              </li>
              <li>
                <a href="pages/sample-pages/error_2.html" target="_blank">Error</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">UI Elements</span>
              <i class="mdi mdi-bullseye link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="ui-elements">
              <li>
                <a href="pages/ui-components/buttons.html">Buttons</a>
              </li>
              <li>
                <a href="pages/ui-components/tables.html">Tables</a>
              </li>
              <li>
                <a href="pages/ui-components/typography.html">Typography</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="pages/forms/form-elements.html">
              <span class="link-title">Forms</span>
              <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
          </li>
          <li>
            <a href="pages/charts/chartjs.html">
              <span class="link-title">Charts</span>
              <i class="mdi mdi-chart-donut link-icon"></i>
            </a>
          </li>
          <li>
            <a href="pages/icons/material-icons.html">
              <span class="link-title">Icons</span>
              <i class="mdi mdi-flower-tulip-outline link-icon"></i>
            </a>
          </li>
          <li class="nav-category-divider">DOCS</li>
          <li>
            <a href="docs/docs.html">
              <span class="link-title">Documentation</span>
              <i class="mdi mdi-asterisk link-icon"></i>
            </a>
          </li> -->
        </ul>
      </div>
      <!-- partial -->
      <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="content-viewport" id="app">

                @yield('content')

          </div>
        </div>
        <!-- content viewport ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="row">
            <div class="col-sm-12 text-center text-sm-right mt-3 mt-sm-0">
              <small class="text-muted d-block">Copyright © 2019 Primera Africa. All rights reserved</small>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/core.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{ asset('assets/js/charts/chartjs.addon.js')}}"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="{{ asset('assets/js/template.js')}}"></script>
    <script src="{{ asset('assets/js/dashboard.js')}}"></script>
    @yield('scripts')
    @yield('helpdesk_scripts')
    <!-- endbuild -->
  </body>
</html>