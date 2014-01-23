<?php // Do not delete these lines
if('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
	die ('Please do not load this page directly. Thanks!');
	if(!empty($post->post_password)) {
		if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
?>
			<p class="nocomments">Post protected.</p>
<?php
			return;
		}
	}
}
?>
<a id="comments" name="comments" class="anchor"></a>
<div id="comments-content" class="comments-section">
	<h2><?php comments_number('No comments yet', '1 comment', '% comments');?></h2>
	<?php if($comments){ //INICIA COMENTARIOS?>
	<ul id="commentlist">
		<?php wp_list_comments('avatar_size=48&type=comment&reply_text='); ?>
	</ul>
	<?php };?>
	<a id="respond" name="respond" class="anchor"></a>
	<?php if ('open' == $post->comment_status){ //INICIA FORMULARIO PARA COMENTARIOS - Si estan abiertos ?>
		
		
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<h3><?php _e('Share your comment','pcazorla'); ?></h3>
			<p class="req-advice">All fields are required.</p>
			<?php if ( $user_ID ){ //Si SI esta logueado ?>
	
				<p>You are logged as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> | <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Logout">Logout »</a></p>
	
			<?php }else{ //Si NO esta logueado ?>
				
				<fieldset id="authorField" class="validate" min="3">
					<div class="errorMessage" style="display:none;">Please, complete your name</div>
					<label for="author">Name:</label>					
					<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" placeholder="Write your name"/>					
				</fieldset>
				
				<fieldset id="emailField" class="validate email" min="3">
					<div class="errorMessage" style="display:none;">Write a right e-mail</div>
					<label for="email">E-mail:</label>					
					<input type="email"" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" placeholder="your_email@mail.com"/>					
			<?php } ?>					
				</fieldset>
				
				<fieldset id="commentField" class="validate" min="3">
					<div class="errorMessage" style="display:none;">Please, write some words</div>
					<label for="comment">Comment:</label>					
					<textarea name="comment" id="comment"  rows="8" tabindex="3" placeholder="Write here"></textarea>									
				</fieldset>
							
				<fieldset class="submit-field">
					<label>&nbsp;</label>	
					<input name="submit" type="submit" id="submit" class="button big" tabindex="4" title="Send your comment" rel="Sending..." value="Send" />
					<a id="clearFields" href="">Clear fields</a>
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />	
				<?php do_action('comment_form', $post->ID); ?>
				</fieldset>	
		</form>
			
		
	<?php }else{ //Si estan cerrados ?>
		<h4 class="closed-comments">The comments are closed for this work</h4>
	<?php } ?>
</div>