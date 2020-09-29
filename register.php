<?php include __DIR__ . '/partials/head.php';
$auth = new AuthController();

if (!empty($_POST)) {
    $auth->register($_POST);
}

?>
    <div class="container grid my-5">
        <div class="grid__col-4">
            <div class="card">
                <form action="<?php echo root_url(); ?>/register.php" method="post">
                    <div class="mb-1">
                        <label for="name">Name</label>
                        <input type="name" name="name" id="name" required/>
                    </div>
                    <div class="mb-1">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required/>
                    </div>
                    <div class="mb-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required/>
                    </div>
                    <button>Register</button>
                </form>
            </div>
        </div>
    </div>

<?php include __DIR__ . '/partials/foot.php'; ?>