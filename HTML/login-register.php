<!DOCTYPE html>

<head>

	<!-- Basic Page Needs
================================================== -->
	<title>Findeo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="images/home&nha.png" rel="icon">
	<!-- CSS
================================================== -->
	<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<link rel="stylesheet" href="css/color.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

	<!-- Wrapper -->
	<div id="wrapper">


		<!-- Compare Properties Widget
================================================== -->
		<div class="compare-slide-menu">

			<div class="csm-trigger"></div>

			<div class="csm-content">
				<h4>Compare Properties <div class="csm-mobile-trigger"></div>
				</h4>

				<div class="csm-properties">

					<!-- Property -->
					<div class="listing-item compact">
						<a href="single-property-page-2.html" class="listing-img-container">
							<div class="remove-from-compare"><i class="fa fa-close"></i></div>
							<div class="listing-badges">
								<span>For Sale</span>
							</div>
							<div class="listing-img-content">
								<span class="listing-compact-title">Eagle Apartments <i>$420,000</i></span>
							</div>
							<img src="images/listing-01.jpg" alt="">
						</a>
					</div>

					<!-- Property -->
					<div class="listing-item compact">
						<a href="single-property-page-2.html" class="listing-img-container">
							<div class="remove-from-compare"><i class="fa fa-close"></i></div>
							<div class="listing-badges">
								<span>For Sale</span>
							</div>
							<div class="listing-img-content">
								<span class="listing-compact-title">Selway Apartments <i>$420,000</i></span>
							</div>
							<img src="images/listing-03.jpg" alt="">
						</a>
					</div>

					<!-- Property -->
					<div class="listing-item compact">
						<a href="single-property-page-2.html" class="listing-img-container">
							<div class="remove-from-compare"><i class="fa fa-close"></i></div>
							<div class="listing-badges">
								<span>For Sale</span>
							</div>
							<div class="listing-img-content">
								<span class="listing-compact-title">Oak Tree Villas <i>$535,000</i></span>
							</div>
							<img src="images/listing-05.jpg" alt="">
						</a>
					</div>

				</div>

				<div class="csm-buttons">
					<a href="compare-properties.html" class="button">Compare</a>
					<a href="#" class="button reset">Reset</a>
				</div>
			</div>

		</div>
		<!-- Compare Properties Widget / End -->

		<!-- include header -->
		<?php
		include 'header.php';
		?>



		<!-- Titlebar
================================================== -->
		<div id="titlebar">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<h2>Log In & Register</h2>

						<!-- Breadcrumbs -->
						<nav id="breadcrumbs">
							<ul>
								<li><a href="#">Home</a></li>
								<li>Log In & Register</li>
							</ul>
						</nav>

					</div>
				</div>
			</div>
		</div>


		<!-- Contact
