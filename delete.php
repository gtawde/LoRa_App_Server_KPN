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
$sql = "DELETE FROM Main_LoraServer WHERE 1";
    if ($conn->query($sql) === TRUE) {
        echo "Delete successful";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
header('Location: index.php');
exit;
?>