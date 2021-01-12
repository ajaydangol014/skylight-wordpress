 <?php get_header();
$the_query = new WP_Query(array('page_id' => get_the_ID()));
while ($the_query->have_posts()) {
	$the_query->the_post();
	?>
  <section class="about-page page-section inner-page-section">
        <div class="container">
            <h1 class="page-title text-center mb-md-5"><?php the_title();?></h1>
            <div class="page-content">
                <?php
if (!empty(get_the_post_thumbnail_url(get_the_ID(), 'full'))) {
		?>
                <figure>
                    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title();?>">
                    <figcaption><?php the_title();?></figcaption>
                </figure>
                <?php }?>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <p>
                            <?php the_content();?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }?>
</main>
<?php get_footer();?>