<?php

require_once 'init.php';

$cart = Cart::loadFromSession(); 
$cartItems = $cart->getItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ASC Motors - Shopping Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Icons + Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <link href="css/cart.css" rel="stylesheet">
</head>
<body>

<?php include 'Header.php'; ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Your Cart</h2>

    <?php if (empty($cartItems)): ?>
        <p class="text-center">Your cart is currently empty.</p>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cartItems as $item): ?>
                        <tr>
                            <td><img src="Images/<?= htmlspecialchars($item->getProduct()->getImage()) ?>" style="height: 80px;"></td>
                            <td><?= htmlspecialchars($item->getProduct()->getName()) ?></td>
                            <td><?= $item->getQuantity() ?></td>
                            <td><?= $item->getProduct()->getFormattedPrice() ?></td>
                            <td>$<?= number_format($item->getSubtotal(), 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-4">
        <h4>Total: $<?= number_format($cart->getTotal(), 2) ?></h4>
            <a href="Checkout.php" class="btn btn-success mt-3">Proceed to Checkout</a>
        </div>
    <?php endif; ?>

</div>

<?php include 'Footer.php'; ?>

</body>
</html>