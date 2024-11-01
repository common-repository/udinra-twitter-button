<?php
/*
Plugin Name: Udinra Twitter Button
Plugin URI: https://udinra.com/downloads/twitter-button-to-download-pro
Description: Stylish Twitter button to increase your Twitter Follower and make your content viral on Twitter
Author: Udinra
Version: 1.0
Author URI: https://udinra.com
*/

function Udinra_Twitter() {
	$udinra_twitter_subscribe = '';

?>	
	<div class="wrap">
	<u><h1>Udinra Twitter Button(Configuration)</h1></u><br /><br />
	<ul>
		<li>A new button is added in Visual Editor.</li>
		<li>You can create unlimited buttons using Visual Editor button.</li>
		<li>Also you can paste generated shortcode in Text Widget to have the buttons in sidebar.</li>
		<li>In case of any issues mail me at esha@udinra.com.</li>
	</ul>
	<a href="https://udinra.com/downloads/twitter-tweet-follow-download-file"><u><b>Buy Twitter buttons to download Pro</b></u></a><br /><br />
	Visitors will be able to download file instantly if they follow you on Twitter or Tweet your content.<br />
	You can configure each and every button as per your requirement.<br />

	<iframe width="560" height="315" src="https://www.youtube.com/embed/Pd5AJ84U0Js" frameborder="0" allowfullscreen></iframe>

</div>

<?php
}

function udinra_twitter_subscribe_admin() {
	if (function_exists('add_options_page')) {
		add_options_page('Udinra Twitter Button', 'Udinra Twitter Button', 'manage_options', basename(__FILE__), 'Udinra_Twitter');
	}
	udinra_twitter_button();
}

function udinra_twitter_admin_notice() {
		global $current_user ;
		$user_id = $current_user->ID;
		if ( ! get_user_meta($user_id, 'udinra_twitter_admin_notice') ) {
			echo '<div class="notice notice-info"><p>'; 
			printf(__('Udinra Twitter Follow Tweet to download Pro for $6.99 only.PayPal - udinra@gmail.com | <a href="%1$s">Hide Notice</a>'), '?udinra_twitter_admin_ignore=0');
			echo "</p></div>";
		}
}

function udinra_twitter_admin_ignore() {
	global $current_user;
	$user_id = $current_user->ID;
	if ( isset($_GET['udinra_twitter_admin_ignore']) && '0' == $_GET['udinra_twitter_admin_ignore'] ) {
		add_user_meta($user_id, 'udinra_twitter_admin_notice', 'true', true);
	}
}
 
include 'init/udinra-init-twitter.php';
include 'lib/udinra-twitter-visual-editor.php';

add_action('admin_menu','udinra_twitter_subscribe_admin');	
add_action('admin_notices', 'udinra_twitter_admin_notice');
add_action('admin_init', 'udinra_twitter_admin_ignore');

?>
