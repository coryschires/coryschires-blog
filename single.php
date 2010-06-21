<?php get_header(); ?>

<div id="blog_page">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2 class="single_post_title"><?php the_title(); ?></h2>
			<p class="post_date"><?php the_time('F jS, Y') ?>			

			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

			<?php the_tags( '<p><b>Tags:</b> ', ', ', '</p>'); ?>
			
		</div>

<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div><!-- blog_page -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>