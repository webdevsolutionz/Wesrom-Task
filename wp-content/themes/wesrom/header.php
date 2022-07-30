<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wesrom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css"
        integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="main-wrapper">
	<!-- HEADER START -->
	<header>
	    
	    <a href="<?php echo home_url(); ?>">
                     <?php $site_logo = get_field('upload_logo', 'option');
                       if( !empty($site_logo) ): ?>
                        <img src="<?php echo $site_logo['url']; ?>" alt="<?php echo $site_logo['alt']; ?>" />
                    <?php endif; ?>
          </a>
	    <nav id="head-nav">
	            <?php
	            wp_nav_menu( array(
	                'theme_location' => 'top-menu',
	                'container'     => 'ul',
	                'menu_class'     => '',
	             ) );
	          ?>
	    </nav>
	    <div class="checkbox-wrapper">
	        <input type="checkbox" id="toggle">
	        <label class="checkbox" for="toggle" onclick="onshow()">
	            <div class="trace"></div>
	            <div class="trace"></div>
	            <div class="trace"></div>
	        </label>
	    </div>
	</header>
	<!-- HEADER END -->

