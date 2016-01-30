<?php
	/************************************************************
	* Citious
	* Author: Pablo Gutierrez Alfaro <pablo@citious.com>
	* Last Modification: 10-02-2014
	* Version: 1.0
	* licensed through CC BY-NC 4.0
	************************************************************/

	$db_connection=array();
	$db_connection["status"]=true;

	/*
	* Funcion de conexión al servidor de base de datos.
	* Parametros:
	* Salidas:
	*		$db: identificador de conexión con la base de datos.
	*/

	function db_connect() {
	global $conf;
	global $db_connection;

			$db = mysqli_connect($conf['bdserver'],$conf['bduser'],$conf['bdpass']);
			if(!$db) {
				$db_connection["status"]=false;
				error_log("db_connect: Error in DB conection.");
			}
			db_choose($db);
			return $db;
	}

	/*
	* Funcion para seleccionar la base de datos.
	* Parametros:
	*		$db: identificador de conexión con la base de datos.
	* Salidas:
	*/
	function db_choose($db) {
		global $conf;
		global $db_connection;

			$db_selected = mysqli_select_db($db,$conf['bd']);
			if (!$db_selected) {
				$db_connection["status"]=false;
				error_log("db_choose: Error when choosing table.");
			}
	}

	/*
	* Funcion de ejecucion de comandos SQL (INSERT, UPDATE...). ¡¡¡NO SELECT!!!
	* Parametros:
	*		$query: cadena con la operacion a realizar sobre la base de datos.
	*		$db: identificador de conexión con la base de datos.
	* Salidas:
	*		$result: identificador de consulta o resultset.
	*/
	function db_exec($query,$db) {
		global $conf;
		global $db_connection;

			$result = mysqli_query($db,$query);
			if(!$result) {
				error_log("db_exec: The consult was not run. ".$query);
			}
			return $result;
	}

	/*
	* Funcion de consulta de base de datos (solo SELECT)
	* Parametros:
	*		$query: cadena con la consulta a realizar sobre la base de datos.
	*		$db: identificador de conexión con la base de datos.
	* Salidas:
	*		$result: identificador de consulta o resultset.
	*/
	function db_query($query,$db) {
		global $conf;
		global $db_connection;

			$result = mysqli_query($db,$query);
			if(!$result) {
				error_log("db_query: The consult was not run. ".$query);
			}
			return $result;
	}

	/*
	* Funcion que devuelve una fila del resulset pasado en forma de array asociativo
	* Parametros:
	*		$result: identificador de consulta o resultset.
	* Salidas:
	*		$array: array asociativo y por referencia con los datos de una fila de la consulta.
	*/
	function db_fetch($result, $type=MYSQL_ASSOC) {
		global $conf;
		global $db_connection;

			$array = mysqli_fetch_array($result,$type);
			return $array;
	}

	/*
	* Funcion que devuelve el numero de resultados del resulset
	* Parametros:
	*		$result: identificador de consulta o resultset.
	* Salidas:
	*		$num: numero de filas en el resultado de la consulta.
	*/
	function db_count($result) {
		global $conf;
		global $db_connection;

			$num = mysqli_num_rows($result);
			return $num;
	}

	/*
	* Funcion que devuelve el numero de resultados del resulset
	* Parametros:
	*		$result: identificador de consulta o resultset.
	*		$field: numero de campo de la consulta.
	* Salidas:
	*		$res: cadena con el contenido del campo especificado.
	*/
	function db_result($result,$field) {
		global $conf;
		global $db_connection;

			$res = mysqli_result($result,0,$field);
			return $res;
	}

	/*
	* Funcion que devuelve el ultimo id que se ha insertado
	* Parametros:
	* Salidas:
	*/
	function db_last_id() {
		global $conf;
		global $db;

			if($id = mysqli_insert_id($db)) {
				return $id;
			} else {
				error_log("db_last_id: Error when recovering last inserted id.");
			}
	}

	/*
	* Funcion que trata la informacion a utilizar en la base de datos para evitar vulnerabilidades
	* Parametros:
	*		$field: datos a tratar.
	*		$db: identificador de conexión con la base de datos.
	* Salidas:
	*/
	function db_secure_field($field,$db) {
		global $conf;
		global $db_connection;

			return mysqli_real_escape_string($db,addslashes($field));
	}

	/*
	* Funcion de desconexion de base de datos
	* Parametros:
	*		$db: identificador de conexión con la base de datos.
	* Salidas:
	*/
	function db_close($db) {
		global $conf;
		global $db_connection;

			if(!mysqli_close($db)) {
				error_log("db_close: Error when closing conection with BD.");
			}
	}

	$db = db_connect();


?>
