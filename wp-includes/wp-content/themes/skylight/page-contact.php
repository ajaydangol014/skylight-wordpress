<?php
/*
Template Name: Contact
 */
get_header();
$the_query = new WP_Query(array('page_id' => get_the_ID()));
while ($the_query->have_posts()) {
	$the_query->the_post();
	?>
	 <section class="about-page page-section">
        <div class="container">
            <h1 class="page-title text-center mb-md-5">Contact Us</h1>
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="google-map mb-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7063.731201470749!2d85.3190667096277!3d27.721435640579468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190e89ac7081%3A0x58eb9ab9adf89d91!2sSky%20Light%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1587534750568!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 mx-auto">
                        <p>For over 24 years, we at Sky Light Pvt. Ltd. have dedicated ourselves to providing Nepalese building industry with the worlds’ finest quality aluminium products in collaboration with TECHNAL of France.</p>
                        <?php
if (get_theme_mod('email_address') != '' || get_theme_mod('phone_number') != '') {
		?>
                        <h5>You can reach us at:</h5>
                        <a href="javascript:void(0);"><?php echo get_theme_mod('email_address'); ?></a>
                        <p><?php echo get_theme_mod('phone_number'); ?></p>
                    <?php }?>
                        <h5>Follow us on:</h5>
                        <p>
                            <?php
if (get_theme_mod('facebook_link')) {
		?>
                            <a href="<?php echo get_theme_mod('facebook_link'); ?>">Facebook</a>,
                        <?php }?>
                          <?php
if (get_theme_mod('twitter_link')) {
		?>
                            <a href="<?php echo get_theme_mod('twitter_link'); ?>">Twitter</a>
                        <?php }?>
                        </p>
                        <h5 class="mb-3">Contact Form</h5>

					<?php echo do_shortcode('[contact-form-7 id="56" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $activeClass = ' active';?>


<?php }
get_footer();?>