<?php
/**
 * File: index.php
 * Created at: 29/9/20 | 3:31 PM
 */
include __DIR__ . '/../partials/head.php';
$cart = new CartController();
$order = new OrderController();

if (!empty($_POST)) {
    $order->createOrder($_POST);
}

?>
    <div class="container grid my-4">
        <div class="grid__col-6">

            <h2>Your cart (<?php echo $cart->count(); ?>)</h2>
            <h3>Total price: <?php echo $cart->totalPrice(); ?></h3>

            <div class="card">
                <?php foreach ($cart->getCart() as $cart): ?>
                    <div class="flex">
                        <img src="http://dummyimage.com/80x80.bmp/dddddd/000000" alt="name">
                        <div class="ml-2">
                            <h2 class="text-xl mb-0"><?php echo $cart->title; ?></h2>
                            <p>
                                <span class="text-green">$<?php echo $cart->price; ?></span>
                                <a href="<?php echo root_url(); ?>/cart/remove-from-cart.php?id=<?php echo $cart->id; ?>&redirect_to=<?php echo root_url(); ?>/cart/index.php"
                                   class="text-red">
                                    <i class="fa fa-times ml-2"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="grid__col-6">
            <h2>Order now</h2>
            <h3>Get your ordered products immediately</h3>
            <div class="card">
                <form action="<?php echo root_url() ?>/cart/index.php" method="post">
                    <div class="mb-2">
                        <label for="customer_name">Your name</label>
                        <input type="text" name="customer_name" id="customer_name" required/>
                    </div>
                    <div class="mb-2">
                        <label for="customer_phone">Your phone number</label>
                        <input type="text" name="customer_phone" id="customer_phone" required/>
                    </div>
                    <div class="mb-2">
                        <label for="customer_address">Your address</label>
                        <textarea name="customer_address" id="customer_address" cols="30" rows="5" required></textarea>
                    </div>
                    <div>
                        <button>Order now</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

<?php include __DIR__ . '/../partials/foot.php'; ?>