<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.addons.css') }}" />
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/shared/style.css') }}" />
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
    <!-- Layout style -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}" />
  </head>
  <body>
    <div class="authentication-theme auth-style_1">
      <div class="row">
        <div class="col-12 logo-section">
          <a href="../../index.html" class="logo">
            <img src="{{ asset('assets/icon.png') }}" alt="" />
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
                    @yield('content')
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/core.js.css') }}"></script>
    <script src="{{ asset('assets/vendors/js/vendor.addons.js.css') }}"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="{{ asset('assets/js/template.js.css') }}"></script>
    <!-- endbuild -->
  </body>
</html>
