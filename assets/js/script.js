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
