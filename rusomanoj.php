<?php
	
session_start();
require_once("twitteroauth/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "rusomanoj88";
$notweets = 30;
$consumerkey = "b1W4DEHTe69ZN12FboT0GDZbU";
$consumersecret = "W0rdwGYZsqcheefN0V0sXxYQ3uF8TEjG5IA0P9x6yN81kTOxRR";
$accesstoken = "204195972-hsmbcn079GTeNffymnut0JySMESlepY7YzNDLH9Y";
$accesstokensecret = "j4NBqfFeJ6qt3r9MFML0CzXmXKydRWDfi2qinj9vZa3ib";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>
