<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Data -->
	<title>Our Database - Making Wage Parity Easy</title>

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
		.job__list .job-info{width: 100%;}
	</style>

</head>

<body id="home-version-1" class="home-version-1" data-style="default">

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
								<h1 class="page-title">Our database is built for the home care industry</h1>
							</div>

							<!-- /.page-title-inner -->
						</div>
						<!-- /.page-title-wrapper -->

					</div>
					<!-- /.col-lg-8 -->

					<div class="col-lg-6">
						<div class="animate-element-contact">
							<img src="media/services/database.png" alt="Our Database" class="wow pixFadeLeft" data-wow-delay="0.3s" data-wow-duration="2s">
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
		<!--=         Database         =-->
		<!--=========================-->
		<!--============================-->
		<!--=         Job List         =-->
		<!--============================-->
		<section class="joblists" data-bg-image="media/background/job-list-bg.jpg">
			<div class="container">
				<div class="section-title style-four text-center">
					<h2 class="title wow pixFadeUp" data-wow-delay="0.3s">Database Features</h2>
					<p class="wow pixFadeUp mx-auto w-75">We originally designed our database to assist us in managing wage parity for our clients. It’s emerged into a robust software with ever-evolving functionality. </p>
				</div>


				<div class="saaspik__jobs">

					<div class="job__list">
						<div class="job-info">
							<div class="company-logo">
								<a href="javascript:void(0)"><img src="media/brand/secure.png" alt="saspik job"></a>
							</div>
							<div class="info">
								<h4 class="job-title"><a href="javascript:void(0)">Completely Secure</a></h4>
								<p class="designation">Hosted on our private server with 256-bit encryption and data backups occurring every 60 seconds.</p>
							</div>
						</div>
					</div>
					<!-- /.job__list -->

					<div class="job__list">
						<div class="job-info">
							<div class="company-logo">
								<a href="javascript:void(0)"><img src="media/brand/job1.png" alt="saspik job"></a>
							</div>
							<div class="info">
								<h4 class="job-title"><a href="javascript:void(0)">API Friendly</a></h4>
								<p class="designation">Seamlessly integrate with your payroll company or agency management system, creating further autonomy. </p>
							</div>
						</div>
					</div>
					<!-- /.job__list -->

					<div class="job__list">
						<div class="job-info">
							<div class="company-logo">
								<a href="javascript:void(0)"><img src="media/brand/job3.png" alt="saspik job"></a>
							</div>
							<div class="info">
								<h4 class="job-title"><a href="javascript:void(0)">On-Demand Reporting</a></h4>
								<p class="designation">Access to your historical data 24/7 for convenient report pulling. Customize your tailored for your needs. </p>
							</div>
						</div>
					</div>
					<!-- /.job__list -->

					<div class="job__list">
						<div class="job-info">
							<div class="company-logo">
								<a href="javascript:void(0)"><img src="media/brand/funds.png" alt="saspik job"></a>
							</div>
							<div class="info">
								<h4 class="job-title"><a href="javascript:void(0)">Funds Tracking</a></h4>
								<p class="designation">Meticulous tracking of your agency’s wage parity funds for full transparency of where monies go.</p>
							</div>
						</div>
					</div>
					<!-- /.job__list -->

					<div class="job__list">
						<div class="job-info">
							<div class="company-logo">
								<a href="javascript:void(0)"><img src="media/brand/pto.png" alt="saspik job"></a>
							</div>
							<div class="info">
								<h4 class="job-title"><a href="javascript:void(0)">PTO Tracking</a></h4>
								<p class="designation">Use wage parity funds to satisfy Paid Time Off requirements. Employees can track their PTO earnings as well. </p>
							</div>
						</div>
					</div>
					<!-- /.job__list -->

					<div class="job__list">
						<div class="job-info">
							<div class="company-logo">
								<a href="javascript:void(0)"><img src="media/brand/upload2.png" alt="saspik job"></a>
							</div>
							<div class="info">
								<h4 class="job-title"><a href="javascript:void(0)">Single File Upload</a></h4>
								<p class="designation">Upload one monthly file using our simple template, ideal for any DIY user.</p>
							</div>
						</div>
					</div>
					<!-- /.job__list -->

				</div>
				<!-- /.saaspik__jobs -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.joblists -->

		<!--==================================-->
		<!--=         Call To Action         =-->
		<!--==================================-->
		<section class="call-to-action-four">

			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-md-7">
						<div class="action-content style-four wow pixFadeUp">
							<h2 class="title">
								Lets Get Started!
							</h2>

							<p>
								We could tell you more, but we’d love to show you.
							</p>
						</div>
						<!-- /.action-content -->
					</div>
					<!-- /.col-md-7 -->

					<div class="col-md-5 text-right">
						<a href="contact-us.php" class="pix-btn btn-three btn-round wow pixFadeUp">REQUEST A DEMO</a>
					</div>
					<!-- /.col-md-5 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.call-to-action -->


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