<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

			<div class="clear"></div><!--Clear after each row-->
			
			<div id="main" class="grid_14 alpha omega">

				<div id="gallery" class="flexslider">
					<ul class="slides">
						<li><img src="<?php bloginfo('template_url'); ?>/images/penguin_big.jpg" alt="penguin" /><h2>The Penguin Scratched Itself</h2><a href="single.html"><span>Read more</span></a></li>
						<li><img src="<?php bloginfo('template_url'); ?>/images/meadow_big.jpg" alt="penguin" /><h2>Meadow In The Summer</h2><a href="single.html"><span>Read more</span></a></li>
						<li><img src="<?php bloginfo('template_url'); ?>/images/horses_big.jpg" alt="penguin" /><h2>Three Horses</h2><a href="single.html"><span>Read more</span></a></li>
					</ul>
				</div>
			
				<div class="hr"></div>
			
			</div><!--End main-->
			
			<div class="clear"></div><!--Clear after each row-->
					
			<!--Posts-->
			<?php if ( have_posts() ): ?>
			
			<div id="posts">
			<?php while ( have_posts() ) : the_post(); ?>
				<section class="grid_4">
				
					<?php if ( has_post_thumbnail() ) { ?>
						
						<!--Get Featured image, for best usage, width  220x 140 -->
						<a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail('full'); ?></a>
					
					<?php } else { ?>
					
						<a href="<?php the_permalink(); ?>"  class="post-thumbnail"><img src="<?php bloginfo('template_url'); ?>/images/noimage.jpg" /></a>

					<?php }?>
					
						<h3><?php the_title_attribute(); ?></h3>
						<!--Get 115 characters-->
						<p><?php echo substr(get_the_excerpt(), 0,115); ?></p>
						<p><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">Read more...</a></p>
				</section>
			<?php endwhile; ?>
			</div>
			<?php else: ?>
			<div id="posts" class="grid_14 alpha omega">	
				<h2>No posts to display</h2>
			</div>
			<?php endif; ?>
			
			<!--Pagination-->
			<?php kriesi_pagination(); ?>
		
			<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>