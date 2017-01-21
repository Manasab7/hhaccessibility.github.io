function initMap() {
	var userPoint = {lat: user_latitude, lng: user_longitude };
	var map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 12,
	  center: userPoint,
	  draggable: false
	});
	locations.forEach(function(location) {
		new google.maps.Marker({
		  position: {lat: location.latitude, lng: location.longitude},
		  map: map,
		  title: location.name,
		  url: '/location-report/' + location.id
		});
	});
	var centreMarker = new google.maps.Marker({
	  position: userPoint,
	  map: map
	});
	google.maps.event.addDomListener(window, 'resize', function() {
		map.setCenter(userPoint);
	});
}


