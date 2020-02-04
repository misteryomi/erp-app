@include('layouts.partials.header')

<body>
    <div id="ofBar" class="d-none text-center">
        <strong>Announcement:</strong> 
        <span></span>
      <button class="btn btn-primary" id="btn-bar" data-toggle="modal" data-target="#anouncementModal">Read More</button>
      <a href="#" id="close-bar" onClick="hideAnnouncementModal()">×</a></div>

   @include('layouts.partials.sidebar')
  <div class="main-content" id="panel">
    @include('layouts.partials.navbar')

    @yield('wide_content')

    <div class="container mt-5">
        @yield('content')
    </div>

    <div class="modal fade" id="anouncementModal" tabindex="-1" role="dialog" aria-labelledby="anouncementModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="anouncementModal">Announcement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <p id="anouncementText"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Dismiss</button>
                <button type="button" class="btn btn-primary" id="markAsSeen">Mark as Read</button>
            </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="text-center">
            <small>© {{ date('Y') }} ALL RIGHTS RESERVED. POWERED BY PRIMERAMFBANK.COM</small>
        </div>
    </footer>

</div>
@include('layouts.partials.footer')
