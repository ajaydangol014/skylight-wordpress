<?php get_header();
$the_query = new WP_Query(array('pagename' => 'about-home'));
if ($the_query->have_posts()) {
	while ($the_query->have_posts()) {
		$the_query->the_post();
		?>
        <section class="about page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="about-title"><?php the_title();?></h2>
                        <div class="about-description mt-md-4"><?php the_content();?></div>
                        <a href="<?php the_field('more_button_link');?>" class="btn btn-outline-primary btn-more text-uppercase mt-md-4">More about us</a>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img">
                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="Skylight - About Us">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php }}?>
        <?php
$serv = array(
	'post_type' => 'service',
	'posts_per_page' => 3,
);
$services = new WP_Query($serv);
if ($services->have_posts()) {
	?>
        <section class="services page-section">
            <div class="container">
                <div class="row service-list">
                    <?php
// while ($services->have_posts()) {
	for ($i = 1; $i <= 3; $i++) {
		$services->the_post();
		# code...
		?>
                    <div class="col-md-4 service-item-wrapper">
                        <div class="service-item">
                            <h4 class="service-title text-uppercase">
                                <span class="number">0<?=$i;?></span>
                                <span class="service-text"><?php the_title();?></span>
                            </h4>
                            <div class="service-description">
                                <p><?php the_content();?></p>
                                <img class="img-fluid" src="<?=get_bloginfo('template_directory');?>/img/service<?=$i;?>.jpg" alt="Skylight - About Us">
                            </div>
                        </div>
                    </div>
                <?php }?>

                </div>
            </div>
        </section>
<?php }?>
<?php
$proj = array(
	'post_type' => 'project',
	// 'posts_per_page' => 3,
);
$project = new WP_Query($proj);
if ($project->have_posts()) {
	?>
        <section class="projects page-section">
            <div class="container">
                <div class="row">
                    <h2 class="section-title col-lg-8 mx-auto">Our Projects</h2>
                </div>
                <div class="project-carousel owl-carousel owl-theme">
                                    <?php
while ($project->have_posts()) {
		$project->the_post();
		if (get_field('show_in_featured') == "Yes") {
			?>
                    <a href="<?php the_permalink();?>" class="item">
                        <figure>
                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="Skylight - About Us">
                            <figcaption><?php the_title();?></figcaption>
                        </figure>
                    </a>
                   <?php }}?>
                </div>
            </div>
        </section>
<?php }?>

        <?php
$testimonial = array(
	'post_type' => 'testimonial',
	// 'posts_per_page' => 4,
);
$testiData = new WP_Query($testimonial);
if ($testiData->have_posts()) {
	?>
        <section class="testimonial page-section">
            <div class="container">
                <div class="row">
                    <h2 class="section-title col-lg-8 mx-auto">What our client's say</h2>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme col-md-10 col-lg-7 mx-auto">
                      <?php
while ($testiData->have_posts()) {
		$testiData->the_post();
		?>
                    <div class="item">
                        <p class="testimonial-description"><?php the_content();?></p>
                        <div class="testimonial-meta text-right">
                            <div class="testimonial-title font-weight-bold"><?php the_title();?></div>
                            <div class="testimonial-company"><?php the_field('designation') . ',' . the_field('company');?></div>
                        </div>
                    </div>
                <?php }?>
                </div>
            </div>
        </section>
    <?php }?>
    </main>
<?php get_footer();?>
