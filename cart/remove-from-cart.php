<?php
/**
 * File: remove-from-cart.php
 * Created at: 29/9/20 | 4:03 PM
 */

require_once __DIR__ . '/../lib/App.php';
$app = new App();
$app->authenticate();;


$cart = new CartController();

if (empty($_GET['id'])) {
    header("Location: index.php");
    return;
}

$id = $_GET['id'];

$cart->removeFromCart($id);

if (!empty($_GET['redirect_to'])) {
    header("Location: " . $_GET['redirect_to']);
} else {
    header("Location: index.php");
}