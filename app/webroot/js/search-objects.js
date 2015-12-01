function initMap() {
  var position = { lat: 40.51396228669715, lng: -88.99067401885986 };
  var geocoder = new google.maps.Geocoder();
  var map = new google.maps.Map(document.getElementById('searchMap'), {
    zoom: 15,
    center: position
  });

  // var marker = new google.maps.Marker({
  //   position: position,
  //   map: map
  // });

  google.maps.event.addListener(map, 'click', function (evt) {
    marker.setPosition( new google.maps.LatLng( evt.latLng.lat(), evt.latLng.lng() ) );
  });
}

$(window).scroll(function()
{
  if ($(this).scrollTop() > 50) {
    $('#searchMap').addClass('fixed-map');
  } else {
    $('#searchMap').removeClass('fixed-map');
  }
});
