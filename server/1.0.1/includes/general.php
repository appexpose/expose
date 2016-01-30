<?php

	/************************************************************
	* Citious
	* Author: Pablo Gutierrez Alfaro <pablo@citious.com>
	* Last Modification: 10-02-2014
	* Version: 1.0
	* licensed through CC BY-NC 4.0
	************************************************************/


	function send_push_notification($device_key,$system,$content){
		if($system=="android"){
			send_push_notification_android($deviceToken, $collapseKey, $messageText, $messageTitle, $yourKey, $conversationKey , $action);
		}else if($system=="ios"){

		}
	}

	function send_push_notification_android($deviceToken, $collapseKey, $messageText, $messageTitle, $yourKey, $conversationKey , $action) {
		global $page_path;
		global $response;

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
			$response["error_code"]="send_message_error";
			return false;
			die();
		}
		curl_close($ch);
		return $res;
	}


	function parse_action_data(){
		global $action_data;
		global $_GET;
		global $_POST;
		global $action;
		global $response;

		// Get Action Data
	  $response["result"]=true;
	  $action_data=array();

	  if(@isset_and_not_empty($_GET["action"])){
	    $action=$_GET["action"];
	    unset($_POST["action"]);
	    $action_data=$_GET;
	  }
	  if(@isset_and_not_empty($_POST["action"])){
	    $action=$_POST["action"];
	    unset($_POST["action"]);
	    $action_data=$_POST;
	  }
	}



	function check_action_data($data,$key="",$mode=""){
		global $page_path;
		global $response;

		if($mode=="zero_valid"){
			if(!@isset($data)){
				$response["result"]=false;
				debug_log("Action Data Missing ".$key,"ERROR");
				$response["error_code"]="action_data_missing ".$key;
				$response["error_data"]=$key;
				return false;
				die();
			}
		}else{
			if(!@isset_and_not_empty($data)){
				$response["result"]=false;
				debug_log("Action Data Missing ".$key,"ERROR");
				$response["error_code"]="action_data_missing ".$key;
				$response["error_data"]=$key;

				return false;
				die();
			}

		}
		return true;
	}


	function debug_log($str ,$code="DEBUG",$show_path=true ){
		global $_CONFIG;
		global $page_path;
		global $action_data;



		if($_CONFIG["debug_mode"]=="debug"){
			$_PATH_str="";
			if($show_path){
				$_PATH_str="[".$page_path."]";
			}
			if(@isset_and_not_empty($action_data["session_key"])){
				error_log("[".substr($action_data["session_key"],0,5)."]"."[".$code."]".$_PATH_str." ".$str);
			}else{
				error_log("[".$code."]".$_PATH_str." ".$str);

			}

		}else if($_CONFIG["debug_mode"]=="only_error"){
			if($code=="ERROR"){
				$_PATH_str="";
				if($show_path){
					$_PATH_str="[".$page_path."]";
				}
				if(@isset_and_not_empty($action_data["session_key"])){
					error_log("[".substr($action_data["session_key"],0,5)."]"."[".$code."]".$_PATH_str." ".$str);
				}else{
					error_log("[".$code."]".$_PATH_str." ".$str);
				}

			}
		}

	}

	function print_debug_log($array,$code=""){
		global $_CONFIG;
		global $page_path;

		foreach ($array as $key=>$value){
			debug_log("[".$key."]=".$value);
		}
	}

	function debug_log_input_data(){
		global $_CONFIG;
		global $page_path;

		if($_CONFIG["debug_mode"]==1){
			if(isset_and_not_empty($_GET)){
				debug_log("GET DATA : ");
			}
			if(isset_and_not_empty($_POST)){
				debug_log("POST DATA : ");
			}
		}
	}

	function isset_and_not_empty($var){
		if((isset($var))&&(!empty($var))&&($var!="undefined")){
			return true;
		}
		return false;
	}

	function substr_dots($str,$limit){
		if ($limit<4){
			return $str;
			die;
		}
		if(strlen($str)>$limit){
			$res=substr($str,0, $limit-3);
			$res.="...";
			return $res;
			die;
		}
		return $str;
	}

?>
