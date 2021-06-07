<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Admin Home</title>
  </head>
  <body>
  
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand text-primary" href="#" disabled><h3>Darwin Art Company</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adminhome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/shoppingcart/login/shopping/inputform.php">Add</a>
        </li>
        
        
</div>
<div class="dropdown mt-1 ml-3">
  <button class="dropbtn">work</button>
  <div class="dropdown-content">
    <a href="about.php">About</a>
    <a href="orders.php">Orders</a>
    <a href="manageitem.php">Manage</a>
  </div>

    </div>

      </ul>
      <form class="d-flex">
              <a class="nav-link active mr-3" aria-current="page" href="/shoppingcart/login/shopping/">Logout</a>
      </form>
    </div>
  </div>
</nav>


<!-- Add the process.php to handle the admin action including EDIT OR DELETE -->
<?php require_once 'process.php'; ?>

<!-- Form for Edit -->
<div class="modal fade" id="basicExample">
		<div class="modal-dialog">
			<div class="modal-content">

				<header class="head-form mb-0">
					<h2 id="header-title">PRODUCT DETAIL</h2>
				</header>

				<!-- Modal body -->
				<div class="modal-body">

					<form action="process.php" method="POST">
            <!-- Create the function for Update button -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="	fa fa-qrcode"></i></span>
								</div>
								<input type="text" name="name" class="form-control input-sm" value= "<?php echo $name; ?>"
									placeholder="Product Name">
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-keyboard-o"></i></span>
								</div>
								<input type="text" name="description" class="form-control input-sm" value= "<?php echo $description; ?>"
									placeholder="Product Description">
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-money"></i></span>
								</div>
								<input type="text" name="price" class="form-control input-sm" value= "<?php echo $price; ?>"
									placeholder="Price">
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-money"></i></span>
								</div>
								<input type="text" name="rrp" class="form-control input-sm" value= "<?php echo $rrp; ?>"
									placeholder="RRP">
							</div>
						</div>

            <div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-search"></i></span>
								</div>
								<input type="text" name="quantity" class="form-control input-sm" value= "<?php echo $quantity; ?>" 
									placeholder="Quantity">
							</div>
						</div>

            <div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-file-image-o"></i></span>
								</div>
								<input type="text" name="img" class="form-control input-sm" value= "<?php echo $img; ?>"
									placeholder=" Product Image">
							</div>
						</div>
            
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
								<input type="text" name="date_added" class="form-control" value= "<?php echo $date_added; ?>"
									placeholder="Date">
							</div>
						</div>
            
            <!-- Modal footer -->
            <div class="modal-footer" id="modal-footer">
              <button type = "submit" class="btn btn-info" name="update">Update</button>
              <button id="btnDong" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
					</form>
				</div>

			</div>
		</div>
	</div>
<!-- End form for Edit -->

<!-- Display the message for user after the action successful -->
<?php 
  if(isset($_SESSION['deleteActionMessage'])): ?>

<div class="alert alert-<?=$_SESSION['deleteTypeActionMessage']?>">
  <?php
    echo $_SESSION['deleteActionMessage']; // display the message
    unset($_SESSION['deleteActionMessage']); //disappear the delete message  after the page re-load
  ?>    
</div>
<?php endif ?>


<!-- Connect to the database -->
<?php      
    $servername ="localhost:3306";
    $username = "s332985_group13";
    $password = "Vinhquang1997";
    $dbname = "s332985_shoppingcart";

  // Create connection
  $mysqli = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }

  $result = $mysqli ->query("SELECT * FROM products") or die("$mysqli->error");
  // to pull the data from database phpadmin -> create the while loop to pull all of data

?>  


<!-- Display all of the product detail on database -->
<div class = "container">
<div class="row justify-content-center">
    <table class="table">
      <thread>
        <tr>
          <th>Product ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>RRP</th>
          <th>Quantity</th>
          <th>Img</th>
          <th>Date_added</th>
          <th>Action</th>
        </tr>
      </thread>
    <!-- Get the data from phpadmin database and display it in the table  -->

<div class="mt-5 mb-3 clearfix">
    <h2 class="pull-left">Products List</h2>
    <a href="/shoppingcart/login/shopping/inputform.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New product</a>
</div>
<?php
  while ($row = $result->fetch_assoc()): ?>
    <tr>
        <th><?php echo $row['id']?></th>
        <th><?php echo $row['name']?></th>
        <th><?php echo $row['description']?></th>
        <th><?php echo $row['price']?></th>
        <th><?php echo $row['rrp']?></th>
        <th><?php echo $row['quantity']?></th>
        <th> <img src="/shoppingcart/login/shopping/imgs/<?=$row['img']?>" width="100" height="100"> </th>
        <th><?php echo $row['date_added']?></th>
        <th>
          <a href= "manageitem.php?edit=<?php echo $row['id'];?>" 
            class= "btn btn-primary" >Select</a>
            <a  href= "process.php?delete=<?php echo $row['id']; ?>"
            class= "btn btn-danger">Delete</a>
        </th>
      </tr>
  <?php endwhile; ?>
</table>
<?php
if($select == true):
?>

<a class= "btn btn-primary" data-toggle="modal" data-target="#basicExample" >Edit</a>
<?php endif ; ?>

</div>
</div>

<?php
 function pre_r($array){
  echo '<pre>';
  print_r($array);
  echo '<pre>';
}
?>


  



  
<style>
  body{
	width:100%;
	height:93vh;
	background-color:skyblue;
	background-size: cover;
	color: white; 
}

.bg-primary{
	background: #009688!important;
}

* Dropdown Button */
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}


  </style>
  
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>
<a href="inputform.php"></a>