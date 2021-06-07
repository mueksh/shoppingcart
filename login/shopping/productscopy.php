<?php
// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
    // Set the post variables so we easily identify them, also make sure they are integer
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    // Prepare the SQL statement, we basically are checking if the product exists in our databaser
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_POST['product_id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if ($product && $quantity > 0) {
        // Product exists in database, now we can create/update the session variable for the cart
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                // Product exists in cart so just update the quanity
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                // Product is not in cart so add it
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            // There are no products in cart, this will add the first product to cart
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }
    // Prevent form resubmission...
    header('location:index.php?page=cart');
    exit;
}
// Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}

// Update product quantities in cart if the user clicks the "Update" button on the shopping cart page
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    // Loop through the post data so we can update the quantities for every product in cart
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            // Always do checks and validation
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Update new quantity
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    // Prevent form resubmission...
    header('location:index.php?page=cart');
    exit;
}

// Send the user to the place order page if they click the Place Order button, also the cart should not be empty
if (isset($_POST['mail']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: index.php?page=mail');
    exit;
}

// Check the session variable for products in cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// If there are products in cart
if ($products_in_cart) {
    // There are products in the cart so we need to select those products from the database
    // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id IN (' . $array_to_question_marks . ')');
    // We only need the array keys, not the values, the keys are the id's of the products
    $stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Calculate the subtotal
    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['id']];
      
    }
}

?>

    <html>
<head>

<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
        crossorigin="anonymous">
<title>email</title>
</head>
<body>
<form method="post">
<div class="container card mt-5 text-white">
<div class="container text-center cart content-wrapper">
    <h1>Shopping Cart</h1>
    <p >A copy which you placed a order on DARWIN ART shope......!!</p> 
   
        <table>
            <thead>
                <tr>
                    <td colspan="2">Product</td>
                    <td >Price</td>
                    <td >Quantity</td>
                    <td>Total</td>
                    
                </tr>
            </thead>
    
            <tbody>
                <?php if (empty($products)): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">You have no products added in your Shopping Cart</td>
                </tr>
                <?php else: ?>
                <?php foreach ($products as $product): ?>
                <div>
                <tr>
                    <td class="img">
                        <a href="index.php?page=product&id=<?=$product['id']?>">
                            <img class="ml-3" src="imgs/<?=$product['img']?>" width="50" height="50" alt="<?=$product['name']?>">
                        </a>
                    </td>
                    <td>
                        <p <?=$product['id']?>><?=$product['name']?></p>
                        <br>
                       
                    </td>
                    <td class="price">&dollar;<?=$product['price']?></td>
                    <td class="quantity">
                    <input style="width:20px" name="desabled" value="<?=$products_in_cart[$product['id']]?>"  min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required disabled>
                    </input>
                    <td class="price">&dollar;<?=$product['price'] * $products_in_cart[$product['id']]?>
                    
                    
                    </td>
                    

                </tr>
                </div>
                
            
                <?php endforeach; ?>
                
                <?php endif; ?>
            </tbody>
        </table>
        <div style="left:200px" class="subtotal">
            <span class="text">Subtotal</span>
         <span class="price">&dollar;<?=$subtotal?></span>
        </div> 
    
</div>
</div>
</form>

<style>

    .card{

background:#4e5c70;

    }

.cart h1 {
	font-size: 40px;
    color:white;

	width: 100%;
}
.cart table {
	width: 100%;
}
.cart table thead td {
	padding: 30px 0;
	border-bottom: 1px solid #EEEEEE;
}
.cart table thead td:last-child {
	text-align: right;
}
.cart table tbody td {
	padding: 7px 0;
	border-bottom: 1px solid #EEEEEE;
}
.cart table tbody td:last-child {
	text-align: right;
}
.cart table .img {
	width: 80px;
}

.cart table .price {
	color: #999999;
}
.cart table a {
	text-decoration: none;
	color: #555555;
}
.cart table input[type="number"] {
	width: 68px;
	padding: 10px;
	border: 1px solid rgb(219, 120, 120);
	color: #555555;
	border-radius: 5px;
}
.cart .subtotal {
	text-align: right;
	padding: 40px 0;
}
.cart .subtotal .text {
	padding-right: 40px;
	font-size: 18px;
}
.cart .subtotal .price {
	font-size: 18px;
	color: #999999;
}

</style>


</body>
</html>