<?php
/**
 * The Template for displaying all single posts
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
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article class="grid_9 suffix_1 alpha">
			
			<?php edit_post_link('Edit post', '<h2>','</h2>');?>
			<h2><?php the_title(); ?></h2>
			<h4><span><?php the_date('F j, Y'); ?> by <?php echo get_the_author() ; ?></span></h4>
			
			<?php the_content(); ?>			
			
			<aside id="postinfo">
				<p>Category: <?php the_category(', '); ?></p>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			</aside>
			
			<?php if ( get_the_author_meta( 'description' ) ) : ?>
			<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
			<h3>About <?php echo get_the_author() ; ?></h3>
			<?php the_author_meta( 'description' ); ?>
			<?php endif; ?>

			<?php comments_template( '', true ); ?>

		</article>
		
		<?php endwhile; ?>
		
		<?php get_sidebar(); ?><!--Add sidebar-->
		
	</div><!--End main-->
			
		<div class="clear"></div><!--Clear after each row-->
		
		<!--Pagination-->
		<div id="pagination" class="grid_4 prefix_5 suffix_5 alpha omega">
			
			<ul class="page_pagination">
				<li class="float_right"><?php previous_post_link('%link', 'Older'); ?></li>
				<li class="float_left"><?php next_post_link('%link', 'Newer'); ?></li>
			</ul>
		</div>
	
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>