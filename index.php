<?php
include 'dbConfig.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Flowers Everyday!</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="viewCart.php">My Orders</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div id="background-image"></div>

    <div class="col-md-2"></div>
    
    <!--Product Catalog Starts Here-->
    <div class="col-md-9">
      <div class="row">
        <h2 class="text-center">Featured Products</h2>
        <div class="col-md-3">
          <h4>3 I Love You Roses</h4>
          <img src="img/thumb_3iloveyou_roses.jpg" alt="3 I Love You Roses" id="images"/>
          <p class="list-price text-danger">List Price: <s>₱1,000</s></p>
          <p class="price">Discount Price: ₱900</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
        </div>
        <div class="col-md-3">
          <h4>6 Love Roses</h4>
          <img src="img/thumb_6love_roses.jpg" alt="6 Love Roses" id="images"/>
          <p class="list-price text-danger">List Price: <s>₱1,000</s></p>
          <p class="price">Discount Price: ₱900</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
        </div>
        <div class="col-md-3">
          <h4>12 Ecuadorian Orange</h4>
          <img src="img/thumb_12ecuadorian_orange.jpg" alt="12 Ecuadorian Orange" id="images"/>
          <p class="list-price text-danger">List Price: <s>₱1,000</s></p>
          <p class="price">Discount Price: ₱900</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
        </div>
        <div class="col-md-3">
          <h4>12 Ecuadorian Roses</h4>
          <img src="img/thumb_12ecuadorian_roses.jpg" alt="12 Ecuadorian Roses" id="images"/>
          <p class="list-price text-danger">List Price: <s>₱1,000</s></p>
          <p class="price">Discount Price: ₱850</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
        </div>
        <div class="col-md-3">
          <h4>12 Ecuadorian White</h4>
          <img src="img/thumb_12ecuadorian_white.jpg" alt="12 Ecuadorian White" id="images"/>
          <p class="list-price text-danger">List Price: <s>₱1,000</s></p>
          <p class="price">Discount Price: ₱900</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
        </div>
        <div class="col-md-3">
          <h4>12 Valentine Special</h4>
          <img src="img/thumb_12valentine_special.jpg" alt="12 Valentine Special" id="images"/>
          <p class="list-price text-danger">List Price: <s>₱1,000</s></p>
          <p class="price">Discount Price: ₱900</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>
        </div>
        <div class="col-md-3">
          <h4>Blooming Tulips</h4>
          <img src="img/thumb_blooming_tulips.jpg" alt="Blooming Tulips" id="images"/>
          <p class="list-price text-danger">List Price: <s>₱1,000</s></p>
          <p class="price">Discount Price: ₱750</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>          
        </div>
        <div class="col-md-3">
          <h4>Sunflower Bouquet</h4>
          <img src="img/thumb_sunflower.jpg" alt="Sunflower Bouquet" id="images"/>
          <p class="list-price text-danger">List Price: <s>₱1,000</s></p>
          <p class="price">Discount Price: ₱800</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
        </div>
      </div>

      <footer class="text-center" id="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Airris Jane Company, Inc.</p>
      </footer>

    </div>

    <?php include 'details-modal-thumb_3iloveyou_roses.php';
          include 'details-modal-thumb_6love_roses.php';
          include 'details-modal-thumb_12ecuadorian_orange.php';
          include 'details-modal-thumb_12ecuadorian_roses.php';
          include 'details-modal-thumb_12ecuadorian_white.php';
          include 'details-modal-thumb_12valentine_special.php';
          include 'details-modal-thumb_blooming_tulips.php';
          include 'details-modal-thumb_sunflower.php';
    ?>       
		 
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
  </body>
</html>
