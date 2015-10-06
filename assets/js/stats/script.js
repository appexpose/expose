function init_page(){


  $.ajax({
    type: "POST",
    dataType: 'json',
    url: $_SERVER_PATH+"models/stats/model.php",
    data: {
      "action":"list_stats",
      "device_key":localStorage.device_key,
      "system":"web",
      "version":"1.0",
    },
    error: function(data, textStatus, jqXHR) {
      alert("ajax error");
    },
    success: function(response) {
      if(response.result){
        $("[data-ajax='display_created']").html(stopwhatch_to_str(response.data.display.created));

        $("[data-ajax='display_users']").html(response.data.display.users);
        jQuery.each(response.data.bar_height.users, function($_key,$_bar_height){
          $("[data-ajax='bar_users_"+$_key+"']").css("height",$_bar_height+"%");
        });
        jQuery.each(response.data.stats.users, function($_key,$_stat){
          $_title=$_stat+" Usuario";
          if($_stat>1){$_title=$_stat+" Usuarios";}
          $("[data-ajax='progress_users_"+$_key+"']").attr("title",$_title);
        });

        $("[data-ajax='display_active_users']").html(response.data.display.active_users);
        jQuery.each(response.data.bar_height.active_users, function($_key,$_bar_height){
          $("[data-ajax='bar_active_users_"+$_key+"']").css("height",$_bar_height+"%");
        });
        jQuery.each(response.data.stats.active_users, function($_key,$_stat){
          $_title=$_stat+" Alta";
          if($_stat>1){$_title=$_stat+" Altas";}
          $("[data-ajax='progress_active_users_"+$_key+"']").attr("title",$_title);
        });

        $("[data-ajax='display_comments']").html(response.data.display.comments);
        jQuery.each(response.data.bar_height.comments, function($_key,$_bar_height){
          $("[data-ajax='bar_comments_"+$_key+"']").css("height",$_bar_height+"%");
        });
        jQuery.each(response.data.stats.comments, function($_key,$_stat){
          $_title=$_stat+" Comentario";
          if($_stat>1){$_title=$_stat+" Comentarios";}
          $("[data-ajax='progress_comments_"+$_key+"']").attr("title",$_title);
        });

        $("[data-ajax='display_searchs']").html(response.data.display.searchs);
        jQuery.each(response.data.bar_height.searchs, function($_key,$_bar_height){
          $("[data-ajax='bar_searchs_"+$_key+"']").css("height",$_bar_height+"%");
        });
        jQuery.each(response.data.stats.searchs, function($_key,$_stat){
          $_title=$_stat+" Búsqueda";
          if($_stat>1){$_title=$_stat+" Búsquedas";}
          $("[data-ajax='progress_searchs_"+$_key+"']").attr("title",$_title);
        });

        $('[data-toggle="tooltip"]').tooltip();

      }else{

      }
    }
  });

  function time() {
    return Math.floor(new Date()
      .getTime() / 1000);
  }

  function stopwhatch_to_str($_timestamp){

    $_from_now = time() - $_timestamp;
    if ($_from_now < 1){
      return 'ahora mismo';
    }

    $_s["pre_time_str"] = "hace";
    $_s["post_time_str"] = "";

    $_timestamp_to_str=$_s["pre_time_str"];
    $_r=0;

    $_d = $_from_now / (30*24*60*60);
    if ($_d >= 1){
      $_r = Math.round($_d);
      $_timestamp_to_str+=" "+$_r;
      if($_r > 1){
        $_timestamp_to_str+=" meses ";
      }else{
        $_timestamp_to_str+=" mes ";
      }
    }
    $_from_now=$_from_now-($_r*(30*24*60*60));

    $_d = $_from_now / (24 * 60 * 60);
    if ($_d >= 1){
      $_r = parseInt($_d);
      $_timestamp_to_str+=" "+$_r;
      if($_r > 1){
        $_timestamp_to_str+=" d&iacute;as ";
      }else{
        $_timestamp_to_str+=" día ";
      }
    }
    $_from_now=$_from_now-($_r*(24*60*60));

    $_d = $_from_now / (60*60);
    if ($_d >= 1){
      $_r = parseInt($_d);
      $_timestamp_to_str+=" "+$_r;
      if($_r > 1){
        $_timestamp_to_str+=" horas ";
      }else{
        $_timestamp_to_str+=" hora ";
      }
    }
    $_from_now=$_from_now-($_r*(60*60));

    $_d = $_from_now / (60);
    if ($_d >= 1){
      $_r = parseInt($_d);
      $_timestamp_to_str+=" "+$_r;
      if($_r > 1){
        $_timestamp_to_str+=" minutos ";
      }else{
        $_timestamp_to_str+=" minuto ";
      }
    }
    $_timestamp_to_str+=$_s["post_time_str"];



    return $_timestamp_to_str;

  }
}
