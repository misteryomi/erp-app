@include('layouts.partials.header')

<body class="bg-default">
    <div class="main-content">
      <div class="container mt-6 pb-5">
            @yield('content')
    </div>

  </div>
  @include('layouts.partials.footer')
