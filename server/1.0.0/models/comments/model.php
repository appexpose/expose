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
  * search_comments
  * add_comment
  * report_comment
  *
  *********************************************************/

  /*********************************************************
  * COMMON AJAX CALL DECLARATIONS, DATA CHECK AND INCLUDES
  *********************************************************/

  define('PATH', '../../');
  define('SERVER_PATH', '../../../');
  $timestamp=strtotime(date("Y-m-d H:i:s"));
  include(PATH."includes/init.php");
  $page_path="WS::1.2.5::Comments";
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

    case "list_comments":

      // Check Input Data
      if(!@checkInputData($action_data["device_key"],"device_key")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["system"],"system")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["version"],"version")){echo json_encode($response);die();}
      if(!@checkInputDataZeroValid($action_data["offset"],"offset")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["limit"],"limit")){echo json_encode($response);die();}

      if(!@checkDeviceKey($action_data["device_key"])){echo json_encode($response);die();}
      if(!@checkSystemVersion($action_data["system"],$action_data["version"])){echo json_encode($response);die();}

      $number=array();
      $number["number"]=$action_data["number"];

      $action_data["number"]=str_replace("+","00",$action_data["number"]);
      $action_data["number"]=str_replace("-","",$action_data["number"]);
      $action_data["number"]=str_replace(" ","",$action_data["number"]);

      $contacts=array();

      if(!issetandnotempty($action_data["number"])){
        $contact=array();
        $contact["number"]=$action_data["number"];
        $contacts[]=$contact;
      }else{
        $table="contacts";
        $filter=array();
        $filter["device_key"]=array("operation"=>"=","value"=>$action_data["device_key"]);
        $contacts=listInBD($table,$filter);
      }

      $table="searchs";
      $data=array();
      $data["device_key"]=$action_data["device_key"];
      $data["number"]=$action_data["number"];
      $data["created"]=$timestamp;
      $data["system"]=$action_data["system"];
      $data["version"]=$action_data["version"];
      $search=$data;
      $search["id_search"]=addInBD($table,$data);
      $search["search_key"]=sha1($search["id_search"]."expose_search".$timestamp);

      $table="searchs";
      $filter=array();
      $filter["id_search"]=array("operation"=>"=","value"=>$search["id_search"]);
      $data=array();
      $data["search_key"]=$search["search_key"];
      updateInBD($table,$filter,$data);


      $response["data"]=array();

      foreach($contacts as $key=>$contact){
        $table="comments";
        $filter=array();
        $filter["number"]=array("operation"=>"=","value"=>$contact["number"]);
        $filter["reported"]=array("operation"=>"=","value"=>0);
        $fields=array();
        $order="created desc";
        $offset=$action_data["offset"];
        $limit=$action_data["limit"];
        $comments=listInBD($table,$filter,$fields,$order,$offset,$limit);
        if(!issetandnotempty($comments)){
          $response["data"][$contact["number"]]=array();
          $response["data"][$contact["number"]]["rating"]=0;
          $response["data"][$contact["number"]]["comments_amount"]=0;
          $response["data"][$contact["number"]]["comments"]=array();

        }else{
          $contact["comments_amount"]=countInBD($table,$filter);
          $sum_field="rating";
          $contact["rating"]=sumInBD($table,$filter,$sum_field);
          $contact["rating"]=intval($contact["rating"]/$contact["comments_amount"]);

          $response["data"][$contact["number"]]=array();
          $response["data"][$contact["number"]]["rating"]=$contact["rating"];
          $response["data"][$contact["number"]]["comments_amount"]=$contact["comments_amount"];

          $response["data"][$contact["number"]]["comments"]=$comments;
        }
      }


      break;

    case "add_comment":

      // Check Input Data
      if(!@checkInputData($action_data["device_key"],"device_key")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["number"],"number")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["rating"],"rating")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["content"],"content")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["system"],"system")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["version"],"version")){echo json_encode($response);die();}

      if(!@checkDeviceKey($action_data["device_key"])){echo json_encode($response);die();}
      if(!@checkSystemVersion($action_data["system"],$action_data["version"])){echo json_encode($response);die();}

      $action_data["number"]=str_replace("+","00",$action_data["number"]);
      $action_data["number"]=str_replace("-","",$action_data["number"]);
      $action_data["number"]=str_replace(" ","",$action_data["number"]);

      $table="comments";
      $data=array();
      $data["device_key"]=$action_data["device_key"];
      $data["number"]=$action_data["number"];
      $data["rating"]=$action_data["rating"];
      $data["content"]=$action_data["content"];
      $data["reported"]=0;
      $data["created"]=$timestamp;
      $data["system"]=$action_data["system"];
      $data["version"]=$action_data["version"];
      $comment=$data;
      $comment["id_comment"]=addInBD($table,$data);
      $comment["comment_key"]=sha1($comment["id_comment"]."expose_add_comment".$timestamp);

      $table="comments";
      $filter=array();
      $filter["id_comment"]=array("operation"=>"=","value"=>$comment["id_comment"]);
      $data=array();
      $data["comment_key"]=$comment["comment_key"];
      updateInBD($table,$filter,$data);

      break;

    case "report_comment":

      // Check Input Data
      if(!@checkInputData($action_data["device_key"],"device_key")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["comment_key"],"comment_key")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["report_option"],"report_option")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["system"],"system")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["version"],"version")){echo json_encode($response);die();}

      if(!@checkDeviceKey($action_data["device_key"])){echo json_encode($response);die();}
      if(!@checkSystemVersion($action_data["system"],$action_data["version"])){echo json_encode($response);die();}

      $table="comment_reports";
      $data=array();
      $data["device_key"]=$action_data["device_key"];
      $data["comment_key"]=$action_data["comment_key"];
      $data["report_option"]=$action_data["report_option"];
      $data["created"]=$timestamp;
      $data["system"]=$action_data["system"];
      $data["version"]=$action_data["version"];
      $comment_report=$data;
      $comment_report["id_comment_report"]=addInBD($table,$data);
      $comment_report["comment_report_key"]=sha1($comment_report["id_comment_report"]."expose_report_comment".$timestamp);

      $table="comment_reports";
      $filter=array();
      $filter["id_comment_report"]=array("operation"=>"=","value"=>$comment_report["id_comment_report"]);
      $data=array();
      $data["comment_report_key"]=$comment_report["comment_report_key"];
      updateInBD($table,$filter,$data);

      $table="comments";
      $filter=array();
      $filter["comment_key"]=array("operation"=>"=","value"=>$action_data["comment_key"]);
      $data=array();
      $data["reported"]=1;
      updateInBD($table,$filter,$data);

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
