<div class="container">
    <form method="post" action="updateProductController.php">

        <label class="control-label" for="product_id">Product id</label><br/>
        <input name="product_id" type="text" id="product_id" value="<?php echo $product->_product_Id; ?>" readonly ><br/><br/>

        <label class="control-label" for="product_name">Product name</label><br/>
        <input name="product_name" type="text" id="product_name" value="<?php echo $product->_product_Name; ?>"><br/><br/>

        <label class="control-label" for="product_type">Product type</label><br/>
        <select name="product_type" id="product_type">
            <option value="toy" <?php echo $product->_product_Type == 'toy' ? "selected" : ""; ?> >toy</option>
            <option value="food" <?php echo $product->_product_Type == 'food' ? "selected" : ""; ?> >food</option>
            <option value="medicine" <?php echo $product->_product_Type == 'medicine' ? "selected" : ""; ?> >medicine</option>
        </select><br/><br/>

        <label class="control-label" for="product_description">Product description</label><br/>
        <input name="product_description" type="text" id="product_description" value="<?php echo $product->_product_Description; ?>"><br/><br/>

        <label class="control-label" for="product_image">Product image</label><br/>
        <input name="product_image" type="text" id="product_image" value="<?php echo $product->_product_Image; ?>"><br/><br/>

        <label class="control-label" for="product_price">Product price</label><br/>
        <input name="product_price" type="text" id="product_price" value="<?php echo $product->_product_Price; ?>"><br/><br/>

        <input type="submit" name="submit" value="Update product">
        <a href="../../index.php" class="btn">Return</a>
    </form>
</div>
