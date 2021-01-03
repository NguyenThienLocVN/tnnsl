var map = L.map('map', {
    center: [21.529737201190642, 103.9581298828125], 
    zoom: 8,
    zoomControl: false
});
var layer = L.esri.basemapLayer('Topographic').addTo(map);
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

// Click to show panel select map layer
$( "#map-layers" ).click(function() {     
    $('#map-panel-layers').toggle("slide", { direction: "right" }, 1000);
});

$( "#btn-close-layers" ).click(function() { 
    $('#map-panel-layers').hide("slide", { direction: "right" }, 1000);
})

// Select radio button to change map layer
var layerLabels;
function setBasemap (basemap) {
    if (layer) {
      map.removeLayer(layer);
    }

    layer = L.esri.basemapLayer(basemap);

    map.addLayer(layer);

    if (layerLabels) {
      map.removeLayer(layerLabels);
    }

    if (
      basemap === 'ShadedRelief' ||
      basemap === 'Oceans' ||
      basemap === 'Gray' ||
      basemap === 'DarkGray' ||
      basemap === 'Terrain'
    ) {
      layerLabels = L.esri.basemapLayer(basemap + 'Labels');
      map.addLayer(layerLabels);
    } else if (basemap.includes('Imagery')) {
      layerLabels = L.esri.basemapLayer('ImageryLabels');
      map.addLayer(layerLabels);
    }
}

