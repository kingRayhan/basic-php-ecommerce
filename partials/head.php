<?php require_once __DIR__ . '/../lib/App.php';
$cart = new CartController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo App::getTitle(); ?></title>
    <link rel="stylesheet" href="<?php root_url() ?>/css/app.css"/>
    <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
</head>

<body>
<!-- Header area start -->
<header class="header">
    <a class="header__logo text-lg" href="<?php echo root_url(); ?>">Express Store</a>

    <div class="header__menu">

        <a href="<?php echo root_url() ?>/cart" class="mr-2" style="border-right: 2px solid #DDD">
            <i class="fa fa-cart-plus"></i> <?php echo $cart->count(); ?>&nbsp;&nbsp;&nbsp;
            <span class="text-green">$<?php echo $cart->totalPrice(); ?></span>
        </a>

        <?php if (session_user()): ?>
            <span><?php echo session_user(); ?></span>
            <a class="ml-2 text-green" href="<?php echo root_url(); ?>/dashboard/index.php">Dashboard</a>
            <a class="ml-2" href="<?php echo root_url(); ?>/logout.php">Logout</a>
        <?php else: ?>
            <a href="<?php echo root_url(); ?>/login.php">Login</a>
            <a href="<?php echo root_url(); ?>/register.php">Register</a>
        <?php endif; ?>
        

    </div>
</header>
<!-- Header area end -->