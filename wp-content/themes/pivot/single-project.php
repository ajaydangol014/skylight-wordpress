<?php
get_header();
while (have_posts()) {
	the_post();
	?>
 <section class="home-slider  inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');">

        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1><?php the_title();?></h1>
            </div>
          </div>
        </div>

      </div>
  </section>
<section class="section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 mx-auto">
            <h2 class="text-uppercase heading mb-4">Description</h2>
            <p><?php the_content();?></p>
          </div>
        </div>
      </div>
    </section>
<?php }
get_footer();?>