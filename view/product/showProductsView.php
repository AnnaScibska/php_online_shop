<h3><?php if ($message) {echo $message; $message = '';} ?></h3>

<?php
//    function dd($var) {
//        echo '<pre>';
//        print_r($var);
//        echo '</pre>';
//    }
//    dd($_SESSION);
//?>

<div class="container">
    <table>
        <tr><th>Name</th><th>Type</th><th>Description</th><th>Image</th><th>Price</th></tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product->_product_Name ?></td>
                <td><?php echo $product->_product_Type ?></td>
                <td><?php echo $product->_product_Description ?></td>
                <td><img src="<?php echo $product->_product_Image ?>" height="50" width="50"></td>
                <td><?php echo $product->_product_Price ?>€</td>
                <td><?php echo '<a class="btn btn-success" href="updateProductController.php?id=' .$product->_product_Id. '">Update<a/>' ?></td>
                <td><?php echo '<a class="btn btn-danger" href="deleteProductController.php?id=' .$product->_product_Id. '">Delete<a/>' ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>