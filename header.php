<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	
  <!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging when a phone is turned sideways-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Page Title<?php wp_title(); ?></title>
  
	<link href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
 	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css?v=1.0">

</head>

<body>
	
<nav class="navbar fixed-top navbar-expand-lg navbar-dark" id="global-nav" style="background-color: rgba(34, 37, 52, 0.75)">
  <a class="navbar-brand" href="#"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"><span id="logo-text" class="ml-3">Rock State Park</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<!--<?php //wp_nav_menu(array('menu_id' => 'primaryNav'));?>-->
	  <?php
        wp_nav_menu( array(
            'theme_location' => 'siteNavigation', // Defined when registering the menu
            'menu_id'        => 'primaryNav',
            'container'      => false,
            'depth'          => 2,
            'menu_class'     => 'navbar-nav mr-auto mt-2 mt-lg-0',
            'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
            'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
        ) );
        ?>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit"><i class="material-icons">
search
</i></button>
    </form>
  </div>
</nav>
	
<header>
	<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!--<img src="images/hero1.jpg" class="d-block w-100" alt="Rock State Park"> -->
		  <picture>
					<source class="d-block w-100" srcset="<?php echo get_template_directory_uri(); ?>/images/hero1.jpg" media="(min-width: 600px)" />
					<img src="<?php echo get_template_directory_uri(); ?>/images/hero1_mobile.jpg" class="d-block w-100" alt="Rock State Park"/>
				  </picture>
        <div class="carousel-caption d-none d-md-block">
          <h5>Reef Cliff</h5>
          <p>Hike neer large cliffs and deep valleys.</p>
        </div>
      </div>
      <div class="carousel-item">
        <picture>
					<source class="d-block w-100" srcset="<?php echo get_template_directory_uri(); ?>/images/hero2.jpg" media="(min-width: 600px)" />
					<img src="<?php echo get_template_directory_uri(); ?>/images/hero2_mobile.jpg" class="d-block w-100" alt="Rock State Park"/>
				  </picture>
        <div class="carousel-caption d-none d-md-block">
          <h5>Hue Lake</h5>
          <p>A beautiful lake with a rocky shore.</p>
        </div>
      </div>
      <div class="carousel-item">
        <picture>
					<source class="d-block w-100" srcset="<?php echo get_template_directory_uri(); ?>/images/hero3.jpg" media="(min-width: 600px)" />
					<img src="<?php echo get_template_directory_uri(); ?>/images/hero3_mobile.jpg" class="d-block w-100" alt="Rock State Park"/>
				  </picture>
        <div class="carousel-caption d-none d-md-block">
          <h5>Red Rock Canyon</h5>
          <p>Thousands of red rock formations.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</header>

	<main>