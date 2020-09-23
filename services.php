<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Data -->
	<title>Our Services - Making Wage Parity Easy</title>

	<?php require 'stylesheets.php'; ?>
	<link rel="stylesheet" href="dependencies/components-elegant-icons/css/elegant-icons.min.css" type="text/css">
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

		.marketing{margin-top: 80px;}
		.content{display: block;}
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
								<h1 class="page-title">Our Services</h1>
								<p class="description">Our core competency is offering superb third party administration and fusing it with technology for greater efficiency. Our courteous office staff supports our ‘make-sense’ approach to a niche market.</p>
							</div>

							<!-- /.page-title-inner -->
						</div>
						<!-- /.page-title-wrapper -->

					</div>
					<!-- /.col-lg-8 -->

					<div class="col-lg-6">
						<div class="animate-element-contact">
							<img src="media/services/features.svg" alt="About Us" class="wow pixFadeLeft" data-wow-delay="0.3s" data-wow-duration="2s">
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

		<!--============================-->
		<!--=         Tabs         =-->
		<!--============================-->
		<section class="marketing">
			<div class="container">

				<div class="section-title style-six text-left">

					<h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
						<span>We Provide</span>
						Employees Benefits Plan
					</h2>

					<p class="description wow pixFadeUp">Included in our service is strategic benefits planning, putting wage parity funds to work for your employees. To learn more about the benefit options available, visit our <a href="benefits.php">Benefits page</a>.</p>
				</div>

				<div id="pix-tabs" class="marketing-tabs wow pixFadeUp" data-wow-delay="0.5s">
					<ul id="pix-tabs-nav">
						<li><a href="#services"><i class="ei ei-icon_easel"></i> Day to Day servicing</a></li>
						<li><a href="#wellness"><i class="ei ei-icon_check_alt2"></i> Wellness Coordination</a></li>
						<li><a href="#engagement"><i class="ei ei-icon_calendar"></i> Employee Engagement</a></li>
						<li><a href="#vas"><i class="ei ei-icon_flowchart"></i> Value-Added Service</a></li>
					</ul> <!-- tabs-nav -->

					<div id="pix-tabs-content" class="marketing-tabs-wrapper">
						<div id="services" class="content">
							<div class="marketing-tab-contents">
								<div class="tab-image">
									<img src="media/services/service.png" alt="marketing">
								</div>
								<!-- /.tab-image -->
								<div class="marketing-content">
									<h3 class="title">Day to Day servicing</h3>
									<p>
										To ensure that you always speak to someone familiar with your account, each agency is assigned a dedicated Client Service Specialist. They assist with employer and employee inquiries.
									</p>
									<a href="contact-us.php" class="pix-btn btn-outline btn-round">REQUEST A DEMO</a>
								</div>
							</div>
							<!-- /.marketing-tab-contents -->
						</div>
						<div id="wellness" class="content">
							<div class="marketing-tab-contents">
								<div class="tab-image">
									<img src="media/services/health.svg" alt="marketing">
								</div>
								<!-- /.tab-image -->
								<div class="marketing-content">
									<h3 class="title">Wellness Coordination </h3>
									<p>
										Agencies have the option to have our team coordinate wellness visits for aides who have medical requirements due for compliance.
									</p>
									<a href="contact-us.php" class="pix-btn btn-outline btn-round">REQUEST A DEMO</a>
								</div>
							</div>
							<!-- /.marketing-tab-contents -->

						</div>
						<div id="engagement" class="content">
							<div class="marketing-tab-contents">
								<div class="tab-image">
									<img src="media/services/employee.svg" alt="marketing">
								</div>
								<!-- /.tab-image -->
								<div class="marketing-content">
									<h3 class="title">Employee Engagement</h3>
									<p>
										We communicate with your employees to educate and empower them to use their wage parity benefits.  
									</p>
									<a href="contact-us.php" class="pix-btn btn-outline btn-round">REQUEST A DEMO</a>
								</div>
							</div>
							<!-- /.marketing-tab-contents -->

						</div>
						<div id="vas" class="content">
							<div class="marketing-tab-contents">
								<div class="tab-image">
									<img src="media/services/vas.png" alt="marketing">
								</div>
								<!-- /.tab-image -->
								<div class="marketing-content">
									<h3 class="title">Value-Added Service</h3>
									<p>
										The value-added services offered through our partnership with <a href="https://gethired.com" target="_blank">GetHired.com</a> is FREE to our clients. A few key features of this full HR recruiting and onboarding platform include:
									</p>

									<ul>
										<li>Posting to multiple job sites with one system</li>
										<li>Work Opportunity Tax Credit tracking</li>
										<li>Complete Electronic Onboarding</li>
										<li>Background checks</li>
									</ul>

									<a href="contact-us.php" class="pix-btn btn-outline btn-round">REQUEST A DEMO</a>
								</div>
							</div>
							<!-- /.marketing-tab-contents -->
						</div>
					</div> <!-- tabs-content -->
				</div>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.job-bord-tabs -->

		<!--==================================-->
		<!--=         Call To Action         =-->
		<!--==================================-->
		<section class="call-to-action-four">

			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-md-9">
						<div class="action-content style-four wow pixFadeUp">
							<h2 class="title">
								Questions?
							</h2>

							<p>
								We have answers. Click here to request a call or a demo.
							</p>
						</div>
						<!-- /.action-content -->
					</div>
					<!-- /.col-md-7 -->

					<div class="col-md-3 text-right">
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