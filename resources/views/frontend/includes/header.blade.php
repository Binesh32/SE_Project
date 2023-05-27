<header class="page_header header_white toggler_xs_right section_padding_20">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 display_table">
							<div class="header_left_logo display_table_cell">
								<a href="index.html" class="logo top_logo">
									<img src="images/logo.png" alt="">
									<span class="logo_text">
										<span class="big">WM&RS</span>
										<span class="small-text">CashCash</span>
									</span>
								</a>
							</div>

							<div class="header_mainmenu display_table_cell text-center">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li class="active">
											<a href="{{ route('home') }}">Home</a>
										
										</li>

										<li>
											<a href="{{ route('post') }}">Posts</a>
											
											<!-- eof mega menu -->
										</li>

										<li>
											<a href="{{ route('blogs') }}">Blogs</a>
											
										</li>
										<!-- eof pages -->

										<li>
											<a href="#">Recycle</a>
											
											<!-- eof mega menu -->
										</li>
										<!-- eof features -->


										
										<li>
											<a href="{{ route('about') }}">About Us</a>
											
										</li>
										

										

									
								</nav>
								<!-- eof main nav -->
								<!-- header toggler -->
								<span class="toggle_menu">
									<span></span>
								</span>
							</div>

							<div class="header_right_buttons display_table_cell text-right hidden-xs">
								<div class="darklinks">
								<ul class="mainmenu nav sf-menu">
								
								<li >
											<a href="{{ route('usersignup') }}">SIGN UP</a>
											<ul>
												<li>
													<a href="{{ route('usersignup') }}">As User</a>
												</li>
												<li>
													<a href="{{ route('organizationsignup') }}">As Organization</a>
												</li>
												<li>
													<a href="index_singlepage.html">As Admin</a>
												</li>
												
											</ul>
										</li>
								<li><a href="{{ route('userlogin') }}">LOG IN</a>
								<ul>
												<li>
													<a href="{{ route('userlogin') }}">As User</a>
												</li>
												<li>
													<a href="{{ route('organizationlogin') }}">As Organization</a>
												</li>
												<li>
													<a href="{{ route('adminlogin') }}">As Admin</a>
												</li>
												
											</ul></li> 
								</ul>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>