<?php      
    $servername ="localhost:3306";
    $username = "s332985_group13";
    $password = "Vinhquang1997";
    $dbname = "s332985_shoppingcart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>  