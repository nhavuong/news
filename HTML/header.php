<?php 
session_start();
if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
}
else{
    echo "session not set";
}
?>

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Topbar -->
	<div id="top-bar">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Top bar -->
				<ul class="top-bar-menu">
					<li><i class="fa fa-phone"></i> (123) 123-456 </li>
					<li><i class="fa fa-envelope"></i> <a href="#">office@example.com</a></li>
					<li>
						<div class="top-bar-dropdown">
							<span>Dropdown Menu</span>
							<ul class="options">
								<li>
									<div class="arrow"></div>
								</li>
								<li><a href="#">Nice First Link</a></li>
								<li><a href="#">Second Link With Long Title</a></li>
								<li><a href="#">Third Link</a></li>
							</ul>
						</div>
					</li>
				</ul>

			</div>
			<!-- Left Side Content / End -->


			<!-- Left Side Content -->
			<div class="right-side">

				<!-- Social Icons -->
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>
				</ul>

			</div>
			<!-- Left Side Content / End -->

		</div>
	</div>
	<div class="clearfix"></div>
	<!-- Topbar / End -->


	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="index"><img src="images/cover.jpg" alt=""></a>
				</div>


				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>


				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a href="#">New Articles</a>
							<ul>
								<li><a href="index">Headlines</a></li>
								<li><a href="blog-post.html">Housing</a></li>
								<li><a href="blog-post.html">Mortgage</a></li>
							</ul>
							<!-- <ul>
								<li><a href="index-1.html">Home 1</a></li>
								<li><a href="index-2.html">Home 2</a></li>
								<li><a href="index-3.html">Home 3</a></li>
								<li><a href="index-4.html">Home 4</a></li>
							</ul> -->
						</li>

						<li><a href="#">Listings</a>
							<ul>
								<li><a href="#">Real Estate</a>
									<ul>
										<li><a href="submit-property.html">Post Rental</a></li>
										<li><a href="submit-property.html">Post Property For Sale</a></li>
										<li><a href="submit-property.html">Post Business For Sale</a></li>
									</ul>
								</li>
								<li><a href="#">Mortgage</a>
									<ul>
										<li><a href="listings-grid-standard-with-sidebar.html">Post Loan</a></li>
										<li><a href="listings-grid-compact-with-sidebar.html">Calculator</a></li>
										<!-- <li><a href="listings-grid-with-map.html">With Map</a></li>
										<li><a href="listings-grid-full-width.html">Full Width</a></li> -->
									</ul>
								</li>
								<!-- <li><a href="#">Half Map</a>
									<ul>
										<li><a href="listings-half-map-list.html">List Layout</a></li>
										<li><a href="listings-half-map-grid-standard.html">Grid Standard Layout</a></li>
										<li><a href="listings-half-map-grid-compact.html">Grid Compact Layout</a></li>
									</ul>
								</li> -->
							</ul>
						</li>
						<li><a href="#">Golden Age</a></li>

						<li><a href="#">Features</a>
							<ul>
								<li><a href="#">Investment</a>
									<!-- <ul>
										<li><a href="single-property-page-1.html">Property Style 1</a></li>
										<li><a href="single-property-page-2.html">Property Style 2</a></li>
										<li><a href="single-property-page-3.html">Property Style 3</a></li>
									</ul> -->
								</li>
								<li><a href="#">My Account</a>
									<ul>
										<li><a href="my-profile.html">My Profile</a></li>
										<li><a href="my-bookmarks.html">Bookmarked Listings</a></li>
										<li><a href="my-properties.html">My Properties</a></li>
										<li><a href="change-password.html">Change Password</a></li>
									</ul>
								</li>
								<li><a href="#">Agencies & Agents</a>
									<ul>
										<li><a href="agencies-list.html">Agencies List</a></li>
										<li><a href="agency-page.html">Agency Page</a></li>
										<li><a href="agents-list.html">Agents List</a></li>
										<li><a href="agent-page.html">Agent Page</a></li>
									</ul>
								</li>
								<li><a href="#">Credit</a>
								<li><a href="#">Design</a>
								<li><a href="#">Life Insurance</a>
								<li><a href="#">Tax</a>

									<!-- <li><a href="compare-properties.html">Compare Properties</a></li>
								<li><a href="submit-property.html">Submit Property</a></li> -->
							</ul>
						</li>

						<li><a class="current" href="#">Magazines</a>
							<ul>
								<!-- <li><a href="index">Blog</a>
									<ul>
										<li><a href="index">Blog</a></li>
										<li><a href="blog-post.html">Blog Post</a></li>
									</ul>
								</li> -->
								<li><a href="subscription.html">Subscription</a></li>
								<li><a href="#">Archive</a></li>
								<li><a href="pricing-tables.html">Advertise with us</a></li>
								<li><a href="#">Write for us</a></li>
								<li><a href="contact.html">Contact</a></li>
								<!-- <li><a href="elements.html">Elements</a></li> -->
								<!-- <li><a href="typography.html">Typography</a></li>
								<li><a href="icons.html">Icons</a></li> -->
							</ul>
						</li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					<a href="login-register" class="sign-in"><i class="fa fa-user"></i> Log In / Register</a>
					<!-- <a href="submit-property.html" class="button border">Submit Property</a> -->
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->