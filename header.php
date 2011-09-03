<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

    <head profile="http://www.w3.org/2005/10/profile">
    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png" />

    <title>
      <?php if (is_home()) {
        echo bloginfo('name');
      } elseif (is_404()) {
        echo '404 Not Found';
      } elseif (is_category()) {
        echo 'Category:'; wp_title('');
      } elseif (is_tag()) {
        echo bloginfo('name'); echo ': Articles Tagged in '; wp_title('');
      } elseif (is_search()) {
        echo bloginfo('name'); echo ': Search Results for '; echo $_GET["s"];
      } elseif ( is_day() || is_month() || is_year() ) {
        echo 'Archives:'; wp_title('');
      } elseif (is_page('2')) {
        echo 'Cory Schires - About';
      } elseif (is_page('5')) {
        echo 'Cory Schires';
      } elseif (is_page('12')) {
        echo 'Cory Schires - Blog';
      } elseif (is_page('7')) {
        echo 'Cory Schires - Portfolio';
      } else {
        echo bloginfo('name'); echo ' - '; wp_title('');
      }
      ?>
    </title>


      <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
    <meta name="description" content="<?php bloginfo('description') ?>" />
    <?php if(is_search()) { ?>
    <meta name="robots" content="noindex, nofollow" />
      <?php }?>


    <!-- javascripts -->

        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.hover_caption.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.validate.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/css_browser_selector.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.swap_value.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/prettyComments.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.comment_preview.js" type="text/javascript" charset="utf-8"></script>


        <![if !IE]>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/processing/processing-0.4.js" type="text/javascript" charset="utf-8"></script>
        <![endif]>


    <!-- scripts for syntax highlighting -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/syntax-highlighter/scripts/shCore.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/syntax-highlighter/scripts/shBrushCss.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/syntax-highlighter/scripts/shBrushJava.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/syntax-highlighter/scripts/shBrushJScript.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/syntax-highlighter/scripts/shBrushPhp.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/syntax-highlighter/scripts/shBrushPlain.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/syntax-highlighter/scripts/shBrushRuby.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/syntax-highlighter/scripts/shBrushXml.js" type="text/javascript"></script>
    <!-- scripts for syntax highlighting -->

    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/application.js" type="text/javascript" charset="utf-8"></script>

    <!-- stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style/prettyPhoto.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/syntax-highlighter/styles/shCore.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/syntax-highlighter/styles/shThemeCorySchires.css"/>

    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
  </head>

  <body>

    <!--[if IE 7]>
        <a href="/contact?iframe=true&width=553&height=380" rel="prettyPhoto" id="hire_me_tab"></a>
    <![endif]-->

    <a href="/contact?iframe=true&width=553&height=420" rel="prettyPhoto" id="hire_me_tab"></a>

    <div id="page_wrap">

      <ul id="nav">
        <li><a href="/"><span>Home</span></a></li>
        <li><a href="/portfolio"><span>Portfolio</span></a></li>
        <li><a href="/blog"><span>Blog</span></a></li>
        <li><a href="#resume_wrap" rel="prettyPhoto"><span>Resume</span></a></li>
      </ul>

      <div class="hidden" id="resume_wrap">
          <div id="resume_page">
            <h1>Resume.</h1>
          <p class="sub_header">I’m currently accepting freelance and contract work.</p>
          <hr />

          <div class="resume_item">
            <a href="<?php bloginfo('stylesheet_directory'); ?>/resume/cory_schires_resume.pdf"  class="resume">Download Resume</a>
            <p>
              Read about my skills, education, and some of my recent projects.
              <span class="btn_link">
                <a href="<?php bloginfo('stylesheet_directory'); ?>/resume/cory_schires_resume.pdf">Download my resume &raquo;</a>
              </span>
            </p>
          </div>

          <div class="clear"></div>

          <div class="resume_item">
            <a href="<?php bloginfo('stylesheet_directory'); ?>/resume/cory_schires_code_samples.pdf" class="code">Download Code Examples</a>
            <p>
              Don’t feel like wading through the blog? Check out some code samples here.
              <span class="btn_link">
                <a href="<?php bloginfo('stylesheet_directory'); ?>/resume/cory_schires_code_samples.pdf">
                  Download code samples &raquo;</a>
              </span>
            </p>
          </div>

          <div class="clear"></div>

          <div class="resume_item last">
            <a href="<?php bloginfo('stylesheet_directory'); ?>/resume/cory_schires_portfolio.pdf" class="portfolio">Download Portfolio</a>
            <p>
              Have a look at some of the sites I’ve developed during the last year.
              <span class="btn_link">
                <a href="<?php bloginfo('stylesheet_directory'); ?>/resume/cory_schires_portfolio.pdf">
                  Download design portfolio &raquo;</a>
              </span>
            </p>
          </div>

        </div><!--resume_page-->
      </div><!--resume_wrap-->

      <div id="header">
          <?php if (is_page('5')): ?>
          <h1>Cory Schires.</h1>
          <p>Developing web applications for businesses, for non-profits, and for fun.</p>
        <?php elseif (is_page('7')): ?>
          <h1>Portfolio.</h1>
          <p>Examples of recently completed and ongoing projects.</p>
        <?php elseif (is_404()): ?>
          <h1>404 Error.</h1>
          <p>Oh no! The page you were looking for does not exist.</p>
        <?php else: ?>
          <h1>Blog.</h1>
          <p>Thoughts on web development, computer programming, and the internet.</p>
        <?php endif ?>
      </div><!--header-->

      <hr />
