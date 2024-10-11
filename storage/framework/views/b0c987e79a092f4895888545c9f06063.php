<div class="offcanvas-menu offcanvas-effect">
			<div class="offcanvas-wrap">
				<div class="off-canvas-header">
					<button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
						id="off-canvas-close-btn">&times;</button>
				</div>
				<ul id="offcanvasMenu" class="list-unstyled visible-xs visible-sm">
					<li class="active"><a href="<?php echo e(url('/')); ?>">Home<span class="sr-only">(current)</span></a></li>
					<li>
						<a href="#">Pages</a>
						<ul>
							<li><a href="<?php echo e(url('/about')); ?>">About</a></li>
							<li><a href="<?php echo e(url('/service')); ?>">Service</a></li>
							<li><a href="<?php echo e(url('/members')); ?>">Our people</a></li>
							<li><a href="<?php echo e(url('/career')); ?>">Career</a></li>
							<li><a href="<?php echo e(url('/faq')); ?>">FAQ Page</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Services</a>
						<ul>
							<li><a href="<?php echo e(url('/air')); ?>">Air transportation</a></li>
							<li><a href="<?php echo e(url('/marine')); ?>">Marine transportation</a></li>
							<li><a href="<?php echo e(url('/moving')); ?>">Moving & storage</a></li>
							<li><a href="<?php echo e(url('/shipping')); ?>">Shipping & operations</a></li>
							<li><a href="<?php echo e(url('/transport')); ?>">Transportation logistics</a></li>
							<li><a href="<?php echo e(url('/truck')); ?>">Trucking</a></li>
						</ul>

					</li>
					<li>
						<a href="#">Features</a>
						<ul>
							<li><a href="<?php echo e(url('/shipment')); ?>">Create Shipping</a></li>
							<li><a href="<?php echo e(url('/contact')); ?>">Customer Support</a></li>
							<li><a href="<?php echo e(url('/feedback')); ?>">FeedBack</a></li>

						</ul>

					</li>

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
		</div><?php /**PATH D:\SSP_Website_Sem02\Logistics_Management - Testing\Logistics_website\resources\views/Components/offcanvas.blade.php ENDPATH**/ ?>