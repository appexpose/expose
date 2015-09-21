var $_CONFIG= new Array();
var $_s=new Array();

// Producción
var $_URL_SERVER = "http://www.appexpose.com/";
var $_SERVER_PATH = "../../"+$_PATH;

// Development Server
//var $_URL_SERVER = "http://develop.appexpose.com/";
//var $_SERVER_PATH = "../../"+$_PATH;

// Development Local
//var $_URL_SERVER = "http://localhost:8888/expose/";
//var $_SERVER_PATH = "http://localhost:8888/expose/server/1.0.0/";

$_CONFIG["company_phone"] = "+34 636 36 22 24";
$_CONFIG["company_info_mail"] = "info@appexpose.com";
$_CONFIG["debug_mode"] = true;
$_CONFIG["restricted_page"] = false;


localStorage.year='2015';
localStorage.system='web';
localStorage.version='1.0';

$("[data-local='system_year']").html(localStorage.system_year);
$("[data-local='system_version']").html(localStorage.system_version);

session_start();

function session_start(){

  if ((typeof localStorage.device_key == 'undefined')||(localStorage.device_key == null)||(localStorage.device_key == "null")||(localStorage.device_key == "no_device_key")){
    localStorage.device_key="no_device_key";
  }

  $.ajax({
    type: "POST",
    dataType: 'json',
    url: $_SERVER_PATH+"models/users/model.php",
    data: {
      "action":"login",
      "device_key":localStorage.device_key,
      "system":"web",
      "version":"1.0",
    },
    error: function(data, textStatus, jqXHR) {

    },
    success: function(response) {
      if(response.result){
        localStorage.device_key=response.data.device_key;
        localStorage.device_key=response.data.device_key;
        init_page();
      }else{

      }
    }
  });
}

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
