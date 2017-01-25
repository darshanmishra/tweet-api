<?php

require_once('twitter_proxy.php');


// Twitter OAuth Config options
// App specific code
define("CONSUMER_KEY", "whyrtYSJPfobjj6Z8nFASIigD");
define("CONSUMER_SECRET", "29UBioUBjj8QEZSgC9NfBDQrIS6l6Zbwnok41QdVQtNgMYd3XA");

// User specific Code
$access_token = "410702004-QEk50z5xNFnyufADyCP6f92eLPqx0b2vzO14arJ0";
$access_token_secret = "pPdcdXD4xy5eIuAjwAqbEaWm33kkMVZDpk13WvWA4p3XA";


// Sample Query
$query = urlencode($_GET[cid]);
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

// Sending response to ajax success function
	//echo $tweets;
//echo $tweets;
$a=explode('{"statuses":[{"created_at"',$tweets);
$f[]=$a[1];
foreach ($f as $string2) {

$b=explode('"text"',$string2);
foreach ($b as $string1) {

$c=explode('"truncated"',$string1);
$d[]=$c[0];

}
}


//print_r($d);
$strings=$d;
require_once 'autoload.php';
$sentiment = new \PHPInsight\Sentiment();   

foreach ($d as $key => $string) {

	// calculations:
	$scores = $sentiment->score($string);
	$class = $sentiment->categorise($string);

	// output:
	echo "String: $string\n<br>";
	echo "Dominant: $class, scores: <br>";
	print_r($scores);
	echo "\n";
}


?>
