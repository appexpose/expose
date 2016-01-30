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
  * get_stats
  *
  *********************************************************/

  /*********************************************************
  * COMMON AJAX CALL DECLARATIONS, DATA CHECK AND INCLUDES
  *********************************************************/

  define('PATH', '../../');
  define('SERVER_PATH', '../../../');
  $timestamp=strtotime(date("Y-m-d H:i:s"));
  include(PATH."includes/init.php");
  $page_path="WS::1.0.0::Stats";
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

    case "list_stats":

      // Check Input Data
      if(!@checkInputData($action_data["device_key"],"device_key")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["system"],"system")){echo json_encode($response);die();}
      if(!@checkInputData($action_data["version"],"version")){echo json_encode($response);die();}

      if(!@checkSystemVersion($action_data["system"],$action_data["version"])){echo json_encode($response);die();}

      $response["data"]=array();
      $response["data"]["stats"]=array();

      $response["data"]["stats"]["users"]=array();
      $response["data"]["stats"]["active_users"]=array();
      $response["data"]["stats"]["comments"]=array();
      $response["data"]["stats"]["searchs"]=array();

      $start=strtotime(date("Y-m-d 0:0:0"));
      $flag_first=true;
      $max=array();
      $max["users"]=0;
      $max["active_users"]=0;
      $max["comments"]=0;
      $max["searchs"]=0;

      $response["data"]["max_stats"]["active_users"]=0;
      $response["data"]["max_stats"]["comments"]=0;
      $response["data"]["max_stats"]["searchs"]=0;

      for ($i=29;$i>=0;$i--){
        $table="stats";
        $filter=array();
        $filter["created"]=array("operation"=>"=","value"=>$start);
        $stat=getInBD($table,$filter);

        if(!issetandnotempty($stat)){
          $stat=array();
          $stat["created"]=$start;

          $end=$start-86400;

          $table="users";
          $filter=array();
          $filter["complex"]="created < ".$start;
          $stat["users"]=countInBD($table,$filter);

          $table="users";
          $filter=array();
          $filter["complex"]="last_connection < ".$start." and last_connection > ".$end;
          $stat["active_users"]=countInBD($table,$filter);

          $table="comments";
          $filter=array();
          $filter["complex"]="created < ".$start;
          $stat["comments"]=countInBD($table,$filter);

          $table="searchs";
          $filter=array();
          $filter["complex"]="created < ".$start." and created > ".$end;
          $stat["searchs"]=countInBD($table,$filter);

          $table="stats";
          addInBD($table,$stat);
        }

        if($flag_first){
          $display=array();
          $display["users"]=$stat["users"];
          $display["active_users"]=$stat["active_users"];
          $display["comments"]=$stat["comments"];
          $display["searchs"]=$stat["searchs"];
          $flag_first=false;
        }


        if($max["users"]<$stat["users"]){$max["users"]=$stat["users"];}
        if($max["active_users"]<$stat["active_users"]){$max["active_users"]=$stat["active_users"];}
        if($max["comments"]<$stat["comments"]){$max["comments"]=$stat["comments"];}
        if($max["searchs"]<$stat["searchs"]){$max["searchs"]=$stat["searchs"];}

        $stats["users"][$i]=$stat["users"];
        $stats["active_users"][$i]=$stat["active_users"];
        $stats["comments"][$i]=$stat["comments"];
        $stats["searchs"][$i]=$stat["searchs"];

        $start=$start-86400;
      }

      $response["data"]["stats"]["users"]=$stats["users"];
      $response["data"]["stats"]["active_users"]=$stats["active_users"];
      $response["data"]["stats"]["comments"]=$stats["comments"];
      $response["data"]["stats"]["searchs"]=$stats["searchs"];

      for ($i=29;$i>=0;$i--){
        $response["data"]["bar_height"]["users"][$i]=intval(($stats["users"][$i]/$max["users"])*90);
        $response["data"]["bar_height"]["active_users"][$i]=intval(($stats["active_users"][$i]/$max["active_users"])*90);
        $response["data"]["bar_height"]["comments"][$i]=intval(($stats["comments"][$i]/$max["comments"])*90);
        $response["data"]["bar_height"]["searchs"][$i]=intval(($stats["searchs"][$i]/$max["searchs"])*90);
      }

      $response["data"]["display"]["users"]=$display["users"];
      $response["data"]["display"]["active_users"]=$display["active_users"];
      $response["data"]["display"]["comments"]=$display["comments"];
      $response["data"]["display"]["searchs"]=$display["searchs"];
      $response["data"]["display"]["created"]=$_CONFIG["created"];

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
