
$_SERVER_PATH="http://expose-server-rest.azurewebsites.net";



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
  //console.log($_SERVER_PATH+"/users/"+localStorage.userKey+"/contacts/"+localStorage.number+"/comments/"+$_comment_key+"/report");
  $.ajax({
    type: "PUT",
    dataType: "json",
    url: $_SERVER_PATH+"/users/"+localStorage.userKey+"/contacts/"+localStorage.number+"/comments/"+$_comment_key+"/report",
    error: function(data, textStatus, jqXHR) {
      console.error("[report_comment] Ajax Error");
      $("#form-report-comment-display>.visible-loading").addClass("hidden");
      $("#form-report-comment-display>.visible-error").removeClass("hidden");
    },
    success: function(response) {
      list_comments(0,10);
      $("#form-report-comment-display>.visible-loading").addClass("hidden");
      $("#form-report-comment-display>.visible-success").removeClass("hidden");
    }
  });

}

function add_comment(){
  //console.log($_SERVER_PATH+"/users/"+localStorage.userKey+"/contacts/"+localStorage.number+"/comments/");

  $.ajax({
    type: "POST",
    dataType: "json",
    url: $_SERVER_PATH+"/users/"+localStorage.userKey+"/contacts/"+localStorage.number+"/comments/",
    data: {
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
      list_comments(0,10);
    }
  });
}

function list_comments(offset,limit){
  //console.log($_SERVER_PATH+"/users/"+localStorage.userKey+"/contacts/"+localStorage.number+"/comments/?offset="+offset+"&limit="+limit);

  $.ajax({
    type: "GET",
    dataType: "json",
    url: $_SERVER_PATH+"/users/"+localStorage.userKey+"/contacts/"+localStorage.number+"/comments/?offset="+offset+"&limit="+limit,
    error: function(data, textStatus, jqXHR) {
      console.error("[list_comments] Ajax Error");
      $("#form-search-display>.form-display").addClass("hidden");
      $("#form-search-display>.visible-error").removeClass("hidden");
    },
    success: function(response) {

      $_comments="";
      $_comments_count=0;
      $_rating_total=0;
      jQuery.each(response.comments, function($_key,$_comment){
        $_comments_count+=1;
        $_rating_total+=parseInt($_comment.rating);

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
        $_comments+="    <p class='small text-right'>"+$_comment.created+"</p>";
        $_comments+="  </div>";
        $_comments+="  <div class='col-md-9'>";
        $_comments+="    <div itemprop='articleBody' class='post-text'>";
        if($_comment.reported==1){
          $_comments+="      <p><i>Comentario denunciado</i></p>";
        }else{
          $_comments+="      <p>"+$_comment.content+"</p>";
          $_comments+="      <p class='small text-left'><a href='javascript:confirm_report(\""+$_comment.commentKey+"\")'>Denunciar</a></p>";
        }
        $_comments+="    </div>";
        $_comments+="  </div>";
        $_comments+="</article>";
      });

      if(offset==0){
        $("[data-ajax=comments]").html($_comments);
      }else{
        $("[data-ajax=comments]").append($_comments);
      }

      $("[data-ajax=number]").html(localStorage.number);
      $_rating_total=parseInt($_rating_total/$_comments_count);
      $_rating="";
      for ($_i=1;$_i<=$_rating_total;$_i++) {
        $_rating+="<i class='fa fa-star text-primary'></i>";
      }
      for (;$_i<=5;$_i++) {
        $_rating+="<i class='fa fa-star-o'></i>";
      }
      $("[data-ajax=rating]").html($_rating);

      if($_comments_count==1){
        $("[data-ajax=comments_amount]").html($_comments_count+" Comentario");
      }else{
        $("[data-ajax=comments_amount]").html($_comments_count+" Comentarios");
      }

      $("#form-search-display>.form-display").addClass("hidden");
      $("#form-search-display>.visible-success").removeClass("hidden");
      reset_form();

    }
  });

}


login();

function login(){

  console.error("[login] Start");

  if((typeof localStorage.userKey == 'undefined')||(localStorage.userKey=='')){
    console.error("[login] Signup");

    $.ajax({
      type: "POST",
      dataType: "json",
      url: $_SERVER_PATH+"/users",
      data: {
        "deviceKey":"dont_allow",
        "prefix":"0034",
        "system":"web",
        "version":"1.0",
      },
      error: function(data, textStatus, jqXHR) {
        console.error("[Signup] Ajax Error");
        $("#form-add-comment-display>.form-display").addClass("hidden");
        $("#form-add-comment-display>.visible-error").removeClass("hidden");
      },
      success: function(response) {
        localStorage.userKey=response.userKey;
        //console.log(localStorage.userKey);
      }
    });
  }else{
    console.error("[login] Login");

    $.ajax({
      type: "PUT",
      dataType: "json",
      url: $_SERVER_PATH+"/users/"+localStorage.userKey+"/login",
      error: function(data, textStatus, jqXHR) {
        localStorage.userKey="";
        login();
      },
      success: function(response) {
        console.error("[login] Success");
      }
    });
  }
}



$("#form-search").validate({
  rules:{
    number:{required:true},
  },
  submitHandler:function(form){
    reset_form();
    $("#form-search-display>.form-display").addClass("hidden");
    $("#form-search-display>.visible-loading").removeClass("hidden");
    $_number=$("#form-search #number").val();
    $_number=$_number.replace("+","00");
    $_number=$_number.str.split(' ').join('');
    localStorage.number=$_number;
    console.error(localStorage.number);
    list_comments(0,10);
  }
});
$("#number").intlTelInput({
  nationalMode: false,
  preferredCountries: ['es'],
  utilsScript: "../../assets/plugins/international-phones/lib/libphonenumber/build/utils.js"
});
function confirm_report($_comment_key){

  console.log("start resport");
  $("#form-report-comment-display>.visible-error").addClass("hidden");
  $("#form-report-comment-display>.visible-loading").addClass("hidden");
  $("#form-report-comment-display>.visible-success").addClass("hidden");
  $("#form-report-comment-display>.visible-init").removeClass("hidden");

  $("#form-report-comment #comment_key").val($_comment_key);


  $("#confirm_report_modal").modal("show");

}
