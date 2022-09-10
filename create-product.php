<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIPQB33lx2a4f7fc29V4dJmUWz6QACKXdoGxpS7ZtkwCs4TswTXD0zCOSlRwsjYdaz6aPn4dV2cQFRSdoJ3f7500CEscLoKA'
);

$product1 = $stripe->products->create([
  'name' => 'Nami Action Figurine',
]);
$product2 = $stripe->products->create([
  'name' => 'Zoro Action Figurine',
]);
$product3 = $stripe->products->create([
  'name' => 'Sanji Action Figurine',
]);
$product4 = $stripe->products->create([
  'name' => 'Chopper Action Figurine',
]);

var_dump($product1, $product2, $product3, $product4);
