<?php include __DIR__ . '/partials/head.php';


$productOBJ = new ProductController();
?>

<div class="container grid my-4">
    <?php foreach ($productOBJ->getProducts() as $product): ?>
        <?php require __DIR__ . '/partials/product-card.php'; ?>
    <?php endforeach; ?>
</div>

<?php include __DIR__ . '/partials/foot.php'; ?>

