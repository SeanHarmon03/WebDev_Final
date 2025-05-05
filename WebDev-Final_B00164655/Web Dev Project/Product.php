<?php
 require_once 'init.php';                                    
if (!isset($_SESSION['Active']) || $_SESSION['Active'] !== true) {
    header("Location: Login.php");                             
    exit;
}



$productRepository = new ProductRepository();
$products = $productRepository->getAllProducts();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ASC Motors - Browse Cars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Icons + Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <link href="css/products.css" rel="stylesheet">
</head>
<body>

<?php include 'Header.php'; ?>

<!--Aesthetic Test take comment out when wanting to test-->
<!--?php include 'tests/AestheticTest.php'; ?-->

<div class="container mt-5">
    <h2 class="text-center mb-4">Available Cars</h2>

    <?php if (empty($products)): ?>
        <p class="text-center">No cars available right now.</p>
    <?php else: ?>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($products as $product): ?>
                <div class="col">
                    <div class="card h-100 text-center">
                        <img src="Images/<?= htmlspecialchars($product->getImage()) ?>" class="card-img-top" alt="<?= htmlspecialchars($product->getName()) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($product->getName()) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($product->getDescription()) ?></p>
                            <p class="card-text fw-bold"><?= $product->getFormattedPrice() ?></p>
                            <form method="POST" action="AddToCart.php">
                                <input type="hidden" name="product_id" value="<?= $product->getId() ?>">
                                <button type="submit" class="btn btn-primary w-100">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php include 'Footer.php'; ?>

</body>
</html>
