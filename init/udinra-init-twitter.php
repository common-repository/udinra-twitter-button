<?php


function udinra_twitter_function( $udinra_twitter_atts ) {

    $udinra_twitter_parameters = shortcode_atts( array(
									'button' => 'follow',
									'size' => 'default',
									'count' => 'default',
									'header' => '',
									'text' => '',
									'body' => '',									
									'tweet' => '',
									'user' => 'Udinra',
									'style' => 'UdinraTwitterAqua',
									'hash' => ''
									), $udinra_twitter_atts );

		$create_twitter_html = '<div class="' . $udinra_twitter_parameters["style"] . '">';
		if($udinra_twitter_parameters["header"] != '' || !ctype_space($udinra_twitter_parameters["header"])) {
			$create_twitter_html .= '<h3>' . $udinra_twitter_parameters["header"] . '</h3><hr />';
		}	
		if($udinra_twitter_parameters["body"] != '' || !ctype_space($udinra_twitter_parameters["body"])) {
			$create_twitter_html .= '<p>' . $udinra_twitter_parameters["body"] . '</p>';
		}										
		if($udinra_twitter_parameters["button"] == 'tweet') {
			if($udinra_twitter_parameters["count"] == 'false'){
				$create_twitter_button = $create_twitter_html . '<a href="https://twitter.com/share" class="twitter-share-button" '.
																'data-show-count="'.$udinra_twitter_parameters["count"];
			}
			else {
				$create_twitter_button = $create_twitter_html . '<a href="https://twitter.com/share" class="twitter-share-button" '.
																'data-count="'.$udinra_twitter_parameters["count"];
			}
			if($udinra_twitter_parameters["tweet"] != '' || !ctype_space($udinra_twitter_parameters["tweet"])){
				$create_twitter_button = $create_twitter_button . '" data-url="'.$udinra_twitter_parameters["tweet"];
			}
			if($udinra_twitter_parameters["hash"] != '' || !ctype_space($udinra_twitter_parameters["hash"])){
				$create_twitter_button = $create_twitter_button . '" data-hashtags="'.$udinra_twitter_parameters["hash"];
			}
			if($udinra_twitter_parameters["text"] != '' || !ctype_space($udinra_twitter_parameters["text"])){
				$create_twitter_button = $create_twitter_button . '" data-text="'.$udinra_twitter_parameters["text"];
			}

			$create_twitter_button = $create_twitter_button . '" data-size="'.$udinra_twitter_parameters["size"].
									 '" data-via="'.$udinra_twitter_parameters["user"] . '" >Tweet</a>';
		}
		if($udinra_twitter_parameters["button"] == 'follow') {
			if($udinra_twitter_parameters["count"] == 'false'){
				$create_twitter_button = $create_twitter_html . '<a class="twitter-follow-button" href="https://twitter.com/'.
										 $udinra_twitter_parameters["user"].'" data-show-count="'.$udinra_twitter_parameters["count"];
			}
			else {
				$create_twitter_button = $create_twitter_html . '<a class="twitter-follow-button" href="https://twitter.com/'.
										 $udinra_twitter_parameters["user"].'" data-count="'.$udinra_twitter_parameters["count"];
			}

			$create_twitter_button = $create_twitter_button .'" data-size="'.$udinra_twitter_parameters["size"]. '" >Follow @'.
									 $udinra_twitter_parameters["user"].'</a>';
		}
		$create_twitter_button = $create_twitter_button . '</div>';
		$return_shortcode_value = $create_twitter_button;

		udinra_twitter_script();
		udinra_twitter_css();
		return $return_shortcode_value;
}

function udinra_twitter_script() {
	wp_enqueue_script( 'udinra-twitter-func', plugins_url( 'js/func.js',dirname( __FILE__ )),NULL,NULL, false );
}

function udinra_twitter_css() {
	wp_enqueue_style( 'udinra-twitter-css', plugins_url( 'css/color.css',dirname( __FILE__ )) );
}
	
add_shortcode( 'udinra_twitter', 'udinra_twitter_function' );

?>