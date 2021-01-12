<?php
/*
Template Name: Contact
 */
get_header();
$the_query = new WP_Query(array('page_id' => get_the_ID()));
while ($the_query->have_posts()) {
	$the_query->the_post();
	?>
	<section class="inner-page">
		<div class="slider-item py-5" style="background-image: url('<?=get_bloginfo('template_directory');?>/img/slider-1.jpg');">

			<div class="container">
				<div class="row slider-text align-items-center justify-content-center text-center">
					<div class="col-md-7 col-sm-12 element-animate">
						<h1 class="text-white">Contact Us</h1>
					</div>
				</div>
			</div>

		</div>
	</section>
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-7">

					<?php echo do_shortcode('[contact-form-7 id="56" title="Contact form 1"]'); ?>

				</div>
				<div class="col-md-1"></div>
				<div class="col-md-4">
					<h5 class="text-uppercase mb-3">Address</h5>
					<p class="mb-5">98 West 21th Street, <br> Suite 721 <br> New York NY 10016</p>

					<h5 class="text-uppercase mb-3">Email Us At</h5>
					<p class="mb-5"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a> <br> <a href="mailto:customer@yourdomain.com">customer@yourdomain.com</a></p>

					<h5 class="text-uppercase mb-3">Call Us</h5>
					<p class="mb-5">Phone: (+1) 435 3533 <br> Mobile: (+1) 435 3533 <br> Fax: (+1) 435 3534</p>
				</div>
			</div>
		</div>
	</section>

<?php }
get_footer();?>