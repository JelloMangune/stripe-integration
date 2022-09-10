<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIPQB33lx2a4f7fc29V4dJmUWz6QACKXdoGxpS7ZtkwCs4TswTXD0zCOSlRwsjYdaz6aPn4dV2cQFRSdoJ3f7500CEscLoKA'
);

$checkout_session = $stripe->checkout->sessions->create([
    'success_url' => 'https://buy.stripe.com/test_14k3cV36q0LN2g89AA',
    'cancel_url' => 'https://example.com/cancel',
    'line_items' => [
      [
        'price' => 'price_1LgK4IB33lx2a4f7d3Q9CdGA',
        'quantity' => 1,
      ],
    ],
    'mode' => 'payment',
  ]);
var_dump($checkout_session['success_url']);