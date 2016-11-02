<?php  
 $json = file_get_contents("php://input");
echo $json;
?>

parse_str(file_get_contents("php://input"),$post_vars);

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

$json = file_get_contents("php://input");
if (json) {
    $object = json_decode($json);
    $lrrsnr = $object->{'LrrSNR'};
    $lrrid = $object->{'Lrrid'};
    $spfact= $object->{'SpFact'};
    $subband= $object->{'SubBand'};
    $customerdata= $object->{'CustomerData'};
    $fport= $object->{'FPort'};
    $channel = $object->{'Channel'};
    $fcntup= $object->{'FCntUp'};
    $time= $object->{'Time'};
    $deveui= $object->{'DevEUI'};
    $payload_hex= $object->{'payload_hex'};
    $customerid=$object->{'CustomerID'};
    $Lrrrssi= $object->{'LrrRSSI'};
    $adrbit= $object->{'ADRbit'};
    $modelcfg= $object->{'ModelCfg'};
    $mic_hex=$object->{'mic_hex'};
    $lrrlon= $object->{'LrrLON'};
    $lrrlat= $object->{'LrrLAT'};
    $fcntdn= $object->{'FCntDn'};
    $lrcid= $object->{'Lrcid'};
    $devlrrcnt= $object->{'DevLrrCnt'};

    $sql = "INSERT INTO Display_LoraServer (DevEUI, LrrRSSI, payload_hex, Time)
    VALUES ('$DevEUI', '$LrrRSSI', '$payload_hex', '$Time')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

