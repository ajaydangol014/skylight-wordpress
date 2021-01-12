<!doctype html>
<html lang="en">
  <head>
    <title><?php echo get_bloginfo('name');
wp_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head();?>
  </head>
  <body>

    <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand position-absolute" href="<?=get_bloginfo('template_directory');?>/index.php">Pivot</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse position-relative" id="navbarsExample05">
            <?php
wp_nav_menu(
	array(
		'theme_location' => 'primary',
		'depth' => 0,
		'container' => 'li',
		'menu_class' => 'navbar-nav mx-auto pl-lg-5 pl-0 d-flex align-items-center',
	)
);
?>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->