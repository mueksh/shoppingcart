<?php
error_reporting(0);
?>
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

  $msg = "";
 
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {

    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $rrp=$_POST['rrp'];
    $quantity=$_POST['quantity'];
    $date_added=$_POST['date_added'];
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "imgs/".$filename;
         
    
 
        // Get all the submitted data from the form
        $sql="INSERT INTO `products`
     (`name`,`description`,`price`,`rrp`,`quantity`,`img`,`date_added`)
     VALUES('$name','$description','$price','$rrp','$quantity','$filename','$date_added')";
 
        // Execute query
        mysqli_query($conn, $sql);
         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            header('location:http://s332985.spinetail.cdu.edu.au/shoppingcart/login/shopping/adminpages/manageitem.php');
        }else{
            echo "Failed to upload image";
      }
  }
?>