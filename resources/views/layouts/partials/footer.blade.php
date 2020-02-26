  <!--   Core   -->
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/argon.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>

  <script>

      $(document).ready(function() {


          $('.sidenav-toggler').click();

          // setInterval(() => {
          //     $('.g-sidenav-show').removeClass('g-sidenav-show');
          // }, 1000);

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });


        $('.select2').select2({
            theme: "bootstrap"
        });

          var btn = $("button[type='submit']");

          $("form").submit(function() {
              btn.attr('disabled', true);
              btn.html('<i class="fa fa-spin fa-spinner"></i> Please wait...')
          });

          // $('.datepicker').datepicker();


          $('#password-container').click(function(){
              let pwdField =  $('input#password');
              let attr = pwdField.attr('type');
              let toggler = $('.toggle-password');

              if(attr == 'password') {
                pwdField.attr('type', 'text');
                toggler.html('<i class="fa fa-eye"></i>')
              } else {
                pwdField.attr('type', 'password');
                toggler.html('<i class="fa fa-eye-slash"></i>')
              }
          });


          $.get("{{ route('announcement.list') }}",
             function(data, status) {
                  if(data) {
                    data = JSON.parse(data);
                    let excerpt = data.announcement.substr(0, 50) + '...';
                    $('#ofBar span').text(excerpt);
                    $('#anouncementText').text(data.announcement);
                    $('#markAsSeen').attr('data-id', data.id);
                    $('#ofBar').removeClass('d-none')
                  }
                });


          $('#markAsSeen').click(function() {
            $.ajax({
                type: "POST",
                url: "/announcements/seen/" + $(this).attr('data-id'),
                // data: { id: $(this).attr('data-id') },
                success: function(res) {
                  console.log(res);
                  $('#anouncementModal').modal('hide');
                  hideAnnouncementModal();
                },
            });
          })      

          $('#close-bar').click(function() {
            hideAnnouncementModal();            
          })

          function hideAnnouncementModal() {
            $('#ofBar').hide();
          }

          $('#welcomeModal').modal('show');
    });


  </script>
  @yield('kc_scripts')
  @yield('scripts')
</body>

</html>
