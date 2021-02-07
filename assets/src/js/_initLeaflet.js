/* eslint-disable linebreak-style */
class Leaflet {
	constructor() {
		this.scriptLeaflet = document.createElement('script');
		this.scriptLeaflet.src = 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js';
		this.scriptLeaflet.integrity = 'sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==';
		this.scriptLeaflet.crossOrigin = '';
		this.init();

		// eslint-disable-next-line no-undef
		this.mapEx = L.map('map', {
			center: [59.229428, 39.905113],
			zoom: 16.5,
			zoomControl: true,
			touchZoom: false,
			doubleClickZoom: false,
			scrollWheelZoom: false,
			boxZoom: false,
			keyboard: false,
			dragging: false
		});
		// eslint-disable-next-line no-undef
		this.mapMarker = L.icon({
			iconUrl: 'https://excavator35.ru/wp-content/themes/excavator35/assets/dist/img/map-marker.png',
			iconSize: [106, 106], // size of the icon
			iconAnchor: [45, 120], // point of the icon which will correspond to marker's location
			popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
		});
		this.run();
	}

	init() {
		document.getElementsByTagName('head')[0].appendChild(this.scriptLeaflet);
	}

	run() {
		// eslint-disable-next-line no-undef
		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(this.mapEx);
		// eslint-disable-next-line no-undef
		L.marker([59.229428, 39.905113], {
			icon: this.mapMarker
		}).addTo(this.mapEx);
	}
}

export default Leaflet;
