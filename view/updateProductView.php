<div class="container">
    <form method="post" action="../controller/updateProductController.php">

        <label class="control-label" for="product_id">Product id</label><br/>
        <input name="product_id" type="text" id="product_id" value="<?php echo !empty($productId) ? $productId : ''; ?>" readonly ><br/><br/>

        <label class="control-label" for="product_name">Product name</label><br/>
        <input name="product_name" type="text" id="product_name" value="<?php echo !empty($productName) ? $productName : ''; ?>"><br/><br/>

        <label class="control-label" for="product_type">Product type</label><br/>
        <select name="product_type" id="product_type">
            <option value="toy" <?php echo $productType == 'toy' ? "selected" : ""; ?> >toy</option>
            <option value="food" <?php echo $productType == 'food' ? "selected" : ""; ?> >food</option>
            <option value="medicine" <?php echo $productType == 'medicine' ? "selected" : ""; ?> >medicine</option>
        </select><br/><br/>

        <label class="control-label" for="product_description">Product description</label><br/>
        <input name="product_description" type="text" id="product_description" value="<?php echo !empty($productDescription) ? $productDescription : ''; ?>"><br/><br/>

        <label class="control-label" for="product_image">Product image</label><br/>
        <input name="product_image" type="text" id="product_image" value="<?php echo !empty($productImage) ? $productImage : ''; ?>"><br/><br/>

        <label class="control-label" for="product_price">Product price</label><br/>
        <input name="product_price" type="text" id="product_price" value="<?php echo !empty($productPrice) ? $productPrice : ''; ?>"><br/><br/>

        <input type="submit" name="submit" value="Update product">
        <a href="../index.php" class="btn">Return</a>
    </form>
</div>