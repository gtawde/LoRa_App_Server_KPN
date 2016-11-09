<?php 
function HexStringToByteArray($str) {
    $bytearray = [];
    $hexarray = str_split($str, 2);
    for ($i = 0; $i < count($hexarray); $i++) {
        $bytearray[] = dechex(hexdec($hexarray[$i]));
    }
    return $bytearray;
}
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
    var_dump($json);
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
    //$payload_hex = implode(" ",HexStringToByteArray($mic_hex));
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

    $sql = "INSERT INTO Main_LoraServer (DevEUI, LrrRSSI, payload_hex, Time, LrrSNR, Lrrid, SubBand, FPort, Channel, FCntUp, CustomerID, ADRbit, ModelCfg, mic_hex, LrrLON, LrrLAT, FCntDn, Lrcid, DevLrrCnt, SpFact) VALUES ('$deveui', '$lrrrssi', '$payload_hex', '$time', '$lrrsnr','$lrrid', '$subband', '$fport', '$channel', '$fcntup', '$customerid', '$adrbit', '$modelcfg', '$michex', '$lrrlon', '$lrrlat', '$fcntdn', '$lrcid', '$devlrrcnt', '$spfact')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully in Main_LoraServer";
    header("HTTP/1.0 200 OK");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>