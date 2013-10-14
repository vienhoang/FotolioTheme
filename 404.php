<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
	<div id="main" class="grid_14 alpha omega">
		
		<div class="grid_9 suffix_1 alpha">
			<div class="results">
				<h2>Page not found</h2>
				<br />
				<h3><a href="<?php echo get_option('home'); ?>">Return to the hompage</a></h3>
			</div>
		</div>
		
			<?php get_sidebar(); ?><!--Add sidebar-->

	</div><!--End main-->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>