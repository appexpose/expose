citious_session_start();

function citious_session_start(){
  var $_CITIOUS_WEB_SESSION= new Array();
  if ((typeof localStorage.citious_web_device_key == 'undefined')||(localStorage.citious_web_device_key == null)||(localStorage.citious_web_device_key == "null")){
    $.ajax({
      type: "POST",
      dataType: 'json',
      url: "http://ip-api.com/json",
      error: function(data, textStatus, jqXHR) {
        $_CITIOUS_WEB_SESSION["country"]="";
        $_CITIOUS_WEB_SESSION["countryCode"]="";
        $_CITIOUS_WEB_SESSION["region"]="";
        $_CITIOUS_WEB_SESSION["regionName"]="";
        $_CITIOUS_WEB_SESSION["city"]="";
        $_CITIOUS_WEB_SESSION["zip"]="";
        $_CITIOUS_WEB_SESSION["lat"]="";
        $_CITIOUS_WEB_SESSION["lon"]="";
        $_CITIOUS_WEB_SESSION["isp"]="";
      },
      success: function(response) {
        if(response.status=="success"){
          $_CITIOUS_WEB_SESSION["country"]=response.country;
          $_CITIOUS_WEB_SESSION["countryCode"]=response.countryCode;
          $_CITIOUS_WEB_SESSION["region"]=response.region;
          $_CITIOUS_WEB_SESSION["regionName"]=response.regionName;
          $_CITIOUS_WEB_SESSION["city"]=response.city;
          $_CITIOUS_WEB_SESSION["zip"]=response.zip;
          $_CITIOUS_WEB_SESSION["lat"]=response.lat;
          $_CITIOUS_WEB_SESSION["lon"]=response.lon;
          $_CITIOUS_WEB_SESSION["isp"]=response.isp;
        }else{
          $_CITIOUS_WEB_SESSION["country"]="";
          $_CITIOUS_WEB_SESSION["countryCode"]="";
          $_CITIOUS_WEB_SESSION["region"]="";
          $_CITIOUS_WEB_SESSION["regionName"]="";
          $_CITIOUS_WEB_SESSION["city"]="";
          $_CITIOUS_WEB_SESSION["zip"]="";
          $_CITIOUS_WEB_SESSION["lat"]="";
          $_CITIOUS_WEB_SESSION["lon"]="";
          $_CITIOUS_WEB_SESSION["isp"]="";
        }
      },
      complete: function(){
        $.ajax({
          type: "POST",
          dataType: 'jsonp',
          url: "http://www.citious.com/server/1.2.6/models/userweb/model.php",
          data: {
            "action":"add_citious_web_session",
            "title":document.title,
            "URL":document.URL,
            "referrer":document.referrer,
            "appName":navigator.appName,
            "userAgent":navigator.userAgent,
            "cookieEnabled":navigator.cookieEnabled,
            "language":navigator.language,
            "platform":navigator.platform,
            "colorDepth":screen.colorDepth,
            "height":screen.height,
            "width":screen.width,
            "innerHeight":window.innerHeight,
            "innerWidth":window.innerWidth,
            "country":$_CITIOUS_WEB_SESSION["country"],
            "countryCode":$_CITIOUS_WEB_SESSION["countryCode"],
            "region":$_CITIOUS_WEB_SESSION["region"],
            "regionName":$_CITIOUS_WEB_SESSION["regionName"],
            "city":$_CITIOUS_WEB_SESSION["city"],
            "zip":$_CITIOUS_WEB_SESSION["zip"],
            "lat":$_CITIOUS_WEB_SESSION["lat"],
            "lon":$_CITIOUS_WEB_SESSION["lon"],
            "isp":$_CITIOUS_WEB_SESSION["isp"]
          },
          error: function(data, textStatus, jqXHR) {

          },
          success: function(response) {
            if(response.result){
              localStorage.citious_web_device_key=response.data.device_key;
              $_CITIOUS_WEB_SESSION["device_key"]=response.data.device_key;
            }else{

            }
          }
        });
      }
    });
  }else{
    $_CITIOUS_WEB_SESSION["device_key"]=localStorage.citious_web_device_key;
    $.ajax({
      type: "POST",
      dataType: 'json',
      url: "http://localhost:8888/citious/server/1.1/plugins/citious/models/model.php",
      data: {
        "action":"citious_web_session_start",
        "device_key":$_CITIOUS_WEB_SESSION["device_key"],
        "title":document.title,
        "URL":document.URL,
        "referrer":document.referrer
      },
      error: function(data, textStatus, jqXHR) {

      },
      success: function(response) {
        if(response.result){

        }else{
          localStorage.citious_web_device_key=null;
          $_CITIOUS_WEB_SESSION["device_key"]=localStorage.citious_web_device_key;
          citious_session_start();
        }
      }
    });
  }
}
