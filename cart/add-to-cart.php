<?php
/**
 * File: add-to-cart.php
 * Created at: 29/9/20 | 2:55 PM
 */

require_once __DIR__ . '/../lib/App.php';
$app = new App();
$app->authenticate();


$pc = new ProductController();
$cart = new CartController();

if (empty($_GET['id'])) {
    header("Location: index.php");
    return;
}

$id = $_GET['id'];
$product = $pc->getProduct($id);


$cart->addToCart($product->title, $product->price);

if (!empty($_GET['redirect_to'])) {
    header("Location: " . $_GET['redirect_to']);
} else {
    header("Location: index.php");
}