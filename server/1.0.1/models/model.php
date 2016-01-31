<?php

  /************************************************************
  * Converfit
  * Author: Pablo Gutierrez Alfaro <pablo@converfit.com>
  * Creation Modification: 29-09-2015
  * Last Modification: 29-09-2015
  * licensed through Copyright 2015
  ************************************************************/

  /*********************************************************
  * COMMON AJAX CALL DECLARATIONS, DATA CHECK AND INCLUDES
  *********************************************************/

  define('PATH', '../');
  define('SERVER_PATH', '../../');
  $datenow=date("Y-m-d H:i:s");
  $timestamp=strtotime($datenow);
  include(PATH."settings.php");
  include(PATH."includes/bd.php");
  include(PATH."includes/general.php");
  $page_path="Expose::1.0.1";

  $response=array();

  parse_action_data();

  /*********************************************************
  * AJAX OPERATIONS
  *********************************************************/

  switch ($action){


    case "list_comments":

      if(!@check_action_data($action_data["numbers"],"numbers")){echo json_encode($response);die();}
      if(!@check_action_data($action_data["offset"],"offset","zero_valid")){echo json_encode($response);die();}
      if(!@check_action_data($action_data["limit"],"limit")){echo json_encode($response);die();}

      $numbers=explode(",",$action_data["numbers"]);
      $query = "SELECT * FROM comments WHERE number IN (";
      $coma="";
      foreach ($numbers as $key=>$number){
        $number=str_replace("+","00",$number);
        $number=str_replace("-","",$number);
        $number=str_replace(" ","",$number);
        $number=str_replace("(","",$number);
        $number=str_replace(")","",$number);
        $query.=$coma."'".$number."'";
        $coma=",";
      }
      $query.=") ORDER BY created desc LIMIT ".$action_data["limit"]." OFFSET ".$action_data["offset"];

      error_log($query);

      $r = db_query($query,$db);
      $response["data"]=array();
      $response["data"]["comments"]=array();
  		while($comment=db_fetch($r)) {
        if ($comment["reported"]==1){
          $comment["content"]="";
        }
        $response["data"]["comments"][]=$comment;
  		}

      break;

    case "add_comment":

      if(!@check_action_data($action_data["number"],"number")){echo json_encode($response);die();}
      if(!@check_action_data($action_data["content"],"content")){echo json_encode($response);die();}
      if(!@check_action_data($action_data["rating"],"rating")){echo json_encode($response);die();}


      $action_data["number"]=str_replace("+","00",$action_data["number"]);
      $action_data["number"]=str_replace("-","",$action_data["number"]);
      $action_data["number"]=str_replace(" ","",$action_data["number"]);
      $action_data["number"]=str_replace("(","",$action_data["number"]);
      $action_data["number"]=str_replace(")","",$action_data["number"]);

      $comment_key=sha1("comment_key".$timestamp.rand(0,1000).$action_data["number"].$action_data["content"].$action_data["rating"]);
      $query = "INSERT INTO comments (comment_key,number,rating,content) VALUES ('".$comment_key."','".$action_data["number"]."','".$action_data["rating"]."','".$action_data["content"]."')";
      db_query($query,$db);

      $query = "SELECT * FROM contacts WHERE number='".$action_data["number"]."' AND (system = 'ios' OR system = 'android')";
      $r = db_query($query,$db);
      while($contact=db_fetch($r)) {
        send_push_notification($contact["device_key"],$contact["system"],$action_data["content"]);
  		}


      break;

    case "report_comment":

      if(!@check_action_data($action_data["comment_key"],"comment_key")){echo json_encode($response);die();}

      $brand=array();
      $brand["brand_key"]=$action_data["brand_key"];

      $query = "UPDATE comments SET reported=1 WHERE comment_key = '".$action_data["comment_key"]."'";
      db_query($query,$db);

      break;

    case "update_contacts":

      if(!@check_action_data($action_data["device_key"],"device_key")){echo json_encode($response);die();}
      if(!@check_action_data($action_data["numbers"],"numbers")){echo json_encode($response);die();}
      if(!@check_action_data($action_data["system"],"system")){echo json_encode($response);die();}

      $query = "DELETE FROM contacts WHERE device_key = '".$action_data["device_key"]."'";
      db_query($query,$db);

      $numbers=explode(",",$action_data["numbers"]);
      foreach ($numbers as $key=>$number){
        $contact=explode("::",$number);
        $query = "INSERT INTO contacts (device_key,system,name,number) VALUES ('".$action_data["device_key"]."','".$action_data["system"]."','".$contact[0]."','".$contact[1]."')";
        db_query($query,$db);
      }

      break;

    case "list_contacts":

      if(!@check_action_data($action_data["device_key"],"device_key")){echo json_encode($response);die();}

      $query = "SELECT name FROM contacts WHERE device_key='".$action_data["device_key"]."'";
      $r = db_query($query,$db);

      $response["data"]=array();
      $response["data"]["contacts"]=array();
      while($contact=db_fetch($r)) {
        $query = "SELECT count(*) as comments_amount, sum(rating) as rating_total FROM comments WHERE number='".$contact["number"]."'";
        $r2 = db_query($query,$db);
        $tmp= db_fetch($r);
        $contact["comments_amount"]=$tmp["comments_amount"];
        if($tmp["comments_amount"]>0){
          $contact["rating"]=intval($tmp["rating_total"]/$tmp["comments_amount"]);
        }else{
          $contact["rating"]=0;
        }

        $query = "SELECT content FROM comments WHERE number='".$contact["number"]."' ORDER BY created desc LIMIT 1";
        $r2 = db_query($query,$db);
        $tmp= db_fetch($r);
        $contact["last_content"]=$tmp["content"];

        $response["data"]["contacts"][]=$contact;
  		}

      break;

    default:
      $response["result"]=false;
      error_log("[ERROR] [".$page_path."] Controler Action not valid (".$action.")");
      $response["error_code"]="action_not_valid";
      echo json_encode($response);die();

  }


  /*********************************************************
  * AJAX CALL RETURN
  *********************************************************/

  debug_log("END");
  echo json_encode($response);
  die();


?>
