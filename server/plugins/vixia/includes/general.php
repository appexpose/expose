<?php

	/************************************************************
	* Vixia Team
	* Author: Pablo Gutierrez Alfaro <pablo@vixia.io>
	* Creation Modification: 19-09-2015
	* Last Modification: 19-09-2015
	* licensed through Copyright 2015
	*
	************************************************************/


	function debug_log($str ,$code="DEBUG",$show_path=true ){
		global $_CONFIG;
		global $page_path;
		global $action_data;



		if($_CONFIG["debug_mode"]=="debug"){
			$_PATH_str="";
			if($show_path){
				$_PATH_str="[".$page_path."]";
			}
			if(@issetandnotempty($action_data["session_key"])){
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
				if(issetandnotempty($action_data["session_key"])){
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
			if(issetandnotempty($_GET)){
				debug_log("GET DATA : ");
			}
			if(issetandnotempty($_POST)){
				debug_log("POST DATA : ");
			}
		}
	}

	function issetandnotempty($var){
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
