<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Data -->
	<title>About Us - Making Wage Parity Easy</title>

	<?php require 'stylesheets.php'; ?>
	<link rel="stylesheet" href="assets/css/app.css" type="text/css">

	<style>
		.page-banner-contact .page-title-wrapper p{
			font-size: 20px;
		}
		.section-title {
		    margin-bottom: 30px;
		}
		.head-content{padding: 70px 0;}
		.testimonials-two, .testimonials-two-about {
		    padding: 116px 0 86px;
		    margin-top: 110px;
		}

		.about{padding-bottom: 120px;}

		@media only screen and (max-width: 768px){
			.about-thumb{margin-bottom: 30px;}
			.about-thumb img{margin: 0 auto;display: block;}
		}

		.animate-element-contact{width: auto;}
	</style>

</head>

<body id="home" class="home" data-style="default">

	<a href="#main_content" data-type="section-switch" class="return-to-top">
		<i class="fa fa-chevron-up"></i>
	</a>

	<div class="page-loader">
		<div class="loader">
			<!-- Loader -->
			<div class="blobs">
				<div class="blob-center"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
				<defs>
					<filter id="goo">
						<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
						<feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
						<feBlend in="SourceGraphic" in2="goo" />
					</filter>
				</defs>
			</svg>

		</div>
	</div><!-- /.page-loader -->

	<div id="main_content">


		<!--=========================-->
		<!--=        Navbar         =-->
		<!--=========================-->
		<?php require 'navigation.php'; ?>

		<!--==========================-->
		<!--=         Banner         =-->
		<!--==========================-->
		<section class="page-banner-contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="page-title-wrapper">
							<div class="page-title-inner">
								<h1 class="page-title">We exist because wage parity does</h1>
							</div>

							<!-- /.page-title-inner -->
						</div>
						<!-- /.page-title-wrapper -->

					</div>
					<!-- /.col-lg-8 -->

					<div class="col-lg-6">
						<div class="animate-element-contact">
							<img src="media/services/about.svg" alt="About Us" class="wow pixFadeLeft" data-wow-delay="0.3s" data-wow-duration="2s">
						</div>
						<!-- /.animate-element-contact -->
					</div>
					<!-- /.col-lg-4 -->
				</div>
				<!-- /.row -->

			</div>
			<!-- /.container -->

			<svg class="circle" data-parallax='{"y" : 250}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
				<path fill-rule="evenodd" stroke="rgb(250, 112, 112)" stroke-width="100px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.051" fill="none" d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z" />
			</svg>

			<ul class="animate-ball">
				<li class="ball"></li>
				<li class="ball"></li>
				<li class="ball"></li>
				<li class="ball"></li>
				<li class="ball"></li>
			</ul>
		</section>
		<!-- /.page-banner -->

		<!--=========================-->
		<!--=         About         =-->
		<!--=========================-->
		<section class="about">
			<div class="container">
				<div class="row">

					<div class="col-lg-5">
						<div class="about-thumb wow pixFadeRight" data-wow-delay="0.6s">
							<img src="media/services/about2.svg" alt="about">
						</div>
						<!-- /.about-thumb -->
					</div>
					<!-- /.col-lg-5 -->

					<div class="col-lg-7">
						<div class="about-content">
							<div class="section-title">
								<h1 class="title wow pixFadeUp" data-wow-delay="0.3s">
									Who Are We?
								</h1>
							</div>
							<!-- /.section-title -->

							<p class="description wow pixFadeUp" data-wow-delay="0.4s">
								We are a tech-based TPA, combining intelligent technology with high-quality administration services. Our primary focus is on keeping home care agencies compliant with the Wage Parity Law. 
							</p>

							<div class="section-title">
								<h1 class="title wow pixFadeUp" data-wow-delay="0.3s">
									What We Offer?
								</h1>
							</div>
							<!-- /.section-title -->

							<p class="description wow pixFadeUp" data-wow-delay="0.4s">
								We offer an ethical, transparent experience for our clients. Our secure, proprietary software was designed specifically for wage parity. 
							</p>

						</div>
						<!-- /.about-content -->
					</div>
					<!-- /.col-lg-7 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.about -->


		<!--=========================-->
		<!--=        Footer         =-->
		<!--=========================-->
		<?php require 'footer.php'; ?>


	</div><!-- /#site -->

	<?php require 'scripts.php'; ?>
	<!-- Site Scripts -->
	<script src="assets/js/header.js"></script>
	<script src="assets/js/app.js"></script>

</body>

</html>