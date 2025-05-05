<?php
require_once 'classes/Product.php';

// Create a Product
$product = new Product(1, 'BMW M3', 75000.0, 'Performance car', 'bmw.png');

// Tests
if ($product->getName() === 'BMW M3') {
    echo "PASS: Product getName()<br>";
} else {
    echo "FAIL: Product getName()<br>";
}

if ($product->getPrice() === 75000.0) {
    echo "PASS: Product getPrice()<br>";
} else {
    echo "FAIL: Product getPrice()<br>";
}

if ($product->getDescription() === 'Performance car') {
    echo "PASS: Product getDescription()<br>";
} else {
    echo "FAIL: Product getDescription()<br>";
}

if ($product->getImage() === 'bmw.png') {
    echo "PASS: Product getImage()<br>";
} else {
    echo "FAIL: Product getImage()<br>";
}
?>