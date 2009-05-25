<?php
$current_user_id = get_the_author_ID();
?>
    <li id="prologue-<?php the_ID(); ?>" class="user_id_<?php the_author_ID( ); ?>">
<?php
	echo prologue_get_avatar( $current_user_id, get_the_author_email( ), 48 );
?>
	    <h4>
		    <?php the_author_posts_link(); ?>
		    <span class="meta">
		        <?php printf( __('%s <em>on</em> %s', 'p2'),  get_the_time(), get_the_time( get_option('date_format') ) ); ?> |
			    <?php comments_popup_link( '0', '1', '%' ); ?>
			    <span class="actions">
			        <a href="<?php the_permalink( ); ?>" class="thepermalink"><?php _e('Permalink', 'p2'); ?></a>
			        <?php
			            if (function_exists('post_reply_link'))
			                echo post_reply_link(array('before' => ' | ', 'reply_text' => __('Reply', 'p2'), 'add_below' => 'prologue'), get_the_id());
			        ?>
			        <?php if (current_user_can('edit_post', get_the_id())): ?>
			            |  <a href="<?php echo (get_edit_post_link( get_the_id() ))?>" class="post-edit-link" rel="<?php the_ID(); ?>"><?php _e('Edit', 'p2'); ?></a>
			        <?php endif; ?>
			    </span>
			    <br />
			    <?php tags_with_count( '', __( 'Tags:' , 'p2').' ', ', ', ' ' ); ?>
		    </span>
	    </h4>
	    <div class="postcontent<?php if (current_user_can( 'edit_post', get_the_id() )) {?> editarea<?}?>" id="content-<?php the_ID(); ?>">
	        <?php the_content( __( '(More ...)' , 'p2') ); ?>
	    </div> <!-- // postcontent -->
        <div class="bottom_of_entry">&nbsp;</div>
	    <?php 
		    if ( ( is_home() || is_front_page() ) ) $withcomments = true;
		    
		    if ( is_single() )
		        comments_template( );
		    else
		        comments_template('/inline-comments.php');
		    
            // Only append comment form to  first post with open comments
            if( ( !isset($form_visible) || !$form_visible ) && 'open' == $post->comment_status ):
                $form_visible = true;
        ?>
        <div style="display:none">
            <div id="respond" style="display:none">
            <?php require dirname( __FILE__ ) . '/comment-form.php'; ?>
            </div> <!-- #respond -->
        </div> <!-- #wp-temp-form-div -->        
<?php
            endif; // if open comment_status
?>
    </li>