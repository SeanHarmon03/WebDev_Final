<?php
require_once 'init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $productId = (int)$_POST['product_id'];
    $product = $productRepository->getProductById($productId);

    if ($product) {
        $cart = Cart::loadFromSession();         // Load current cart
        $cart->addProduct($product);             // Add product
        Cart::saveToSession($cart);
    

    }
}

header('Location: Cart.php');
exit;