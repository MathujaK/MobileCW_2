<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
	 <?php include 'gameheader.php' ?>
  </head>
  <body>
  
  <div class="position1">
    	<div class="container" id="content-container"></div></div>
  <div id="map"></div>  <div id="map"></div>
  <div class="iframe-container">
    <script>
	
  function initMap() {
	   var mapCanvas = document.getElementById("map");
        var myLatLng1 = {lat: 6.856280, lng: 79.863926};
		var myLatLng2 = {lat: 6.965426, lng: 79.877130};
		var myLatLng3 = {lat: 6.898945, lng: 79.905633};
		var myLatLng4 = {lat: 6.729512, lng: 79.929853};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom:11,
          center: myLatLng1
        });
		var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: myLatLng2
        });
		var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: myLatLng3
        });
		var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: myLatLng4
        });

        var marker1 = new google.maps.Marker({
          position: myLatLng1,
          map: map,
		   
          title: 'Pub1!'
		  
        });
		var marker2 = new google.maps.Marker({
          position: myLatLng2,
          map: map,
		  
          title: 'Pub2!'
        });
		var marker3 = new google.maps.Marker({
          position: myLatLng3,
          map: map,
		   
          title: 'Pub3!'
        });
		var marker4 = new google.maps.Marker({
          position: myLatLng4,
          map: map,
		  
			title: 'Pub4!'
        });
	
			 
      }
	  
	 
    </script></div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4Ils2Q-lZCrviVP73jx1v0DTXwDOTotk&callback=initMap">
    </script>
	
<div class="position2">
    <?php include 'gamefooter.php' ?>
</div>
  </body>
</html>