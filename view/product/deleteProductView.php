<div class="container">
    <table>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
        </tr>
        <tr>
            <td><?php echo $product->_product_Name ?></td>
            <td><?php echo $product->_product_Type ?></td>
            <td><?php echo $product->_product_Description ?></td>
            <td><img src="<?php echo $product->_product_Image ?>" height="42" width="42"></td>
            <td><?php echo $product->_product_Price ?>€</td>
        </tr>
    </table>
    <form method="post" action="deleteProductController.php"><br>
        <input type="hidden" name="id" value="<?php echo $id;?>"/>Are you sure to delete ?<br><br>
        <div class="form-actions">
            <button type="submit" class="btn btn-danger">Yes</button>
            <a class="btn" href="../../index.php">No</a>
        </div>
    </form>

</div>