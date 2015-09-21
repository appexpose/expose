<?php

	/************************************************************
	* Vixia Team
	* Author: Pablo Gutierrez Alfaro <pablo@vixia.io>
	* Creation Modification: 19-09-2015
	* Last Modification: 19-09-2015
	* licensed through Copyright 2015
	*
	************************************************************/

	function create_random_text_avatar($type,$fname,$lname,$destination,$id=null){

		if(@issetandnotempty($id)){
			$color_h=($id%359)+1;
		}else{
			$color_h=rand(0,359);
		}

		$fname=strip_accents($fname);
		$lname=strip_accents($lname);

		$fname=strtoupper($fname);
		$lname=strtoupper($lname);

		$text=$fname[0].$lname[0];

		if($type=="user"){
			$color_rgb=hsv_to_rgb($color_h,60,50);
		}else{
			$color_rgb=hsv_to_rgb($color_h,30,80);
		}
		$im = imagecreatetruecolor(500, 500);
		$txt_color = imagecolorallocate($im, $color_rgb[0], $color_rgb[1], $color_rgb[2]);

		if($type=="user"){
			$color_rgb=hsv_to_rgb($color_h,60,100);
		}else{
			$color_rgb=hsv_to_rgb($color_h,8,100);
		}
		$bg_color = imagecolorallocate($im, $color_rgb[0], $color_rgb[1], $color_rgb[2]);
		imagefilledrectangle($im, 0, 0, 500, 500, $bg_color);
		$font = SERVER_PATH.'resources/fonts/Inconsolata-Regular.ttf';
		$font_size=230;

		imagettftext($im, $font_size, 0, 100, 350, $txt_color, $font, $fname[0]);
		imagettftext($im, $font_size, 0, 250, 350, $txt_color, $font, $lname[0]);

		imagejpeg($im,$destination);
		@imagedestroy($im);
	}

	function hsv_to_rgb($iH, $iS, $iV) {

    if($iH < 0)   $iH = 0;
    if($iH > 360) $iH = 360;
    if($iS < 0)   $iS = 0;
    if($iS > 100) $iS = 100;
    if($iV < 0)   $iV = 0;
    if($iV > 100) $iV = 100;
    $dS = $iS/100.0;
    $dV = $iV/100.0;
    $dC = $dV*$dS;
    $dH = $iH/60.0;
    $dT = $dH;
    while($dT >= 2.0) $dT -= 2.0;
    $dX = $dC*(1-abs($dT-1));
    switch($dH) {
      case($dH >= 0.0 && $dH < 1.0):
        $dR = $dC; $dG = $dX; $dB = 0.0; break;
      case($dH >= 1.0 && $dH < 2.0):
        $dR = $dX; $dG = $dC; $dB = 0.0; break;
      case($dH >= 2.0 && $dH < 3.0):
        $dR = 0.0; $dG = $dC; $dB = $dX; break;
      case($dH >= 3.0 && $dH < 4.0):
        $dR = 0.0; $dG = $dX; $dB = $dC; break;
      case($dH >= 4.0 && $dH < 5.0):
        $dR = $dX; $dG = 0.0; $dB = $dC; break;
      case($dH >= 5.0 && $dH < 6.0):
        $dR = $dC; $dG = 0.0; $dB = $dX; break;
      default:
        $dR = 0.0; $dG = 0.0; $dB = 0.0; break;
    }
    $dM  = $dV - $dC;
    $dR += $dM; $dG += $dM; $dB += $dM;
    $dR *= 255; $dG *= 255; $dB *= 255;
    return array(round($dR), round($dG), round($dB));
  }

	function strip_accents($string){

	    $string = preg_replace("[^´`¨~]","",$string);

	    $string = str_replace("ä","a",$string);
	    $string = str_replace("á","a",$string);
	    $string = str_replace("à","a",$string);
	    $string = str_replace("â","a",$string);
	    $string = str_replace("ã","a",$string);
	    $string = str_replace("ª","a",$string);

	    $string = str_replace("Á","A",$string);
	    $string = str_replace("À","A",$string);
	    $string = str_replace("Â","A",$string);
	    $string = str_replace("Ã","A",$string);
	    $string = str_replace("Ä","A",$string);

	    $string = str_replace("í","i",$string);
	    $string = str_replace("ì","i",$string);
	    $string = str_replace("î","i",$string);
	    $string = str_replace("ï","i",$string);

	    $string = str_replace("Í","I",$string);
	    $string = str_replace("Ì","I",$string);
	    $string = str_replace("Î","I",$string);
	    $string = str_replace("Ï","I",$string);

	    $string = str_replace("ó","o",$string);
	    $string = str_replace("ò","o",$string);
	    $string = str_replace("ô","o",$string);
	    $string = str_replace("õ","o",$string);
	    $string = str_replace("ö","o",$string);
	    $string = str_replace("º","o",$string);

	    $string = str_replace("Ó","O",$string);
	    $string = str_replace("Ò","O",$string);
	    $string = str_replace("Ô","O",$string);
	    $string = str_replace("Õ","O",$string);
	    $string = str_replace("Ö","O",$string);

	    $string = str_replace("ú","u",$string);
	    $string = str_replace("ù","u",$string);
	    $string = str_replace("û","u",$string);
	    $string = str_replace("ü","u",$string);

	    $string = str_replace("Ú","U",$string);
	    $string = str_replace("Ù","U",$string);
	    $string = str_replace("Û","U",$string);
	    $string = str_replace("Ü","U",$string);

	    $string = str_replace("ç","c",$string);
	    $string = str_replace("Ç","C",$string);
	    $string = str_replace("ñ","n",$string);
	    $string = str_replace("Ñ","N",$string);
	    $string = str_replace("Ý","Y",$string);
	    $string = str_replace("ý","y",$string);

	    return $string;
	}

	function update_user_last_update($actual_timestamp){
		global $action_data;

		if(@issetandnotempty($action_data["session_key"])){
			$table="users";
			$filter=array();
			$filter["session_key"]=array("operation"=>"=","value"=>$action_data["session_key"]);
			$data=array();
			$data["last_connection"]=(string)$actual_timestamp;
			updateInBD($table,$filter,$data);
		}
	}

	function explode_input_data(){
		global $page_path;
		global $_POST;
		global $_GET;

		if(@issetandnotempty($_POST["input_data"])){
			$tmp=explode("//",$_POST["input_data"]);
			foreach($tmp as $key=>$value){
				$tmp2=explode("||",$value);
				$_POST[$tmp2[0]]=$tmp2[1];
			}
		}
		if(@issetandnotempty($_GET["input_data"])){
			$tmp=explode("//",$_GET["input_data"]);
			foreach($tmp as $key=>$value){
				$tmp2=explode("||",$value);
				$_GET[$tmp2[0]]=$tmp2[1];
			}
		}
	}


	function sendMessageToiOs($deviceToken, $conversation_key, $messageText, $badge, $key_path) {
		global $page_path;

		debug_log("[sendMessageToiOs] START");
		debug_log("[sendMessageToiOs] ios_key: ".$deviceToken);

		//$apnsHost = 'gateway.sandbox.push.apple.com';
		$apnsHost = 'gateway.push.apple.com';

		$apnsPort = 2195;
		//$apnsCert = $_SERVER_PATH."resources/mobile-app/".$app_project_codename."ios_certificate.pem";
		$apnsCert = $key_path;

		if($deviceToken!="dont_allow")
		{
			if(file_exists($key_path)){
				debug_log("[sendMessageToiOs] File exists".$key_path);
				// Setup stream:
				$streamContext = stream_context_create();
				stream_context_set_option($streamContext, 'ssl', 'local_cert', $apnsCert);

				// Open connection:
				$apns = stream_socket_client(
						'ssl://' . $apnsHost . ':' . $apnsPort,
						$error,
						$errorString,
						2,
						STREAM_CLIENT_CONNECT,
						$streamContext
				);
				//[::image]📷
				//[::poll]📋
				//[::document]📎
				switch ($messageText) {
					case '[::image]':
								$messageText=📷;
						break;
					case '[::video]':
								$messageText=📹;
						break;
					case '[::poll]':
								$messageText=📋;
						break;
					case '[::document]':
						$messageText=📎;
					default;
				}
				if (strlen($messageText) > 125) {
						$messageText = substr($messageText, 0, 125) . '...';
				}
				$message=array('action'=>'new_message','actionData'=>$conversation_key,'body'=>$messageText);

				$payload['aps'] = array('alert' => $message,'sound'=>'default');
				$payload = json_encode($payload);

				// Send the message:

				$apnsMessage
						= chr(0) . chr(0) . chr(32) . pack('H*', str_replace(' ', '', $deviceToken)) . chr(0) . chr(strlen($payload))
						. $payload;

				fwrite($apns, $apnsMessage);

				// Close connection:
				@socket_close($apns);
				fclose($apns);
				debug_log("[sendMessageToiOs] END");
				return true;
			}else{
				debug_log("[sendMessageToiOs] File not exists");
				debug_log("[sendMessageToiOs] END");
				return false;
			}
		}
		else {
			debug_log("[sendMessageToiOs] Device not allowed");
			debug_log("[sendMessageToiOs] END");
			return false;
		}


	}

	function closeConversationPush($deviceToken, $conversation_key, $messageText, $badge, $key_path) {
		global $page_path;

		debug_log("[sendMessageToiOs] START");
		debug_log("[sendMessageToiOs] ios_key: ".$deviceToken);
		$apnsHost = 'gateway.sandbox.push.apple.com';
		//$apnsHost = 'gateway.push.apple.com';

		$apnsPort = 2195;
		//$apnsCert = $_SERVER_PATH."resources/mobile-app/".$app_project_codename."ios_certificate.pem";
		$apnsCert = $key_path;
		if(file_exists($key_path)){
			debug_log("[sendMessageToiOs] File exists".$key_path);
			// Setup stream:
			$streamContext = stream_context_create();
			stream_context_set_option($streamContext, 'ssl', 'local_cert', $apnsCert);

			// Open connection:
			$apns = stream_socket_client(
					'ssl://' . $apnsHost . ':' . $apnsPort,
					$error,
					$errorString,
					2,
					STREAM_CLIENT_CONNECT,
					$streamContext
			);

			if (strlen($messageText) > 125) {
					$messageText = substr($messageText, 0, 125) . '...';
			}
			$message=array('action'=>'new_message','action_data'=>$conversation_key,'body'=>$messageText);

			$payload['aps'] = array('alert' => $message);
			$payload = json_encode($payload);

			// Send the message:

			$apnsMessage
					= chr(0) . chr(0) . chr(32) . pack('H*', str_replace(' ', '', $deviceToken)) . chr(0) . chr(strlen($payload))
					. $payload;

			fwrite($apns, $apnsMessage);

			// Close connection:
			@socket_close($apns);
			fclose($apns);
			debug_log("[sendMessageToiOs] END");
			return true;
		}else{
			debug_log("[sendMessageToiOs] File not exists");
			debug_log("[sendMessageToiOs] END");
			return false;
		}

	}



	function sendMessageToAndroid($deviceToken, $collapseKey, $messageText, $messageTitle, $yourKey, $conversationKey , $action) {
		global $page_path;
		global $response;

		switch ($messageText) {
			case '[::image]':
						$messageText=📷;
				break;
			case '[::video]':
							$messageText=📹;
					break;
			case '[::poll_closed]':
						$messageText="📋 encuesta realizada";
				break;
			case '[::poll]':
							$messageText=📋;
					break;
			case '[::document]':
			$messageText=📎;
			default:

		}
		if($deviceToken!="dont_allow")
		{
			debug_log("[sendMessageToAndroid] START");
			debug_log("[sendMessageToAndroid] ".$messageTitle);
			$headers = array('Authorization:key=' . $yourKey);
			$data = array(
					'registration_id' => $deviceToken,
					'collapse_key' => $collapseKey,
					'data.title' => $messageTitle,
					'data.message' => $messageText,
					'data.conversationKey' => $conversationKey,
					'data.action' => $action
					);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://android.googleapis.com/gcm/send");
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$res = curl_exec($ch);
			$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			if (curl_errno($ch)) {
				$response["result"]=false;
				debug_log("Send Message Error");
		  		$response["error_code"]="send_message_error";
				return false;
		 		die();
			}
			if ($httpCode != 200) {
				$response["result"]=false;
				debug_log("Send Message Error http_code<>200 (".$httpCode.")");
		  		$response["error_code"]="send_message_error";
				return false;
		 		die();
			}
			curl_close($ch);
			debug_log("[sendMessageToAndroid] END");
			return $res;

		}
		else {
			debug_log("[sendMessageToAndroid] Device not allowed");
			debug_log("[sendMessageToAndroid] END");
			return false;
		}

	}

	// Image resize function with php + gd2 lib
	function imageResize($source, $destination, $width = 0, $height = 0, $crop = false, $quality = 100) {
		$quality = $quality ? $quality : 80;
		$image = imagecreatefromstring($source);
		if ($image) {
				// Get dimensions
				$w = imagesx($image);
				$h = imagesy($image);
				if (($width && $w > $width) || ($height && $h > $height)) {
						$ratio = $w / $h;
						if (($ratio >= 1 || $height == 0) && $width && !$crop) {
								$new_height = $width / $ratio;
								$new_width = $width;
						} elseif ($crop && $ratio <= ($width / $height)) {
								$new_height = $width / $ratio;
								$new_width = $width;
						} else {
								$new_width = $height * $ratio;
								$new_height = $height;
						}
				} else {
						$new_width = $w;
						$new_height = $h;
				}
				$x_mid = $new_width * .5;  //horizontal middle
				$y_mid = $new_height * .5; //vertical middle
				// Resample
				$new = imagecreatetruecolor(round($new_width), round($new_height));
				imagecopyresampled($new, $image, 0, 0, 0, 0, $new_width, $new_height, $w, $h);
				// Crop
				if ($crop) {
						$crop = imagecreatetruecolor($width ? $width : $new_width, $height ? $height : $new_height);
						imagecopyresampled($crop, $new, 0, 0, ($x_mid - ($width * .5)), 0, $width, $height, $width, $height);
						//($y_mid - ($height * .5))
				}
				// Output
				// Enable interlancing [for progressive JPEG]
				imageinterlace($crop ? $crop : $new, true);

				$dext = strtolower(pathinfo($destination, PATHINFO_EXTENSION));
				if ($dext == '') {
						$dext = $ext;
						$destination .= '.' . $ext;
				}
				switch ($dext) {
						case 'jpeg':
						case 'jpg':
								imagejpeg($crop ? $crop : $new, $destination, $quality);
								break;
						case 'png':
								$pngQuality = ($quality - 100) / 11.211111;
								$pngQuality = round(abs($pngQuality));
								imagepng($crop ? $crop : $new, $destination, $pngQuality);
								break;
						case 'gif':
								imagegif($crop ? $crop : $new, $destination);
								break;
				}
				@imagedestroy($image);
				@imagedestroy($new);
				@imagedestroy($crop);
		}
	}

	function corporate_email($mail_for,$mail_subject,$content){
		global $url_server;
		global $_CONFIG;
		global $lang_email;
		global $s;
		global $page_path;

		$mail_content ="
			<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
			<html  b:version='2' class='v2' expr:dir='data:blog.languageDirection' xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='".$lang_email."' xml:lang='".$lang_email."' xmlns:b='http://www.google.com/2005/gml/b' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr' xmlns:og='http://opengraphprotocol.org/schema/'>
			<head>
				<meta http-equiv='content-type' content='text/html; charset=utf-8' />
			</head>
			<body>
				<div>
				".$content."
				</div>
				<br/>
				<br/>
				<br/>
				<br/>
				<hr/>
				<div>
					<h2>".$_CONFIG["company_name"]."</h2>
					<p>
					".$_CONFIG["company_street"]."<br/>
					".$_CONFIG["company_town"]." ".$_CONFIG["company_country"]."<br/>
					".$_CONFIG["company_phone"]."<br/>
					".$_CONFIG["company_info_mail"]."<br/>
					<a href='".$_CONFIG["company_facebook"]."'>Facebook</a> | <a href='".$_CONFIG["company_twitter"]."'>Twitter</a>
					<p style='text-align:center'>".date('Y').htmlentities(" © ".$_CONFIG["company_name"], ENT_QUOTES, "UTF-8")."</p>
				</div>
			</body>
			</html>";
			$mail_header="MIME-Version: 1.0\r\nContent-type: text/html\r\nFrom: ".$_CONFIG["mail_header_email"];
			debug_log("Send corportate email (for:".$mail_for.",subject:".$mail_subject.") START");
			debug_log($mail_content);
			mail($mail_for,$mail_subject,$mail_content,$mail_header);
			debug_log("Send corportate email END");
			return true;
	}


	function checkClosed(){
		global $page_path;
		global $response;
		global $_CONFIG;

		if($_CONFIG["close"]){
			$response["result"]=false;
			debug_log("System Closed","ERROR");
			$response["error"]="ERROR System Closed";
			$response["error_code"]="system_closed";
			return false;
		}
		return true;
	}

	function checkAppVersion($system,$version){
		global $page_path;
		global $response;
		global $_CONFIG;

		$tmp=explode(",",$_CONFIG["available_app_versions_".$system]);
		debug_log($_CONFIG["available_app_versions_".$system]);
		if(!in_array($version,$tmp)){
			$response["result"]=false;
			debug_log("Version not valid {version:'".$system."',system:'".$version."'}","ERROR");
			$response["error_code"]="version_not_valid";
			return false;
		}
		return true;
	}

	function checkBDConnection(){
		global $page_path;
		global $response;
		global $db_connection;

		if(!$db_connection["status"]){
			debug_log("[ERROR] [".$page_path."] Can't connect with DB");
			$response["result"]=false;
			$response["error"]="[ERROR] Can't connect with DataBase";
			$response["error_code"]="db_connection_error";
			return false;
		}
		return true;
	}

	function checkControlerAction(){
		global $page_path;
		global $response;
		global $_GET;
		global $_POST;

		if(!(@issetandnotempty($_POST["action"])||@issetandnotempty($_GET["action"]))){
			error_log("[ERROR] [".$page_path."] Controler Action empty");
			$response["result"]=false;
			$response["error"]="[ERROR] Controler Action empty";
			$response["error_code"]="empty_controler_action";
			return false;
			die();
		}

		return true;
		die();
	}

	function checkInputData($data,$key=""){
		global $page_path;
		global $response;

		if(!@issetandnotempty($data)){
			$response["result"]=false;
			debug_log("Input Data Missing ".$key,"ERROR");
			$response["error_code"]="input_data_missing";
			return false;
			die();
		}
		return true;
	}

	function checkMessageKey($data){
		global $page_path;
		global $response;
		global $action_data;

		$table="users";
		$filter=array();
		$filter["session_key"]=array("operation"=>"=","value"=>$action_data["session_key"]);
		$user=getInBD($table,$filter);

		$table="messages";
		$filter=array();
		$filter["message_key"]=array("operation"=>"=","value"=>$data);
		if(!isInBD($table,$filter)){
			$response["data"]["last_udpate"]=$user["last_update"];
			$response["result"]=false;
			debug_log("Message Key Not valid {message_key=".$data."}","ERROR");
			$response["error_code"]="message_key_not_valid";
			return false;
			die();
		}
		return true;
	}

	function checkInputDataZeroValid($data,$key=""){
		global $page_path;
		global $response;

		if(!@isset($data)){
			$response["result"]=false;
			debug_log("Input Data Missing ".$key,"ERROR");
			$response["error_code"]="input_data_missing";
			return false;
			die();
		}
		return true;
	}

	function getActionData(){
		global $response;
		global $_GET;
		global $_POST;
		global $action;
		global $action_data;

		debug_log("getActionData");

		$response["result"]=true;
		$action_data=array();

		if(@issetandnotempty($_GET["action"])){
			$action=$_GET["action"];
			unset($_POST["action"]);
			$action_data=$_GET;
		}
		if(@issetandnotempty($_POST["action"])){
			$action=$_POST["action"];
			unset($_POST["action"]);
			$action_data=$_POST;
		}
		debug_log("[Action] ".$action);

		foreach ($action_data as $key=>$value){
			debug_log("[Action Data] ".$key.":".substr_dots($value,25));
		}
	}

	function checkAction(){
		global $page_path;
		global $response;
		global $_GET;
		global $_POST;

		debug_log("checkAction");
		if(!(@issetandnotempty($_POST["action"])||@issetandnotempty($_GET["action"]))){
			error_log("[ERROR] [".$page_path."] Controler Action empty");
			$response["result"]=false;
			$response["error_code"]="empty_controler_action";
			return false;
		}
		return true;
	}

	function notValidAction(){
		global $page_path;
		global $response;
		global $action;

		$response["result"]=false;
		error_log("[ERROR] [".$page_path."] Controler Action not valid (".$action.")");
		$response["error_code"]="action_not_valid";
	}

	function checkAdmin($admin){
		global $page_path;
		global $response;

		debug_log("Check Admin START");

		if(!@issetandnotempty($admin["email"])){
			$response["result"]=false;
			debug_log("Data Missing id_admin","ERROR");
			$response["error"]="ERROR Data Missing email identificator";
			$response["error_code"]="no_admin";
			return false;
		}

		if(!@issetandnotempty($admin["session_key"])){
			$response["result"]=false;
			debug_log("Data Missing id_admin","ERROR");
			$response["error"]="ERROR Data Missing key identificator";
			$response["error_code"]="no_admin";
			return false;
		}

	 	$table="admins";
	 	$filter=array();
		$filter["email"]=array("operation"=>"=","value"=>$admin["email"]);
		$filter["session_key"]=array("operation"=>"=","value"=>$admin["session_key"]);
	 	if(!isInBD($table,$filter)){
		 	$response["result"]=false;
			debug_log("Admin not exists (id_admin=".$admin["id_admin"].")","ERROR");
	 		$response["error"]="ERROR Admin not in the system";
	 		$response["error_code"]="admin_not_valid";
	 		return false;
	 	}

	 	$table="admins";
	 	$filter=array();
	 	$filter["email"]=array("operation"=>"=","value"=>$admin["email"]);
	 	$filter["active"]=array("operation"=>"=","value"=>1);
	 	if(!isInBD($table,$filter)){
		 	$response["result"]=false;
			debug_log("Admin inactive (id_admin=".$admin["id_admin"].")","ERROR");
	 		$response["error"]="ERROR User not in the system";
	  		$response["error_code"]="admin_inactive";
			return false;
	 	}

		debug_log("Check Admin END");

	 	return true;
	}

	function error_handler($error_code){
		global $error_alert;
		global $error_s;

		if((isset($error_code))&&(!empty($error_code))&&($error_code!="undefined")){
			$error_alert=$error_s[$error_code];
		}
	}

	function checkUserSessionKey($session_key){
		global $page_path;
		global $response;

		$table="users";
		$filter=array();
		$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
		$filter["active"]=array("operation"=>"=","value"=>1);
		if(!isInBD($table,$filter)){
			$table="users";
			$filter=array();
			$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
			if(isInBD($table,$filter)){
				$response["result"]=false;
				debug_log("[".$page_path."] ERROR User not active {session_key:'".$session_key."'}");
				$response["error_code"]="user_not_active";
				return false;
			}
			$response["result"]=false;
			debug_log("[".$page_path."] ERROR Session key not valid {session_key:'".$session_key."'}");
			$response["error_code"]="session_key_not_valid";
			return false;
		}
		return true;
	}

	function checkAdminUsersNeedToUpdate($session_key,$users_last_update){
		global $page_path;
		global $response;

		$table="admins";
		$filter=array();
		$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
		$admin=getInBD($table,$filter);
		if($users_last_update==0||$admin["users_last_update"]!=$users_last_update){
			$need_to_update=true;
		}else{
			$need_to_update=false;
		}
		return $need_to_update;
	}

	function checkUserBrandsAndFavoritesNeedToUpdate($session_key,$brands_last_update,$favorites_last_update){
		global $page_path;
		global $response;

		$table="users";
		$filter=array();
		$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
		$user=getInBD($table,$filter);

		if(($user["brands_last_update"]!=$brands_last_update)||($user["favorites_last_update"]!=$favorites_last_update)){
			$need_to_update=true;
		}else{
			$need_to_update=false;
			$response["result"]=false;
			$response["error_code"]="list_brands_updated";
		}

		return $need_to_update;
	}

	function checkUserBrandsNeedToUpdate($session_key,$brands_last_update){
		global $page_path;
		global $response;

		$table="users";
		$filter=array();
		$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
		$user=getInBD($table,$filter);
		if($brands_last_update==0||$user["brands_last_update"]!=$brands_last_update){
			$need_to_update=true;
		}else{
			$need_to_update=false;
		}
		return $need_to_update;
	}

	function checkUserSubbrandsNeedToUpdate($id_brand,$subbrands_last_update){
		global $page_path;
		global $response;

		$table="brands";
		$filter=array();
		$filter["id_brand"]=array("operation"=>"=","value"=>$id_brand);
		$brand=getInBD($table,$filter);
		if($brand["subbrands_last_update"]!=$subbrands_last_update){
			$need_to_update=true;
		}else{
			$need_to_update=false;
		}
		return $need_to_update;
	}

	function checkUserFavoritesNeedToUpdate($session_key,$favorites_last_update){
		global $page_path;
		global $response;

		$table="users";
		$filter=array();
		$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
		$user=getInBD($table,$filter);
		if($favorites_last_update==0||$user["favorites_last_update"]!=$favorites_last_update){
			$need_to_update=true;
		}else{
			$need_to_update=false;
		}
		return $need_to_update;
	}

	function checkNeedToUpdate($session_key,$field,$value){
		global $page_path;
		global $response;

		$table="users";
		$filter=array();
		$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
		$user=getInBD($table,$filter);
		if($user[$field]!=$value){
			$need_to_update=true;
		}else{
			$need_to_update=false;
		}
		return $need_to_update;
	}

	function checkAdminNeedToUpdate($session_key,$field,$value){
		global $page_path;
		global $response;

		$table="admins";
		$filter=array();
		$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
		$admin=getInBD($table,$filter);
		if($admin[$field]!=$value){
			$need_to_update=true;
		}else{
			$need_to_update=false;
		}
		return $need_to_update;
	}

	function checkBrandNeedToUpdate($username,$last_update){
		global $page_path;
		global $response;

		$table="brands";
		$filter=array();
		$filter["username"]=array("operation"=>"=","value"=>$username);
		$brand=getInBD($table,$filter);

		if($brand["last_update"]!=$last_update){
			$need_to_update=true;
		}else{
			$need_to_update=false;
		}
		return $need_to_update;
	}

	function checkUserSessionKeyAndLastUpdated($session_key,$last_update){
		global $page_path;
		global $response;

		$table="users";
		$filter=array();
		$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
		$filter["active"]=array("operation"=>"=","value"=>1);
		$filter["last_update"]=array("operation"=>"=","value"=>$last_update);
		if(!isInBD($table,$filter)){
			$table="users";
			$filter=array();
			$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
			if(!isInBD($table,$filter)){
				$response["result"]=false;
				debug_log("[".$page_path."] ERROR Session key not valid {session_key:'".$session_key."'}");
				$response["error_code"]="session_key_not_valid";
				return false;
			}
			$table="users";
			$filter=array();
			$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
			$filter["active"]=array("operation"=>"=","value"=>1);
			if(!isInBD($table,$filter)){
				$response["result"]=false;
				debug_log("[".$page_path."] ERROR User not active {session_key:'".$session_key."'}");
				$response["error_code"]="user_not_active";
				return false;
			}

			$response["result"]=false;
			debug_log("[".$page_path."] ERROR Last update not valid {session_key:'".$session_key."',last_update_not_valid:'".$last_update."',}");
			$response["error_code"]="last_update_not_valid";
			return false;
		}
		return true;
	}

	function checkAdminSessionKeyAndLastUpdated($session_key,$last_update){
		global $page_path;
		global $response;

		$table="admins";
		$filter=array();
		$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
		$filter["active"]=array("operation"=>"=","value"=>1);
		$filter["last_update"]=array("operation"=>"=","value"=>$last_update);
		if(!isInBD($table,$filter)){
			$table="admins";
			$filter=array();
			$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
			if(!isInBD($table,$filter)){
				$response["result"]=false;
				debug_log("[".$page_path."] ERROR Session key not valid {session_key:'".$session_key."'}");
				$response["error_code"]="session_key_not_valid";
				return false;
			}
			$table="admins";
			$filter=array();
			$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
			$filter["active"]=array("operation"=>"=","value"=>1);
			if(!isInBD($table,$filter)){
				$response["result"]=false;
				debug_log("[".$page_path."] ERROR User not active {session_key:'".$session_key."'}");
				$response["error_code"]="user_not_active";
				return false;
			}
			$response["result"]=false;
			debug_log("[".$page_path."] ERROR Last update not valid {session_key:'".$session_key."',last_update_not_valid:'".$last_update."',}");
			$response["error_code"]="last_update_not_valid";
			return false;
		}
		return true;
	}

	function checkAdminSessionKey($session_key){
		global $page_path;
		global $response;

		$table="admins";
		$filter=array();
		$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
		$filter["active"]=array("operation"=>"=","value"=>1);
		if(!isInBD($table,$filter)){
			$table="admins";
			$filter=array();
			$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
			if(isInBD($table,$filter)){
				$response["result"]=false;
				debug_log("[".$page_path."] ERROR Admin not active {session_key:'".$session_key."'}");
				$response["error_code"]="admin_not_active";
				return false;
			}
			$response["result"]=false;
			debug_log("[".$page_path."] ERROR Session key not valid {session_key:'".$session_key."'}");
			$response["error_code"]="session_key_not_valid";
			return false;
		}
		return true;
	}

	function checkBrandAdminSessionKey($session_key){
		global $page_path;
		global $response;

		$table="admins";
		$filter=array();
		$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
		$filter["active"]=array("operation"=>"=","value"=>1);
		if(!isInBD($table,$filter)){
			$table="admins";
			$filter=array();
			$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
			$filter["active"]=array("operation"=>"=","value"=>1);
			if(!isInBD($table,$filter)){
				$table="admins";
				$filter=array();
				$filter["session_key"]=array("operation"=>"=","value"=>$session_key);
				if(!isInBD($table,$filter)){
					$response["result"]=false;
					debug_log("[".$page_path."] ERROR Session key not valid {session_key:'".$session_key."'}");
					$response["error_code"]="session_key_not_valid";
					return false;
				}
				$response["result"]=false;
				debug_log("[".$page_path."] ERROR Admin not active {session_key:'".$session_key."'}");
				$response["error_code"]="admin_not_active";
				return false;
			}
			$response["result"]=false;
			debug_log("[".$page_path."] ERROR Brand permission denied {session_key:'".$session_key."'}");
			$response["error_code"]="brand_permission_denied";
			return false;
		}
		return true;
	}

	function checkUserConversationKey($coversation_key){
		global $page_path;
		global $response;
		global $user;

		$table="conversations";
		$filter=array();
		$filter["conversation_key"]=array("operation"=>"=","value"=>$coversation_key);
		$filter["active"]=array("operation"=>"=","value"=>1);
		$filter["id_user"]=array("operation"=>"=","value"=>$user["id_user"]);

		if(!isInBD($table,$filter)){
			$table="conversations";
			$filter=array();
			$filter["conversation_key"]=array("operation"=>"=","value"=>$coversation_key);
			$filter["id_user"]=array("operation"=>"=","value"=>$user["id_user"]);
			if(isInBD($table,$filter)){
				$table="conversations";
				$filter=array();
				$filter["conversation_key"]=array("operation"=>"=","value"=>$coversation_key);
				if(isInBD($table,$filter)){
					$response["data"]["last_update"]=$user["last_update"];
					$response["result"]=false;
					debug_log("[".$page_path."] ERROR Conversation Permission Denied {conversation_key:'".$coversation_key."'}");
					$response["error_code"]="conversation_permission_denied";
					return false;
				}
				$response["data"]["last_update"]=$user["last_update"];
				$response["result"]=false;
				debug_log("[".$page_path."] ERROR Conversation key not valid {conversation_key:'".$coversation_key."'}");
				$response["error_code"]="conversation_key_not_valid";
				return false;
			}
			$response["data"]["last_update"]=$user["last_update"];
			$response["result"]=false;
			debug_log("[".$page_path."] ERROR Conversation not active {conversation_key:'".$coversation_key."'}");
			$response["error_code"]="conversation_not_active";
			return false;
		}
		return true;

	}

	function checkAdminConversationKey($coversation_key){
		global $page_path;
		global $response;
		global $admin;


		$table="brands";
		$filter=array();
		$filter["id_brand"]=array("operation"=>"=","value"=>$admin["id_brand"]);
		$brand=getInBD($table,$filter);

		$table="conversations";
		$filter=array();
		$filter["conversation_key"]=array("operation"=>"=","value"=>$coversation_key);
		if($brand["type"]=="group_subbrands"){
			$table_2="brands";
			$filter_2=array();
			$filter_2["parent_id_brand"]=array("operation"=>"=","value"=>$admin["id_brand"]);
			$subbrands=listInBD($table_2,$filter_2);
			if(!@issetandnotempty($filter["complex"])){
				$filter["complex"]="(false";
			}else{
				$filter["complex"].="and (";
			}
			foreach ($subbrands as $key=>$subbrand){
				$filter["complex"].=" or id_brand=".$subbrand["id_brand"];
			}
			$filter["complex"].=" or id_brand=".$brand["id_brand"];
			$filter["complex"].=")";
		}else{
			$filter["id_brand"]=array("operation"=>"=","value"=>$admin["id_brand"]);
		}

		if(!isInBD($table,$filter)){
			$table="conversations";
			$filter=array();
			$filter["conversation_key"]=array("operation"=>"=","value"=>$coversation_key);
			if(!isInBD($table,$filter)){
				$response["result"]=false;
				debug_log("[".$page_path."] ERROR Conversation key not valid {conversation_key:'".$coversation_key."'}");
				$response["error_code"]="conversation_key_not_valid";
				return false;
			}
			$response["result"]=false;
			debug_log("[".$page_path."] ERROR Conversation permission denied {conversation_key:'".$coversation_key."'}");
			$response["error_code"]="conversation_permission_denied";
			return false;
		}
		return true;
	}

	function checkAdminActiveConversationKey($coversation_key){
		global $page_path;
		global $response;
		global $admin;

		$table="brands";
		$filter=array();
		$filter["id_brand"]=array("operation"=>"=","value"=>$admin["id_brand"]);
		$brand=getInBD($table,$filter);

		$table="conversations";
		$filter=array();
		$filter["conversation_key"]=array("operation"=>"=","value"=>$coversation_key);
		if($brand["type"]=="group_subbrands"){
			$table_2="brands";
			$filter_2=array();
			$filter_2["parent_id_brand"]=array("operation"=>"=","value"=>$admin["id_brand"]);
			$subbrands=listInBD($table_2,$filter_2);
			if(!@issetandnotempty($filter["complex"])){
				$filter["complex"]="(false";
			}else{
				$filter["complex"].="and (";
			}
			foreach ($subbrands as $key=>$subbrand){
				$filter["complex"].=" or id_brand=".$subbrand["id_brand"];
			}
			$filter["complex"].=" or id_brand=".$brand["id_brand"];
			$filter["complex"].=")";
		}else{
			$filter["id_brand"]=array("operation"=>"=","value"=>$admin["id_brand"]);
		}
		$filter["active"]=array("operation"=>"=","value"=>1);
		if(!isInBD($table,$filter)){
			$table="conversations";
			$filter=array();
			$filter["conversation_key"]=array("operation"=>"=","value"=>$coversation_key);
			$filter["active"]=array("operation"=>"=","value"=>1);
			if(!isInBD($table,$filter)){
				$table="conversations";
				$filter=array();
				$filter["conversation_key"]=array("operation"=>"=","value"=>$coversation_key);
				if(!isInBD($table,$filter)){
					$response["result"]=false;
					debug_log("[".$page_path."] ERROR Conversation key not valid {conversation_key:'".$coversation_key."'}");
					$response["error_code"]="conversation_key_not_valid";
					return false;
				}
				$response["result"]=false;
				debug_log("[".$page_path."] ERROR Conversation not active {conversation_key:'".$coversation_key."'}");
				$response["error_code"]="conversation_not_active";
				return false;
			}
			$response["result"]=false;
			debug_log("[".$page_path."] ERROR Conversation permission denied {conversation_key:'".$coversation_key."'}");
			$response["error_code"]="conversation_permission_denied";
			return false;
		}
		return true;
	}
?>
