<?php get_header();?>
    <section class="inner-page">
      <div class="slider-item py-5" style="background-image: url('<?=get_bloginfo('template_directory');?>/img/slider-2.jpg');">

        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1 class="text-white">About Us</h1>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 order-lg-3 mb-5">
            <img src="<?=get_bloginfo('template_directory');?>/img/slider-1.jpg" alt="Image placeholder" class="img-fluid">
          </div>
          <div class="col-md-1 order-lg-2"></div>
          <div class="col-md-5 order-lg-1">
            <h2 class="text-uppercase heading mb-4">Company History</h2>
            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>

            <ul class="list-unstyled check">
              <li>Soluta sit quam minima</li>
              <li>Consectetur adipisicing elit</li>
              <li>Commodi unde impedit</li>
            </ul>
          </div>

        </div>
        <div class="row">
          <div class="col-md-6 order-lg-1 mb-5">
            <img src="<?=get_bloginfo('template_directory');?>/img/slider-2.jpg" alt="Image placeholder" class="img-fluid">
          </div>
          <div class="col-md-1 order-lg-2"></div>
          <div class="col-md-5 order-lg-3">
            <h2 class="text-uppercase heading mb-4">We Are 25 Years in Industry</h2>
            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>

            <ul class="list-unstyled check">
              <li>Soluta sit quam minima</li>
              <li>Consectetur adipisicing elit</li>
              <li>Commodi unde impedit</li>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <section class="section border-t">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">Testimonial</h2>
            <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 element-animate">
            <div class="media d-block media-testimonial text-center">
              <img src="<?=get_bloginfo('template_directory');?>/img/person_1.jpg" alt="Image placeholder" class="img-fluid mb-3">
              <p>Jane Doe, <a href="#">XYZ Inc.</a></p>
              <div class="media-body">
                <blockquote>
                  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.&rdquo;</p>
                </blockquote>

              </div>
            </div>
          </div>

          <div class="col-md-6 element-animate">
            <div class="media d-block media-testimonial text-center">
              <img src="<?=get_bloginfo('template_directory');?>/img/person_3.jpg" alt="Image placeholder" class="img-fluid mb-3">
              <p>John Doe, <a href="#">XYZ Inc.</a></p>
              <div class="media-body">
                <blockquote>
                  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.&rdquo;</p>
                </blockquote>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

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