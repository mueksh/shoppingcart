<?php
session_start(); 

$mysqli = new mysqli('localhost:3306', 's332985_group13', 'Vinhquang1997','s332985_shoppingcart');

$id = 0;
$name = '';
$description = ''; 
$price= ''; 
$rrp= ''; 
$quantity= ''; 
$img= ''; 
$date_added= ''; 
$select = false;
// Handle when the user click the "Delete" button.
if(isset($_GET['delete'])){
    $id = $_GET['delete']; // get the id of product from delete button
    $mysqli ->query("DELETE FROM products WHERE id=$id");
    
    // set the alert for user after the delete action.
    $_SESSION['deleteActionMessage'] = "The product item has been deleted";
    $_SESSION['deleteTypeActionMessage'] = 'danger';

    header("location: manageitem.php");
}

// Handle when the user click the "Edit" button.
if(isset($_GET['edit'])){
    $id = $_GET['edit']; // get the id of product from edit the detail
    $select = true;
    $result= $mysqli-> query("SELECT * FROM products WHERE id=$id");
    $num= mysqli_num_rows($result);
    // if the user select any product from the product list -> count = 1
    if($num==1)
    {
        $row = $result->fetch_array();
        $name= $row['name'];
        $desc= $row['desc'];
        $price= $row['price'];
        $rrp= $row['rrp'];
        $quantity= $row['quantity'];
        $img= $row['img'];
        $date_added= $row['date_added'];
    }
}


if(isset($_POST['update']))
{
    
 $mysqli ->query("UPDATE products set  id='" . $_POST['id'] . "',name='" . $_POST['name'] . "',description='" . $_POST['description'] . "', rrp='" . $_POST['rrp'] . "', price='" . $_POST['price'] . "' ,quantity='" . $_POST['quantity'] . "' WHERE id='" . $_POST['id'] . "'") or die($mysqli->error());
   
    $_SESSION['deleteActionMessage'] = "The detail of product have been update";
    $_SESSION['deleteTypeActionMessage'] = 'warning';

    header("location: manageitem.php");
}

?>