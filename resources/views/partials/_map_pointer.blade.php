<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFL6wYiKdzF7dSTZ0vakt2wlGe06hpo2Q"></script>

<style type="text/css">
#map-canvas { height: 500px; width:100%; margin: 0; padding: 0;}
</style>
<div id="map-canvas"></div>



<script type="text/javascript">
  var map;
  var marker;

  function initialize() {
      var mapOptions = {
          center: { lat: {!!$lat!!}, lng: {!!$lng!!} },
          zoom: {!!$zoom!!}
      };
      map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);

      marker = new google.maps.Marker({
        position: { lat: {!!$lat!!}, lng: {!!$lng!!} },
        map: map,
        draggable:true,
        animation: google.maps.Animation.DROP,
        title:"Marker"
    });

	$("#lat").val({!!$lat!!});
	$("#lng").val({!!$lng!!} );

    google.maps.event.addListener(marker, 'dragend', function (data) {
        // alert("test");
        var latlng = data.latLng;
        $("#lat").val(latlng.k);
        $("#lng").val(latlng.D);
    });

    google.maps.event.addListener(map, 'click', function (data) {
      var latlng = data.latLng;
      $("#lat").val(latlng.k);
      $("#lng").val(latlng.D);

      if(marker){
        marker.setMap(null);
      }
      
      marker = new google.maps.Marker({
          position: latlng,
          map: map,
          draggable:true,
          title:"Marker"
      });

      google.maps.event.addListener(marker, 'dragend', function (data) {
        var latlng = data.latLng;
        $("#lat").val(latlng.k);
        $("#lng").val(latlng.D);
      });
    });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>