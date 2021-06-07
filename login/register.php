/*creating database*/
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Creating a connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Creating a database named newDB
$sql = "CREATE DATABASE IF NOT EXISTS shoppingcart";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully with the name newDB";
} else {
    echo "Error creating database: " . $conn->error;
}

// closing connection
$conn->close();
?>



<?php
$servername = "localhost";
$username = "root";
$password = "";/* Put your password */
$dbname = "shoppingcart";/* Put your database name */

/* Create connection */
$conn = new mysqli($servername, $username, $password, $dbname);
/* Check connection*/
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql="CREATE TABLE IF NOT EXISTS signin
(id int(255) not null auto_increment primary key,
name varchar(255) not null,
userName varchar(255) not null,
title varchar(255),
address varchar(255),
city varchar(255),
state varchar(255),
country varchar(255),
postCode int(255),
phone int(255),
password varchar(255) not null)";

if ($conn->query($sql) === TRUE) {

  header('location:shopping/index.php');

}
else {
  echo "Error creating table: " . $conn->error;
}


/* sql to create table */
$sql="CREATE TABLE IF NOT EXISTS `products` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(200) NOT NULL,
	`desc` text NOT NULL,
	`price` decimal(7,2) NOT NULL,
	`rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
	`quantity` int(11) NOT NULL,
	`img` text NOT NULL,
	`date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
)"; 

if ($conn->query($sql) === TRUE) {
  header('location:shopping/index.php');
}
 else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>





<?php


session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}else{
    echo "no connection";
}

mysqli_select_db($con,'shoppingcart');

$name=$_POST['name'];
$user=$_POST['user'];
$title=$_POST['title'];
$address=$_POST['address'];
$city=$_POST['city'];
$states=$_POST['states'];
$country=$_POST['country'];
$code=$_POST['code'];
$phone=$_POST['phone'];
$password=$_POST['password'];

$q= "select * from signin where userName='$user' && password='$password'";

$result=mysqli_query($con,$q);

$num= mysqli_num_rows($result);


if($num==1){
    echo "duplicate data";
}else{

    $qy="insert into signin(name,userName,title,address,city,state,country,postCode,phone,password) 
    values('$name','$user','$title','$address','$city','$states','$country','$code','$phone',
    '$password')";
    mysqli_query($con,$qy);
}


?>