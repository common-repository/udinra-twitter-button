<?php
function udinra_twitter_button() {
	$udinra_twitter_cap = apply_filters( 'udinra_twitter_button_cap', 'edit_posts' );
	if ( current_user_can( $udinra_twitter_cap ) ) {
		add_filter( 'mce_external_plugins', 'udinra_twitter_subscribe_plugin' );
		add_filter( 'mce_buttons', 'udinra_twitter_register_button' );
	}
}
function udinra_twitter_subscribe_plugin( $plugin_array ) {
	$plugin_array['udinra_twitter_subscribe'] = plugins_url( 'udinra-twitter-button/js/udinra_twitter_button.js');
	return $plugin_array;
}
function udinra_twitter_register_button( $buttons ) {
	array_push( $buttons, "udinra_twitter_subscribe" );
	return $buttons;
}
?>