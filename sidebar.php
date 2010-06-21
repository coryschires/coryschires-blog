<?php include (TEMPLATEPATH . "/searchform.php"); ?>

<ul id="sidebar">
	<span id="latest_posts">
		<h2>Recent Posts</h2>
		<?php query_posts('showposts=10'); ?>
		<?php while (have_posts()) : the_post(); ?>

		<li>	
			<a class="title_link" href="<?php the_permalink() ?>"><?php the_title(); ?></a><br />
			<?php the_date(); ?>
		</li>
		<?php endwhile;?>
	</span>
	    
	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

	<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php if ( is_404() || is_category() || is_day() || is_month() ||
				is_year() || is_search() || is_paged() ) {
	?> 

	<?php }?>

	<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>


	<?php endif; ?>
</ul><!--sidebar-->