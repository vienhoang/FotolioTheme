<header>
		<div class="grid_7 alpha">
			<a href="<?php echo home_url(); ?>">
				<h1><?php bloginfo( 'name' ); ?></h1>
				<h6><?php bloginfo( 'description' ); ?></h6>
			</a>	
		</div>
		
		<div id="searchbar" class="grid_7 omega">
			<form method="get" id="search" action="<?php echo home_url( '/' ); ?>">
				
					<input id="s" name="s" type=text placeholder="Search..." class="searchfield" />
					<input type="submit" class="searchbutton" value="Search" />
				
			</form>
		</div>

		<div class="clear"></div><!--Clear after each row-->
		
			<nav class="grid_14 alpha omega">
				<ul>
					<?php wp_list_pages('title_li'); ?>
				</ul>
			</nav>
		
</header>