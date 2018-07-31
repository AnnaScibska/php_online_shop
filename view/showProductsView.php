<h3><?php if ($message) {echo $message; $message = '';} ?></h3>
<div class="container">
    <table>
        <tr><th>Name</th><th>Type</th><th>Description</th><th>Image</th><th>Price</th></tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['Name'] ?></td>
                <td><?php echo $product['Type'] ?></td>
                <td><?php echo $product['Description'] ?></td>
                <td><img src="<?php echo $product['Image'] ?>" height="42" width="42"></td>
                <td><?php echo $product['Price'] ?>€</td>
                <td><?php echo '<a class="btn btn-success" href="updateProductController.php?id=' .$product['Id']. '">Update<a/>' ?></td>
                <td><?php echo '<a class="btn btn-danger" href="deleteProductController.php?id=' .$product['Id']. '">Delete<a/>' ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
