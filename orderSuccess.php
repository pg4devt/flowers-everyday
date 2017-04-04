<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
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
<<<<<<< HEAD:orderSuccess.php
                <li><a href="index.php">Home</a></li>
                <li><a href="viewCart.php">My Orders</a></li>
=======
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="#order">My Orders</a></li>
                <li><a href="#contact">Contact</a></li>
>>>>>>> 1bc8d56c07416db317ed15e36280e797fdf39ca6:terms.html
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
<<<<<<< HEAD:orderSuccess.php

    <div id="background-image"></div>

    <div class="col-md-2"></div>
=======
    
    <div class="container">
    </div>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Airris Jane Company, Inc. &middot; 
        </p>
      </footer>
>>>>>>> 1bc8d56c07416db317ed15e36280e797fdf39ca6:terms.html

<div class="container">
    <h1>Order Status</h1>
    <p>Your order has been submitted successfully. Your Order ID is #<?php echo $_GET['id']; ?></p>
</div>

    <div class="col-md-2"></div>
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>

</body>

</html>
