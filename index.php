<?php get_header(); ?>

<div id="blog_page">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<p class="post_date"><?php the_time('F jS, Y') ?>

				<?php the_content('Read the rest of this entry &raquo;'); ?>

				<p>
					<span class="float_left"><?php the_tags('<b>Tags</b>: ', ', '); ?></span>
					<span class="float_right"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
				</p>
			</div>
			
			<hr />
			
		<?php endwhile; ?>
		
		<p id="other_entries">
			<?php next_posts_link('&laquo; Older Entries') ?> | <?php previous_posts_link('Newer Entries &raquo;') ?>
		</p>
		
	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

</div><!--blog_page-->	

<?php get_sidebar(); ?>
<?php get_footer(); ?>