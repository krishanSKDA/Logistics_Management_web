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
						  							<li><a href="#"><i class="fa fa-envelope"></i>danushkaaberathna0@gmail.com</a></li>
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
							<div class="row">
								<div class="col-xs-12">
									<div class="page-header-wrap">
										<div class="page-header">
									   		<h1>Trucking</h1>
									   	</div>
									   <ol class="breadcrumb">
										  <li><a href="#">Home</a></li>
										  <li class="active">Trucking</li>
										</ol>
									</div>
								</div>
							</div>
						</div>
					</section>

					<!-- Single-Service-Start -->
                    <section class="single-service-contents">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-5 col-xs-12">
                <div class="service-sidebar sidebar-wrapper">

                    <div class="widget">
                        <h2 class="widget-title">Services</h2>
                        <ul class="service-list">
                            <li><a href="{{ url('/air') }}" class="icon-air">Air transportation</a></li>
                            <li><a href="{{ url('/marine') }}" class="icon-marine">Marine transportation</a></li>
                            <li><a href="{{ url('/moving') }}" class="icon-store">Moving &amp; storage</a></li>
                            <li><a href="{{ url('/shipping') }}" class="icon-shipping">Shipping &amp; operations</a></li>
                            <li><a href="{{ url('/transport') }}" class="icon-transportation">Transportation logistics</a></li>
                            <li class="active"><a href="{{ url('/truck') }}" class="icon-trucking">Trucking</a></li>
                        </ul>
                    </div><!-- /.widget -->

                    <div class="widget">
                        <div class="download-wrap company">
                            <a href="#">Company profile <span>Download</span><i class="fa fa-download"></i></a>
                        </div> <!-- /.download-wrap -->
                        <div class="download-wrap annual">
                            <a href="#">Annual Report <span>Download</span><i class="fa fa-download"></i></a>
                        </div> <!-- /.download-wrap -->
                        <div class="download-wrap brochure">
                            <a href="#">Corporate Brochure <span>Download</span><i class="fa fa-download"></i></a>
                        </div> <!-- /.download-wrap -->
                    </div><!-- /.widget -->

                    <div class="widget">
                        <h2 class="widget-title">Office Hours</h2>
                        <div class="textwidget">
                            <p>Monday -
                                Friday: 9:00 - 18:00<br>
                                Saturday: 9:00 - 2:00<br>
                                Holidays: 9:00 - 12:00</p>
                        </div>
                    </div><!-- /.widget -->
                </div><!-- /.sidebar-wrapper -->
            </div><!-- /.col -->
            <div class="col-md-9 col-sm-7 col-xs-12">
                <img class="img-alignnone" src="img/service/truckingthumb.png" alt="image">
                <h2>Trucking: Backbone of Ground Transportation</h2>
                <p>Trucking services are crucial in ground transportation logistics, providing flexible and reliable solutions for moving goods over short and long distances. They connect manufacturers, distributors, and retailers, ensuring efficient and timely delivery. Trucking offers door-to-door service, reducing handling times and risk of damage, making it ideal for time-sensitive shipments and fragile items.</p>
                <p>Trucking services provide flexibility in load size and scheduling, accommodating varying cargo volumes. Advanced route planning and optimization technologies enhance efficiency by analyzing traffic patterns and road conditions. Real-time GPS tracking and telematics systems provide continuous visibility, enabling proactive management and timely deliveries, reducing transit times and fuel consumption.</p>
                <p>The trucking industry prioritizes safety and compliance through strict regulations, including regular vehicle maintenance and driver training. These measures protect cargo and enhance service reliability. Environmental sustainability is also gaining attention, with companies adopting eco-friendly practices like fuel-efficient vehicles, carbon footprint optimization, and alternative fuels. These efforts reduce the environmental impact of trucking operations and support sustainability goals.</p>
                <p>Trucking services are crucial in ground transportation logistics, offering reliable, flexible, and efficient solutions for goods movement. They utilize advanced technologies, strategic planning, and safety commitments to meet market demands.</p>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

					<!-- Single-Service-End-->


			        <!-- cta start -->
			        <section class="cta-section">
			        	<div class="container text-center">
			        		<a data-toggle="modal" data-target="#quoteModal" href="#" class="btn btn-primary quote-btn">Get a Quote</a>

							<!-- Modal -->
							<div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="quoteModalLabel">Request a rate for the shipping of your goods.</h4>
							      </div>
							      <div class="modal-body">
									<form id="contactForm" action="sendemail.php" method="POST">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
												    <label for="name">Name</label>
												    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="">
												</div>
											</div>
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="company">Company Name</label>
											    <input id="company" name="company" type="text" class="form-control" placeholder="">
											  </div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="phone">Phone Number</label>
											    <input id="phone" name="phone" type="text" class="form-control" placeholder="">
											  </div>
											</div>
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="email">Email address</label>
											    <input id="email" name="email" type="email" class="form-control" required="" placeholder="">
											  </div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="city">City Name</label>
											    <input id="city" name="city" type="text" class="form-control" placeholder="">
											  </div>
											</div>
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="subject">Subject</label>
											    <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="">
											  </div>
											</div>
										</div>
										<div class="form-group text-area">
											<label for="message">Your Message</label>
											<textarea id="message" name="message" class="form-control" rows="6" required="" placeholder=""></textarea>
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
			        	<button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
			        </div>
			        <ul id ="offcanvasMenu" class="list-unstyled visible-xs visible-sm">
			            <li class="active"><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
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
								<li class="active"><a href="trucking.html">Trucking</a></li>
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
			            <li><a href="contact.html">Contact</a></li>
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
									<input type="email" class="form-control" id="InputEmail2" placeholder="Your email address">
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
