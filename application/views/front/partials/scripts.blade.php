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

<script>
    const token = '2319944310.59d4d0c.9fad902cc35e4130ad07ebc3b0b9f66c';
    const username = 'ffadilaputra';
    const userid = 2319944310
    const num_photos = 4

    $.ajax({
      url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent', // or /users/self/media/recent for Sandbox
	    dataType: 'jsonp',
	    type: 'GET',
	    data: {access_token: token, count: num_photos},
	    success: function(data){
        //console.log(data);
        for( x in data.data ){
          $('#data').append('<div class="col-sm-4"> <div class="item"> <img src="'+data.data[x].images.low_resolution.url+'"></div></div>');
		}
	},
	error: function(data){
		console.log(data); // send the error notifications to console
	}

    })

</script>