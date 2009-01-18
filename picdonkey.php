<?php

/*
Plugin Name: picdonkey
Plugin URI: http://www.bildesel.de/
Description: Show Thumbnails of webpages just with a tag: Use [thumb]http://www.homepage.com[/thumb] in you articles and you have linked thumbnails.
Version: 1.0
Author: Sascha Ende
Author URI: http://www.endemedia.de/downloads/wordpress-plugin-picdonkey
Min WP Version: 1.0
Max WP Version: 2.7
Tags: homepage,website,thumbnail,thumb,screenshot,link,links
Requires at least: 1.0
Tested up to: 2.7
*/

add_filter('the_content','parsePicDonkey');
 
function parsePicDonkey($content) {
 	return preg_replace_callback("/\[thumb\](.*?)\[\/thumb\]/sim","parsePicDonkeyCallBack",$content);
}

function parsePicDonkeyCallBack($content){
	return '<script language="javascript" src="http://www.bildesel.de/thumb.php?url='.urlencode($content[1]).'"></script>';
}


?>