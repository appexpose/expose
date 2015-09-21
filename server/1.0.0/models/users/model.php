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
  * ACTIONS
  *
  * login
  *
  *********************************************************/

  /*********************************************************
  * COMMON AJAX CALL DECLARATIONS, DATA CHECK AND INCLUDES
  *********************************************************/

  define('PATH', '../../');
  define('SERVER_PATH', '../../../');
  $timestamp=strtotime(date("Y-m-d H:i:s"));
  include(PATH."includes/init.php");
  $page_path="WS::1.2.5::Users";
  debug_log("START");
  $response=array();

  // Data Checks
  if(!checkClosed()){echo json_encode($response);die();}
  if(!checkBDConnection()){echo json_encode($response);die();}
  if(!checkAction()){echo json_encode($response);die();}
  // Get Action Data
  getActionData();


  /*********************************************************
  * AJAX OPERATIONS
  *********************************************************/

  $response["result"]=true;

  switch ($action){

    case "login":

      // Check Input Data
      if(!@checkInputData($action_data["device_key"],"device_key")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["system"],"system")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["version"],"version")){echo json_encode($response);die();}

      if(!@checkSystemVersion($action_data["system"],$action_data["version"])){echo json_encode($response);debug_log($response["error_code"]);debug_log("END");die();}

      if(!@checkDeviceKey($action_data["device_key"])){
        $table="users";
        $data=array();
        $data["device_key"]=sha1($timestamp.rand(0,10000)."expose_add_device_key");
        $data["created"]=$timestamp;
        addInBD($table,$data);
        $action_data["device_key"]=$data["device_key"];
      }

      $table="users";
      $filter=array();
      $filter["device_key"]=array("operation"=>"=","value"=>$action_data["device_key"]);
      $data=array();
      $data["device_key"]=$action_data["device_key"];
      $data["last_connection"]=$timestamp;
      $data["system"]=$action_data["system"];
      $data["version"]=$action_data["version"];
      updateInBD($table,$filter,$data);

      $response["data"]=array();
      $response["data"]["device_key"]=$action_data["device_key"];

      break;

    default:
      notValidAction();echo json_encode($response);die();

  }

  /*********************************************************
  * AJAX CALL RETURN
  *********************************************************/

  debug_log("END");
  echo json_encode($response);
  die();


?>
