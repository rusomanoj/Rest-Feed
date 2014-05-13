<?php
	
session_start();

//to connect OAuth path 
require_once("twitteroauth/twitteroauth/twitteroauth.php"); 
 
$username = "rusomanoj88";
$tweetno = 30;
$cons_key = "b1W4DEHTe69ZN12FboT0GDZbU";
$cons_secret = "W0rdwGYZsqcheefN0V0sXxYQ3uF8TEjG5IA0P9x6yN81kTOxRR";
$oauth_token = "204195972-hsmbcn079GTeNffymnut0JySMESlepY7YzNDLH9Y";
$oauth_token_secret = "j4NBqfFeJ6qt3r9MFML0CzXmXKydRWDfi2qinj9vZa3ib";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}

//Connection with all the above credentials
$connection = getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$username."&count=".$tweetno);
 
echo json_encode($tweets);
?>
