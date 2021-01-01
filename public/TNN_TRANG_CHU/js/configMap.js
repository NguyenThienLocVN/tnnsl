var map = L.map('map', {
    center: [21.529737201190642, 103.9581298828125], 
    zoom: 8,
    zoomControl: false
});
var layer = L.esri.basemapLayer('Streets').addTo(map);
L.esri.basemapLayer('ImageryLabels').addTo(map);
L.control.zoom({zoomControl: false});


// Click button zoom
document.getElementById('zoom-in').addEventListener('click', function () {
    map.setZoom(map.getZoom() + 1);
});

document.getElementById('zoom-out').addEventListener('click', function () {
    map.setZoom(map.getZoom() - 1);
});

// Click button center map
document.getElementById('center-map').addEventListener('click', function () {
    map.setView([21.529737201190642, 103.9581298828125], 8);
});

// Click current location
document.getElementById('current-location').addEventListener('click', function () {
    navigator.geolocation.getCurrentPosition(function(location) {
        var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
      
        var marker = L.marker(latlng).addTo(map);
        map.setView([location.coords.latitude, location.coords.longitude], 8);
    });
});