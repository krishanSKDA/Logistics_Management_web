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
						  							<li><a href="#"><i class="fa fa-phone"></i>+94-76-357-2887</a></li>
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
									   		<h1>Transportations & Logistics</h1>
									   	</div>
									   <ol class="breadcrumb">
										  <li><a href="#">Home</a></li>
										  <li class="active">Transportations & Logistics</li>
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
                                                <li class="active"><a href="{{ url('/transport') }}" class="icon-transportation">Transportation logistics</a></li>
                                                <li><a href="{{ url('/truck') }}" class="icon-trucking">Trucking</a></li>
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
									<img class="img-alignnone" src="img/service/logisticthumb.png" alt="image">
                                	<h2>Transportation Logistics: Optimizing the Flow of Goods.</h2>
                                    <p>Transportation logistics is a crucial aspect of supply chain management, involving activities like route planning, carrier selection, load optimization, and real-time tracking. It integrates advanced technology and logistics expertise to ensure timely, budget-friendly, and optimal shipments. Route planning, analyzed through traffic patterns, reduces transit times and fuel consumption.</p>
									<p>Carrier selection is crucial in transportation logistics, affecting efficiency and cost-effectiveness. It involves evaluating factors like reliability, cost, capacity, and geographic coverage. Load optimization maximizes space and resources, reducing trips, lowering costs, and minimizing damage during transit. Strong relationships with trusted carriers offer flexible solutions.</p>
									<p>Real-time tracking and monitoring are essential for businesses to maintain visibility and control over shipments, manage potential issues, and improve transparency and communication with customers, ensuring timely corrective actions.</p>
									<p>Transportation logistics companies are embracing sustainability by adopting greener practices like fuel-efficient vehicles, optimized routes, and eco-friendly packaging, reducing environmental impact and aligning with corporate sustainability goals.</p>
									<br>
                                    <br>
                                    <h3>Route Planning and Carrier Selection</h3>
									<p><img class="img-alignleft" src="img/service/movingthumb2.png" alt="image">Route planning and carrier selection are foundational elements of effective transportation logistics. In route planning, logistics professionals use sophisticated software to analyze various factors, such as traffic patterns, road conditions, and distances, to determine the most efficient paths for shipments. This strategic planning reduces transit times and fuel consumption, leading to cost savings and enhanced reliability. The ability to dynamically adjust routes in real-time based on current conditions, such as traffic congestion or weather events, further ensures that deliveries remain on schedule and efficient.</p>
                                    <p>Carrier selection is equally critical, as choosing the right carrier can significantly impact the transportation process's efficiency and cost-effectiveness. Logistics companies evaluate carriers based on reliability, cost, capacity, and geographic coverage to ensure optimal performance. By maintaining strong relationships with a network of trusted carriers, logistics providers can offer flexible and scalable solutions tailored to each shipment's specific needs. This careful selection process ensures that goods are transported by reliable partners, enhancing the overall quality and reliability of the logistics service.</p>
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
								<li class="active"><a href="shipping.html">Shipping &amp; operations</a></li>
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
