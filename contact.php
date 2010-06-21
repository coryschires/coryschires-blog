<?php
/*
Template Name: Contact
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en" style="overflow: hidden">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Cory Schires - Contact</title>

	<!-- javascripts -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.swap_value.js" type="text/javascript" charset="utf-8"></script>	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/contact.js" type="text/javascript" charset="utf-8"></script>	

	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

	<!--[if IE 7]>
		<style type="text/css" media="screen">
			#hire_me_content { margin-top: -20px !important; }
		</style>
	<![endif]-->

</head>
<body>
	<div id="hire_me_content" style="height: 400px; width: 520px;">
	    <h1>Need some help?</h1>
		<p class="sub_header">I’m currently accepting freelance and contract work.</p>
		<hr />

		<div class="below_header">
		    <div class="form_description">
				<p>
					I'm confident working with just about any <span class="green">web technology</span>, including 
					WordPress, PHP, MySQL, Redmine, Unix, and more. I specialize in Ruby on Rails, jQuery, and AJAX.
				</p>
				<p>
					I'm fast, friendly, and <span class="green">know&shy;ledgeable</span>. I work for $40 per hour with some 
					flexibility depending on the assignment.
				</p>
				<p class="btn_link">
					<a href="<?php bloginfo('stylesheet_directory'); ?>/resume/cory_schires_resume.pdf">Download my complete resume &raquo;</a>
				</p>						
			</div><!-- form_description -->


			<form name="contact" action="" id="hire_me_form">

				<div id="hire_me_textfield_name">
					<input type="text" name="Name" id="hire_me_name" swap_value="Name" class="swap_value required" />					
				</div>

				<div id="hire_me_textfield_email">
					<input type="text" name="Email" id="hire_me_email" swap_value="Email" class="swap_value required email" />							
				</div>

				<div id="hire_me_textarea">
					<textarea name="Message" id="hire_me_message" swap_value="Message" class="required"></textarea>						
				</div>

				<input type="text" src="<?php bloginfo('stylesheet_directory'); ?>/images/hire_me_send.png" width="133px" height="35px" alt="Send" name="submit" value="Send" class="submit-button" id="hire_me_send" />

			</form><!--hire_me_form-->
		</div><!--below_header-->

	</div><!--hire_me_content-->
</body>
</html>



