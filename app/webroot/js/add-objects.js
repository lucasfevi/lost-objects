function initMap() {
  var normalIllinois = { lat: 40.51396228669715, lng: -88.99067401885986 };
  var geocoder = new google.maps.Geocoder();
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: normalIllinois
  });
  var marker = new google.maps.Marker({
    position: normalIllinois,
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