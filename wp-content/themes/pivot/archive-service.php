<?php get_header();?>
<section class="inner-page">
      <div class="slider-item py-5" style="background-image: url('<?php echo get_template_directory_uri() ?>. /img/slider-2.jpg');">

        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1 class="text-white">Our Services</h1>
            </div>
          </div>
        </div>

      </div>
    </section>

<?php
if (have_posts()) {
	?>
    <section class="section bg-light">
      <div class="container">
        <div class="row">
  <?php while (have_posts()) {
		the_post();
		?>
          <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
            <div class="media d-block media-feature text-center">
              <span class="flaticon-<?php the_field('icon');?> icon"></span>
              <div class="media-body">
                <h3 class="mt-0 text-black"><?php the_title();?></h3>
                <p><?php the_content();?></p>
                <p><a href="<?php the_permalink();?>" class="btn btn-outline-primary btn-sm">Learn More</a></p>
              </div>
            </div>
          </div>
<?php }?>

        </div>
      </div>
    </section>
  <?php }?>
    <!-- END section -->
  <?php get_footer();?>