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

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>


	



	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

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

			<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-4">
							<h3 class="dashboard-page-title">Dashboard
								
							</h3>
						</div>
						<div class="col-md-8 text-md-right">
							

							

						</div>

					</div>
					<!-- .row -->


					<div class="row">
						<div class="col-lg-3 col-sm-6">

							<div class="teaser warning_bg_color counter-background-teaser text-center">
								<span class="counter counter-background" data-from="0" data-to="10" data-speed="2100">0</span>
								<h3 class="counter highlight" data-from="0" data-to="10" data-speed="2100">0</h3>
								<p>Users</p>
							</div>

						</div>

						<div class="col-lg-3 col-sm-6">

							<div class="teaser danger_bg_color counter-background-teaser text-center">
								<span class="counter counter-background" data-from="0" data-to="5" data-speed="1500">0</span>
								<h3 class="counter highlight" data-from="0" data-to="5" data-speed="1500">0</h3>
								<p>Organization</p>
							</div>

						</div>

						<div class="col-lg-3 col-sm-6">

							<div class="teaser success_bg_color counter-background-teaser text-center">
								<span class="counter counter-background" data-from="0" data-to="1" data-speed="1900">0</span>
								<h3 class="counter highlight" data-from="0" data-to="1" data-speed="1900">0</h3>
								<p>online</p>
							</div>

						</div>

						<div class="col-lg-3 col-sm-6">

							<div class="teaser info_bg_color counter-background-teaser text-center">
								<span class="counter counter-background" data-from="0" data-to="15" data-speed="1800">0</span>
								<h3 class="counter-wrap highlight" data-from="0" data-to="346" data-speed="2">
									
									<span class="counter" data-from="0" data-to="346" data-speed="2">0</span>
									
								</h3>
								<p>Total Recycle</p>
							</div>

						</div>
					</div>

				
					<!-- .row -->

					<div class="row">
						<div class="col-xs-12 col-md-6">

							<div class="with_border with_padding">
								<h4>
									Latest Comments
								</h4>
								<div class="admin-scroll-panel scrollbar-macosx">
									<ul class="list1 no-bullets">
										<li class="item-editable">
											<div class="media">
												<div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
													<a href="#">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
												<div class="media-left">
													<img src="images/team/01.jpg" alt="...">
												</div>
												<div class="media-body">
													<h5>
														Alex Walker
														<small>2 hours ago</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable">
											<div class="media">
												<div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
													<a href="#">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
												<div class="media-left">
													<img src="images/team/02.jpg" alt="...">
												</div>
												<div class="media-body">
													<h5>
														Janet C. Donnalds
														<small>5 hours ago</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable">
											<div class="media">
												<div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
													<a href="#">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
												<div class="media-left">
													<img src="images/team/03.jpg" alt="...">
												</div>
												<div class="media-body">
													<h5>
														Victoria Grow
														<small>1 day ago</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable">
											<div class="media">
												<div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
													<a href="#">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
												<div class="media-left">
													<img src="images/team/01.jpg" alt="...">
												</div>
												<div class="media-body">
													<h5>
														Alex Walker
														<small>2 hours ago</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable">
											<div class="media">
												<div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
													<a href="#">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
												<div class="media-left">
													<img src="images/team/02.jpg" alt="...">
												</div>
												<div class="media-body">
													<h5>
														Janet C. Donnalds
														<small>5 hours ago</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable">
											<div class="media">
												<div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
													<a href="#">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
												<div class="media-left">
													<img src="images/team/03.jpg" alt="...">
												</div>
												<div class="media-body">
													<h5>
														Victoria Grow
														<small>1 day ago</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- .admin-scroll-panel -->
								<div class="text-right greylinks panel-view-all">
									<a href="admin_comments.html">View All</a>
								</div>
							</div>
							<!-- .with_border -->
						</div>
						<div class="col-xs-12 col-md-6">

							<div class="with_border with_padding">
								<h4>
									Latest Recycle product
								</h4>
								<div class="admin-scroll-panel scrollbar-macosx">
									<ul class="list1 no-bullets">
										<li class="item-editable small-teaser">
											<div class="media">
												<div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
													<a href="#">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
												<div class="media-left">
													<div class="teaser_icon label-success fontsize_16">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="media-body">
													<h5>
														Product Name
														<small>365$</small>
													</h5>
													<div>
														<h6>Order Comment:</h6>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable small-teaser">
											<div class="media">
												<div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
													<a href="#">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
												<div class="media-left">
													<div class="teaser_icon label-success fontsize_16">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="media-body">
													<h5>
														6 Products
														<small>129$</small>
													</h5>
												</div>
											</div>
										</li>
										<li class="item-editable small-teaser">
											<div class="media">
												<div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
													<a href="#">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
												<div class="media-left">
													<div class="teaser_icon label-success fontsize_16">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="media-body">
													<h5>
														Product Name Secont
														<small>199$</small>
													</h5>
													<div>
														<h6>Order Comment:</h6>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable small-teaser">
											<div class="media">
												<div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
													<a href="#">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
												<div class="media-left">
													<div class="teaser_icon label-success fontsize_16">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="media-body">
													<h5>
														Product Name
														<small>365$</small>
													</h5>
													<div>
														<h6>Order Comment:</h6>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable small-teaser">
											<div class="media">
												<div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
													<a href="#">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
												<div class="media-left">
													<div class="teaser_icon label-success fontsize_16">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="media-body">
													<h5>
														6 Products
														<small>129$</small>
													</h5>
												</div>
											</div>
										</li>
										<li class="item-editable small-teaser">
											<div class="media">
												<div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
													<a href="#">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
												<div class="media-left">
													<div class="teaser_icon label-success fontsize_16">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="media-body">
													<h5>
														Product Name Secont
														<small>199$</small>
													</h5>
													<div>
														<h6>Order Comment:</h6>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- .admin-scroll-panel -->
								<div class="text-right greylinks panel-view-all">
									<a href="admin_orders.html">View All</a>
								</div>
							</div>
							
						</div>

					</div>

				</div>
				<!-- .container -->
			</section>

			<section class="page_copyright ds darkblue_bg_color">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<p class="grey"> Copyrights 2023</p>
						</div>
						
					</div>
				</div>
			</section>

		</div>
	
	</div>




	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>



</body>



</html>