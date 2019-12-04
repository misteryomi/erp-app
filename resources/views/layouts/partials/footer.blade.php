  <!--   Core   -->
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/js/select2.min.js"></script>
  <script src="{{ asset('assets/js/argon.min.js') }}"></script>

  <script>

      $(document).ready(function() {
          var btn = $("button[type='submit']");

          $("form").submit(function() {
              btn.attr('disabled', true);
              btn.html('<i class="fa fa-spin fa-spinner"></i> Please wait...')
          });
          $('.datepicker').datepicker();

        });

  </script>
  @yield('kc_scripts')
  @yield('scripts')
</body>

</html>
