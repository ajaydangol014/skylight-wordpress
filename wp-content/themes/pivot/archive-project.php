<?php get_header();?>
<section class="inner-page">
      <div class="slider-item py-5" style="background-image: url('<?php echo get_template_directory_uri() ?>. /img/slider-2.jpg');">

        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1 class="text-white">Our Projects</h1>
            </div>
          </div>
        </div>

      </div>
    </section>
      <?php
//query to retrieve slider data

$taxonomies = get_terms(array(
	'taxonomy' => 'project-category',
	'hide_empty' => false,
));
?>
    <section>
      <div class="container">
        <?php foreach ($taxonomies as $category) {?>
        <a href="<?php echo get_term_link($category); ?>"><p style="background:gray;padding:5px;margin:10px; color:white;">#<?=$category->name;?></p></a>
      <?php }?>
      </div>
    </section>

<?php
if (have_posts()) {
	?>
    <section class="section border-t">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">

        <div class="row no-gutters">
                <?php
while (have_posts()) {
		the_post();
		?>
	          <div class="col-md-4 element-animate">
	            <a href="<?php the_permalink();?>" class="link-thumbnail">
	              <h3><?php the_title();?></h3>
	              <span class="ion-plus icon"></span>
	              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="Image placeholder" class="img-fluid">
	            </a>
	          </div>
			        <?php }
	wp_reset_postdata();?>

        </div>
      </div>
    </section>
    <!-- END section -->
  <?php }?>


<?php get_footer();?>