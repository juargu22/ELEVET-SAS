// seccion MAPA. se utiliza la libreria leaflet

var map = L.map('mapa').setView([4.438452, -75.217679], 16);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);