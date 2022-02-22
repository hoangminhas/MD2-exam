<?php
?>
<h2 class="text-center">Danh sach mat hang</h2>
<div class="container mt-5">
    <div class="row">
        <div class="col-10">
            <form action="">
                Nhap ten hang:
                <input type="text" name="productName">
                <button>Tim kiem</button>
            </form>
        </div>
        <div class="col-2">
            <button><a href="index.php?page=create">Them mat hang</a></button>
        </div>
    </div>
    <div class="table">
        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Ten Hang</th>
                <th>Loai Hang</th>
                <th colspan="2"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $key => $product): ?>
                <tr>
                    <td><?php echo $key+1?></td>
                    <td><?php echo $product->productName?></td>
                    <td><?php echo $product->type?></td>
                    <td><a href="index.php?page=update&id=<?php echo $product->id?>">Update</a></td>
                    <td><a href="index.php?page=delete&id=<?php echo $product->id?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
