<?php
$user = get_userdata( $current_user->ID );
$name = isset( $user->first_name ) && $user->first_name? $user->first_name : $user->display_name;
?>

<div id="postbox">
	<form id="new_post" name="new_post" method="post" action="<?php bloginfo( 'url' ); ?>/">
		<input type="hidden" name="action" value="post" />
		<?php wp_nonce_field( 'new-post' ); ?>
		<div class="avatar"><?php echo prologue_get_avatar( $user->ID, $user->user_email, 48 ); ?></div>
		<div class="inputarea">
			<label for="posttext"><?php printf( __('Hi, %s. Whatcha up to?', 'p2'), wp_specialchars( $name ) ) ?></label>
			<div>
				<textarea name="posttext" id="posttext" tabindex="1" rows="3" cols="60"></textarea>
			</div>
			<label class="post-error" for="posttext" id="posttext_error"></label>  
			<div class="postrow">
				<input type="text" name="tags" id="tags" tabindex="2" autocomplete="off" value="<?php echo attribute_escape(__('Tag it', 'p2')); ?>"
					onfocus="this.value=(this.value=='<?php echo js_escape(__('Tag it', 'p2')); ?>') ? '' : this.value;"
					onblur="this.value=(this.value=='') ? '<?php echo js_escape(__('Tag it', 'p2')); ?>' : this.value;" />
				<input id="submit" type="submit" tabindex="3" value="<?php echo attribute_escape(__('Post it', 'p2')); ?>" />
			</div>
			<span class="progress" id="ajaxActivity"><img src="<?php bloginfo('template_directory'); ?>/i/indicator.gif"
				alt="<?php echo attribute_escape(__('Loading...', 'p2')); ?>" title='<?php echo attribute_escape(__('Loading...', 'p2')); ?>'/></span>
		</div>
		<div class="clear"></div>
	</form>
</div> <!-- // postbox -->