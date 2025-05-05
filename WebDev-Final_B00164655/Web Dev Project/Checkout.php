<?php
require_once 'init.php';

// Clear the cart after checkout
$cart = Cart::loadFromSession();
$cart->clear();
Cart::saveToSession($cart);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ASC Motors - Checkout Complete</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Fonts + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php include 'Header.php'; ?>

<div class="container text-center mt-5">
    <h2>Thank you for your purchase!</h2>
    <p>Your order has been successfully placed. 🚗💨</p>
    <a href="Index.php" class="btn btn-primary mt-4">Return to Home</a>
</div>

<?php include 'Footer.php'; ?>

</body>
</html>