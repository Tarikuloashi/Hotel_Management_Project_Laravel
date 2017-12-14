
<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="keywords" content="Simple Login and Signup Form web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" /> -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="{{asset('public/admin/login/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="{{asset('public/admin/login/js/jquery-1.9.1.min.js')}}"></script>
<!--// js -->
<link rel="stylesheet" type="text/css" href="{{asset('public/admin/login/css/easy-responsive-tabs.css ')}}" />
 <!-- <link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet"> -->
</head>
<body class="bg agileinfo">
   <h1 class="agile_head text-center"> Simple <a href="{{ route('login') }}">Login</a> and <a href="{{ route('register') }}">Register</a> Form</h1>
   <div class="w3layouts_main wrap">
    <!--Horizontal Tab-->
       
		 <!-- //Horizontal Tab -->
		 @yield('content')
    </div>
	<!-- <div class="agileits_w3layouts_copyright text-center">
			<p>© 2017 Simple Login and Signup Form. All rights reserved | Design by <a href="//w3layouts.com/">W3layouts</a></p>
	</div> -->
<!--tabs-->
<script src="{{asset('public/admin/login/js/easyResponsiveTabs.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
	//Horizontal Tab
	$('#parentHorizontalTab_agile').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion
		width: 'auto', //auto or any width like 600px
		fit: true, // 100% fit in a container
		tabidentify: 'hor_1', // The tab groups identifier
		activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#nested-tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
		}
	});
});
</script>
<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword(){
			var pass2=document.getElementById("password2").value;
			var pass1=document.getElementById("password1").value;
			if(pass1!=pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');	 
				//empty string means no validation error
		}

</script>
<!--//tabs-->
</body>
</html>

