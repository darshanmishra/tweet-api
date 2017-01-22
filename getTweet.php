<?php

require_once('twitter_proxy.php');


// Twitter OAuth Config options
// App specific code
// NOTE: Use your own key
define("CONSUMER_KEY", "xxxxxxxxxxxxxxxxxxxxx");
define("CONSUMER_SECRET", "xxxxxxxxxxxxxxxxxxxxxxxxxxxx");

// User specific Code
$access_token = "xxxxxxx-xxxxxxxxxxxxxxxxxxxxxxxxxx";
$access_token_secret = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";

// Sample Query
$query = urlencode($_GET["search"]);
$twitter_url = "search/tweets.json?q=".$query;

// Create a Twitter Proxy object from our twitter_proxy.php class
$twitter_proxy = new TwitterProxy(
    $access_token,            // 'Access token' on https://apps.twitter.com
    $access_token_secret,     // 'Access token secret' on https://apps.twitter.com
    CONSUMER_KEY,                  // 'API key' on https://apps.twitter.com
    CONSUMER_SECRET,               // 'API secret' on https://apps.twitter.com
    $query
);

// Invoke the get method to retrieve results via a cURL request
$tweets = $twitter_proxy->get($twitter_url);

echo $tweets;

?>
