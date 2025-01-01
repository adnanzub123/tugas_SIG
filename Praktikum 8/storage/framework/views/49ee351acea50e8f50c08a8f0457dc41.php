<!DOCTYPE html>
<html>
<head>
    <title>Provinsi di Indonesia</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
      * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
      }

      h1 {
            text-align: center;
            margin: 20px 0;
      }

        #map {
            height: 500px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Provinsi di Indonesia</h1>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
    var map = L.map('map').setView([-1.6363305, 115.7448055], 5.4);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap'
    }).addTo(map);

    var provinces = <?php echo json_encode($provinces, 15, 512) ?>;
    console.log(provinces);

    provinces.forEach(function(province) {
      L.marker([province.latitude, province.longitude]).addTo(map)
        .bindPopup(province.name);
    });
</script>

</body>
</html><?php /**PATH C:\xampp\htdocs\app-webku\resources\views/province.blade.php ENDPATH**/ ?>