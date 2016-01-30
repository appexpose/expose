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

$access_token="3825098176-6qPDCNU2SKYZPD52uTzPgp2vVgByUkMWrnSqNik";
$access_token_secret="I9Q9FISBcNQDqTgKrAyYTHVWfRtkVTXXJPDROSl40utmH";

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);

$credentials = $connection->get('account/verify_credentials');

if((isset($_GET["oauth_token"]))&&($_GET["oauth_token"]!="")){
  $query = "UPDATE socialfy_users SET twitter_oauth_token='', twitter_login=1, twitter_name='".$credentials->name."', twitter_username='".$credentials->screen_name."', twitter_id='".$credentials->id."' WHERE twitter_oauth_token='".$_GET["oauth_token"]."'";
  error_log($query);
  db_query($query,$db);
}



//echo $credentials->name;
//echo $credentials->screen_name;
//echo $credentials->id;

?>
<script>
window.close();
</script>
