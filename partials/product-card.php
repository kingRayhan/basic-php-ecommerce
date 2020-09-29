<div class="grid__col-3 card product-card">
    <div>
        <img
                class="w-full"
                src="http://dummyimage.com/233x225.bmp/dddddd/000000"
                alt="product 1"
        />
        <h1 class="text-xl">
            <a href="<?php echo root_url(); ?>/product-details.php?id=<?php echo $product->id; ?>"><?php echo $product->title; ?></a>
        </h1>
        <p><?php echo $product->excerpt; ?></p>
    </div>

    <div class="flex justify-between">
        <span class="mr-2 text-green">$<?php echo $product->price; ?></span>
        <a href="<?php echo root_url(); ?>/cart/add-to-cart.php?id=<?php echo $product->id ?>&redirect_to=<?php echo root_url(); ?>/index.php">
            <i class="fa fa-cart-plus"></i>
        </a>
    </div>
</div>