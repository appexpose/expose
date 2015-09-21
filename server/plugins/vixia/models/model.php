<?php

  /************************************************************
  * Vixia Team
  * Author: Pablo Gutierrez Alfaro <pablo@vixia.io>
  * Creation Modification: 19-09-2015
  * Last Modification: 19-09-2015
  * licensed through Copyright 2015
  *
  ************************************************************/


  /*********************************************************
  * ACTIONS
  *
  *
  *********************************************************/

  /*********************************************************
  * COMMON AJAX CALL DECLARATIONS, DATA CHECK AND INCLUDES
  *********************************************************/

  define('PATH', '../');
  define('SERVER_PATH', '../../');
  $timestamp=strtotime(date("Y-m-d H:i:s"));
  include(PATH."includes/init.php");
  $page_path="VixiaWS::1.0::Model";
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

  switch ($action){

    case "check_session":
      // Check Input Data
      if(!@checkInputData($action_data["device_key"],"device_key")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["vixia_id"],"vixia_id")){echo json_encode($response);die();}

      $table="sessions";
      $filter=array();
      $filter["device_key"]=array("operation"=>"=","value"=>$action_data["device_key"]);

      if(!isInBD($table,$filter)){
        $ip="anonymous";

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
          $ip=$_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
          $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
          $ip=$_SERVER['REMOTE_ADDR'];
        }

        $table="device_keys";
        $data=array();
        $data["vixia_key"]=$action_data["vixia_key"];
        $data["created"]=$timestamp;
        $data["ip"]=$ip;
        $data["title"]=$action_data["title"];
        $data["referrer"]=$action_data["referrer"];
        $data["appName"]=$action_data["appName"];
        $data["userAgent"]=$action_data["userAgent"];
        $data["cookieEnabled"]=$action_data["cookieEnabled"];
        $data["language"]=$action_data["language"];
        $data["platform"]=$action_data["platform"];
        $data["colorDepth"]=$action_data["colorDepth"];
        $data["height"]=$action_data["height"];
        $data["width"]=$action_data["width"];
        $data["innerHeight"]=$action_data["innerHeight"];
        $data["innerWidth"]=$action_data["innerWidth"];
        $data["country"]=$action_data["country"];
        $data["countryCode"]=$action_data["countryCode"];
        $data["region"]=$action_data["region"];
        $data["regionName"]=$action_data["regionName"];
        $data["city"]=$action_data["city"];
        $data["zip"]=$action_data["zip"];
        $data["lat"]=$action_data["lat"];
        $data["lon"]=$action_data["lon"];
        $data["isp"]=$action_data["isp"];
        $device_key=$data;
        $device_key["id_device_key"]=addInBD($table,$data);

        $table="device_keys";
        $filter=array();
        $filter["id_session"]=array("operation"=>"=","value"=>$device_key["id_device_key"]);
        $data=array();
        $data["device_key"]=sha1($device_key["ip"]."vixia_device_key".$timestamp.$device_key["id_device_key"]);
        updateInBD($table,$filter,$data);
        $device_key["device_key"]=$data["device_key"];

      }else{
        $device_key=getInBD($table,$filter);
      }

      $table="device_key_activities";
      $data=array();
      $data["session_key"]=$device_key["session_key"];
      $data["action"]="visit_page";
      $data["data"]=$action_data["title"]."::".$action_data["URL"]."::".$action_data["referrer"];
      $data["created"]=$timestamp;
      addInBD($table,$data);

      $response["data"]=array();
      $response["data"]["device_key"]=$device_key;

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
