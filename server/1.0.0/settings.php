<?php

	/************************************************************
	* Expose Team
	* Author: Pablo Gutierrez Alfaro <pablo@appexpose.com>
	* Creation Modification: 19-09-2015
	* Last Modification: 19-09-2015
	* licensed through Copyright 2015
	*
	************************************************************/

	/*********************************************************
	* AJAX OPERATIONS
	*********************************************************/

	$server_option='server';
	//$server_option='server_development';
	//$server_option='local';

	$_CONFIG=array();
	$_CONFIG["close"]=0;
	$_CONFIG["debug_mode"]="debug";
	$_CONFIG["terms_of_service"]="";
	$_CONFIG["terms_of_service_version"]=1;
	$_CONFIG["privacy_policy"]="";
	$_CONFIG["privacy_policy_version"]=1;
	$_CONFIG["use_of_cookies"]="";
	$_CONFIG["use_of_cookies_version"]=1;
	$_CONFIG["android_project_number"]="";
	$_CONFIG["android_server_key"]="";
	$_CONFIG["android_server_key"]="";
	$_CONFIG["available_app_versions_ios"]="1.0";
	$_CONFIG["available_app_versions_android"]="1.0";
	$_CONFIG["available_app_versions_web"]="1.0";

	switch ($server_option){
		case "local":
			$conf = array(
				'bdtype' => 'mysql',
				'bdserver' => 'localhost',
				'bdport' => '',
				'bd' => 'expose',
				'bduser' => 'root',
				'bdpass' => 'root',
				'bdprefix' => ''
			);
			$url_server = "http://localhost:8888/expose";

			break;

		case "server_development":
		$conf = array(
			'bdtype' => 'mysql',
			'bdserver' => 'localhost',
			'bdport' => '',
			'bd' => 'expose_develop',
			'bduser' => 'root',
			'bdpass' => 'C1t10us@MySql-1',
			'bdprefix' => ''
		);
			$url_server = "http://develop.appexpose.com/";
		break;

		case "server":
			$conf = array(
				'bdtype' => 'mysql',
				'bdserver' => 'localhost',
				'bdport' => '',
				'bd' => 'expose',
				'bduser' => 'root',
				'bdpass' => 'C1t10us@MySql-1',
				'bdprefix' => ''
			);
			$url_server = "http://www.appexpose.com/";
			break;
	}

?>
