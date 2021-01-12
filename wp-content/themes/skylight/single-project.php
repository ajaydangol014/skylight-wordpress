 <?php get_header();
while (have_posts()) {
	the_post();
	?>
 <section class="project-detail-page page-section">
        <div class="container">
            <h1 class="page-title text-center mb-md-5"><?php the_title();?></span></h1>
            <div class="page-content">
                    <?php
//get images
	$images = miu_get_images();
	if (!empty($images)) {
		?>
                <div class="project-detail-carousel owl-carousel owl-theme">
                    <?php
foreach ($images as $key => $value) {
			?>
                    <div class="item">
                        <figure>
                            <img class="img-fluid" src="<?=$value;?>" alt="<?php the_title();?>">
                            <figcaption><?php the_title();?></figcaption>
                        </figure>
                    </div>
        <?php }?>
                </div>
            <?php }?>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <p><?php the_content();?></p>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <a href="<?php echo get_post_type_archive_link('project'); ?>" class="btn btn-outline-primary btn-back text-uppercase">Back to Projects</a>
                </div>
            </div>
        </div>
    </section>
<?php }?>
</main>
<?php get_footer();?>