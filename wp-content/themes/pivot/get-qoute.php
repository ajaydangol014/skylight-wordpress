<?php get_header();?>
 <section class="home-slider  inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('<?=get_bloginfo('template_directory');?>/img/slider-1.jpg');">

        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>Get A Quote</h1>
            </div>
          </div>
        </div>

      </div>


    </section>
    <!-- END slider -->

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control form-control-lg" id="fname">
                </div>
                <div class="col-md-6 form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control form-control-lg" id="lname">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control form-control-lg">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control form-control-lg">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Say about your company</label>
                  <textarea name="message" id="message" class="form-control form-control-lg" cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message2">More info about project</label>
                  <textarea name="message2" id="message2" class="form-control form-control-lg" cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-lg btn-block">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <h2 class="text-uppercase heading mb-5 text-left ">Clients Says</h2>

            <div class="media d-block media-testimonial mb-5 text-left">
              <img src="<?=get_bloginfo('template_directory');?>/img/person_1.jpg" alt="Image placeholder" class="img-fluid mb-3">
              <p>Jane Doe, <a href="#">XYZ Inc.</a></p>
              <div class="media-body">
                <blockquote>
                  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.&rdquo;</p>
                </blockquote>

              </div>
            </div>

            <div class="media d-block media-testimonial text-left">
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