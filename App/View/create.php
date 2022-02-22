<?php

?>

<div class="container">
    <h2>Them mat hang</h2>
    <form action="#" method="post">
        <input type="text" name="productName" placeholder="ten mat hang"><br>
        <select name="type" >
            <option value="#" disabled selected>--chon loai hang--</option><br>
            <option value="phone">phone</option>
            <option value="tv">TV</option>
        </select><br>
        <input type="text" name="price" placeholder="gia"><br>
        <input type="text" name="quantity" placeholder="so luong"><br>
        <textarea name="description" cols="30" rows="10" placeholder="mo ta"></textarea><br>
        <input type="date" name="date"><br>
        <button>Nhap mat hang</button>
        <button type="button"><a href="index.php?page=list">Thoat</a></button>
    </form>

</div>
