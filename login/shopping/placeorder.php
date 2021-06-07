
<?=template_header('placeorder')?>
<?php

$con = mysqli_connect('localhost:3306','s332985_group13','Vinhquang1997');

if($con){
    echo "connection successful <br>";
}else{
    echo "no connection";
}

mysqli_select_db($con,'s332985_shoppingcart');

$user=mysqli_real_escape_string($con,$_SESSION['username']);
$q= "select * from signin where userName='$user'";



$result=mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if($num==1){
    $subject = "Darwin product information..!";
    $body = "Darwin products copy which you palce order <br>
    To know products click here -> http://s332985.spinetail.cdu.edu.au/shoppingcart/login/shopping/index.php?page=productscopy";
     $headers = "From: jackphambs@gmail.com";

     if (mail($user, $subject, $body, $headers)) {
    echo "Email has been sent the copy of product on following mail:- $user...";
   } else {
    echo "Email sending failed...";
}
}else{
    echo "Something is wrong";
}
?>
<div class=" container text-center mt-5">
    <h1>Your Order Has Been Placed</h1>
    <h2 style ="font-weight: bold; color: red;">Please check the Spam on your email to view the order.</h2>
    <hr>
    <p>Thank you for ordering with us, we'll contact you by email with your order details.</p>
<hr>
</div>
<?=template_footer()?>