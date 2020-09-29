<?php
/**
 * Created at: 5:02 PM
 * File: edit.php
 */
include __DIR__ . '/../partials/head.php';
$app = new App();
$app->authenticate();

$controller = new ProductController();
$product = $controller->getProduct($_GET['id']);

if (!empty($_POST)) {
//    $controller->updateProduct($_GET['id'], $_POST);
}

?>

<div class="container card mt-4">
    <h2>Create new product</h2>

    <form action="<?php echo root_url(); ?>/dashboard/create.php" method="post">
        <div class="mb-1">
            <label for="title">Title</label>
            <input type="title" name="title" id="title" required value="<?php echo $product->title; ?>"/>
        </div>
        <div class="mb-1">
            <label for="excerpt">Excerpt</label>
            <input type="text" name="excerpt" id="excerpt" required value="<?php echo $product->excerpt; ?>"/>
        </div>
        <div class="mb-1">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" required value="<?php echo $product->price; ?>"/>
        </div>
        <div class="mb-2">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="5"><?php echo $product->body; ?></textarea>
        </div>
        <button>Save</button>
    </form>


</div>


<?php include __DIR__ . '/../partials/foot.php'; ?>
