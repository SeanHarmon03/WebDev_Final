<?php
require_once 'classes/Product.php';
require_once 'classes/CartItem.php';

// Create Product and CartItem
$product = new Product(2, 'Tesla Model 3', 50000.0, 'Electric car', 'tesla model3.png');
$cartItem = new CartItem($product, 2);

// Tests
if ($cartItem->getQuantity() === 2) {
    echo "PASS: CartItem getQuantity()<br>";
} else {
    echo "FAIL: CartItem getQuantity()<br>";
}

$cartItem->increaseQuantity(3);
if ($cartItem->getQuantity() === 5) {
    echo "PASS: CartItem increaseQuantity()<br>";
} else {
    echo "FAIL: CartItem increaseQuantity()<br>";
}

if ($cartItem->getTotalPrice() === 250000.0) {
    echo "PASS: CartItem getTotalPrice()<br>";
} else {
    echo "FAIL: CartItem getTotalPrice()<br>";
}
?>