



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

$sql = "SELECT * FROM comments";
$result = $conn->query($sql);


echo "<h1>Comments.....!</h1>";
echo "<hr>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    echo 
    "<h3>Name :-". $row["name"]."</h3>".
    "<h3>Email :-". $row["email"]."</h3>".
    "<h3>Comment :-". $row["comment"]."</h3>".
    "<hr>"
    ; 
   
  }
} else {
  echo "0 results";
}
$conn->close();
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comment Box</title>
<style>

body{
 margin:0px;
 font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;
 }

input[type=text], select {
 width: 100%;
 border-radius: 5px;
 margin: 7px 0;
 border: 1px solid #ccc;
 padding: 14px 18px; 
 display: inline-block;
 box-sizing: border-box;
}

input[type=submit]:hover {
 background-color: #00a7d1;
}

textarea, select {
 width: 100%;
 border-radius: 5px;
 margin: 7px 0;
 border: 1px solid #ccc;
 padding: 14px 18px; 
 display: inline-block;
 box-sizing: border-box;
}

input[type=submit] {
 width: 100%;
 border: none;
 color: white;
 padding: 14px 20px;
 background-color: #01c9fb;
 margin: 8px 0;
 cursor: pointer;
 border-radius: 4px;
 
}

</style>

</head>
<body>
<h2 class="text-center">Add commets...!</h2>
<table  bgcolor="#f2f2f2" style="padding:50px; background-color: #ccc;">

<form action="" method="post">

<tr>

<td> Name : </td><td><input type="text" name="name" required></td>
</tr>
<tr>
<td> Email : </td><td><input type="text" name="email" required></td>
</tr>
<tr>
<td> Website : </td><td><input type="text" name="website" required></td>
</tr>
<tr>
<td> Comment : </td><td><textarea name="comment" rows="6" cols="50" required></textarea></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td></tr>

</form>
</table>
<?php
if(isset($_POST["submit"]))
{
 
 //Including dbconfig file.
include 'dbconfig.php';
$servername = "localhost:3306";
$username = "s332985_group13";
$password = "Vinhquang1997";/* Put your password */
$dbname = "s332985_shoppingcart";/* Put your database name */

/* Create connection */
$conn = new mysqli($servername, $username, $password, $dbname);
/* Check connection*/
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


 
$name = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["website"];
$comment = $_POST["comment"];


$sql="INSERT INTO `comments`(name,email,website,comment) VALUES ('$name','$email','$website','$comment')"; 

$query=mysqli_query($conn,$sql);

if($query){


echo '<script type="text/javascript">alert("Your comment is saved..!")</script>';
}else{
echo '<script type="text/javascript">alert("Your comment is not saved..! ")</script>';

}
}

 ?>

</body>
</html>

