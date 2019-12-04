@include('layouts.partials.header')

<body>

   @include('layouts.partials.sidebar')
  <div class="main-content" id="panel">
    @include('layouts.partials.navbar')

    @yield('wide_content')

    <div class="container mt-5">
        @yield('content')
    </div>


    <footer class="footer">
        <div class="text-center">
            <small>© {{ date('Y') }} ALL RIGHTS RESERVED. POWERED BY PRIMERAMFBANK.COM</small>
        </div>
    </footer>

</div>
@include('layouts.partials.footer')
