function initMap() {
  var position = { lat: parseFloat(document.getElementById('lat').value), lng: parseFloat(document.getElementById('lng').value) };
  var geocoder = new google.maps.Geocoder();
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: position
  });
  var marker = new google.maps.Marker({
    position: position,
    map: map
  });

  google.maps.event.addListener(map, 'click', function (evt) {
    marker.setPosition( new google.maps.LatLng( evt.latLng.lat(), evt.latLng.lng() ) );
    document.getElementById('lat').value = evt.latLng.lat();
    document.getElementById('lng').value = evt.latLng.lng();
  });

  document.getElementById('btnAddress').addEventListener('click', function() {
    geocodeAddress(geocoder, map);
  });
}

function geocodeAddress(geocoder, resultsMap) {
  var address = document.getElementById('address').value;
  geocoder.geocode({'address': address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
      resultsMap.setCenter(results[0].geometry.location);
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}