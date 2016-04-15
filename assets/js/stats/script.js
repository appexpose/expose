$_SERVER_PATH="http://expose-server-rest.azurewebsites.net";

$.ajax({
  type: "GET",
  dataType: 'json',
  url: $_SERVER_PATH+"/stats",
  error: function(data, textStatus, jqXHR) {
    $(".loading-panel").addClass("hidden");
    $(".error-panel").removeClass("hidden");
  },
  success: function(response) {

    var $_users=[];
    var $_active_users=[];
    var $_comments=[];
    var $_searchs=[];
    jQuery.each(response.stats, function($_key,$_value){
      if($_key.startsWith("users_")){
        $_users.push($_value);
        $_users_last=$_value;
      }else if($_key.startsWith("active_users_")){
        $_active_users.push($_value);
        $_active_users_last=$_value;
      }else if($_key.startsWith("comments_")){
        $_comments.push($_value);
        $_comments_last=$_value;
      }else if($_key.startsWith("searchs_")){
        $_searchs.push($_value);
        $_searchs_last=$_value;
      }
    });

    $(".loading-panel").addClass("hidden");
    $(".success-panel").removeClass("hidden");

    var parentWidth = $('#users').width();
    var valueCount = 30;
    var barSpacing = 2;
    var barWidth = Math.round((parentWidth - ( valueCount - 1 ) * barSpacing ) / valueCount);

    $("#users_last").html($_users_last);
    $('#users').sparkline($_users, {
      type: 'bar',
      height: '100',
      barColor: '#1abc9c',
      barSpacing: barSpacing,
      barWidth: barWidth

    });


    $("#active_users_last").html($_active_users_last);
    $('#active_users').sparkline($_active_users, {
      type: 'bar',
      height: '100',
      barColor: '#1abc9c',
      barSpacing: barSpacing,
      barWidth: barWidth

    });

    $("#comments_last").html($_comments_last);
    $('#comments').sparkline($_comments, {
      type: 'bar',
      height: '100',
      barColor: '#1abc9c',
      barSpacing: barSpacing,
      barWidth: barWidth

    });

    $("#searchs_last").html($_searchs_last);
    $('#searchs').sparkline($_searchs, {
      type: 'bar',
      height: '100',
      barColor: '#1abc9c',
      barSpacing: barSpacing,
      barWidth: barWidth

    });




/*
    if(response.result){
      $("[data-ajax='display_created']").html(response.data.display.created);

      $("[data-ajax='display_users']").html(response.data.display.users);
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

    }*/
  }
});
