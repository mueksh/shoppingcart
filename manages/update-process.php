<?php
include_once 'config.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE products set  id='" . $_POST['id'] . "',name='" . $_POST['name'] . "', rrp='" . $_POST['rrp'] . "', price='" . $_POST['price'] . "' ,quantity='" . $_POST['quantity'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM products WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>





 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="name"  value="<?php echo $row['name']; ?>">
                        </div>
                        <div class="form-group">
                            <label>RRP</label>
                            <input type="number" name="rrp" class="txtField" value="<?php echo $row['rrp']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" class="txtField" value="<?php echo $row['price']; ?>">
             </div>
                        <div class="form-group">
                            <label>Quantiy</label>
                            <input type="number" name="quantity" class="txtField" value="<?php echo $row['quantity']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Added_Date</label>
                            <input type="date" name="added" class="txtField" value="<?php echo $row['quantity']; ?>">
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>