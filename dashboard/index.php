<?php include __DIR__ . '/../partials/head.php';
$app = new App();
$app->authenticate();


$controller = new ProductController();
$products = $controller->getProducts();
?>

<div class="container card mt-4">
    <h1>products</h1>
    <div class="mb-4">
        <a class="text-green" href="<?php echo root_url(); ?>/dashboard/create.php">Add new</a>
    </div>

    <table>
        <tr>
            <th>#id</th>
            <th>Title</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product->id; ?></td>
                <td><?php echo $product->title; ?></td>
                <td><?php echo $product->price; ?></td>
                <td>
                    <a href="<?php echo root_url(); ?>/dashboard/edit.php?id=<?php echo $product->id; ?>"
                       class="text-green mr-3">Edit</a>

                    <a href="<?php echo root_url(); ?>/dashboard/delete.php?id=<?php echo $product->id; ?>"
                       class="text-red">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include __DIR__ . '/../partials/foot.php'; ?>
