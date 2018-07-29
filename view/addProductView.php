<div class="container">
    <form method="post" action="../controller/addProductController.php">

        <label class="control-label" for="product_name">Product name</label><br/>
        <input name="product_name" type="text" id="product_name"><br/><br/>

        <label class="control-label" for="product_description">Product description</label><br/>
        <input name="product_description" type="text" id="product_description"><br/><br/>

        <label class="control-label" for="product_image">Product image</label><br/>
        <input name="product_image" type="text" id="product_image"><br/><br/>

        <label class="control-label" for="product_price">Product price</label><br/>
        <input name="product_price" type="text" id="product_price"><br/><br/>

        <input type="submit" name="submit" value="Add product">
        <a href="../index.php" class="btn">Return</a>
    </form>
</div>