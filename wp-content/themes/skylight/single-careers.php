 <?php get_header();
while (have_posts()) {
	the_post();
	?>
    <!-- career detail page -->
 <section class="project-detail-page page-section">
        <div class="container">
            <h1 class="page-title text-center mb-md-5"><?php the_title();?></span></h1>
            <em><?php the_field('expiry_date');?></em>
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <p><?php the_content();?></p>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <a href="<?php echo get_post_type_archive_link('careers'); ?>" class="btn btn-outline-primary btn-back text-uppercase">Back to Careers</a>
                </div>
            </div>
        </div>
    </section>
<?php }?>
</main>
<?php get_footer();?>