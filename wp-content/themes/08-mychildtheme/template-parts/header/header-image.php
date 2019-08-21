<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

		<div class="custom-header-media">
			<?php the_custom_header_markup(); ?>
			<img src="<?php echo get_template_directory_uri(); ?>/../08-mychildtheme/assets/images/header.jpg" alt="">
		</div>
		
	

	<?php get_template_part( '/template-parts/header/site', 'branding' ); ?>
	
	

</div><!-- .custom-header -->
