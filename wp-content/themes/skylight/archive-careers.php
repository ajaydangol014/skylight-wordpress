<?php get_header();?>
<!-- career listing page -->
<section class="career-list-page page-section">
    <div class="container">
        <h1 class="page-title text-center mb-md-5">Careers</h1>
        <div class="page-content">
            <div class="row">
                <div class="col-md-8 offset-md-1 career-list">
                    <?php
$job = array(
	'post_type' => 'careers',
);
$careers = new WP_Query($job);
if ($careers->have_posts()) {
	?>
                        <div class="row">
                            <?php
while ($careers->have_posts()) {
		$careers->the_post();
		?>
                                <div class="col-md-6 career-item-container mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php the_title();?></h5>
                                            <p class="card-text"><?php the_field('short_description');?></p>
                                            <em><?php the_field('expiry_date');?></em><br><br>
                                            <a href="<?php the_permalink();?>" class="btn btn-primary">View Job</a>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>

                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php get_footer();?>