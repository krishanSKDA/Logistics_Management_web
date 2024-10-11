<section class="footer-widget-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-md-offset-1 col-sm-4">
				<div class="footer-widget">
					<h3>Place &amp; Contact</h3>

					<address>
						38 Dambulla Road<br>
						Matale, Sri Lanka<br>

						<!-- Google Map Modal Trigger -->
						<button type="button" class="modal-map" data-toggle="modal" data-target="#cssMapModal">Location
							Map</button>

						<span class="tel">(+94) 76-357-2887</span>
					</address>


					<!-- Modal -->
					<div class="modal fade" id="cssMapModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
						aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
											aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Our Location</h4>
								</div>
								<div class="modal-body">

									<div id="googleMap"></div>

								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- End Modal -->
				</div><!-- /.footer-widget -->
			</div><!-- /.col-md-4 -->

			<div class="col-md-3 col-sm-4">
				<div class="footer-widget">
					<h3>Useful Links</h3>

					<ul>
						<li><a href="<?php echo e(url('/about')); ?>">About</a></li>
						<li><a href="<?php echo e(url('/service')); ?>">Service</a></li>
						<li><a href="<?php echo e(url('/members')); ?>">Our people</a></li>
						<li><a href="<?php echo e(url('/career')); ?>">Career</a></li>
						<li><a href="<?php echo e(url('/faq')); ?>">FAQ Page</a></li>
					</ul>
				</div><!-- /.footer-widget -->
			</div><!-- /.col-md-4 -->

			<div class="col-md-4 col-sm-4">
				<div class="footer-widget">
					<h3>Stay in Touch</h3>
					<p>Enter your email address to receive news &amp; offers from us</p>

					<form class="newsletter-form">
						<div class="form-group">
							<label class="sr-only" for="InputEmail1">Email address</label>
							<input type="email" class="form-control" id="InputEmail1" placeholder="Your email address">
							<button type="submit" class="">Send &nbsp;<i class="fa fa-angle-right"></i></button>
						</div>
					</form>
				</div><!-- /.footer-widget -->
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div>
</section><?php /**PATH D:\SSP_Website_Sem02\Logistics_Management - Testing\Logistics_website\resources\views/Components/footer.blade.php ENDPATH**/ ?>