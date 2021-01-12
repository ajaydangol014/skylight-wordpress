 <?php get_header();
while (have_posts()) {
	the_post();
	?>
 <section class="project-detail-page page-section">
        <div class="container">
            <h1 class="page-title text-center mb-md-5"><?php the_title();?></span></h1>
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <p><?php the_content();?></p>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <?php
// Get the ID of a given category
	$category_id = get_cat_ID('Products');
	// Get the URL of this category
	$category_link = get_category_link($category_id);
	?>
                    <a href="<?php echo $category_link; ?>" class="btn btn-outline-primary btn-back text-uppercase">Back</a>
                </div>
            </div>
        </div>
    </section>
<?php }?>
</main>
<?php get_footer();?>