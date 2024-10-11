<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">


	<title>Bridgeway Logistics</title>
	<?php echo $__env->make('libraries.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<script src="js/vendor/modernizr-2.8.1.min.js"></script>

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
											<?php echo $__env->yieldContent('content1'); ?>
										</div><!-- /.call-to-action -->
									</div><!-- /.col-sm-6 -->

								</div><!-- /.row -->
							</div><!-- /.container -->
						</div><!-- /.overlay-bg -->
					</nav><!-- /.top-bar -->

					<div id="search">
						<button type="button" class="close">×</button>
						<?php echo $__env->yieldContent('Search'); ?>
					</div>

					<?php echo $__env->make('Components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</header>

				<div id="main-carousel" class="carousel slide hero-slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#main-carousel" data-slide-to="1"></li>
						<li data-target="#main-carousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/slider/slide-1.jpg" alt="Hero Slide">
							<!--Slide Image-->

							<div class="container">
								<div class="carousel-caption">
									<?php echo $__env->yieldContent('Home'); ?>
								</div>
								<!--.carousel-caption-->
							</div>
							<!--.container-->
						</div>
						<!--.item-->
						<div class="item">
							<img src="img/home.avif" alt="Hero Slide">
							<!--Slide Image-->

							<div class="container">
								<div class="carousel-caption">

									<?php echo $__env->yieldContent('Home-01'); ?>
								</div>
								<!--.carousel-caption-->
							</div>
							<!--.container-->
						</div>

						<div class="item">
							<img src="img/slider/Air.jpg" alt="Hero Slide">
							<!--Slide Image-->

							<div class="container">
								<div class="carousel-caption">

									<?php echo $__env->yieldContent('Home-02'); ?>
								</div>
								<!--.carousel-caption-->
							</div>
							<!--.container-->
						</div>
						<!--.item-->

					</div>
					<!--.carousel-inner-->

					<!-- Controls -->
					<a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Page 01</span>
					</a>
					<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="sr-only">Page 02</span>
					</a>
					<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="sr-only">Page 03</span>
					</a>
				</div>
				<!-- #main-carousel-->


				<!-- services start -->
				<section class="service-home section-padding">
					<div class="container text-center">
						<div class="row">
							<div class="col-xs-12">
								<?php echo $__env->yieldContent('service'); ?>
							</div>
						</div> <!-- /.row -->

						<div class="row content-row">
							<div class="col-sm-4">
								<div class="service">
									<div class="service-thumb-home">
										<a href="#"><img src="img/trans.png" alt=""></a>
									</div>
									<?php echo $__env->yieldContent('card'); ?>
									<a class="readmore" href="#">Read More &nbsp;<i class="fa fa-angle-right"></i> </a>
								</div>
							</div><!-- /.col-sm-4 -->

							<div class="col-sm-4">
								<div class="service">
									<div class="service-thumb-home">
										<a href="#"><img src="img/move.png" alt=""></a>
									</div>
									<?php echo $__env->yieldContent('card-1'); ?>
									<a class="readmore" href="#">Read More &nbsp;<i class="fa fa-angle-right"></i> </a>
								</div>

							</div><!-- /.col-sm-4 -->

							<div class="col-sm-4">
								<div class="service">
									<div class="service-thumb-home">
										<a href="#"><img src="img/delivery.png" alt=""></a>
									</div>
									<?php echo $__env->yieldContent('card-2'); ?>
									<a class="readmore" href="#">Read More &nbsp;<i class="fa fa-angle-right"></i> </a>
								</div>
							</div><!-- /.col-sm-4 -->
						</div> <!-- /.row -->
					</div><!-- /.container -->
				</section>
				<!-- services end -->

				<!-- featuer-section start -->
				<section class="feature-section section-padding">
					<div class="container">
						<div class="row">
							<div class="col-sm-7 col-xs-12">
								<?php echo $__env->yieldContent('feature'); ?>
							</div>

						</div>
					</div>
				</section>
				<!-- featuer-section end -->

				<!-- why-us-setion start -->
				<section class="why-us-setion section-padding">
					<div class="container">
						<div class="row text-center">
							<div class="col-xs-12">
								<?php echo $__env->yieldContent('choose'); ?>
							</div>
						</div> <!-- /.row -->

						<div class="row content-row">
							<div class="col-md-12">
								<div class="css-tab" role="tabpanel">

									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#secure" aria-controls="secure"
												role="tab" data-toggle="tab"><i class="flaticon-logistics15"></i>
												Secure</a></li>
										<li role="presentation"><a href="#trackable" aria-controls="trackable"
												role="tab" data-toggle="tab"><i class="flaticon-logistics18"></i>
												Trackable</a></li>
										<li role="presentation"><a href="#fast" aria-controls="fast" role="tab"
												data-toggle="tab"><i class="flaticon-logistics16"></i> Fast</a></li>
										<li role="presentation"><a href="#reliable" aria-controls="reliable" role="tab"
												data-toggle="tab"><i class="flaticon-broken43"></i> Reliable</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active fade in" id="secure">
											<div class="css-tab-content">
												<div class="row">
													<div class="col-md-6">
														<img src="img/secture.png" alt="">
													</div><!-- /.col-md-6 -->

													<div class="col-md-6 content-text">
														<?php echo $__env->yieldContent('secure'); ?>
													</div><!-- /.col-md-6 -->
												</div><!-- /.row -->
											</div><!-- /.css-tab-content -->
										</div>
										<div role="tabpanel" class="tab-pane fade" id="trackable">
											<div class="css-tab-content">
												<div class="row">
													<div class="col-md-6">
														<img src="img/track.png" alt="">
													</div><!-- /.col-md-6 -->

													<div class="col-md-6 content-text">
														<?php echo $__env->yieldContent('track'); ?>
													</div><!-- /.col-md-6 -->
												</div><!-- /.row -->
											</div><!-- /.css-tab-content -->
										</div>
										<div role="tabpanel" class="tab-pane fade" id="fast">
											<div class="css-tab-content">
												<div class="row">
													<div class="col-md-6">
														<img src="img/Fa.png" alt="">
													</div><!-- /.col-md-6 -->

													<div class="col-md-6 content-text">
														<?php echo $__env->yieldContent('Fast'); ?>
													</div><!-- /.col-md-6 -->
												</div><!-- /.row -->
											</div><!-- /.css-tab-content -->
										</div>
										<div role="tabpanel" class="tab-pane fade" id="reliable">
											<div class="css-tab-content">
												<div class="row">
													<div class="col-md-6">
														<img src="img/reliable01.png" alt="">
													</div><!-- /.col-md-6 -->

													<div class="col-md-6 content-text">
														<?php echo $__env->yieldContent('reliable'); ?>
													</div><!-- /.col-md-6 -->
												</div><!-- /.row -->
											</div><!-- /.css-tab-content -->
										</div>
									</div>
								</div><!-- /.css-tab -->
							</div><!-- /.col-md-12 -->
						</div><!-- /.row -->

					</div><!-- /.container -->
				</section>
				<!-- why-us-setion end -->

				<!-- testimonial-section start -->
				<section class="testimonial-section testimonial2 section-padding">
					<div class="container text-center">
						<div class="row">
							<div class="col-xs-12">
								<h2 class="section-title">We are Trusted By</h2>
								<span class="section-sub">Bridgeway Logistics: reliable partner, ensures efficiency,
									<br>timely deliveries through commitment to reliability and efficiency</span>
							</div>
						</div> <!-- /.row -->

						<div class="row row-content">
							<div class="col-md-12">
								<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">

									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
										<li data-target="#testimonial-carousel" data-slide-to="1"></li>
										<li data-target="#testimonial-carousel" data-slide-to="2"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner" role="listbox">

										<div class="item active">

											<div class="testimonial-content">
												<p>"Bridgeway Logistics consistently delivers excellence!<br> Their
													meticulous attention to detail and unwavering commitment to
													efficiency make them a standout choice."</p>
												</p>
												<span class="client-title">Deanna Lewis</span>
												<span class="client-avatar"><img src="img/client/client-1.jpg"
														alt="client avatar"></span>
											</div><!-- /.testimonial-content -->

										</div>
										<div class="item">
											<div class="testimonial-content">
												<p>"Experience with Bridgeway Logistics has been exceptional!<br> Their
													flawless operations and dedication to punctuality have
													revolutionized our logistics."</p>
												<span class="client-title">- Sarah Johnson -</span>
												<span class="client-avatar"><img src="img/client/client-1.jpg"
														alt="client avatar"></span>
											</div><!-- /.testimonial-content -->
										</div>


										<div class="item">
											<div class="testimonial-content">
												<p>"Working with Bridgeway Logistics has been a pleasure! <br>From their
													impeccable operations to their steadfast commitment to timely
													deliveries,<br> they've exceeded our expectations." </p>
												<span class="client-title">- Emily Chen -</span>
												<span class="client-org"><a href="#" target="_blank">ThemeRox</a></span>
												<span class="client-avatar"><img src="img/client/client-1.jpg"
														alt="client avatar"></span>
											</div><!-- /.testimonial-content -->
										</div>
									</div>

								</div><!-- /.carousel -->
							</div><!-- /.col-md-12 -->
						</div><!-- /.row -->

						<hr>

						<div class="partner-section">
							<div class="row row-content">
								<div class="col-md-12">
									<div class="owl-carousel partner-carousel">
										<div class="item">
											<a href="#"><img src="img/partner/p1.jpg" alt=""></a>
										</div>
										<div class="item">
											<a href="#"><img src="img/partner/p2.jpg" alt=""></a>
										</div>
										<div class="item">
											<a href="#"><img src="img/partner/p3.jpg" alt=""></a>
										</div>
										<div class="item">
											<a href="#"><img src="img/partner/p4.jpg" alt=""></a>
										</div>
										<div class="item">
											<a href="#"><img src="img/partner/p5.jpg" alt=""></a>
										</div>
										<div class="item">
											<a href="#"><img src="img/partner/p1.jpg" alt=""></a>
										</div>
										<div class="item">
											<a href="#"><img src="img/partner/p2.jpg" alt=""></a>
										</div>
										<div class="item">
											<a href="#"><img src="img/partner/p3.jpg" alt=""></a>
										</div>
										<div class="item">
											<a href="#"><img src="img/partner/p4.jpg" alt=""></a>
										</div>
									</div>


									<div class="partner-carousel-navigation">
										<a class="prev"><i class="fa fa-angle-left"></i></a>
										<a class="next"><i class="fa fa-angle-right"></i></a>
									</div><!-- /.partner-carousel-navigation -->


								</div><!-- /.col-md-12 -->
							</div><!-- /.row -->
						</div><!-- /.partner-section -->
					</div><!-- /.container -->
				</section>

				<!-- testimonial-section end -->

				<!-- counter start -->
				<section class="counter-section" data-stellar-background-ratio="0.5">
					<div class="container">
						<div class="row">
							<div class="col-sm-4 col-xs-12">
								<div class="counter-block">
									<span class="count-description flaticon-boat"><strong
											class="timer">799</strong>order delivered</span>
								</div>
							</div>
							<div class="col-sm-4 col-xs-12">
								<div class="counter-block">
									<span class="count-description flaticon-international"><strong
											class="timer">19</strong>order delivered</span>
								</div>
							</div>
							<div class="col-sm-4 col-xs-12">
								<div class="counter-block">
									<span class="count-description flaticon-compass"><strong
											class="timer">521</strong>order delivered</span>
								</div>
							</div>
						</div> <!-- /.row -->
					</div><!-- /.container -->
				</section><!-- /.counter-section -->
				<!-- counter end -->

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
										<h3 class="modal-title" id="quoteModalLabel">Request a rate for the shipping of
											your goods.</h3>
									</div>
									<div class="modal-body">
										<form id="contactForm" action="sendemail.php" method="POST">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="name">Name</label>
														<input id="name" name="name" type="text" class="form-control"
															required="" placeholder="Enter Your Company Name">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="company">Company Name</label>
														<input id="company" name="company" type="text"
															class="form-control" placeholder="Your Company Name">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="phone">Phone Number</label>
														<input id="phone" name="phone" type="text" class="form-control"
															placeholder="Company Mobile Number">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="email">Email address</label>
														<input id="email" name="email" type="email" class="form-control"
															required="" placeholder="Enter Company Email">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="city">City Name</label>
														<input id="city" name="city" type="text" class="form-control"
															placeholder="Location here">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="subject">Subject</label>
														<input id="subject" name="subject" type="text"
															class="form-control" required="" placeholder="Subject here">
													</div>
												</div>
											</div>
											<div class="form-group text-area">
												<label for="message">Your Message</label>
												<textarea id="message" name="message" class="form-control" rows="2"
													placeholder="Others..."></textarea>
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
					<?php echo $__env->make('Components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<!-- /.container -->
				</section><!-- /.cta-section -->
				<!-- footer-widget-section end -->

				<!-- copyright-section start -->
				<footer class="copyright-section">
					<?php echo $__env->make('Components.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><!-- /.container -->
				</footer>
				<!-- copyright-section end -->
			</div> <!-- .st-content -->
		</div> <!-- .st-pusher -->

		<!-- OFF CANVAS MENU -->
		<?php echo $__env->make('Components.offcanvas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div><!-- /st-container -->


	<!-- Preloader -->
	<div id="preloader">
		<div id="status">
			<div class="status-mes"></div>
		</div>
	</div>

	<?php echo $__env->make('Script.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH D:\SSP_Website_Sem02\Logistics_Management -Web\Logistics_website\resources\views/layout/layouthome.blade.php ENDPATH**/ ?>