<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p>This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h3 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h3>

	<ul id="comments_list">

	<?php foreach ($comments as $comment) : ?>

		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">

			<?php comment_text() ?>
			      
	    <div class="original_comment">
	        <p class="comment_date"><?php comment_date('F jS, Y') ?></p>
    	    <cite><?php comment_author_link() ?></cite>
	    </div><!--original_comment-->

			<?php if ($comment->comment_approved == '0') : ?>
			<p>Your comment is awaiting moderation.</p>
			<?php endif; ?>
	        
			<div class="clear"></div>
		</li>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ul>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p>Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

<h3 id="respond">Your thoughts?</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>

<p class="text_field">
    <label for="Name" class="hidden"></label>
	<input class="required" type="text" name="author" id="author" swap_value="Name" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
</p>
<p class="text_field">
    <label for="Email" class="hidden"></label>    
	<input class="required email" type="text" name="email" id="email" swap_value="Email" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
</p>
<p class="text_field last">
    <label for="Website" class="hidden"></label>    
    <input type="text" name="url" id="url" swap_value="Website" tabindex="3" />  
</p>




<div class="clear"></div>
<?php endif; ?>
<label for="Message" class="hidden"></label>
<p class="textarea">
	<textarea class="required" name="comment" swap_value="Message" id="comment" tabindex="3"></textarea>
	<span class="tl corner"></span>
	<span class="tr corner"></span>
	<span class="bl corner"></span>
	<span class="br corner"></span>
</p>

<p id="buttons">
  <a id="preview" href="#">Preview</a>
  <input name="submit" type="submit" id="submit" tabindex="4" value="Submit" />
</p>

<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
<?php do_action('comment_form', $post->ID); ?>

</form>

<div id="comment_preview"></div>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
