<?php
$servername = "localhost";
$username = "id127051_gct_imemyself";
$password = "Football123";
$dbname = "id127051_loraserver";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT DevEUI, payload_hex, LrrLAT, LrrLON, Time FROM Main_LoraServer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $deveui =  $row['DevEUI']; 
        $payload = $row['payload_hex']; 
        $lat = $row['LrrLAT'];
        $lon = $row['LrrLON']; 
        $time =  $row['Time'];
    }
} 
$conn->close();
?>
<!DOCTYPE html>
<html>

<body>

<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(<?php echo $lat?>, <?php echo $lon?>);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 7};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);

  var infowindow = new google.maps.InfoWindow({
    content: "<?php echo $payload?>"
  });
  infowindow.open(map,marker);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

</body>
</html>