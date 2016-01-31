$.ajax({
  type: "POST",
  dataType: 'json',
  url: $_SERVER_PATH+"models/model.php",
  data: {
    "action":"list_stats"
  },
  error: function(data, textStatus, jqXHR) {
    alert("ajax error");
  },
  success: function(response) {
    if(response.result){
      $("[data-ajax='display_created']").html(response.data.display.created);

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
