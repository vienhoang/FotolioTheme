		<aside class="grid_4 omega">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
			<h3>Recent Posts</h3>
			<ul>
				<?php
				/* Get the 5 recent posts */
				$args = array( 'numberposts' => '5' );
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){
				echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
				}
				?>
			</ul>

			<h3>Archives</h3>
			<ul>
			<?php wp_get_archives('type=monthly'); ?>
			</ul>

			<h3>Categories</h3>
			<ul>
			<?php wp_list_categories('title_li'); ?>
			</ul>

			<h3>Pages</h3>
			<ul>
			<?php wp_list_pages('title_li'); ?>
			</ul>

			<?php endif; ?>

		</aside>