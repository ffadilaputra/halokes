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

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the crurrent tab

    function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
    }

    function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
    }

    function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
    }

    function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
    }
</script>
