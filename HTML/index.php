<?php

	include('connect.php');
	$sql = "SELECT * FROM articles limit 3";
	
	$results = mysqli_query($conn, $sql);
	$articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
	mysqli_free_result($results);
	mysqli_close($conn);

?>

<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Home&Nhà</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="images/home&nha.png" rel="icon">
<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/color.css">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Compare Properties Widget
================================================== -->
<div class="compare-slide-menu">

	<div class="csm-trigger"></div>

	<div class="csm-content">
		<h4>Compare Properties <div class="csm-mobile-trigger"></div></h4>

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
	include('header.php');
?>

<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>New Articles</h2>
				<span>Keep up to date with the latest news</span>
				
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Headlines</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">

	<!-- Blog Posts -->
	<div class="blog-page">
	<div class="row">
		<div class="col-md-8">

			<?php foreach($articles as $article): ?>

				<!-- Blog Post -->
				<div class="blog-post">
					
					<!-- Img -->
					<a href="blog-post.html" class="post-img">
						<img src="images/<?php echo $article['article_img_path'] ?>" alt="">
					</a>
					
					<!-- Content -->
					<div class="post-content">
						<h3><a href="blog-post.html"><?php echo $article['article_title'] ?></a></h3>

						<ul class="post-meta">
							<li><?php echo date($article['article_created_at'])?></li>
							<li><a href="#">5 Comments</a></li>
						</ul>

						<p><?php 
							$file = fopen("articles/".$article['article_content'], 'r');
							for ($i = 0; $i < 3; $i ++){
								echo fgets($file)."<br>";
							}
							fclose($file);
						?></p>

						<a href="blog-post.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			<!-- Blog Post / End -->
			<?php endforeach; ?>

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="pagination-container">
				<nav class="pagination">
					<ul>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
					</ul>
				</nav>

				<nav class="pagination-next-prev">
					<ul>
						<li><a href="#" class="prev">Previous</a></li>
						<li><a href="#" class="next">Next</a></li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"></div>

		</div>

	<!-- Blog Posts / End -->


	<!-- Widgets -->
	<div class="col-md-4">
		<div class="sidebar right">

			<!-- Widget -->
			<div class="widget">
				<h3 class="margin-top-0 margin-bottom-25">Search Blog</h3>
				<div class="search-blog-input">
					<div class="input"><input class="search-field" type="text" placeholder="Type and hit enter" value=""/></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- Widget / End -->


			<!-- Widget -->
			<div class="widget">
				<h3>Got any questions?</h3>
				<div class="info-box margin-bottom-10">
					<p>If you are having any questions, please feel free to ask.</p>
					<a href="contact.html" class="button fullwidth margin-top-20"><i class="fa fa-envelope-o"></i> Drop Us a Line</a>
				</div>
			</div>
			<!-- Widget / End -->


			<!-- Widget -->
			<div class="widget">

				<h3>Popular Posts</h3>
				<ul class="widget-tabs">

					<!-- Post #1 -->
					<li>
						<div class="widget-content">
								<div class="widget-thumb">
								<a href="blog-full-width-single-post.html"><img src="images/blog-widget-03.jpg" alt=""></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-full-width-single-post.html">What to Do a Year Before Buying Apartment </a></h5>
								<span>October 26, 2016</span>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>
					
					<!-- Post #2 -->
					<li>
						<div class="widget-content">
							<div class="widget-thumb">
								<a href="blog-full-width-single-post.html"><img src="images/blog-widget-02.jpg" alt=""></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-full-width-single-post.html">Bedroom Colors You'll Never Regret</a></h5>
								<span>November 9, 2016</span>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>
					
					<!-- Post #3 -->
					<li>
						<div class="widget-content">
							<div class="widget-thumb">
								<a href="blog-full-width-single-post.html"><img src="images/blog-widget-01.jpg" alt=""></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-full-width-single-post.html">8 Tips to Help You Finding New Home</a></h5>
								<span>November 12, 2016</span>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>

				</ul>

			</div>
			<!-- Widget / End-->


			<!-- Widget -->
			<div class="widget">
				<h3 class="margin-top-0 margin-bottom-25">Social</h3>
				<ul class="social-icons rounded">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>

			</div>
			<!-- Widget / End-->

			<div class="clearfix"></div>
			<div class="margin-bottom-40"></div>
		</div>
	</div>
	</div>
	<!-- Sidebar / End -->


</div>
</div>


<!-- include footer -->
<?php
	include('footer.php');
?>

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





</div>
<!-- Wrapper / End -->


</body>
</html>