<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost:3306';
    $DATABASE_USER = 's332985_group13';
    $DATABASE_PASS = 'Vinhquang1997';
    $DATABASE_NAME = 's332985_shoppingcart';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
    // Get the amount of items in the shopping cart, this will be displayed in the header.
    $num_items_in_cart = isset($_SESSION['cart'])? count($_SESSION['cart']) : 0;
    
echo <<<EOT



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
        crossorigin="anonymous">
	</head>
	<body>
    <header>
    <div class="content-wrapper">
        <h1 class="text-danger">Darwin Art Company</h1>
        <nav>
            <a  class="text-danger"  href="index.php">Home</a>
            <a class="text-danger" href="index.php?page=products">Products</a>
            <a  class="text-danger" href="testimonials.php">Comments</a>
            <a  class="text-danger" href="index.html">Admin_panel</a>
        </nav>
        
        <div class="link-icons">
        <a class="nav-link ml-3 text-danger" href="logout.php?=login">Logout<span class="sr-only"></span></a>
            <a href="index.php?page=cart">
                <i class="fas fa-shopping-cart"></i>
                <span>$num_items_in_cart</span></a>
           </div>
    </div>
</header>
        <main>
EOT;
}
//template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer class="text-center"  style="background: #111;>
            <div class="content-wrapper">
            <h1 class="text-white">Darwin Art Company</h1>
            <h3 class="text-white">Carey street, Darwin City, 0800</h3>
          </div>
        </footer>
        <script src="script.js"></script>
    </body>
</html>
EOT;
}
?>