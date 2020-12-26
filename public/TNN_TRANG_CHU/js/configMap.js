var map = L.map('e77_7').setView([21.529737201190642, 103.9581298828125], 8);
var layer = L.esri.basemapLayer('Streets').addTo(map);
L.esri.basemapLayer('ImageryLabels').addTo(map);