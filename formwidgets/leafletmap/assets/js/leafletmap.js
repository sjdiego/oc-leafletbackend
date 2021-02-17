'use strict';

function initializeMap(mapField, valueField) {
    let leafletMap = L.map(mapField.id),
        locateMap  = valueField.value.split(','),
        zoom = 13,
        markerMap  = L.icon({
            iconUrl: '/plugins/rw/leafletbackend/formwidgets/leafletmap/assets/leaflet/images/marker-icon.png',
            iconSize: [38, 53],
            iconAnchor: [15, 50]
        });

    if (locateMap.length !== 2) {
        locateMap = [39.5756, 2.6536]; // TODO: make settable by config (it's Palma!)
        zoom = 8;
    }

    leafletMap.setView(locateMap, zoom);

    L.tileLayer.provider('CartoDB.Positron').addTo(leafletMap);
    var marker = L.marker(locateMap, { icon: markerMap }).addTo(leafletMap);

    leafletMap.on('click', function (e) {
        marker.setLatLng(e.latlng);
        valueField.value = e.latlng.lat + ',' + e.latlng.lng;
    });
}
