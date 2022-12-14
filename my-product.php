<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIPQB33lx2a4f7fc29V4dJmUWz6QACKXdoGxpS7ZtkwCs4TswTXD0zCOSlRwsjYdaz6aPn4dV2cQFRSdoJ3f7500CEscLoKA'
);
$retrieve_product = $stripe->products->retrieve(
    'prod_MP8Kiep277CX7M',
    []
);
$price = $stripe->prices->retrieve('price_1LgK4IB33lx2a4f7d3Q9CdGA',[]);

#var_dump($retrieve_product['name'], $retrieve_product['description'], $retrieve_product['images'][0], $price);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>One Piece Merchs</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
        <strong style="color:#F56C5A;">One Piece Merchs</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="#">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="#">Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="#">Contact Us
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="#">About Us
            </a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons" style="margin-left:150px;">
          <li class="nav-item">
            <a class="nav-link waves-effect">
              <span class="badge red z-depth-1 mr-1"> 1 </span>
              <i class="fas fa-shopping-cart">Cart</i>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link waves-effect" target="_blank">
              <i class="fas fa-envelope">Inbox</i>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link waves-effect" target="_blank">
              <i class="fas fa-user-alt">Profile</i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">
      <!--Grid row-->
      <div class="row wow fadeIn">
        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <img src="<?php echo $retrieve_product['images'][0]; ?>" class="img-fluid" style="height:500px;">
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <!--Content-->
          <div class="p-4">
            <div class="mb-3">
              <h1 style="font-size:52px;"><?php echo $retrieve_product['name'] ?></h1>
            </div>
            <p>
              <span style="font-size:32px; background-color:red;color:white;padding:10px;"><b><?php echo strtoupper($price->currency); ?> <?php echo number_format((float)$price->unit_amount_decimal/100, 2, '.', '') ;?></b></span>
            </p>
            <p class="lead font-weight-bold" style="font-size:24px;"><i>Description</i></p>
            <p style="font-size:24px;"><?php echo $retrieve_product['description'] ?></p>
            <form class="d-flex justify-content-left" action="create-checkout-session.php" method="POST">
              <!-- Default input -->
              <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px" disabled>
              <button class="btn btn-primary btn-md my-0 p" type="submit" style="margin-left:20px">Checkout
                <i class="fas fa-wallet ml-1"></i>
              </button>
            </form>
          </div>
          <!--Content-->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->

  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
    <hr class="my-4">
    <!--Copyright-->
    <div class="footer-copyright py-3"><b>
      Follow
      <a href="#" target="_blank">@OnePieceMerchs</a>
      for more awesome figurines</b>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>

