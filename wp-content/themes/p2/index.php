<?php
	global $paged;
	prologue_new_post_noajax();
	get_header();
?>
<div class="sleeve_main">
<?php
	if( current_user_can( 'publish_posts' ) ) require_once dirname( __FILE__ ) . '/post-form.php';
?>
<div id="main">
	<h2><?php _e( 'Recent Updates' , 'p2'); ?> <?php if ( $paged > 1 ) printf( __('Page %s', 'p2'), $paged ); ?>
		<a class="rss" href="<?php bloginfo( 'rss2_url' ); ?>">RSS</a>
		<span class="controls">
			<a href="#" id="togglecomments"><?php _e('Hide threads', 'p2'); ?></a> | <a href="#directions" id="directions-keyboard"><?php  _e('Keyboard Shortcuts', 'p2'); ?></a>
		</span>
	</h2>
<?php
if ( have_posts() ):
?>
<ul id="postlist">
<?php
	while( have_posts() ):
	    the_post();
        require dirname(__FILE__) . '/entry.php';
    endwhile; // have_posts
?>
</ul>
<?php else: // have_posts ?>
<div class="no-posts">
    <h3><?php _e('No posts yet!', 'p2'); ?></h3>
</div>
<?php
endif; // have posts
    prologue_navigation();
?>
</div> <!-- main -->
</div> <!-- sleeve -->
<?php get_footer( );