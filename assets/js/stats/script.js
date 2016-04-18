$_SERVER_PATH="http://expose-server-rest.azurewebsites.net";

var timestamp = new Date().getTime();
timestamp = Math.floor(timestamp / 1000);

var $_users=[];
var $_active_users=[];
var $_comments=[];
var $_searchs=[];

var $_error=false;

getStats(0);

function getStats(i){
  //stats_timestamp=timestamp-(86400*(29-i));
  stats_timestamp=timestamp-(3600*(29-i));

  console.log("Start Call "+i);

  $.ajax({
    type: "GET",
    dataType: 'json',
    url: $_SERVER_PATH+"/stats/"+stats_timestamp,
    error: function(data, textStatus, jqXHR) {
      $(".loading-panel").addClass("hidden");
      $(".error-panel").removeClass("hidden");
      $(".error-panel .msg").html("msg.:"+data.responseText+" "+data.status);
      $_error=true;
    },
    success: function(response) {
      $_active_users[i]=response.stats.active_users;
      $_users[i]=response.stats.users;
      $_comments[i]=response.stats.comments;
      $_searchs[i]=response.stats.searchs;

      console.log("Success Call "+i);

      if(i==29){
        $("#users_last").html(response.stats.users);
        $("#active_users_last").html(response.stats.active_users);
        $("#comments_last").html(response.stats.comments);
        $("#searchs_last").html(response.stats.searchs);

      }else{
        getStats(i+1)
      }
    }
  });

}

$(document).ajaxStop(function () {

  if(!$_error){
    var end_timestamp = new Date().getTime();
    end_timestamp = Math.floor(end_timestamp / 1000);
    console.log("Time:  "+(end_timestamp-timestamp)+" seconds");


    $(".loading-panel").addClass("hidden");
    $(".success-panel").removeClass("hidden");


    var parentWidth = $('#users').width();
    var valueCount = 30;
    var barSpacing = 2;
    var barWidth = Math.round((parentWidth - ( valueCount - 1 ) * barSpacing ) / valueCount);


    $('#users').sparkline($_users, {
      type: 'bar',
      height: '100',
      barColor: '#1abc9c',
      barSpacing: barSpacing,
      barWidth: barWidth

    });

    $('#active_users').sparkline($_active_users, {
      type: 'bar',
      height: '100',
      barColor: '#1abc9c',
      barSpacing: barSpacing,
      barWidth: barWidth

    });

    $('#comments').sparkline($_comments, {
      type: 'bar',
      height: '100',
      barColor: '#1abc9c',
      barSpacing: barSpacing,
      barWidth: barWidth

    });

    $('#searchs').sparkline($_searchs, {
      type: 'bar',
      height: '100',
      barColor: '#1abc9c',
      barSpacing: barSpacing,
      barWidth: barWidth

    });
  }

});
