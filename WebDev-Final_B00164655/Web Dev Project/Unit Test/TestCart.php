<?php
require_once 'classes/Product.php';
require_once 'classes/CartItem.php';
require_once 'classes/Cart.php';
require_once 'classes/Session.php';

Session::start(); // Needed for cart session handling

// Create Cart and Products
$cart = new Cart();
$product = new Product(3, 'Ford Mustang', 60000.0, 'Muscle car', 'ford mustang.png');

// Add Product
$cart->addProduct($product, 1);

// Tests
$items = $cart->getItems();
if (count($items) === 1) {
    echo "PASS: Cart addProduct()<br>";
} else {
    echo "FAIL: Cart addProduct()<br>";
}

if ($cart->getTotalPrice() === 60000.0) {
    echo "PASS: Cart getTotalPrice()<br>";
} else {
    echo "FAIL: Cart getTotalPrice()<br>";
}

$cart->removeProduct($product->getId());
if (count($cart->getItems()) === 0) {
    echo "PASS: Cart removeProduct()<br>";
} else {
    echo "FAIL: Cart removeProduct()<br>";
}
?>