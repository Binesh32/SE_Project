<!DOCTYPE html>

<html class="no-js">
<<head>
	<title>CashCash</title>
	<meta charset="utf-8">

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/dashboard.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>

<body class="admin">

	


	<div id="canvas">
		<div id="box_wrapper">


			 <!-- header  -->
       @include('frontend.includesAdmin.header')

        <!-- content -->
        @yield('content')

			

		</div>
	
	</div>




	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>



</body>



</html>