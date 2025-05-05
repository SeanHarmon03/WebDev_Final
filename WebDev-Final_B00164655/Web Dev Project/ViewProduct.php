<?php

session_start(); 
if (!isset($_SESSION['Active']) || $_SESSION['Active'] !== true) {
    header("Location: Login.php");
    exit;
}

require_once 'init.php';
require_once 'classes/ProductRepository.php';

$repo = new ProductRepository();
$products = $repo->getAllProducts();
?>

<h2>All Products</h2>
<a href="CreateProduct.php">Add New Product</a>
<table border="1" cellpadding="8">
<tr><th>ID</th><th>Name</th><th>Price</th><th>Actions</th></tr>
<?php foreach ($products as $product): ?>
    <tr>
        <td><?= $product->getId() ?></td>
        <td><?= htmlspecialchars($product->getName()) ?></td>
        <td>$<?= number_format($product->getPrice(), 2) ?></td>
        <td><?= htmlspecialchars($product->getDescription()) ?></td>
        <td>
            <img src="Images/<?= htmlspecialchars($product->getImage()) ?>" style="height: 60px;">
        </td>
        <td>
            <a href="UpdateProduct.php?id=<?= $product->getId() ?>" class="btn btn-sm btn-warning">
                Edit
            </a>
            <a href="DeleteProduct.php?id=<?= $product->getId() ?>" class="btn btn-sm btn-danger"
               onclick="return confirm('Delete this product?');">
                Delete
            </a>
        </td>
    </tr>
<?php endforeach; ?>
</table>