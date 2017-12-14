
<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dream Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="{{asset('public/frontEnd/css/bootstrap.css')}}"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="{{asset('public/frontEnd/css/style.css')}}" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="{{asset('public/frontEnd/css/font-awesome.css')}}"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!--  --><!-- online-fonts
	 <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
	 <link href="//fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	 <link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
	 <!-- //online-fonts --> 

	<!-- js -->
	<script type="text/javascript" src="{{asset('public/frontEnd/js/jquery-2.1.4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/frontEnd/js/bootstrap.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
</head>
<body>
<!-- header -->
	@include('frontEnd.header.headerTop')
	<!--Slider-->
	@include('frontEnd.header.slider')	
		<!--//Slider-->

	@include('frontEnd.header.booking')	
<!-- //header -->
<!-- /about -->
	@include('frontEnd.body.about')
<!-- /about -->
<!-- /services -->
 	@include('frontEnd.body.service')
<!-- //services-->
<!-- Gallery -->
	@include('frontEnd.body.gallery')
<!-- //Gallery -->

<!-- Testimonials -->
	<!-- @include('frontEnd.includes.Testimonials') -->
<!-- //Testimonials -->


<!-- js files -->
	<!-- For-Banner -->
		 <script src="{{asset('public/frontEnd/js/responsiveslides.min.js')}}"></script>
		 <script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  $("#slider").responsiveSlides({
				auto: true,
				manualControls: '#slider3-pager',
			  });
			});
		  </script>
	
<!--footer-->
	@include('frontEnd.includes.footer')
<!--//footer-->
		<script src="{{asset('public/frontEnd/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});		
		</script>
		<!-- //script for portfolio -->
	<!-- //For-Gallery-js -->
<!-- for-Testimonials -->
			<!-- required-js-files-->
							<link href="{{asset('public/frontEnd/css/owl.carousel.css" rel="stylesheet')}}">
							    <script src="{{asset('public/frontEnd/js/owl.carousel.js')}}"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			<!--//required-js-files-->
		<!-- //for-Testimonials -->
<!-- Calendar -->
			<link rel="stylesheet" href="{{asset('public/frontEnd/css/jquery-ui.css')}}" />
			<script src="{{asset('public/frontEnd/js/jquery-ui.js')}}"></script>
			  <script>
					  $(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
					  });
			  </script>
		<!-- //Calendar -->
		 <!-- start-smoth-scrolling -->
				<script type="text/javascript" src="{{asset('public/frontEnd/js/move-top.js')}}"></script>
				<script type="text/javascript" src="{{asset('public/frontEnd/js/easing.js')}}"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
		<!-- start-smoth-scrolling -->
		<!-- smooth scrolling-bottom-to-top -->
				<script type="text/javascript">
					$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/								
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				<script src="{{asset('public/frontEnd/js/SmoothScroll.min.js')}}"></script>



</body>
</html>