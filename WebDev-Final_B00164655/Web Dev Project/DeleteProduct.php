<?php
require_once 'init.php';
require_once 'classes/ProductRepository.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $repo = new ProductRepository();
    $repo->deleteProduct($id);
}

header("Location: ViewProduct.php");
exit;