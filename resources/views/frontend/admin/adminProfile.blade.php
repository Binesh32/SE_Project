<!DOCTYPE html>
<html class="no-js">



<head>
	<title>GoGreen</title>
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

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>


	<div id="canvas">
		<div id="box_wrapper">

		<header class="page_header_side page_header_side_sticked active-slide-side-header ds">
				
				
				<div class="scrollbar-macosx">
					<div class="side_header_inner">

						<!-- user -->

						<div class="user-menu">


							<ul class="menu-click">
								<li>
									<a href="#">
										<div class="media">
											<div class="media-left media-middle">
												<img src="images/team/01.jpg" alt="">
											</div>
											<div class="media-body media-middle">
												<h4>CashCash</h4>
												Administrator

											</div>

										</div>
									</a>
									<ul>
										<li>
											<a href="{{ route('adminprofile') }}">
												<i class="fa fa-user"></i>
												Profile
											</a>
										</li>

										<li>
											<a href="{{ route('adminlogin') }}">
												<i class="fa fa-sign-out"></i>
												Log Out
											</a>
										</li>
									</ul>
								</li>
							</ul>

						</div>

						<!-- main side nav start -->
						<nav class="mainmenu_side_wrapper">
							
							

							
							<ul class="menu-click">
								<li>
									<a href="{{ route('inboxlist') }}">
										<i class="fa fa-user"></i>
										Inbox
									</a>
									
								</li>
								<li>
									<a href="{{route('postlist')}}">
										<i class="fa fa-file-text"></i>
										Posts
									</a>
								
								</li>
								<li>
									<a href="{{ route('bloglist') }}">
										<i class="fa fa-file-text"></i>
										Blogs
									</a>
								
								</li>
								<li>
									<a href="admin_products.html">
										<i class="fa fa-suitcase"></i>
										Products
									</a>
							
								</li>
								<li>
									<a href="{{ route('home') }}">
										<i class="fa fa-th-large"></i>
										Home
									</a>
							
								</li>
								
							</ul>

						
							
						</nav>
						<!-- eof main side nav -->

						

					</div>
				</div>
			</header>

			
			

			
			<section class="ls with_bottom_border">
				<div class="container-fluid">
					
					<!-- .row -->
				</div>
				<!-- .container -->
			</section>

			<div class="container-fluid">

					<div class="row">
						<div class="col-sm-12">
							<h3>Admin
								<small>profile</small>
							</h3>
						</div>
					</div>
					<!-- .row -->


					<div class="row">
						<div class="col-md-12">


							<div class="row">
								<!-- User Bio -->
								<div class="col-xs-12 col-sm-12">

									<div class="with_border with_padding">
										<div class="media big-left-media">
											<div class="media-left">
												<img src="images/team/01.jpg" alt="...">
											</div>
											<div class="media-body">
												<h4>CashCash
													<small>Admin</small>
												</h4>
												<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
									</p>
											</div>
										</div>
									</div>
									<!-- .with_border -->
								</div>
								<!-- .col-* -->

							</div>
							<!-- .row -->

							<div class="row">

								<!-- User Info -->
								<div class="col-xs-12 col-md-6">
									<div class="with_border with_padding">
										<h4>
											User Info
										</h4>

										<ul class="list1 no-bullets">
											<li>
												<div class="media small-teaser">
													<div class="media-left media-middle">
														<div class="teaser_icon label-warning round fontsize_16">
															<i class="fa fa-globe"></i>
														</div>
													</div>
													<div class="media-body media-middle">
														<strong class="grey">
															Location:
														</strong>
														Australia
													</div>
												</div>
											</li>
											<li>
												<div class="media small-teaser">
													<div class="media-left media-middle">
														<div class="teaser_icon label-success round fontsize_16">
															<i class="fa fa-flag"></i>
														</div>
													</div>
													<div class="media-body media-middle">
														<strong class="grey">
															Company:
														</strong>
														Awesome Company
													</div>
												</div>
											</li>
											<li>
												<div class="media small-teaser">
													<div class="media-left media-middle">
														<div class="teaser_icon label-info round fontsize_16">
															<i class="fa fa-briefcase"></i>
														</div>
													</div>
													<div class="media-body media-middle">
														<strong class="grey">
															Position:
														</strong>
														CEO
													</div>
												</div>
											</li>
										</ul>

									</div>
									<!-- .with_border -->
								</div>
								<!-- col-* -->

								<!-- User Statistics -->
								<div class="col-xs-12 col-md-6">
									<div class="with_border with_padding">
										<h4>
											User Statistics
										</h4>

										<ul class="list1 no-bullets">
											<li>
												<div class="media small-teaser">
													<div class="media-left media-middle">
														<div class="teaser_icon label-success fontsize_16">
															<i class="fa fa-comments"></i>
														</div>
													</div>
													<div class="media-body media-middle">
														<strong class="grey">
															Comments:
														</strong>
														146
													</div>
												</div>
											</li>
											<li>
												<div class="media small-teaser">
													<div class="media-left media-middle">
														<div class="teaser_icon label-info fontsize_16">
															<i class="fa fa-calendar"></i>
														</div>
													</div>
													<div class="media-body media-middle">
														<strong class="grey">
															Member sicne:
														</strong>
														12/10/2014
													</div>
												</div>
											</li>
											<li>
												<div class="media small-teaser">
													<div class="media-left media-middle">
														<div class="teaser_icon label-warning fontsize_16">
															<i class="fa fa-bolt"></i>
														</div>
													</div>
													<div class="media-body media-middle">
														<strong class="grey">
															Last activity:
														</strong>
														2 days ago
													</div>
												</div>
											</li>

										</ul>

									</div>
									<!-- .with_border -->
								</div>
								<!-- col-* -->
							</div>
							<!-- .row -->


							
							<!-- .row -->
						</div>
						<!-- .col-* left column -->

						
						<!-- .col-* right column -->
					</div>
					<!-- .row main columns -->
				</div>

			

		</div>
	
	</div>




	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>



</body>


</html>