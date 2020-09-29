<?php
/**
 * Created at: 5:02 PM
 * File: delete.php
 */

require_once __DIR__ . '/../lib/App.php';
$app = new App();
$app->authenticate();


$product = new ProductController();
$product->deleteProduct($_GET['id']);