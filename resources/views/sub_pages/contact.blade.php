<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Bridgeway Logistics</title>
	@include('libraries.style')
</head>


<body id="page-top">
	<div id="st-container" class="st-container">
		<div class="st-pusher">
			<div class="st-content">
				<header class="header">
					<nav class="top-bar">
						<div class="overlay-bg">
							<div class="container">
								<div class="row">
									<div class="col-sm-6 col-xs-12">
										<div class="call-to-action">
											<ul class="list-inline">
												<li><a href="#"><i class="fa fa-phone"></i> +94-76-357-2887</a></li>
												<li><a href="#"><i
															class="fa fa-envelope"></i>danushkaaberathna0@gmail.com</a>
												</li>
											</ul>
										</div><!-- /.call-to-action -->
									</div><!-- /.col-sm-6 -->

									<div class="col-sm-6 hidden-xs">
										<div class="topbar-right">
											<div class="lang-support pull-right">
												<select class="cs-select cs-skin-elastic">
													<option value="" disabled selected>Language</option>
													<option value="united-kingdom" data-class="flag-uk">English</option>
													<option value="france" data-class="flag-france">French</option>
													<option value="spain" data-class="flag-spain">Spanish</option>
													<option value="south-africa" data-class="flag-bd">Bengali</option>
												</select>
											</div>

											<ul class="social-links list-inline pull-right">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
											</ul>
										</div><!-- /.social-links -->
									</div><!-- /.col-sm-6 -->
								</div><!-- /.row -->
							</div><!-- /.container -->
						</div><!-- /.overlay-bg -->
					</nav><!-- /.top-bar -->

					<div id="search">
						<button type="button" class="close">×</button>
						<form>
							<input type="search" value="" placeholder="type keyword(s) here" />
							<button type="submit" class="btn btn-primary">Search</button>
						</form>
					</div>

					<nav class="navbar navbar-default" role="navigation">
						@include('Components.navbar')
					</nav>
				</header>

				<section class="page-title-section">
					<div class="container">
						<div class="page-header-wrap">
							<div class="page-header">
								<h1>Contact us</h1>
							</div>
							<ol class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li class="active">Contact</li>
							</ol>
						</div>
					</div>
				</section>

				<section class="contact-info-section">
					<div class="container">
						<div class="text-center">
							<h2 class="section-title">Get in Touch</h2>
							<span class="section-sub">We Are Ready to Help You 24/7</span>
						</div>

						<div class="row content-row">
							<!-- Contact Form -->
							<form id="mainContact" action="sendemail.php" method="POST">
								<div class="col-md-7">
									<div class="contact-form">
										<h3><i class="fas fa-envelope"></i> Contact Form</h3>
										<form id="mainContact" action="sendemail.php" method="POST">
											<div class="form-group">
												<label for="name"><i class="fas fa-user"></i> Name</label>
												<input name="name" type="text" class="form-control" required=""
													placeholder="Enter your name">
											</div>
											<div class="form-group">
												<label for="email"><i class="fas fa-envelope"></i> Email address</label>
												<input name="email" type="email" class="form-control" required=""
													placeholder="Enter valid email">
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="subject"><i class="fas fa-tag"></i> Subject</label>
														<input name="subject" type="text" class="form-control"
															required="" placeholder="Enter your subject">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="phone"><i class="fas fa-phone"></i> Phone
															Number</label>
														<input name="phone" type="text" class="form-control"
															placeholder="Add personal number">
													</div>
												</div>
											</div>
											<div class="form-group text-area">
												<label for="message"><i class="fas fa-comment"></i> Your Message</label>
												<textarea name="message" class="form-control" rows="3" required=""
													placeholder=""></textarea>
											</div>
											<button type="submit" class="btn btn-primary">Send Message</button>
										</form>
									</div>
								</div>
							</form>
							<!-- Contact Information and Google Map -->
							<div class="col-md-5">
								<div class="contact-info">
									<h3><i class="fas fa-map-marker-alt"></i> Head Office</h3>
									<address>
										38 Dambulla Road<br>
										Matale, Sri Lanka<br>
										Phone: +94 76 357 2887<br>
										Email: bridgeway@info.com<br>
									</address>
								</div>

								<div class="contact-map">
									<h3><i class="fas fa-map"></i> Location Map</h3>
									<div id="contactMap" style="width: 100%; height: 450px;">
										<iframe
											src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31648.497097609295!2d80.60810522032516!3d7.458378376387101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae344d7d465445d%3A0xd6f70562e8850dbc!2sMatale!5e0!3m2!1sen!2slk!4v1726385560691!5m2!1sen!2slk"
											width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
											referrerpolicy="no-referrer-when-downgrade"></iframe>
									</div>
								</div>
							</div>
						</div>

					</div>
				</section>


				<section class="other-office-address">
					<div class="container">
						<h2>World Wide Offices</h2>
						<div class="row content-row">
							<div class="col-md-4">
								<div class="contact-info">
									<h3><i class="fas fa-map-marker-alt"></i> United States Office</h3>
									<address>
										<p><i class="fas fa-map-marker-alt"></i> 384 Maple Circle<br>
											Simi Valley, Nevada 47424<br>
											<i class="fas fa-phone-alt"></i> Phone: +12 30 456789<br>
											<i class="fas fa-envelope"></i> Email: Nineway@transport.com
										</p>
									</address>
								</div><!-- /.contact-info -->
							</div><!-- /.col-md-4 -->
							<div class="col-md-4">
								<div class="contact-info">
									<h3><i class="fas fa-map-marker-alt"></i> United Kingdom Office</h3>
									<address>
										<p><i class="fas fa-map-marker-alt"></i> 789 Oak Street<br>
											Springfield, Illinois 62701<br>
											<i class="fas fa-phone-alt"></i> Phone: +11 45 678910<br>
											<i class="fas fa-envelope"></i> Email: contact@logistics.com
										</p>
									</address>
								</div><!-- /.contact-info -->
							</div><!-- /.col-md-4 -->
							<div class="col-md-4">
								<div class="contact-info">
									<h3><i class="fas fa-map-marker-alt"></i> Bangladesh Office</h3>
									<address>
										<p><i class="fas fa-map-marker-alt"></i> 123 Pine Avenue<br>
											Orlando, Florida 32801<br>
											<i class="fas fa-phone-alt"></i> Phone: +10 32 145678<br>
											<i class="fas fa-envelope"></i> Email: info@freight.com
										</p>
									</address>
								</div><!-- /.contact-info -->
							</div><!-- /.col-md-4 -->
						</div>
					</div>
				</section>



				<!-- cta start -->
				<section class="cta-section">
					<div class="container text-center">
						<a data-toggle="modal" data-target="#quoteModal" href="#" class="btn btn-primary quote-btn">Get
							a Quote</a>

						<!-- Modal -->
						<div class="modal fade" id="quoteModal" tabindex="-1" role="dialog"
							aria-labelledby="quoteModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="quoteModalLabel">Request a rate for the shipping of
											your goods.</h4>
									</div>
									<div class="modal-body">
										<form id="contactForm" action="sendemail.php" method="POST">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="name">Name</label>
														<input id="name" name="name" type="text" class="form-control"
															required="" placeholder="">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="company">Company Name</label>
														<input id="company" name="company" type="text"
															class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="phone">Phone Number</label>
														<input id="phone" name="phone" type="text" class="form-control"
															placeholder="">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="email">Email address</label>
														<input id="email" name="email" type="email" class="form-control"
															required="" placeholder="">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="city">City Name</label>
														<input id="city" name="city" type="text" class="form-control"
															placeholder="">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="subject">Subject</label>
														<input id="subject" name="subject" type="text"
															class="form-control" required="" placeholder="">
													</div>
												</div>
											</div>
											<div class="form-group text-area">
												<label for="message">Your Message</label>
												<textarea id="message" name="message" class="form-control" rows="6"
													required="" placeholder=""></textarea>
											</div>

											<button type="submit" class="btn btn-primary">Send Message</button>
										</form>
									</div>
								</div>
							</div>
						</div>

					</div><!-- /.container -->
				</section><!-- /.cta-section -->
				<!-- cta end -->

				<!-- footer-widget-section start -->
				<section class="footer-widget-section section-padding">
					<div class="container">
						@include('Components.footer')
				</section><!-- /.cta-section -->
				<!-- footer-widget-section end -->

				<!-- copyright-section start -->
				<footer class="copyright-section">
					@include('Components.copyright')
				</footer>
				<!-- copyright-section end -->
			</div> <!-- .st-content -->
		</div> <!-- .st-pusher -->

		<!-- OFF CANVAS MENU -->
		<div class="offcanvas-menu offcanvas-effect">
			<div class="offcanvas-wrap">
				<div class="off-canvas-header">
					<button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
						id="off-canvas-close-btn">&times;</button>
				</div>
				<ul id="offcanvasMenu" class="list-unstyled visible-xs visible-sm">
					<li><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
					<li>
						<a href="#">Pages</a>
						<ul>
							<li><a href="about.html">About</a></li>
							<li><a href="service.html">Service</a></li>
							<li><a href="our-people.html">Our people</a></li>
							<li><a href="career.html">Career</a></li>
							<li><a href="faq.html">FAQ Page</a></li>
							<li><a href="typography.html">Typography</a></li>
						</ul>

					</li>
					<li>
						<a href="#">Services</a>
						<ul>
							<li><a href="air.html">Air transportation</a></li>
							<li><a href="marine.html">Marine transportation</a></li>
							<li><a href="moving.html">Moving &amp; storage</a></li>
							<li><a href="shipping.html">Shipping &amp; operations</a></li>
							<li><a href="transportation.html">Transportation logistics</a></li>
							<li><a href="trucking.html">Trucking</a></li>
						</ul>

					</li>
					<li>
						<a href="#">Blog</a>
						<ul>
							<li>
								<a href="blog.html">Standard blog</a>
							</li>
							<li>
								<a href="blog-single.html">Single blog</a>
							</li>
						</ul>
					</li>
					<li class="active"><a href="contact.html">Contact</a></li>
					<li><a href="typography.html">Typography</a></li>
				</ul>
				<div class="offcanvas-widgets hidden-sm hidden-xs">
					<div id="twitterWidget">
						<h2>Tweeter feed</h2>
						<div class="twitter-widget"></div>
					</div>
					<div class="newsletter-widget">
						<h2>Stay in Touch</h2>
						<p>Enter your email address to receive news &amp; offers from us</p>

						<form class="newsletter-form">
							<div class="form-group">
								<label class="sr-only" for="InputEmail1">Email address</label>
								<input type="email" class="form-control" id="InputEmail2"
									placeholder="Your email address">
								<button type="submit" class="btn">Send &nbsp;<i class="fa fa-angle-right"></i></button>
							</div>
						</form>

					</div><!-- newsletter-widget -->
				</div>

			</div>
		</div><!-- .offcanvas-menu -->
	</div><!-- /st-container -->


	<!-- Preloader -->
	<div id="preloader">
		<div id="status">
			<div class="status-mes"></div>
		</div>
	</div>
	@include('Script.script')
</body>

</html>