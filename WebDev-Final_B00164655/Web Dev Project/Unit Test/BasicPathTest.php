<?php
require_once 'classes/Product.php';
require_once 'classes/Cart.php';
require_once 'classes/Session.php';

Session::start();
$cart = new Cart();

echo "<h2>Basis Path Testing</h2>";

/**
 * Path 1: Product exists and quantity valid
 */
$productExists = true;
$quantity = 2;

if ($productExists) {
    if ($quantity > 0) {
        echo "PASS: Path 1 - Product added to cart<br>";
    } else {
        echo "FAIL: Path 1 - Quantity invalid<br>";
    }
} else {
    echo "FAIL: Path 1 - Product not found<br>";
}

/**
 * Path 2: Product exists but isnt valid 
 */
$productExists = true;
$quantity = -1;

if ($productExists) {
    if ($quantity > 0) {
        echo "FAIL: Path 2 - Quantity should be invalid<br>";
    } else {
        echo "PASS: Path 2 - Quantity invalid detected<br>";
    }
} else {
    echo "FAIL: Path 2 - Product not found<br>";
}

/**
 * Path 3: Product does not exist
 */
$productExists = false;
$quantity = 3;

if ($productExists) {
    if ($quantity > 0) {
        echo "FAIL: Path 3 - Product incorrectly exists<br>";
    } else {
        echo "FAIL: Path 3 - Product exists but quantity invalid<br>";
    }
} else {
    echo "PASS: Path 3 - Product not found error shown<br>";
}

?>