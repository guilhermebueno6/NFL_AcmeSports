<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div  class="logo">
	<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo"></a>
	</div>
	<div class="footerText">
		<h2>NFL Finder</h2>
		<h3>Brought to you by ACME Sports</h3>
		<div class="contact-info">
			<p>Contact Info:</p>
			<a href="tel:123-456-7890">123-456-7890</a><br>
			<a href="mailto:info@acmesports.com">info@acmesports.com</a>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>

