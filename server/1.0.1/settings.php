<?php

	/************************************************************
	* Converfit
	* Author: Pablo Gutierrez Alfaro <pablo@converfit.com>
	* Creation Modification: 29-09-2015
	* Last Modification: 29-09-2015
	* licensed through Copyright 2015
	************************************************************/

	$server_option='server';
	//$server_option='test_flight';
	//$server_option='server_development';
	//$server_option='local';

	$_CONFIG=array();
	$_CONFIG["debug_mode"]="none";
	$_CONFIG["close"]="0";

	$dev_certificate="";
	/*if($server_option=="server_development"){
		$dev_certificate="-dev";
	}*/
	$_CONFIG["ios_certificate_path"]=SERVER_PATH."resources/certificates/apns".$dev_certificate."-converfit.pem";
	$_CONFIG["android_project_number"]="332855980435";
	$_CONFIG["android_server_key"]="AIzaSyB2t4LQnFtmLAYRJmMwdBFAjCJvRt3jlkU";

	$conf = array(
		'bdtype' => 'mysql',
		'bdserver' => 'localhost',
		'bdport' => '',
		'bd' => 'expose',
		'bduser' => 'root',
		'bdpass' => 'C1t10us@MySql-1',
		'bdprefix' => ''
	);

	$conf = array(
		'bdtype' => 'mysql',
		'bdserver' => 'localhost',
		'bdport' => '',
		'bd' => 'expose',
		'bduser' => 'root',
		'bdpass' => 'root',
		'bdprefix' => ''
	);


	$url_server = "http://www.converfit.com/socialit/";

?>
