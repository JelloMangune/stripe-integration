<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIPQB33lx2a4f7fc29V4dJmUWz6QACKXdoGxpS7ZtkwCs4TswTXD0zCOSlRwsjYdaz6aPn4dV2cQFRSdoJ3f7500CEscLoKA'
);

$sub_product = $stripe->products->create([
    'name' => 'Starter Subscription',
    'description' => '$200/Month subscription',
  ]);

echo "Successfully Subscribed! Here is your starter subscription product id: " . $sub_product->id . "\n";

$price = $stripe->prices->create([
    'unit_amount' => 20000,
    'currency' => 'usd',
    'recurring' => ['interval' => 'month'],
    'product' => $sub_product['id'],
  ]);

echo "Success! Here is your premium subscription price id: " . $price->id . "\n";