<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		

		<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark bg-primary" aria-labelledby="main-nav-label">
			
				<div class="top-header">
					
				<div class="logo">
					<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo"></a>
				</div>
				<form method="GET" id="searchBar">
					<input type="text" name="filter"> <button type="submit">Search</button>

					<fieldset>
					<input type="radio" name="sort" value="conference"> Sort by Conference<br>
					<input type="radio" name="sort" value="division"> Sort by Division<br>
					</fieldset>
        
    			</form>
				
			
			
			
		</div>
			


			
			

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
