<?php
/*
Plugin Name: Admin Area Appearance Tweaks
Version:     0.1
Plugin URI:  http://cuteleo.cn
Description: 优化 WordPress 2.7 后台在中文环境下的显示
Author:      Leo
Author URI:  http://cuteleo.cn
*/

$aab_css_url = get_option('siteurl') . '/wp-content/plugins/admin-area-appearance-tweaks/admin-area-appearance-tweaks.css';

if (is_admin() && WPLANG == 'zh_CN') {
	add_action('admin_head', admin_area_beautifier);
}
function admin_area_beautifier(){
	global $aab_css_url;
	echo "<link rel='stylesheet' href='$aab_css_url' type='text/css' media='all' />";
}
?>