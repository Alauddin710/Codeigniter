<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <table class="table table-striped ">
        <tr>
            <th>Sl</th>
            <th>Product Name</th>
            <th>Product Details</th>
            <th>Product Price</th>
        </tr>
        <?php $count = 0; ?>
        <?php foreach ($products as $product) : ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['product_name'] ?></td>
                <td><?= $product['product_details'] ?></td>
                <td><?= $product['product_price'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>

    <!-- pagination -->
    <?php echo $pager->links('group1', 'bs_full'); ?>
</body>

</html>