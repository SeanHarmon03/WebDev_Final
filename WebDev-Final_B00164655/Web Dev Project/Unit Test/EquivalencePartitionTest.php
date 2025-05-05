<?php
require_once 'classes/Product.php';
require_once 'classes/Session.php';
require_once 'classes/Cart.php';

Session::start();

echo "<h2>Equivalence Partition Testing</h2>";

/**
 * Test 1: Quantity must be a positive integer
 */
$quantity = 1; 
echo ($quantity > 0 && filter_var($quantity, FILTER_VALIDATE_INT)) ? "PASS: Quantity Valid<br>" : "FAIL: Quantity Invalid<br>";

/**
 * Test 2: Product ID must be positive integer
 */
$productId = 5; 
echo ($productId > 0 && filter_var($productId, FILTER_VALIDATE_INT)) ? "PASS: Product ID Valid<br>" : "FAIL: Product ID Invalid<br>";

/**
 * Test 3: Session must be active
 */
if (Session::get('')) {
    echo "PASS: User Session Active<br>";
} else {
    echo "FAIL: User Session Inactive<br>";
}

/**
 * Test 4: Email must contain '@' and '.'
 */
$email = "testuser@.com"; 
echo (strpos($email, '@') !== false && strpos($email, '.') !== false) ? "PASS: Email Valid<br>" : "FAIL: Email Invalid<br>";

/**
 * Test 5: Price must be greater than 0
 */
$price = 100; 
echo ($price > 0) ? "PASS: Price Valid<br>" : "FAIL: Price Invalid<br>";

?>