================================================== -->

		<!-- Container -->
		<div class="container">

			<div class="row">
				<div class="col-md-4 col-md-offset-4">

					<!-- <button class="button social-login via-twitter"><i class="fa fa-twitter"></i> Log In With Twitter</button>
	<button class="button social-login via-gplus"><i class="fa fa-google-plus"></i> Log In With Google Plus</button>
	<button class="button social-login via-facebook"><i class="fa fa-facebook"></i> Log In With Facebook</button> -->

					<!--Tab -->
					<div class="my-account style-1 margin-top-5 margin-bottom-40">

						<ul class="tabs-nav">
							<li class=""><a href="#tab1">Log In</a></li>
							<li><a href="#tab2">Register</a></li>
						</ul>

						<div class="tabs-container alt">

							<!-- Login -->
							<div class="tab-content" id="tab1" style="display: none;" >
								<form method="post" class="login" id="login" action="include/login.inc.php">

									<p class="form-row form-row-wide">
										<label for="username">
											<i class="im im-icon-Male"></i>
											<input type="text" class="input-text" name="username" id="username" placeholder="Username" />
											<small>Error message</small>
										</label>
									</p>

									<p class="form-row form-row-wide">
										<label for="password">
											<i class="im im-icon-Lock-2"></i>
											<input class="input-text" type="password" name="password" id="password" placeholder="Password" />
											<small>Error message</small>
										</label>
									</p>

									<p class="form-row">
										<input type="submit" class="button border margin-top-10" name="login" value="Login" />

										<label for="rememberme" class="rememberme">
											<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
									</p>

									<p class="lost_password">
										<a href="#">Lost Your Password?</a>
									</p>

								</form>
							</div>

							<!-- Register -->
							<div class="tab-content" id="tab2" style="display: none;">

								<form id="register" class="register" action="include/register.inc.php" method="POST">

									<p class="form-row form-row-wide">
										<label for="username2">
											<i class="im im-icon-Male"></i>
											<input type="text" class="input-text" name="username" id="username2" placeholder="Username" />
											<small>Error message</small>
										</label>
										<!-- username error -->
									<p id="username-message">
									<?php
										if (isset($_GET['error'])) {
											if ($_GET['error'] == "bothexist" || $_GET['error'] == "usernameexist") {
												echo "Username exists already.";
											}
										}
									?>
									</p>
									</p>

									<p class="form-row form-row-wide">
										<label for="email2">
											<i class="im im-icon-Mail"></i>
											<input type="text" class="input-text" name="email" id="email2" placeholder="Email Address" />
											<small>Error message</small>
										</label>
									<p id="email-message">
										<?php
										if (isset($_GET['error'])) {
											if ($_GET['error'] == "bothexist" || $_GET['error'] == "emailexist") {
												echo "Email exists already.";
											}
										}
										?>
									</p>
									</p>

									<p class="form-row form-row-wide">
										<label for="password1">
											<i class="im im-icon-Lock-2"></i>
											<input class="input-text" type="password" name="password1" id="password1" placeholder="Password" / pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
											<small>Error message</small>
										</label>
									</p>

									<p class="form-row form-row-wide">
										<label for="password2">
											<i class="im im-icon-Lock-2"></i>
											<input class="input-text" type="password" name="password2" id="password2" placeholder="Confirm Password" />
											<small>Error message</small>
										</label>
									</p>

									<p class="form-row">
										<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
									</p>

								</form>
							</div>
							<div id="pwd1-message">
								<h5>Password <b>MUST</b> contain the following:</h5>
								<h6 id="letter" class="invalid">A <b>lowercase</b> letter</h6>
								<h6 id="capital" class="invalid">A <b>capital (uppercase)</b> letter</h6>
								<h6 id="number" class="invalid">A <b>number</b></h6>
								<h6 id="length" class="invalid">Minimum <b>8 characters</b></h6>
							</div>
						</div>
					</div>



				</div>
			</div>

		</div>
		<!-- Container / End -->

		<?php
		include 'footer.php';
		?>



		<!-- Back To Top Button -->
		<div id="backtotop"><a href="#"></a></div>


		<!-- Scripts
================================================== -->
		<script type="text/javascript" src="scripts/jquery-3.5.1.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-migrate-3.3.1.min.js"></script>
		<script type="text/javascript" src="scripts/chosen.min.js"></script>
		<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
		<script type="text/javascript" src="scripts/owl.carousel.min.js"></script>
		<script type="text/javascript" src="scripts/rangeSlider.js"></script>
		<script type="text/javascript" src="scripts/sticky-kit.min.js"></script>
		<script type="text/javascript" src="scripts/slick.min.js"></script>
		<script type="text/javascript" src="scripts/masonry.min.js"></script>
		<script type="text/javascript" src="scripts/mmenu.min.js"></script>
		<script type="text/javascript" src="scripts/tooltips.min.js"></script>
		<script type="text/javascript" src="scripts/custom.js"></script>
		<script type="text/javascript" src="scripts/validation.js"></script>




	</div>
	<!-- Wrapper / End -->


</body>

</html>