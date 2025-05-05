<?php
require_once 'classes/Session.php';
session_start();

require_once 'classes/Database.php';
require_once 'classes/Product.php';
require_once 'classes/Cart.php';
require_once 'classes/CartItem.php';
require_once 'classes/ProductRepository.php'; 


$currentFile = basename($_SERVER['PHP_SELF']);
$unprotected = ['Login.php', 'Logout.php'];

if (!in_array($currentFile, $unprotected)) {
    if (!isset($_SESSION['user'])) {
        header("Location: Login.php");
        exit();
    }
}

$db = new Database();
$db->connect();

$pdo = $db->getConnection();

$productRepository = new ProductRepository();
$cart = Cart::loadFromSession();
?>