<?php
// include database configuration file
include 'dbConfig.php';

// initializ shopping cart class
include 'cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID
//$query = $db->query("SELECT * FROM customers WHERE cust_id = ".$_SESSION['sessCustomerID']);
$query = $db->query("SELECT * FROM customers LIMIT 0, 1");
$custRow = $query->fetch_assoc();

$_SESSION['sessCustomerID'] = $custRow['cust_id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Flowers Everyday!</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">

</head>
<body>

    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Flowers Everyday</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="viewCart.php">My Orders</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div id="background-image"></div>

    <div class="col-md-2"></div>
    
<div class="container">
        <h1>Order Preview</h1>
        <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($cart->total_items() > 0){
                //get cart items from session
                $cartItems = $cart->contents();
                foreach($cartItems as $item){
            ?>
            <tr>
                <td><?php echo $item["name"]; ?></td>
                <td><?php echo '₱'.$item["price"].' PHP'; ?></td>
                <td><?php echo $item["qty"]; ?></td>
                <td><?php echo '₱'.$item["subtotal"].' PHP'; ?></td>
            </tr>
            <?php } }else{ ?>
            <tr><td colspan="4"><p>No items in your cart......</p></td>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"></td>
                <?php if($cart->total_items() > 0){ ?>
                <td class="text-center"><strong>Total <?php echo '₱'.$cart->total().' PHP'; ?></strong></td>
                <?php } ?>
            </tr>
        </tfoot>
        </table>
        <div class="shipAddr">
            <h4>Shipping Details: Cash on Delivery</h4>
            <p>Name: <?php echo $custRow['name']; ?></p>
            <p>Email: <?php echo $custRow['email']; ?></p>
            <p>Phone: <?php echo $custRow['phone']; ?></p>
            <p>Address: <?php echo $custRow['address']; ?></p>
        </div>
        <div class="footBtn">
            <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a>
            <a href="cartAction.php?action=placeOrder" class="btn btn-success orderBtn">Place Order <i class="glyphicon glyphicon-menu-right"></i></a>
        </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>

</body>
</html>