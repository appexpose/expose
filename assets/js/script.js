var $_CONFIG= new Array();
var $_s=new Array();

// Producción
var $_URL_SERVER = "http://www.appexpose.com/";
var $_SERVER_PATH = "http://www.appexpose.com/server/1.0.1/";

// Development Server
//var $_URL_SERVER = "http://develop.appexpose.com/";
//var $_SERVER_PATH = "../../"+$_PATH;

// Development Local
//var $_URL_SERVER = "http://localhost/expose/";
//var $_SERVER_PATH = "http://localhost/expose/server/1.0.1/";

$_CONFIG["company_phone"] = "+34 636 36 22 24";
$_CONFIG["company_info_mail"] = "info@appexpose.com";
$_CONFIG["debug_mode"] = true;
$_CONFIG["restricted_page"] = false;


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
