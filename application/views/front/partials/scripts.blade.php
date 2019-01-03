  <!-- Include all js compiled plugins (below), or include individual files as needed -->

  <script src="{{ base_url('assets/browny') }}/assets/js/jquery.js"></script>

  <!--modernizr.min.js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

  <!--bootstrap.min.js-->
  <script src="{{ base_url('assets/browny') }}/assets/js/bootstrap.min.js"></script>

  <!-- bootsnav js -->
  <script src="{{ base_url('assets/browny') }}/assets/js/bootsnav.js"></script>

  <!-- jquery.sticky.js -->
  <script src="{{ base_url('assets/browny') }}/assets/js/jquery.sticky.js"></script>

  <!-- for progress bar start-->

  <!-- progressbar js -->
  <script src="{{ base_url('assets/browny') }}/assets/js/progressbar.js"></script>
  <!-- appear js -->
  <script src="{{ base_url('assets/browny') }}/assets/js/jquery.appear.js"></script>
  <!-- for progress bar end -->
  <!--owl.carousel.js-->
  <script src="{{ base_url('assets/browny') }}/assets/js/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <!--Custom JS-->
  <script src="{{ base_url('assets/browny') }}/assets/js/custom.js"></script>

  <!-- captcha -->
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <script>
  $(function () {

  window.verifyRecaptchaCallback = function (response) {
      $('input[data-recaptcha]').val(response).trigger('change')
  }

  window.expiredRecaptchaCallback = function () {
      $('input[data-recaptcha]').val("").trigger('change')
  }

  $('#contact-form').validator();

  $('#contact-form').on('submit', function (e) {
      if (!e.isDefaultPrevented()) {
          var url = "contact.php";

          $.ajax({
              type: "POST",
              url: url,
              data: $(this).serialize(),
              success: function (data) {
                  var messageAlert = 'alert-' + data.type;
                  var messageText = data.message;

                  var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                  if (messageAlert && messageText) {
                      $('#contact-form').find('.messages').html(alertBox);
                      $('#contact-form')[0].reset();
                      grecaptcha.reset();
                  }
              }
          });
          return false;
      }
  })
  });
  </script>