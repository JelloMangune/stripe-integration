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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product Name: <?php echo $retrieve_product['name'] ?> </h1>
    <h1>Description: <?php echo $retrieve_product['description'] ?> </h1>
    <img src="<?php echo $retrieve_product['images'][0] ?>">
    <h1>Price : <?php echo strtoupper($price->currency); ?> <?php echo number_format((float)$price->unit_amount_decimal/100, 2, '.', '') ;?></h1>
    <form action="create-checkout-session.php" method="POST">
        <button type="submit" id="checkout-button">Checkout</button>
    </form>
</body>
</html>
