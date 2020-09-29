<?php include __DIR__ . '/../partials/head.php';
$app = new App();
$app->authenticate();

$product = new ProductController();

if (!empty($_POST)) {
    $product->createProduct($_POST, $_FILES);
}
?>

    <div class="container card mt-4">
        <h2>Create new product</h2>

        <form
                action="<?php echo root_url(); ?>/dashboard/create.php"
                method="post"
                enctype="multipart/form-data">
            <div class="mb-1">
                <label for="title">Title</label>
                <input type="title" name="title" id="title" required/>
            </div>
            <div class="mb-1">
                <label for="excerpt">Excerpt</label>
                <input type="text" name="excerpt" id="excerpt" required/>
            </div>
            <div class="mb-1">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" required/>
            </div>
            <div class="mb-2">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="5"></textarea>
            </div>
            <div class="mb-2">
                <label for="thumbnail">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>

            <button>Save</button>
        </form>


    </div>


<?php include __DIR__ . '/../partials/foot.php'; ?>