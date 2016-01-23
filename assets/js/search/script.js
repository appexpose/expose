function init_page(){

  $(".rating-input .star").click(function(){
    $_rating=$(this).attr("id");
    for($_i=1;$_i<=$_rating;$_i++){
      $(".rating-input #"+$_i).html("<i class='fa fa-star text-primary'></i>");
    }
    for(;$_i<=5;$_i++){
      $(".rating-input #"+$_i).html("<i class='fa fa-star-o'></i>");
    }
    $(".rating-input input").val($_rating);
  });

  $("#form-add-comment").validate({
    rules:{
      content:{required:true}
    },
    submitHandler:function(form){
      $("#form-add-comment-display>.form-display").addClass("hidden");
      $("#form-add-comment-display>.visible-loading").removeClass("hidden");
      add_comment();
    }
  });

  $("#form-report-comment").validate({
    rules:{
      comment_key:{required:true},
      report_option:{required:true}
    },
    submitHandler:function(form){
      $("#form-report-comment-display>.visible-init").addClass("hidden");
      $("#form-report-comment-display>.visible-loading").removeClass("hidden");
      report_comment($("#form-report-comment #comment_key").val(),$("#form-report-comment #report_option").val());
    }
  });


  function reset_form(){
    $(".rating-input #1").html("<i class='fa fa-star text-primary'></i>");
    for($_i=2;$_i<=5;$_i++){
      $(".rating-input #"+$_i).html("<i class='fa fa-star-o'></i>");
    }
    $(".rating-input input").val(1);
    $("#form-add-comment #content").val("");
    $("#add_comment").removeClass("active");
    $("#add_comment").removeClass("in");
    $("#add_comment_button").addClass("active");
    $("#add_comment_button").addClass("in");
  }

  function report_comment($_comment_key,$_report_option){
    $.ajax({
      type: "POST",
      dataType: "json",
      url: $_SERVER_PATH+"models/comments/model.php",
      data: {
        "action":"report_comment",
        "device_key":localStorage.device_key,
        "comment_key":$_comment_key,
        "report_option":$_report_option,
        "system":"web",
        "version":"1.0"
      },
      error: function(data, textStatus, jqXHR) {
        console.error("[report_comment] Ajax Error");
        $("#form-report-comment-display>.visible-loading").addClass("hidden");
        $("#form-report-comment-display>.visible-error").removeClass("hidden");
      },
      success: function(response) {
        if(response.result){
          list_comments();
          $("#form-report-comment-display>.visible-loading").addClass("hidden");
          $("#form-report-comment-display>.visible-success").removeClass("hidden");
        }else{
          console.error("[report_comment] Response Error");
          $("#form-report-comment-display>.visible-loading").addClass("hidden");
          $("#form-report-comment-display>.visible-error").removeClass("hidden");
        }
      }
    });

  }

  function add_comment(){
    $.ajax({
      type: "POST",
      dataType: "json",
      url: $_SERVER_PATH+"models/comments/model.php",
      data: {
        "action":"add_comment",
        "device_key":localStorage.device_key,
        "system":"web",
        "version":"1.0",
        "number":localStorage.number,
        "rating":$("#form-add-comment #rating").val(),
        "content":$("#form-add-comment #content").val()
      },
      error: function(data, textStatus, jqXHR) {
        console.error("[add_comment] Ajax Error");
        $("#form-add-comment-display>.form-display").addClass("hidden");
        $("#form-add-comment-display>.visible-error").removeClass("hidden");
      },
      success: function(response) {
        if(response.result){
          list_comments();
        }else{
          console.error("[add_comment] Response Error");
          $("#form-add-comment-display>.form-display").addClass("hidden");
          $("#form-add-comment-display>.visible-error").removeClass("hidden");
        }
      }
    });
  }

  function list_comments(){
    $.ajax({
      type: "POST",
      dataType: "json",
      url: $_SERVER_PATH+"models/comments/model.php",
      data: {
        "action":"list_comments",
        "device_key":localStorage.device_key,
        "system":"web",
        "version":"1.0",
        "number":localStorage.number,
        "offset":0,
        "limit":10
      },
      error: function(data, textStatus, jqXHR) {
        console.error("[list_comments] Ajax Error");
        $("#form-search-display>.form-display").addClass("hidden");
        $("#form-search-display>.visible-error").removeClass("hidden");
      },
      success: function(response) {
        if(response.result){
          $_comments="";
          jQuery.each(response.data.comments, function($_key,$_comment){
            $_comments+="<hr/>";
            $_comments+="<article class='row sep-top-sm'>";
            $_comments+="  <div role='contentinfo' class='col-md-3'>";
            $_comments+="    <p class='text-right'>";
            for ($_i=1;$_i<=$_comment.rating;$_i++) {
              $_comments+="<i class='fa fa-star text-primary'></i>";
            }
            for (;$_i<=5;$_i++) {
              $_comments+="<i class='fa fa-star-o'></i>";
            }
            $_comment.content=$_comment.content.replace(/\n/g,"<br/>")
            $_comments+="    <p class='small text-right'>"+timestamp_to_str($_comment.created)+"</p>";
            $_comments+="  </div>";
            $_comments+="  <div class='col-md-9'>";
            $_comments+="    <div itemprop='articleBody' class='post-text'>";
            $_comments+="      <p>"+$_comment.content+"</p>";
            $_comments+="      <p class='small text-left'><a href='javascript:confirm_report(\""+$_comment.comment_key+"\")'>Denunciar</a></p>";
            $_comments+="    </div>";
            $_comments+="  </div>";
            $_comments+="</article>";
          });


          $("[data-ajax=comments]").html($_comments);

          $("[data-ajax=number]").html(response.data.number);
          $_rating="";
          for ($_i=1;$_i<=response.data.rating;$_i++) {
            $_rating+="<i class='fa fa-star text-primary'></i>";
          }
          for (;$_i<=5;$_i++) {
            $_rating+="<i class='fa fa-star-o'></i>";
          }
          $("[data-ajax=rating]").html($_rating);

          if(response.data.comments_amount==1){
            $("[data-ajax=comments_amount]").html(response.data.comments_amount+" Comentario");
          }else{
            $("[data-ajax=comments_amount]").html(response.data.comments_amount+" Comentarios");
          }

          $("#form-search-display>.form-display").addClass("hidden");
          $("#form-search-display>.visible-success").removeClass("hidden");
          reset_form();
        }else{
          console.error("[list_comments] Response Error");
          if(response.error_code=="no_comments"){
            $("[data-ajax=number]").html(localStorage.number);
            $("#form-search-display>.form-display").addClass("hidden");
            $("#form-search-display>.visible-success").addClass("hidden");
            $("#form-search-display>.visible-error").addClass("hidden");
            $("#form-search-display>.visible-no-data").removeClass("hidden");
            $("[data-ajax=comments]").html("");
            reset_form();
          }else{
            $("#form-search-display>.form-display").addClass("hidden");
            $("#form-search-display>.visible-error").removeClass("hidden");
            reset_form();
          }
        }
      }
    });

  }


  $("#form-search").validate({
    rules:{
      number:{required:true},
    },
    submitHandler:function(form){
      reset_form();
      $("#form-search-display>.form-display").addClass("hidden");
      $("#form-search-display>.visible-loading").removeClass("hidden");
      localStorage.number=$("#form-search #number").val();
      list_comments();
    }
  });
  $("#number").intlTelInput({
    nationalMode: false,
    preferredCountries: ['es'],
    utilsScript: "../../assets/plugins/international-phones/lib/libphonenumber/build/utils.js"
  });


  function time() {
    return Math.floor(new Date()
      .getTime() / 1000);
  }

  function timestamp_to_str($_timestamp){

    $_from_now = time() - $_timestamp;
    if ($_from_now < 1){
      return '0 seconds';
    }

    $_s["pre_time_str"] = "Hace";
    $_s["post_time_str"] = "";
    $_timestamp_to_str ="Ahora";


    $_d = $_from_now ;
    if ($_d >= 1){
      $_timestamp_to_str=$_s["pre_time_str"];
      $_r = Math.round($_d);
      $_timestamp_to_str+=" "+$_r;
      if($_r > 1){
        $_timestamp_to_str+=" segundos";
      }else{
        $_timestamp_to_str+=" segundo";
      }
    }

    $_d = $_from_now / (60);
    if ($_d >= 1){
      $_timestamp_to_str=$_s["pre_time_str"];
      $_r = Math.round($_d);
      $_timestamp_to_str+=" "+$_r;
      if($_r > 1){
        $_timestamp_to_str+=" minutos";
      }else{
        $_timestamp_to_str+=" minuto";
      }
    }

    $_d = $_from_now / (60*60);
    if ($_d >= 1){
      $_timestamp_to_str=$_s["pre_time_str"];
      $_r = Math.round($_d);
      $_timestamp_to_str+=" "+$_r;
      if($_r > 1){
        $_timestamp_to_str+=" horas";
      }else{
        $_timestamp_to_str+=" hora";
      }
    }

    $_d = $_from_now / (24 * 60 * 60);
    if ($_d >= 1){
      $_timestamp_to_str=$_s["pre_time_str"];
      $_r = Math.round($_d);
      $_timestamp_to_str+=" "+$_r;
      if($_r > 1){
        $_timestamp_to_str+=" d&iacute;as";
      }else{
        $_timestamp_to_str+=" día";
      }
    }

    $_d = $_from_now / (30*24*60*60);
    if ($_d >= 1){
      $_timestamp_to_str=$_s["pre_time_str"];
      $_r = Math.round($_d);
      $_timestamp_to_str+=" "+$_r;
      if($_r > 1){
        $_timestamp_to_str+=" meses";
      }else{
        $_timestamp_to_str+=" mes";
      }
    }

    $_d = $_from_now / (365*24*60*60);

    if ($_d >= 1){
      $_timestamp_to_str=$_s["pre_time_str"];
      $_r = Math.round($_d);
      $_timestamp_to_str+=" "+$_r;
      if($_r > 1){
        $_timestamp_to_str+=" años";
      }else{
        $_timestamp_to_str+=" año";
      }
    }

    return $_timestamp_to_str;

  }

}

function confirm_report($_comment_key){

  $("#form-report-comment-display>.visible-error").addClass("hidden");
  $("#form-report-comment-display>.visible-loading").addClass("hidden");
  $("#form-report-comment-display>.visible-success").addClass("hidden");
  $("#form-report-comment-display>.visible-init").removeClass("hidden");

  $("#form-report-comment #comment_key").val($_comment_key);


  $("#confirm_report_modal").modal("show");

}
