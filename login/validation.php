

<?php

session_start();


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
    $_SESSION['username']=$user;
     header('location:shopping/index.php');
}else{
    
header('location:http://localhost/shoppingcart/login/login.php');

}

?>