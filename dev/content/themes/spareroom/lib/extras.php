<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);

add_theme_support( 'woocommerce' );
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

/**
 * Custom functions
 */

function encode_email($e) {
	$output = '';
	for ($i = 0; $i < strlen($e); $i++){
		$output .= '&#'.ord($e[$i]).';';
	}
	return $output;
}

function custom_post_types(){

	$event_labels = array(
		'name'                => _x( 'Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Events', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Event', 'text_domain' ),
		'all_items'           => __( 'All Events', 'text_domain' ),
		'view_item'           => __( 'View Event', 'text_domain' ),
		'add_new_item'        => __( 'Add New Event', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Event', 'text_domain' ),
		'update_item'         => __( 'Update Event', 'text_domain' ),
		'search_items'        => __( 'Search Events', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$event_args = array(
		'label'               => __( 'events', 'text_domain' ),
		'description'         => __( 'Add and manage events', 'text_domain' ),
		'labels'              => $event_labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'trackbacks', ),
		'taxonomies'          => array( 'event_type' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 10,
		'menu_icon'           => 'icon-events.png',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type( 'events', $event_args );

}

function unregister_custom_post_types(){
    unregister_post_type( 'events' , array());
}

add_action( 'init', 'custom_post_types', 0 );
// add_action('init', 'unregister_custom_post_types');

function custom_taxonomies() {

	$event_type_labels = array(
		'name'                       => _x( 'Event Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Event Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Event Categories', 'text_domain' ),
		'all_items'                  => __( 'All Event Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Event Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Event Category:', 'text_domain' ),
		'new_item_name'              => __( 'New Event Category', 'text_domain' ),
		'add_new_item'               => __( 'Add New Event Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Event Category', 'text_domain' ),
		'update_item'                => __( 'Update Event Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$event_type_args = array(
		'labels'                     => $event_type_labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);

	register_taxonomy( 'event_type', array( 'events' ), $event_type_args );

}

function unregister_custom_taxonomies(){
	unregister_taxonomy( 'event_type', array( 'events' ) );
}

// Hook into the 'init' action
add_action( 'init', 'custom_taxonomies', 0 );
// add_action( 'init', 'unregister_custom_taxonomies', 0 );


/* Twitter Feed */

date_default_timezone_set('America/Los_Angeles');

function buildBaseString($baseURI, $method, $params) {
    $r = array();
    ksort($params);
    foreach($params as $key=>$value){
        $r[] = "$key=" . rawurlencode($value);
    }
    return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
}

function buildAuthorizationHeader($oauth) {
    $r = 'Authorization: OAuth ';
    $values = array();
    foreach($oauth as $key=>$value)
        $values[] = "$key=\"" . rawurlencode($value) . "\"";
    $r .= implode(', ', $values);
    return $r;
}

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

$oauth_access_token = "1023004982-48rqIPbyrubxFFpQEA9VmJWlPVzPPeI0tpnJdA";
$oauth_access_token_secret = "wDIF23tcBQkcRSo8rFIqPR5iClrMJc8eveSoCN7eg";
$consumer_key = "vLhUj8DRXfz4GmDp7V9Ug";
$consumer_secret = "r4EccXvpX5SgW4Lumuv8gTNPhrwhuqqYXh6n5NiJg";

$oauth = array(	'screen_name' => 'SpareRoomHwood',
	        	'oauth_consumer_key' => $consumer_key,
                'oauth_nonce' => time(),
                'oauth_signature_method' => 'HMAC-SHA1',
                'oauth_token' => $oauth_access_token,
                'oauth_timestamp' => time(),
                'oauth_version' => '1.0');

$base_info = buildBaseString($url, 'GET', $oauth);
$composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret);
$oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
$oauth['oauth_signature'] = $oauth_signature;

// Make Requests
$header = array(buildAuthorizationHeader($oauth), 'Expect:');
$options = array( CURLOPT_HTTPHEADER => $header,
                  //CURLOPT_POSTFIELDS => $postfields,
                  CURLOPT_HEADER => false,
                  CURLOPT_URL => $url . '?screen_name=SpareRoomHwood',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_SSL_VERIFYPEER => false);
$feed = curl_init();
curl_setopt_array($feed, $options);
$json = curl_exec($feed);
curl_close($feed);

function linker($link, $class) {
	$link = str_replace('http://www.', 'http://[w]', $link);
	$link = preg_replace('/(http:\/\/[^\s]+)/', "<a href=\"http://$1\">$1</a>", $link);
	$link = preg_replace('/(www\.[^\s]+)/', "<a href=\"http://$1\">$1</a>", $link);
	$link = preg_replace('/(^|\s)@(\w+)/', '\1<a class="$class" href="http://twitter.com/\2">@\2</a>', $link);
	$link = preg_replace('/(\()@(\w+)/', '\1<a class=$class" href="http://twitter.com/\2">@\2</a>', $link);
	$link = preg_replace('/(^|\s)#(\w+)/','\1<a class="$class" href="http://twitter.com/#!/search?q=%23\2">#\2</a>', $link);
	$link = str_replace('http://[w]', 'http://www.', $link);
	$link = str_replace('http://http://', 'http://', $link);
	return $link;
}

function get_time($twitter_time) {

	$time = strtotime($twitter_time);

	$date = time() - $time;
	$days = '';

	if ($date < 60) {
		$return = 'less than a minute ago.';
	} else if ($date < 120) {
		$return = 'about a minute ago.';
	} else if ($date < (45 * 60)) {
		$return = floor($date / 60) . ' minutes ago.';
	} else if ($date < (90 * 60)) {
		$return = 'about an hour ago.';
	} else if ($date < (24 * 60 * 60)) {
		$return = 'about ' . floor($date / 3600) . ' hours ago.';
	} else if ($date < (48 * 60 * 60)) {
		$return = '1 day ago.';
	} else {
		$return = floor($date / 86400) . ' days ago.';
		$days = floor($date / 86400);
	}

	if ($days>31) {
		$date = strtotime($twitter_time);
		$date = date( 'F d, Y', $date );
		$return = $date;
	}

	return $return;
}

$twitterFeed = json_decode($json,true);

function timeline($twitterFeed, $thumbnail=false) {
	$return = '';
	$twitter = $twitterFeed;
	$cache = true;
	$cache_time = '90 min';
	$feed_cache = dirname(__FILE__).'/../_cache/twitter_feed.php';

	$results = count($twitter);
	$c=0;
	$color[]='tweet_odd'; // styles for odd rows
	$color[]='tweet_even'; // styles for even rows

	if (file_exists($feed_cache) && strtotime('-'.$cache_time) < filemtime($feed_cache) && $cache == true) {
		$return = file_get_contents($feed_cache);
	} else {

		$return = $return . '';

		for ($i=0; $i<$results; $i++) {

			$return = $return . '<tr><td>';
			$tweet_id = $twitter[$i]['id_str'];
			$user = $twitter[$i]['user']['screen_name'];

			if ($thumbnail=='thumbnail') {
				$thumb = '<img src="'.$twitter[$i]['user']['profile_image_url'].'" alt="Profile Image" class="tweet_img" />';
			} else {
				$thumb = '';
			}

			$date = get_time($twitter[$i]['created_at']);
			$tweet = linker($twitter[$i]['text'], 'twitter_link');

			$return = $return . '<div id="tweet_'.$tweet_id.'" class="'.$color[$c]. '">';
			$return = $return . $thumb.$tweet.'<br />';
			$return = $return . '<span class="tweet_source">Posted <a href="http://twitter.com/#!/'.$user
			.'/status/'.$tweet_id.'">'.$date.'</a> from '.$twitter[$i]['source'].'</span>';
			$return = $return . '<div class="tweet_clear">&nbsp;</div>';
			$return = $return . '</div>';
			$return = $return . "\n";
			$return = $return . "\n";

			$c++; if ($c==2) {$c=0;}
			$return = $return . '</td></tr>';
		}

		$return = $return . '<tr><td class="twitter_date"><small>Last updated '.date("M d @ g:i a").' pst</small></tr></td>';

		$fh = fopen($feed_cache, 'w');
		fwrite($fh, $return);
		fclose($fh);
	}

	return $return;
}