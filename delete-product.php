<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIPQB33lx2a4f7fc29V4dJmUWz6QACKXdoGxpS7ZtkwCs4TswTXD0zCOSlRwsjYdaz6aPn4dV2cQFRSdoJ3f7500CEscLoKA'
);

$delete_product = $stripe->products->delete(
    'prod_MP82S3vFvgCzL4',
    []
  );

var_dump($delete_product);
