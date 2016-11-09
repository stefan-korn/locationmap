var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('locationmap'), {
    center: {lat: 50.1929763, lng: 9.4742896},
    zoom: 8
  });
}
