var $_CONFIG= new Array();
var $_s=new Array();

localStorage.year='2015';
localStorage.system='web';
localStorage.version='1.0';

$("[data-local='system_year']").html(localStorage.system_year);
$("[data-local='system_version']").html(localStorage.system_version);


$("form").submit(function(e){
  e.preventDefault();
});

var $_GET_STR="";
var delimiter="";

(function (){
  window.$_GET = [];
  if(location.search){
    var params = decodeURIComponent(location.search).match(/[a-z_]\w*(?:=[^&]*)?/gi);
    if(params){
      var pm, i = 0;
      for(; i < params.length; i++){
        pm = params[i].split('=');
        $_GET[pm[0]] = pm[1] || '';
        $_GET_STR+=delimiter+pm[0]+"||"+pm[1];
        delimiter="//";
      }
    }
  }
})();


function parseTimestamp($_timestamp){

  if($_timestamp==-1){
    return 'Nunca';
  }
  if($_timestamp==0){
    return 'Nunca';
  }
  $_from_now = time() - $_timestamp;
  if ($_from_now < 1){
    return 'Ahora';
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
