<?php
require_once 'init.php';
require_once 'classes/ProductRepository.php';

$repo = new ProductRepository(); 
$message = "";

$id = $_GET['id'] ?? null;
$product = $repo->getProductById($id);

if (!$product) {
    exit("Product not found.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $image = $_POST['image_url'];

    if ($repo->updateProduct($id, $name, $price, $desc, $image)) {
        $message = "Product updated successfully.";
        $product = $repo->getProductById($id); 
    } else {
        $message = "Update failed.";
    }
}
?>
<!-- NEW: UPDATE PRODUCT FORM -->
<h2>Edit Product</h2>
<form method="POST">
    <label>Name: <input type="text" name="name" value="<?= htmlspecialchars($product->getName()) ?>" required></label><br>
    <label>Price: <input type="number" step="0.01" name="price" value="<?= htmlspecialchars($product->getPrice()) ?>" required></label><br>
    <label>Description: <textarea name="description"><?= htmlspecialchars($product->getDescription()) ?></textarea></label><br>
    <label>Image URL: <input type="text" name="image_url" value="<?= htmlspecialchars($product->getImage()) ?>"></label><br>
    <input type="submit" value="Update Product">
</form>
<p><?= $message ?></p>
<a href="ViewProduct.php">Back to Product List</a>