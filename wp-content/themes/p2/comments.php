<?php
if( 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'] ) )
	die( __('Please do not load this page directly. Thanks!', 'p2') );

if ( post_password_required() ) { ?>
	<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'p2'); ?></p>
<?php
	return;
} // if post_password_required

if ( have_comments() ) {
	echo "<ul id='comments' class='commentlist'>\n";
	wp_list_comments(array('callback' => 'prologue_comment'));
	echo "</ul>\n";
	if ( get_option( 'page_comments' ) && (get_query_var( 'cpage' ) > 1 || get_query_var( 'cpage' ) < get_comment_pages_count() ) ) {
		?>
	    <div class="navigation">
	        <p><?php previous_comments_link(); ?>  <?php next_comments_link(); ?> </p>
	    </div>
<?php
	}
} // if comments

if( 'open' == $post->comment_status ) {
?>
<div id="respond">
    <?php require dirname( __FILE__ ) . '/comment-form.php'; ?>
</div>
<?php
} // if open comment_status