
<script src="{{ base_url('assets/wordify') }}/js/jquery-3.2.1.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/popper.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/bootstrap.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/owl.carousel.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/jquery.waypoints.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/jquery.stellar.min.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/jquery-migrate-3.0.0.js"></script>
<script src="{{ base_url('assets/combodate') }}/combodate.js"></script>
<script src="{{ base_url('assets/wordify') }}/js/main.js"></script>
<script>
    // santri
    document.getElementsByName('foto_santri').required = true
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#santri')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    // wali
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#wali')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    // ayah
    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#ayah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    // ibu
    function readURL4(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#ibu')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    // akte
    function readURL5(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#akte')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    // kk
    function readURL6(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    // bpjs
    function readURL7(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah2')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    // ktp
    function readURL8(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#ktp')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    // ktp wali
    function readURL9(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#ktpwali')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    // ktp ayah
    function readURL10(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#ktpayah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    // ktp ibu
    function readURL11(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#ktpibu')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    // ijazah
    function readURL12(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#ijazah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    // skhun
    function readURL13(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah4')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

<!-- reset input file -->
<script>

    // reset akte
    $('#btn-reset-akte').on('click', function(e){
    var $el = $('#blah');
    $el.wrap('<form>').closest('form').get(0).reset();
    $el.unwrap();
    });

    // reset kk
    $('#btn-reset-kk').on('click', function(e){
    var $el = $('#blah2');
    $el.wrap('<form>').closest('form').get(0).reset();
    $el.unwrap();
    });

    // bpjs
    $('#btn-reset-bpjs').on('click', function(e){
    var $el = $('#blah4');
    $el.wrap('<form>').closest('form').get(0).reset();
    $el.unwrap();
    });

    // ktp
    $('#btn-reset-ktp').on('click', function(e){
    var $el = $('#blah4');
    $el.wrap('<form>').closest('form').get(0).reset();
    $el.unwrap();
    });

    // ktp wali
    $('#btn-reset-ktpwali').on('click', function(e){
    var $el = $('#blah5');
    $el.wrap('<form>').closest('form').get(0).reset();
    $el.unwrap();
    });

    //ktp ayah
    $('#btn-reset-ktpayah').on('click', function(e){
    var $el = $('#blah6');
    $el.wrap('<form>').closest('form').get(0).reset();
    $el.unwrap();
    });

    // ktp ibu
    $('#btn-reset-ktpibu').on('click', function(e){
    var $el = $('#blah7');
    $el.wrap('<form>').closest('form').get(0).reset();
    $el.unwrap();
    });

    // ijazah
    $('#btn-reset-ijazah').on('click', function(e){
      var $el = $('#blah8');
      $el.wrap('<form>').closest('form').get(0).reset();
      $el.unwrap();
    });

    // skhun
    $('#btn-reset-skhun').on('click', function(e){
      var $el = $('#blah9');
      $el.wrap('<form>').closest('form').get(0).reset();
      $el.unwrap();
    });
</script>

<script>
  const token = '7458172610.ac02e98.7956d17dae3d4157928e44897bafaa88';
  const username = 'ffadilaputra';
  const userid = 7458172610
  const num_photos = 12

  $.ajax({
    url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent', // or /users/self/media/recent for Sandbox
    dataType: 'jsonp',
    type: 'GET',
    data: {access_token: token, count: num_photos},
    success: function(data){
      console.table(data);
      for( x in data.data ){
        $('#data').append('<div class="col-sm-4"> <div class="item"> <img src="'+data.data[x].images.low_resolution.url+'"></div></div>');
    }
    },
        error: function(data){
        console.log(data); // send the error notifications to console
    }
    })

</script>
<script src='https://www.google.com/recaptcha/api.js'></script>


