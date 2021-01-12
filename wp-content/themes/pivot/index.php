<?php get_header();?>
<?php
//query to retrieve slider data
$args = array(
	'post_type' => 'slider',
	'posts_per_page' => 3,
);
$slider = new WP_Query($args);
if ($slider->have_posts()) {
	?>
    <section class="home-slider owl-carousel">
      <?php
while ($slider->have_posts()): $slider->the_post();
		?>
      <div class="slider-item" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');">

        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1 class="mb-4"> <?php the_title();?></h1>
              <?php if (get_field('url')) {?>
              <p class="mb-0"><a href="<?php the_field('url');?>" target="_blank" class="btn btn-primary"><?php the_field('button_text');?></a></p>
              <?php }?>
            </div>
          </div>
        </div>

      </div>
      <?php endwhile;wp_reset_postdata();?>
    </section>
  <?php }?>
    <!-- END slider -->

    <section class="section bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 pr-lg-5 mb-5 mb-md-0  element-animate">
            <div class="pr-lg-5">
              <h2 class="text-uppercase heading border-bottom mb-4 text-left">We Are Expert in <br>Construction Field</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam similique repellat dignissimos, omnis at ducimus pariatur odio praesentium eveniet porro sit quod, sequi unde atque magnam voluptate quae voluptatum. Delectus.</p>
              <p>At sed impedit, ab a officia blanditiis, fuga commodi delectus veniam architecto in nihil numquam eum maiores. Amet nihil, dolorum sit vitae fugit maxime earum optio culpa eum. Voluptates, labore.</p>
            </div>
          </div>
          <div class="col-md-6  element-animate">
            <img src="<?=get_bloginfo('template_directory');?>/img/work_thumb_1.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

<?php
$proj = array(
 'post_type' => 'project',
 'posts_per_page' => 3,
);
$project = new WP_Query($proj);
if ($project->have_posts()) {
  ?>
    <section class="section border-t">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class="text-uppercase heading border-bottom mb-4">Recent Projects</h2>
            <p class="mb-3 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            <p><a href="<?php echo get_post_type_archive_link( 'project' ); ?>" class="btn btn-primary">See All Projects</a></p>
          </div>
        </div>

        <div class="row no-gutters">
                <?php
while ($project->have_posts()): $project->the_post();
    ?>
          <div class="col-md-4 element-animate">
            <a href="<?php the_permalink(); ?>" class="link-thumbnail">
              <h3><?php the_title(); ?></h3>
              <span class="ion-plus icon"></span>
              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>

        </div>
      </div>
    </section>
    <!-- END section -->
  <?php } ?>

<?php
$serv = array(
	'post_type' => 'service',
	'posts_per_page' => 6,
);
$ajaydangol = new WP_Query($serv);
if ($ajaydangol->have_posts()) {
	?>
    <section class="section">
      <div class="container">

        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class="text-uppercase heading border-bottom mb-4">Services</h2>
            <p class="mb-3 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
          </div>
        </div>

        <div class="row mb-5">
<?php
while ($ajaydangol->have_posts()): $ajaydangol->the_post();
		?>
		        <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
		          <div class="media d-block media-feature text-center">
		            <span class="icon flaticon-<?php the_field('icon'); ?>"></span>
		            <div class="media-body">
		              <h3 class="mt-0 text-black"><?php the_title();?></h3>
		              <p><?php the_content(); ?></p>
		              <p><a href="#" class="btn btn-outline-primary btn-sm">Learn More</a></p>
		            </div>
		          </div>
		        </div>

				<?php endwhile;wp_reset_postdata();?>


        </div>
        <!-- END row -->
        <div class="row justify-content-center element-animate">
          <div class="col-md-4"><p><a href="<?php echo get_post_type_archive_link( 'service' ); ?>" class="btn btn-primary btn-block">View All Services</a></p></div>
        </div>
      </div>
    </section>
  <?php }?>
    <!-- END section -->


    <section class="section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">Our News</h2>
            <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
          </div>
        </div>
        <div class="row element-animate">
          <div class="major-caousel js-carousel-1 owl-carousel">
            <div>
              <div class="media d-block media-custom text-left">
                <img src="<?=get_bloginfo('template_directory');?>/img/work_thumb_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 8</a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="<?=get_bloginfo('template_directory');?>/img/work_thumb_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 2</a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="<?=get_bloginfo('template_directory');?>/img/work_thumb_3.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 5</a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="<?=get_bloginfo('template_directory');?>/img/work_thumb_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 7</a>
                  </p>
                </div>
              </div>
            </div>

            <div>
              <div class="media d-block media-custom text-left">
                <img src="<?=get_bloginfo('template_directory');?>/img/work_thumb_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 1</a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="<?=get_bloginfo('template_directory');?>/img/work_thumb_3.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 4</a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="<?=get_bloginfo('template_directory');?>/img/work_thumb_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 12</a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-left">
                <img src="<?=get_bloginfo('template_directory');?>/img/work_thumb_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <span class="meta-post">December 2, 2017</span>
                  <h3 class="mt-0 text-black"><a href="#" class="text-black">Lorem ipsum dolor sit amet elit</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 14</a>
                  </p>
                </div>
              </div>
            </div>

          </div>
          <!-- END slider -->
        </div>
      </div>
    </section>
    <!-- END section -->

<?php
$testimonial = array(
  'post_type' => 'testimonial',
  'posts_per_page' => 2,
);
$testiData = new WP_Query($testimonial);
if ($testiData->have_posts()) {
  ?>
    <section class="section">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">Happy Customer Says</h2>
            <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
          </div>
        </div>

        <div class="row">
        <?php 
        while ($testiData->have_posts()):$testiData->the_post();
         ?>
          <div class="col-md-6 element-animate">
            <div class="media d-block media-testimonial text-center">
              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="Image placeholder" class="img-fluid mb-3">
              <p><?php the_title(); ?> 
          <?php if(get_field('company')){ ?>
              <a href="<?php the_field('url'); ?>"><?php the_field('company'); ?></a></p>
            <?php } ?>
              <div class="media-body">
                <blockquote>
                  <p><?php the_content(); ?></p>
                </blockquote>

              </div>
            </div>
          </div>
        <?php endwhile;wp_reset_postdata(); ?>


        </div>
      </div>
    </section>
  <?php } ?>


    <section class="container cta-overlap">
      <div class="text d-flex">
        <h2 class="h3">Contact Us For Projects or Need a Quotations</h2>
        <div class="ml-auto btn-wrap">
          <a href="get-quote.html" class="btn-cta btn btn-outline-white">Get A Quote</a>
        </div>
      </div>
    </section>
    <!-- END section -->
    <?php get_footer();?>