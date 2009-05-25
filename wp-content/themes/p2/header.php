<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?3" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body<?php if(is_single()) echo ' class="single"'; ?>>
<div id="notify"></div>
<div id="help">
	<dl class="directions">
		<dt>c</dt><dd><?php _e('compose new post', 'p2'); ?></dd>
		<dt>j</dt><dd><?php _e('next post/next comment', 'p2'); ?></dd>
		<dt>k</dt> <dd><?php _e('previous post/previous comment', 'p2'); ?></dd>
		<dt>r</dt> <dd><?php _e('reply', 'p2'); ?></dd>
		<dt>e</dt> <dd><?php _e('edit', 'p2'); ?></dd>
		<dt>o</dt> <dd><?php _e('show/hide comments', 'p2'); ?></dd>
		<dt>t</dt> <dd><?php _e('go to top', 'p2'); ?></dd>
		<dt>esc</dt> <dd><?php _e('cancel', 'p2'); ?></dd>
	</dl>
</div>

<div id="header">
	<div class="sleeve">
		<h1><a href="<?php bloginfo( 'url' ); ?>/"><?php bloginfo( 'name' ); ?></a></h1>
			<?php if(get_bloginfo('description')) : ?><small><?php bloginfo( 'description' ); ?></small><?php endif; ?>
	</div>
</div>
<div id="wrapper">
	<?php get_sidebar( );