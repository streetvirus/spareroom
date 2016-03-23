<?php

class twitter_plugin {

	function __construct() {

		// Set your cache settings here...
		$this->cache = false;
		$this->cache_time = '5 min';
		$this->feed_cache = '_cache/twitter_feed.php';
		$this->search_cache = '_cache/twitter_search.php';

	}


	function timeline($user, $limit=5, $thumbnail=false, $cache_override=false) {

		if ($cache_override!=false) {
			$this->feed_cache = $cache_override;
		}

		// Get cached file
		if (file_exists($this->feed_cache) && strtotime('-'.$this->cache_time) < filemtime($this->feed_cache)  && $this->cache == true) {
			$return = file_get_contents($this->feed_cache);
		// Get new results
		} else {
	
			$url='http://api.twitter.com/1/statuses/user_timeline.json?screen_name='.$user.'&count='.$limit*2;
			
			if (function_exists('curl_init')) {
				$curl = curl_init();
				curl_setopt($curl,CURLOPT_URL,$url);
				curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
				curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,10);
				$response = curl_exec($curl);
				curl_close($curl);
			} else {
				$response = file_get_contents($url);
			}
			
			$twitter = json_decode($response,true);
			$results = count($twitter);
		
			if ($results>$limit) {
				$max=$limit;
			} else {
				$max=$results;
			}
		
			$color[]='tweet_odd'; // styles for odd rows
			$color[]='tweet_even'; // styles for even rows
		
			$c=0;
	
			$return = '';

			$return = $return . '<div class="twitter_holder">';
	
			for ($i=0; $i<$max; $i++) {
		
				$tweet_id = $twitter[$i]['id_str'];
				$user = $twitter[$i]['user']['screen_name'];
	
				if ($thumbnail=='thumbnail') {
					$thumb = '<img src="'.$twitter[$i]['user']['profile_image_url'].'" alt="Profil Image" class="tweet_img" />';
				} else {
					$thumb='';
				}
	
				$date = $this->get_time($twitter[$i]['created_at']);
				$tweet = $this->linker($twitter[$i]['text'], 'twitter_link');
	
				$return = $return . '<div id="tweet_'.$tweet_id.'" class="'.$color[$c].'">';
				$return = $return . $thumb.$tweet.'<br />';
				$return = $return . '<span class="tweet_source">Posted <a href="http://twitter.com/#!/'.$user
				.'/status/'.$tweet_id.'">'.$date.'</a> from '.$twitter[$i]['source'].'</span>';
				$return = $return . '<div class="tweet_clear">&nbsp;</div>';
				$return = $return . '</div>';
				$return = $return . "\n";
				$return = $return . "\n";
							
				$c++; if ($c==2) {$c=0;}
			}

			$return = $return . '<div class="twitter_date">Last updated '.date("M d @ g:i a").' pst</div>';
			$return = $return . '</div>';

			$fh = fopen($this->feed_cache, 'w');
			fwrite($fh, $return);
			fclose($fh);

		}

		return $return;
	
	} // end display()


	function search ($term, $limit=5, $thumbnail='no_thumbnail', $cache_override=false, $lang='en') {

		if ($cache_override!=false) {
			$this->search_cache = $cache_override;
		}

		// Get cached file
		if (file_exists($this->search_cache) && strtotime('-'.$this->cache_time) < filemtime($this->search_cache)  && $this->cache == true) {
			$return = file_get_contents($this->search_cache);
		// Get new results
		} else {

			$return = '';
	
			if (substr($term, 0, 1)=='@') {
				$term = str_replace('@', '%40', $term);
			}
			if (substr($term, 0, 1)=='#') {
				$term = str_replace('#', '%23', $term);
			}

		
			$url="http://search.twitter.com/search.json?q=".str_replace(' ', '+', $term)."&lang=$lang&rpp=$limit";
		
			if (function_exists('curl_init')) {
				$curl = curl_init();
				curl_setopt($curl,CURLOPT_URL,$url);
				curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
				curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,10);
				$response = curl_exec($curl);
				curl_close($curl);
			} else {
				$response = file_get_contents($url);
			}
			
			$twitter = json_decode($response,true);
			$results = count($twitter['results']);
		
			$i=0; $c=0;
			$n = "\n";
		
			$color[]='tweet_odd'; // styles for odd rows
			$color[]='tweet_even'; // styles for even rows
		
	
			$return = $return . '<div class="twitter_holder">';
		
			foreach($twitter['results'] as $result) {
		
				$date = $this->get_time($result['created_at']);
				$tweet = $this->linker($result['text'], 'twitter_link');
		
				$source = str_replace('&lt;', '<', $result['source']);
				$source = str_replace('&gt;', '>', $source);
				$source = str_replace('&quote;', '"', $source);
		
				$user = $result['from_user'];
				$id = $result['id_str'];
		
				$reply="<a href=\"http://twitter.com/?status=@$user%20&in_reply_to_status_id=$id&in_reply_to=$user\">Reply</a>";
				$view="<a href=\"http://twitter.com/$user/statuses/$id\">View Tweet</a>";

				if ($thumbnail=='thumbnail') {
					$thumb = '<img src="'.$result['profile_image_url'].'" alt="'.$result['from_user'].'" class="tweet_img" />';
				} else {
					$thumb='';
				}
		
				$return = $return . '<div id="result_'.$i.'" class="'.$color[$c].'" >'.$n;
				$return = $return . $thumb;
				$return = $return . '<a href="http://twitter.com/'.$user.'">'.$result['from_user'].'</a>: '.$tweet.'<br />'.$n;
				$return = $return . '<div class="tweet_source">'.$date.' via '.$source.'&nbsp;&nbsp;'.$reply.'&nbsp;&nbsp;'.$view.'</div>';
				$return = $return . '<div class="tweet_clear">&nbsp;</div>';
				$return = $return . '</div>'.$n.$n;
				$c++; $i++; if ($c==2) {$c=0;}
		
			}
		
			$return = $return . '<div class="twitter_date">
			<a href="http://search.twitter.com/search?q='.$term.'">View more results</a> &nbsp;&nbsp;
			Last updated '.date("M /d @ g:i a").' pst</div>';
			$return = $return . '</div>';

			$fh = fopen($this->search_cache, 'w');
			fwrite($fh, $return);
			fclose($fh);

		}
		
		return $return;
		
	} // end search()


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
	} // end linker
	
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
	
	
	} // end get_time

}

$this->twitter = new twitter_plugin;