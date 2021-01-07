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

// Get all rain location and display as icon on map
var locations = JSON.parse(document.getElementById('rainLocationJson').value);
var smallIcon = new L.Icon({
  iconUrl: window.location.origin+'/tnnsl/public/TNN_HE_THONG_GIAM_SAT/image/arrow-blue.png',
  iconRetinaUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-icon-2x.png',
  iconSize:    [15, 15],
  iconAnchor:  [12, 41],
  popupAnchor: [1, -34],
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  shadowSize:  [30, 15]
});

// Click to show popup on the map
function onEachFeature(feature, layer) {
  if (feature.properties && feature.properties.hoverContent) {
      layer.on('click', function() { layer.bindPopup(feature.properties.detailContent, {closeOnClick: true, autoClose: false}).openPopup()});
      layer.on('mouseover', function() { layer.bindPopup(feature.properties.hoverContent).openPopup()});
  }
}

var myLayer = L.geoJson(locations, {
  onEachFeature: onEachFeature,
  pointToLayer: function(feature, latlng) {
    return L.marker(latlng, {
      icon: smallIcon
    });
  }
}).addTo(map);

