<?php get_header(); ?>

<div id="blog_page">

	<?php if (have_posts()) : ?>

		<h2 class="search_title">Search results for <span class="green"><?php echo $_GET["s"]; ?></span></h2>

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
			</div>

		<?php endwhile; ?>
		
		<hr class="search_results_hr" />
		<p id="other_entries">
			<?php next_posts_link('&laquo; Older Entries') ?> <?php previous_posts_link('Newer Entries &raquo;') ?>
		</p>

	<?php else : ?>

		<div id="no_search_results">
		    <h3>Hey there buddy.</h3>
			<h4>You better start looking for something else.</h4>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/grimace1.jpg" alt="Grimace" />
			<hr class="no_search_results" />	
		</div><!--error_page_wrap-->
		
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
	
</div><!-- blog_page -->	

<?php get_sidebar(); ?>

<?php get_footer(); ?>