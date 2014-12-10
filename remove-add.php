<?php
/**
 * @package Remove Add 
 * @version 1.0
 */
/*
Plugin Name: Remove Add 
Plugin URI: https://github.com/caionorder/Remove-Add
Description: This plugin removes the add button again within the web page in the post.
Author: Caio Norder
Version: 1.0
Author URI: http://caionorder.com/
*/

// We need some CSS to position the paragraph
function remove_add_new() {

	echo "
	<style type='text/css'>
	.add-new-h2 {
		display:none !important;
	}
	</style>
	";
}

add_action( 'admin_head', 'remove_add_new' );

?>
