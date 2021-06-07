<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "img";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
<input type="text" name="name" id="name" placeholder="Name of the product" required /><br>



<input type="text" name="desc" id="desc" placeholder="Features of product" required/><br>


<input type="text" name="price" id="price" placeholder="Price of product" required/><br>


<input type="number" name="rrp" id="rrp" placeholder="rrp of product" required/><br>


<input type="number" name="quantity" id="quntity" placeholder="Quantity of product" required/><br>

<input type="date" name="date_added" id="date_added" placeholder="Date of product added" required/><br>



    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>