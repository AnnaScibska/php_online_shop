<div class="container">
    <table>
        <tr><th>NB</th><th>Product</th><th>Quantity</th><th>Price per unit</th><th>Price</th></tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $nb++; ?></td>
                <td><?php echo $product['_product_Name']; ?></td>
                <td><?php echo $product['_cartItem_Quantity']; ?></td>
                <td><?php echo $product['_product_Price']; ?></td>
                <td><?php echo $product['_product_Price'] * $product['_cartItem_Quantity']; ?></td>
                <?php $total += $product['_product_Price'] * $product['_cartItem_Quantity']; ?>
            </tr>
        <?php endforeach; ?>
    </table><br/>
    <h3>Total price: <?php echo $total?>€</h3>
</div>