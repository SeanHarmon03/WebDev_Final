<?php
require_once 'init.php';
require_once 'classes/ProductRepository.php';
$message = "";

$repo = new ProductRepository();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? 0;
    $desc = $_POST['description'] ?? '';
    $image = $_POST['image_url'] ?? '';

    if ($repo->addProduct($name, $price, $desc, $image)) {
        $message = "Product added successfully.";
    } else {
        $message = "Failed to add product.";
    }
}
?>
<!-- new product form -->
<h2>Create Product</h2>
<form method="POST">
    <label>Name: <input type="text" name="name" required></label><br>
    <label>Price: <input type="number" step="0.01" name="price" required></label><br>
    <label>Description: <textarea name="description"></textarea></label><br>
    <label>Image URL: <input type="text" name="image_url"></label><br>
    <input type="submit" value="Add Product">
</form>
<p><?= $message ?></p>
<a href="ViewProduct.php">View All Products</a>