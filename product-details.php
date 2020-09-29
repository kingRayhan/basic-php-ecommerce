<?php include __DIR__ . '/partials/head.php';

$controller = new ProductController();
$product = $controller->getProduct($_GET['id'])
?>

    <div class="container grid my-5 card">
        <div class="grid__col-5">
            <img src="http://dummyimage.com/600x600.bmp/dddddd/000000"/>
        </div>
        <div class="grid__col-7">
            <h1 class="text-lg">
                <?php echo $product->title; ?>
            </h1>

            <h2 class="text-green">$<?php echo $product->price; ?></h2>

            <div>
                <a href="<?php echo root_url(); ?>/cart/add-to-cart.php?id=<?php echo $product->id ?>&redirect_to=<?php echo root_url(); ?>/product-details.php?id=<?php echo $product->id ?>">
                    <i class="fa fa-cart-plus"></i> Add to cart
                </a>
            </div>

            <p class="text-xl">
                <?php echo $product->body; ?>
            </p>

        </div>
    </div>

<?php include __DIR__ . '/partials/foot.php'; ?>