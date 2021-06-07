<?php

$servername ="localhost:3306";
$username = "s332985_group13";
$password = "Vinhquang1997";
$dbname = "s332985_shoppingcart";

/* Create connection */
$conn = new mysqli($servername, $username, $password, $dbname);
/* Check connection*/
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



/* sql to create table */
$sql="CREATE TABLE IF NOT EXISTS `comments` (
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` varchar(200) NOT NULL,
	`email` text NOT NULL,
	`website` decimal(7,2) NOT NULL,
	`comment` varchar(50) NOT NULL
)"; 

if ($conn->query($sql) === TRUE) {
  echo "Successfully commented";
}
 else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>