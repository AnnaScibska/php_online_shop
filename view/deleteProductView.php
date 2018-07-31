<div class="container">
    <form method="post" action="../controller/deleteProductController.php"><br>
        <input type="hidden" name="id" value="<?php echo $id;?>"/>Are you sure to delete ?<br><br>
        <div class="form-actions">
            <button type="submit" class="btn btn-danger">Yes</button>
            <a class="btn" href="../index.php">No</a>
        </div>
    </form>
</div>