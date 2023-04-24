<?php

/*
Plugin name: Rickard Plugin 
Author: Rickard Timergalejevs
Version: 1.0
Description: Plugin that changes admin head to blue color.
*/

add_action( 'admin_head', 'colored_admin_bar' );
 
function colored_admin_bar(){
	echo '<style>#wpadminbar{background-color: #306699;}</style>';
}