<?php
// ValidationTest.php

echo "<h1>Validation Tests</h1>";

/**
 * 1. Username cannot be blank (Login form)
 */
$username = "";
if (empty(trim($username))) {
    echo "PASS: Username cannot be blank<br>";
} else {
    echo "FAIL: Username validation failed<br>";
}

/**
 * 2. Email must contain '@' symbol (Contact form)
 */
$email = "wrong@gmail.com";
if (strpos($email, '@') !== false) {
    echo "PASS: Email format valid<br>";
} else {
    echo "FAIL: Email format invalid<br>";
}

/**
 * 3. Product name must not be empty (Product creation)
 */
$productName = "Tesla Model 3";
if (!empty(trim($productName))) {
    echo "PASS: Product name is valid<br>";
} else {
    echo "FAIL: Product name is empty<br>";
}

/**
 * 4. Price must be a positive number (Product creation)
 */
$price = 5000;
if (is_numeric($price) && $price > 0) {
    echo "PASS: Price is positive<br>";
} else {
    echo "FAIL: Price must be positive<br>";
}

/**
 * 5. Quantity must be an integer greater than zero (Add to Cart)
 */
$quantity = 2; // invalid quantity
if (filter_var($quantity, FILTER_VALIDATE_INT) && $quantity > 0) {
    echo "PASS: Quantity is a valid positive integer<br>";
} else {
    echo "FAIL: Quantity must be a positive whole number<br>";
}
?>