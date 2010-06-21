<?php get_header(); ?>

<div id="blog_page">
	
		<?php if (have_posts()) : ?>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		
		<?php /* If this is a category archive */ if (is_tag()) { ?>
			<h2 class="search_title">Articles tagged in <span class="green"><?php single_tag_title(); ?></span></h2>
		<?php } ?>


		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="search_results">
				<h3 id="post-<?php the_ID(); ?>">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<?php the_title(); ?>
					</a>
				</h3>
				<p class="gray_out"><?php the_time('F jS, Y') ?></p>
				<p>
					<?php the_tags('Tags: ', ', ', ''); ?> | 
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
				</p>
			</div><!-- search_results -->		
		<?php endwhile; ?>

		<hr class="search_results_hr" />
		<p id="other_entries">
			<?php next_posts_link('&laquo; Older Entries') ?> <?php previous_posts_link('Newer Entries &raquo;') ?>
		</p>

	<?php else : ?>

		<h2>Not Found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

</div><!--blog_page-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
