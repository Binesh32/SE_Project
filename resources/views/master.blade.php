<!DOCTYPE html>

<html>
<head>
	<title>CashCash</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" >
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>


<body>
	<!-- <div id="canvas"> -->
		<div id="box_wrapper">
		 <!-- header  -->
			@include('frontend.includes.header')
			<!-- slider -->
			@include('frontend.includes.slider')
			<!-- content -->
			@yield('content')

			
			<!-- footer -->
		@include('frontend.includes.footer')

		</div>
	<!-- </div> -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>


</body>


</html>