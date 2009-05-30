<div id="sidebar">
<ul>
<?php 
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) {
	echo prologue_widget_recent_comments_avatar(array('before_widget' => ' <li id="recent-comments" class="widget widget_recent_comments"> ', 'after_widget' => '</li>', 'before_title' =>'<h2>', 'after_title' => '</h2>'  ));

	$before = '<li><h2>'.__('Recent Tags', 'p2')."</h2>\n";
	$after = "</li>\n";
	$num_to_show = 35;
	echo prologue_recent_projects( $num_to_show, $before, $after );
}; // if dynamic_sidebar
akismet_counter();

<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,124,0" width="217" height="350" id="TwitterWidget" align="middle">
	<param name="allowScriptAccess" value="always" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="http://static.twitter.com/flash/widgets/profile/TwitterWidget.swf" />
	<param name="quality" value="high" />
	<param name="bgcolor" value="#000000" />
	<param name="FlashVars" value="userID=31686511&styleURL=http://static.twitter.com/flash/widgets/profile/velvetica.xml">
	<embed src="http://static.twitter.com/flash/widgets/profile/TwitterWidget.swf" quality="high" bgcolor="#000000" width="217" height="350" name="TwitterWidget" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" FlashVars="userID=31686511&styleURL=http://static.twitter.com/flash/widgets/profile/velvetica.xml"/>
</object>
?>
	</ul>
<div style="clear: both;"></div>
</div> <!-- // sidebar -->
