<?php

	/************************************************************
	* Citious
	* Author: Pablo Gutierrez Alfaro <pablo@citious.com>
	* Creation Modification: 28-01-2015
	* Last Modification: 28-01-2015
	* licensed through Copyright 2015
	************************************************************/

	/*********************************************************
	* AJAX RETURNS
	*
	* ERROR CODES
	* db_connection_error
	*
	*
	*********************************************************/

	/*********************************************************
	* COMMON AJAX CALL DECLARATIONS AND INCLUDES
	*********************************************************/

	/*********************************************************
	* DATA CHECK
	*********************************************************/

	/*********************************************************
	* AJAX OPERATIONS
	*********************************************************/

	$server_option='server';
	$server_option='server_development';
	$server_option='local';


	switch ($server_option){
		case "local":
			$conf = array(
				'bdtype' => 'mysql',
				'bdserver' => 'localhost',
				'bdport' => '',
				'bd' => 'vixia',
				'bduser' => 'root',
				'bdpass' => 'root',
				'bdprefix' => ''
			);
			$url_server = "http://localhost:8888/expose/";

			break;

		case "server_development":
		$conf = array(
			'bdtype' => 'mysql',
			'bdserver' => 'localhost',
			'bdport' => '',
			'bd' => 'vixia_develop',
			'bduser' => 'root',
			'bdpass' => '3xp0s3@MySql-1',
			'bdprefix' => ''
		);
			$url_server = "http://develop.expose.io/";
		break;

		case "server":
			$conf = array(
				'bdtype' => 'mysql',
				'bdserver' => 'localhost',
				'bdport' => '',
				'bd' => 'vixia',
				'bduser' => 'root',
				'bdpass' => '3xp0s3@MySql-1',
				'bdprefix' => ''
			);
			$url_server = "http://www.expose.io/";
			break;
	}


	/*********************************************************
	* DATABASE REGISTRATION
	*********************************************************/

	/*********************************************************
	* AJAX CALL RETURN
	*********************************************************/

?>
