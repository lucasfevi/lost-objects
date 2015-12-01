var map = null;
var marker = null;

function initMap() {
  var position = { lat: 40.51396228669715, lng: -88.99067401885986 };
  var geocoder = new google.maps.Geocoder();
  map = new google.maps.Map(document.getElementById('searchMap'), {
    zoom: 15,
    center: position
  });
}

$(document).ready(function()
{
  $(window).scroll(function()
  {
    if ($(this).scrollTop() > 50) {
      $('#searchMap').addClass('fixed-map');
    } else {
      $('#searchMap').removeClass('fixed-map');
    }
  });

  $('.btn-location').on('click', function(e)
  {
    e.preventDefault();
    var data = $(this).data();

    if (marker == null) {
      marker = new google.maps.Marker({
        position: { lat: data.lat, lng: data.lng },
        map: map
      });
    }

    marker.setPosition( new google.maps.LatLng( data.lat, data.lng ) );
    map.panTo( new google.maps.LatLng( data.lat, data.lng ) );
  });

});
