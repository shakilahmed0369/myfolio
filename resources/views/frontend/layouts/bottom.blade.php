	<!--
		jQuery Scripts
	-->
	<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.validate.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.magnific-popup.js') }}"></script>
	<script src="{{ asset('frontend/js/imagesloaded.pkgd.js') }}"></script>
	<script src="{{ asset('frontend/js/isotope.pkgd.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.slimscroll.js') }}"></script>
	<script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
	<script src="{{ asset('frontend/js/magnific-popup.css') }}"></script>
	<script src="https://kit.fontawesome.com/38f33a5e76.js" crossorigin="anonymous"></script>
	<!--
		extra Scripts
	-->
	<script>
	$(document).ready(function() {
  	$('#about-card').addClass('fadeInLeft');
  	$('#resume-card').addClass('fadeInLeft');
		$('#works-card').addClass('fadeInLeft');
		$('#blog-card').addClass('fadeInLeft');
		$('#contacts-card').addClass('fadeInLeft');
	});

	
	</script>
	
	<!--
		Main Scripts
	-->
	<script src="{{ asset('frontend/js/scripts.js') }}"></script>

	<script>
		$('.test-popup-link').magnificPopup({
  		type: 'image'
  		// other options
		});
	</script>