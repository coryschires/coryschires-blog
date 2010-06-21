<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div class="column_three">
    <div id="latest_posts">
		<h3>Latest Posts</h3>

		<?php query_posts('showposts=10'); ?>

		<?php while (have_posts()) : the_post(); ?>
		<div>	
			<a class="title_link" href="<?php the_permalink() ?>"><?php the_title(); ?></a><br />
			<span class="excerpt"><?php the_excerpt(); ?></span><br />
			<span class="gray_out"><?php the_date(); ?></span>
		</div>
		<?php endwhile;?>

		<p class="btn_link"><a href="/portfolio">See more posts from my blog &raquo;</a></p>
	</div><!--latest_posts-->
</div><!--column_three-->
<div id="slideshow">
	<img class="active" src="<?php bloginfo('stylesheet_directory'); ?>/images/code/css.jpg" alt="CSS Screenshot" />
	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/code/rails_model.jpg" alt="Rails Model Screenshot" />	
	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/code/jquery.jpg" alt="jQuery Screenshot" />
	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/code/css.jpg" alt="CSS Screenshot" />
	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/code/rails_controller.jpg" alt="Rails Controller Screenshot" />
	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/code/rails_form.jpg" alt="Rails Form Screenshot" />
</div><!--slideshow-->


<div class="column_one">
    <div id="about_me">
		<h3>About Me</h3>
		<p>
			I'm a history student turned web developer with a degree from the University of Chicago. I've developed lots of 
			sites using lots of technologies for businesses, non-profits, and friends. 
		</p>
		<p>
			Recently, I've been working with Ruby on Rails and jQuery. But I also have experience using many other technologies, 
			including WordPress, PHP, MySQL, Redmine, Unix, MacRuby and more. I even do a little design now and then.
		</p>
		<p>
			I spend most of my time working as the lead developer at <a class="new_window" href="http://onesandzerosweb.com/">Ones &amp; Zeros Web 
			Design</a>. But I'm also currently available for freelance and contract work. I work for $40 per hour with some 
			flexibility depending on the project. 
		</p>
		<p class="btn_link"><a href="<?php bloginfo('stylesheet_directory'); ?>/resume/cory_schires_resume.pdf">Download my complete resume &raquo;</a></p>
	</div><!--about_me-->
</div><!--column_one-->

<div class="column_two">
    <div id="recent_work">
		<h3>Recent Work</h3>		
		<p>
			<span class="faux_link">My Florida County</span><br />
			My Florida County is a web application that allows residents to easily pay traffic tickets, order official records, 
			and make child support payments online.<br />
			<span class="gray_out">Ongoing</span> 
		</p>
		<p>
			<a class="title_link new_window" href="http://www.wimbledonwinner.com/">Wimbledon Winner</a><br />
			Wimbledon Winner is a promotional contest site built for Hill &amp; Knowlton.<br />
			<span class="gray_out">March 2010</span> 
		</p>
		<p>
			<a class="title_link new_window" href="http://image-mapper.com/">Image Mapper</a><br />
			Image Mapper is a web application that makes it dead easy to create HTML image maps.<br />
			<span class="gray_out">January 2010</span> 
		</p>
		<p>
			<a class="title_link new_window" href="http://your-big-blog.com/">100% New Zealand</a><br />
			100% New Zealand is a blog for a film making competition coordinated by Peter Jackson and the New Zealand Board of 
			Tourism.<br />
			<span class="gray_out">December 2009</span> 
		</p>		
		<p>
			<a class="title_link new_window" href="http://www.foreclosuregrove.com/">Foreclosure Grove</a><br />
			Foreclosure Grove is a web application that helps realtors, investors, and individuals find information on foreclosed 
			properties in Arizona.<br />
			<span class="gray_out">October 2009</span> 
		</p>
		<p class="btn_link"><a href="/portfolio">View my complete portfolio &raquo;</a></p>
	</div><!--recent_work-->
</div><!--column_two-->
<?php get_footer(); ?>