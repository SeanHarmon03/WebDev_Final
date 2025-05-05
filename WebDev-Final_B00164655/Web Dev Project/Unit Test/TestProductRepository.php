<?php
require_once 'classes/Database.php';
require_once 'classes/Product.php';
require_once 'classes/ProductRepository.php';

// Connect to database
$db = new Database('localhost', 'root', 'Howimetyourmother2003!', 'asc_motors');
$db->connect();

$productRepo = new ProductRepository($db);

// Fetch products
$products = $productRepo->getAllProducts();

if (is_array($products)) {
    echo "PASS: ProductRepository getAllProducts() returns array<br>";
} else {
    echo "FAIL: ProductRepository getAllProducts() returns array<br>";
}

// Try fetching a specific product by id 1 (only if you know product with ID 1 exists)
$product = $productRepo->getProductById(1);

if ($product instanceof Product) {
    echo "PASS: ProductRepository getProductById() returns Product object<br>";
} else {
    echo "FAIL: ProductRepository getProductById() returns Product object<br>";
}

echo "ALL PRODUCT REPOSITORY TESTS COMPLETED";
?>