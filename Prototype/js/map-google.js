// JavaScript Document
var map = null;
var geocoder = null;
function initialize() {
  if (GBrowserIsCompatible()) {
      map = new GMap2(document.getElementById("map_canvas"));
      map.setCenter(new GLatLng(-33.621874,151.245131), 13);
      map.addControl(new GSmallZoomControl());
      geocoder = new GClientGeocoder();
	  wGEvent.addListener(map, "click", clicked);
      map.openInfoWindow(map.getCenter(), "Click the map!");
   }
 }
function clicked(overlay, latlng) {
   if (latlng) {
      geocoder.getLocations(latlng, function(addresses) {
      if(addresses.Status.code != 200) {
         alert("reverse geocoder failed to find an address for " + latlng.toUrlValue());
        }
   else {
      address = addresses.Placemark[0];
      var myHtml = address.address;
      map.openInfoWindow(latlng, myHtml);
         }
       });
     }
}

function codeLatLng() {
	var input = document.getElementById('latlng').value;
	var latlngStr = input.split(',', 2);
	var lat = parseFloat(latlngStr[0]);
	var lng = parseFloat(latlngStr[1]);
	map.setCenter(new GLatLng(lat,lng), 13);
}
	
function showAddress(address) {
	if (geocoder) {
		geocoder.getLatLng(
          address,
          function(point) {
            if (!point) {
              alert(address + " not found");
            } else {
              map.setCenter(point, 15);
              var marker = new GMarker(point, {draggable: true});
              map.addOverlay(marker);
              GEvent.addListener(marker, "dragend", function() {
                marker.openInfoWindowHtml(marker.getLatLng().toUrlValue(6));
              });
              GEvent.addListener(marker, "click", function() {
                marker.openInfoWindowHtml(marker.getLatLng().toUrlValue(6));
              });
	     GEvent.trigger(marker, "click");
        }
      }
    );
  }
}