﻿<?php
/**
 * Search results page
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

		<article class="grid_9 suffix_1 alpha">
		<?php if ( have_posts() ): ?>
		<h5>Search Results for '<?php echo get_search_query(); ?>'</h5>	
		
		<div class="results">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date('jS M Y', '<h4><span>', '</span></h4>'); ?></time> 
				
				<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Link to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				
				<p><?php echo substr(get_the_excerpt(), 0,180); ?></p>
					
				
			<?php endwhile; ?>
		</div>
		</article>
	
		<?php else: ?>
			<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
		</article>	
		<?php endif; ?>

		<?php get_sidebar(); ?><!--Add sidebar-->

		
	</div><!--End main-->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>