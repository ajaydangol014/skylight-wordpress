<?php get_header();?>
<section class="project-list-page page-section">
        <div class="container">
            <h1 class="page-title text-center mb-md-5">Products</h1>
            <div class="page-content">
                        <div class="row">
                <?php
$related = get_posts(
	array(
		'cat' => wp_get_post_categories($post->ID),
	)
);
if ($related) {
	foreach ($related as $post) {
		setup_postdata($post);
		?>
                            <div class="col-md-6 project-item-container mb-4">
                                <a href="<?php the_permalink();?>" class="project-item">
                                    <figure>
                                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title();?>">
                                        <figcaption><?php the_title();?></figcaption>
                                    </figure>
                                </a>
                            </div>
<?php }
	wp_reset_postdata();}
?>

                        </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>