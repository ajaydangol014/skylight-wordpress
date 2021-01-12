<?php
get_header();
$the_query = new WP_Query(array('page_id' => get_the_ID()));
while ($the_query->have_posts()) {
	$the_query->the_post();
	?>
 <section class="home-slider  inner-page owl-carousel">

        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h2><?php the_title();?></h2>
            </div>
          </div>
        </div>

      </div>
  </section>
<section class="section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 mx-auto">
            <h4 class="text-uppercase heading mb-4">Description</h4>
            <p><?php the_content();?></p>
          </div>
        </div>
      </div>
    </section>
<?php }?>
<?php get_footer();?>