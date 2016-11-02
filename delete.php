logo
File Manager   public_html
            
  /
  public_html
  tmp
delete.php
display.php
index.php
loraserver....
post.php
× CloseToggle fullscreen
Edit file
/public_html/delete.php

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
$sql = "DELETE FROM Display_LoraServer WHERE 1";
    if ($conn->query($sql) === TRUE) {
        echo "Delete successful";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
header('Location: index.php');
exit;
?>
