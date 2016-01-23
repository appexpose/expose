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

    case "update_contacts":

      // Check Input Data
      if(!@checkInputData($action_data["device_key"],"device_key")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["contacts"],"contacts")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["system"],"system")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["version"],"version")){echo json_encode($response);die();}

      if(!@checkSystemVersion($action_data["system"],$action_data["version"])){echo json_encode($response);debug_log($response["error_code"]);debug_log("END");die();}

      $numbers=explode(",",$action_data["contacts"]);

      foreach ($numbers as $key => $number){
        $table="contacts";
        $filter=array();
        $filter["device_key"]=array("operation"=>"=","value"=>$action_data["device_key"]);
        $filter["number"]=array("operation"=>"=","value"=>$number);
        if(isInBD($table,$filter)){
          $table="contacts";
          $filter=array();
          $filter["device_key"]=array("operation"=>"=","value"=>$action_data["device_key"]);
          $filter["number"]=array("operation"=>"=","value"=>$number);
          $data=array();
          $data["last_update"]=$timestamp;
          updateInBD($table,$filter);

        }else{
          $table="contacts";
          $data=array();
          $data["device_key"]=$action_data["device_key"];
          $data["number"]=$number;
          $data["created"]=$timestamp;
          $data["last_update"]=$timestamp;
          addInBD($table,$data);
        }
      }
      $table="contacts";
      $filter=array();
      $filter["device_key"]=array("operation"=>"=","value"=>$action_data["device_key"]);
      $filter["last_update"]=array("operation"=>"=","value"=>$timestamp);
      deleteInBD($table,$filter);


      $response["data"]=array();

      foreach($numbers as $key=>$number){
        $table="comments";
        $filter=array();
        $filter["number"]=array("operation"=>"=","value"=>$number);
        $filter["reported"]=array("operation"=>"=","value"=>0);
        if(!isInBD($table,$filter)){
          $response["data"][$number]=array();
          $response["data"][$number]["rating"]=0;
          $response["data"][$number]["comments_amount"]=0;
        }else{
          $contact["comments_amount"]=countInBD($table,$filter);
          $sum_field="rating";
          $contact["rating"]=sumInBD($table,$filter,$sum_field);
          $contact["rating"]=intval($contact["rating"]/$contact["comments_amount"]);

          $response["data"][$number]=array();
          $response["data"][$number]["rating"]=$contact["rating"];
          $response["data"][$number]["comments_amount"]=$contact["comments_amount"];

        }
      }

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
