<?php get_header();?>
<section class="project-list-page page-section">
        <div class="container">
            <h1 class="page-title text-center mb-md-5">Our Projects</h1>
            <div class="page-content">
                      <?php
//query to retrieve slider data

$taxonomies = get_terms(array(
	'taxonomy' => 'project-category',
	'hide_empty' => false,
));
?>
                <div class="row">
                    <div class="col-md-3 project-tabs border-right">
                        <ul class="pt-md-5">
                            <li class="active"><a href="#">All</a></li>
                             <?php foreach ($taxonomies as $category) {?>
                            <li><a href="#<?=$category->slug;?>"><?=$category->name;?></a></li>
                        <?php }?>
                        </ul>
                    </div>
                    <div class="col-md-8 offset-md-1 project-list">
                        <?php
$proj = array(
	'post_type' => 'project',
	// 'posts_per_page' => 3,
	// 'tax_query' => array(
	// 	array(
	// 		'taxonomy' => 'project-category',
	// 		'field' => 'slug',
	// 		// 'terms' => 'politics',
	// 	),
	// ),
);
$project = new WP_Query($proj);
if ($project->have_posts()) {
	?>
                        <div class="row">
                <?php
while ($project->have_posts()) {
		$project->the_post();
		$terms = wp_get_post_terms(get_the_ID(), 'project-category', ['fields' => 'id=>slug']);
		?>
                            <div class="col-md-6 project-item-container mb-4">
                                <a href="<?php the_permalink();?>" class="project-item" id="#<?php echo implode(' ', $terms); ?>">
                                    <figure>
                                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title();?>">
                                        <figcaption><?php the_title();?></figcaption>
                                    </figure>
                                </a>
                            </div>
                        <?php }?>

                        </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>