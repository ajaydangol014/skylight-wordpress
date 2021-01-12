<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo get_bloginfo('name');
wp_title(); ?></title>
    <meta name="author" content="Prajwal Bajracharya">
    <meta name="description" content="description here">
    <meta name="keywords" content="prajwal bajracharya">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <?php wp_head();?>

</head>

<body>
    <main class="main-wrapper">
    <!-- navigation -->
    <section class="navigation-bar border-bottom py-3">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <?php
$logoImage = (get_theme_mod('header_logo_image')) ? get_theme_mod('header_logo_image') : 'Skylight';
?>
            <a class="navbar-brand" href="index.php"><img src="<?=$logoImage;?>" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <?php
wp_nav_menu(
	array(
		'theme_location' => 'primary',
		'depth' => 0,
		'container' => 'li',
		'menu_class' => 'navbar-nav',
	)
);
?>
            </div>
        </nav>
    </div>
</section>
<!-- end navigation -->