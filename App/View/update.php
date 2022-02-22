<?php

use App\Model\ProductModel;

$productModel = new ProductModel();
$thisProduct = $productModel->getById($_GET['id']);

?>

<div class="container">
    <h2>Sua mat hang</h2>
    <form action="#" method="post">
        <input type="text" name="productName" value="<?php echo $thisProduct->productName?>" placeholder="ten mat hang"><br>
        <select name="type">
            <option value="#" disabled selected>--chon loai hang--</option><br>
            <option value="phone" selected>phone</option>
            <option value="tv">TV</option>
        </select><br>
        <input type="text" name="price" value="<?php echo $thisProduct->price?>" placeholder="gia"><br>
        <input type="text" name="quantity" value="<?php echo $thisProduct->quantity?>" placeholder="so luong"><br>
        <textarea name="description" cols="30" rows="10" placeholder="mo ta"><?php echo $thisProduct->description?></textarea><br>
        <input type="date" name="date"><br>
        <button>Luu mat hang</button>
        <button type="button"><a href="index.php?page=list">Thoat</a></button>
    </form>

</div>
