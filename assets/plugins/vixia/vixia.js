vixia_session_start();

function vixia_session_start(){
  var $_VIXIA_SESSION= new Array();
  if ((typeof localStorage.vixia_device_key == 'undefined')||(localStorage.vixia_device_key == null)||(localStorage.vixia_device_key == "null")){
    $.ajax({
      type: "POST",
      dataType: 'json',
      url: "http://ip-api.com/json",
      error: function(data, textStatus, jqXHR) {
        $_VIXIA_SESSION["country"]="";
        $_VIXIA_SESSION["countryCode"]="";
        $_VIXIA_SESSION["region"]="";
        $_VIXIA_SESSION["regionName"]="";
        $_VIXIA_SESSION["city"]="";
        $_VIXIA_SESSION["zip"]="";
        $_VIXIA_SESSION["lat"]="";
        $_VIXIA_SESSION["lon"]="";
        $_VIXIA_SESSION["isp"]="";
      },
      success: function(response) {
        if(response.status=="success"){
          $_VIXIA_SESSION["country"]=response.country;
          $_VIXIA_SESSION["countryCode"]=response.countryCode;
          $_VIXIA_SESSION["region"]=response.region;
          $_VIXIA_SESSION["regionName"]=response.regionName;
          $_VIXIA_SESSION["city"]=response.city;
          $_VIXIA_SESSION["zip"]=response.zip;
          $_VIXIA_SESSION["lat"]=response.lat;
          $_VIXIA_SESSION["lon"]=response.lon;
          $_VIXIA_SESSION["isp"]=response.isp;
        }else{
          $_VIXIA_SESSION["country"]="";
          $_VIXIA_SESSION["countryCode"]="";
          $_VIXIA_SESSION["region"]="";
          $_VIXIA_SESSION["regionName"]="";
          $_VIXIA_SESSION["city"]="";
          $_VIXIA_SESSION["zip"]="";
          $_VIXIA_SESSION["lat"]="";
          $_VIXIA_SESSION["lon"]="";
          $_VIXIA_SESSION["isp"]="";
        }
      },
      complete: function(){
        $.ajax({
          type: "POST",
          dataType: 'jsonp',
          url: "http://localhost:8888/citious/server/plugins/vixia/models/model.php",
          data: {
            "action":"add$_VIXIA_SESSION",
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
            "country":$_VIXIA_SESSION["country"],
            "countryCode":$_VIXIA_SESSION["countryCode"],
            "region":$_VIXIA_SESSION["region"],
            "regionName":$_VIXIA_SESSION["regionName"],
            "city":$_VIXIA_SESSION["city"],
            "zip":$_VIXIA_SESSION["zip"],
            "lat":$_VIXIA_SESSION["lat"],
            "lon":$_VIXIA_SESSION["lon"],
            "isp":$_VIXIA_SESSION["isp"]
          },
          error: function(data, textStatus, jqXHR) {

          },
          success: function(response) {
            if(response.result){
              localStorage.vixia_device_key=response.data.device_key;
              $_VIXIA_SESSION["device_key"]=response.data.device_key;
            }else{

            }
          }
        });
      }
    });
  }else{
    $_VIXIA_SESSION["device_key"]=localStorage.vixia_device_key;
    $.ajax({
      type: "POST",
      dataType: 'json',
      url: "http://localhost:8888/citious/server/1.1/plugins/citious/models/model.php",
      data: {
        "action":"session_start",
        "device_key":$_VIXIA_SESSION["device_key"],
        "title":document.title,
        "URL":document.URL,
        "referrer":document.referrer
      },
      error: function(data, textStatus, jqXHR) {

      },
      success: function(response) {
        if(response.result){

        }else{
          localStorage.vixia_device_key=null;
          $_VIXIA_SESSION["device_key"]=localStorage.vixia_device_key;
          vixia_session_start();
        }
      }
    });
  }
}
