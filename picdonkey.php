<?php

/*
Plugin Name: picdonkey
Plugin URI: http://www.bildesel.de/
Description: Thumbnails von Homepages mit Hilfe vom Bildesel in BLOG Artikeln anzeigen. Einfach mit [thumb]http://www.homepage.de[/thumb]
Version: 1.0
Author: Sascha Ende
Author URI: http://www.bildesel.de/
Update Server: http://www.bildesel.de/
Min WP Version: 1.0
Max WP Version: 2.7
*/

add_filter('the_content','parsePicDonkey');
 
function parsePicDonkey($content) {
 	return preg_replace_callback("/\[thumb\](.*?)\[\/thumb\]/sim","parsePicDonkeyCallBack",$content);
}

function parsePicDonkeyCallBack($content){
	return '<script language="javascript" src="http://www.bildesel.de/thumb.php?url='.urlencode($content[1]).'"></script>';
}


?>