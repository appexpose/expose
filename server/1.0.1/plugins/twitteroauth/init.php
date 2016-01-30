<?php

define('PATH', '../../');
define('SERVER_PATH', '../../../');
$datenow=date("Y-m-d H:i:s");
$timestamp=strtotime($datenow);
include(PATH."settings.php");
include(PATH."includes/bd.php");
include(PATH."includes/general.php");
$page_path="Socialit::1.0.0";


require "./autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', 'zn8hM1HzPvNwU9vyz0kBC9Tky');
define('CONSUMER_SECRET', 'U4KR9XtiTldYOthrzSUZxpPmkV6rjOayHUfr4ERlyjHvvqFMKJ');
define('OAUTH_CALLBACK', 'http://www.converfit.com/script2/server/socialfy/1.0.0/plugins/twitteroauth/response.php');

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);

$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));

$url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));

error_log("user_key = ".$_GET["user_key"]);
if((isset($_GET["user_key"]))&&($_GET["user_key"]!="")){

  $query = "UPDATE socialfy_users SET twitter_login=0, twitter_oauth_token='".$request_token["oauth_token"]."' WHERE user_key='".$_GET["user_key"]."'";
  db_query($query,$db);
}

header('Location: '.$url);

?>
