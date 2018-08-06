<div class="container">
    <table>
        <tr><th>Name</th><th>Type</th><th>Description</th><th>Image</th><th>Price</th></tr>
<!--        iterating over array of objects ($products) passed by controller  -->
        <?php foreach ($products as $product): ?>
            <tr>
<!--            displaying object property    -->
                <td><?php echo $product->_product_Name ?></td>
                <td><?php echo $product->_product_Type ?></td>
                <td><?php echo $product->_product_Description ?></td>
                <td><img src="<?php echo $product->_product_Image ?>" height="50" width="50"></td>
                <td><?php echo $product->_product_Price ?>€</td>
                <?php
//                product ID used to send over GET
                    if ($logged == "admin") {
                        echo '<td><a class="btn btn-success" href="updateProductController.php?id=' .$product->_product_Id. '">Update<a/></td>';
                    }
                ?>
                <?php
                    if ($logged == "admin") {
                        echo '<td><a class="btn btn-danger" href="deleteProductController.php?id=' .$product->_product_Id. '">Delete<a/></td>';
                    }
                ?>
                <?php
                    if ($logged == "user") {
                        echo '<td><a class="btn btn-info" href="../cart/addProductToCartController.php?id=' .$product->_product_Id. '">Add to cart<a/></td>';
                    }
                ?>
            </tr>
        <?php endforeach; ?>
    </table>
</div>