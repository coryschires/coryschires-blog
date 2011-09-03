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
  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/code/rails_controller.jpg" alt="Rails Controller Screenshot" />
  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/code/rails_form.jpg" alt="Rails Form Screenshot" />
</div><!--slideshow-->


<div class="column_one">
    <div id="about_me">
    <h3>About Me</h3>
    <p>
      I'm a co-founder and the lead developer for <a class="new_window" href="http://scholasticahq.com/"> Scholastica</a>,
      a startup that allows academics to create, manage, and publish peer-reviewed journals online. You find out more
      about our project by reading <a href="http://blog.scholasticahq.com/" title="Scholastica Blog">our blog</a> or visiting
      <a href="http://www.facebook.com/scholasticahq" title="Scholastica Facebook">our facebook page</a>.
    </p>
    <p>
      Primarily, I work with Ruby on Rails and JavaScript. But I also have experience using many other technologies, including
      WordPress, PHP, MySQL, Unix, Processing, and more. I even do a little design now and then.
    </p>
    <p>
      I studied at the University of Chicago. I live in Logan Square and <a href="https://github.com/coryschires">contribute
      regularly to open source</a>. I'm currently available for freelance and contract work.
    </p>


    <p class="btn_link"><a href="<?php bloginfo('stylesheet_directory'); ?>/resume/cory_schires_resume.pdf">Download my complete resume &raquo;</a></p>
  </div><!--about_me-->
</div><!--column_one-->

<div class="column_two">
    <div id="recent_work">
    <h3>Recent Work</h3>
    <p>
      <a class="title_link new_window" href="http://leighvanvalen.com/">Leigh Van Valen</a><br />
      Leigh Van Valen was an evolutionary biologist best know for the Red Queen's hypothesis. This site publishes his
      papers, making his work freely available to download for the first time.
      <br />
      <span class="gray_out">January 2011</span>
    </p>
    <p>
      <a class="title_link new_window" href="http://www.myfloridacounty.com/">My Florida County</a><br />
      My Florida County is a web application that allows residents to easily pay traffic tickets, order official records,
      and make child support payments online.<br />
      <span class="gray_out">November 2010</span>
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
    <p class="btn_link"><a href="/portfolio">View my complete portfolio &raquo;</a></p>
  </div><!--recent_work-->
</div><!--column_two-->
<?php get_footer(); ?>