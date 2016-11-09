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
$sql = "SELECT DevEUI, payload_hex, FPort, Time FROM Main_LoraServer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border=4 table width=1000px>
    <tr>
    <th>DevEUI</th>
    <th>Payload</th>
    <th>Port</th>
    <th>Time</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        $epoch = ((int)$row['Time']); 
        $dt = new DateTime("@$epoch");
        echo "<tr>";
        echo "<td>" . $row['DevEUI'] . "</td>"; 
        echo "<td>" . $row['payload_hex'] . "</td>"; 
        echo "<td>" . $row['FPort'] . "</td>"; 
        echo "<td>" . $dt->format('Y-m-d H:i:s') . "</td>"; 
        echo "</tr>";
    }
echo "</table>";
} 
else {
    echo "0 results";
}
$conn->close();
?>