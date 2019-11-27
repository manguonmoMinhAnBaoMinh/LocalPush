<style>
table {
    border: 1px solid black;
    width: 100%;
}

.t1 td {
    border: 1px solid black;

}

.t2 td {
    border: 1px solid black;
}

.t3 td {
    border: 1px solid black;
}

.t4 td {
    border: 1px solid black;
}

.t5 td {
    border: 1px solid black;
}

.t6 td {
    border: 1px solid black;

}

.t7 td {
    border: 1px solid black;

}
</style>

<?php
    $conn=mysqli_connect("localhost", "root", "", "webdocsach") or die("Error connect!");
    $query="select  * from theloai";
    $qr= mysqli_query($conn,$query) or die("Error query!"); 
?>

<form action="module/quanlysach/xulythem.php" method="post" enctype="multipart/form-data">
    <table>
        <tr class="t1">
            <td colspan="2">Thêm sách</td>
        </tr>
        <tr class="t2">
            <td>Tên sách</td>
            <td><input type="text" name="tensach" placeholder="Nhập tên sách..." size="60"></td>
        </tr>
        <tr class="t3">
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh" style="padding-right: 208px;"></td>
        </tr>
        <tr class="t4">
            <td>PDF</td>
            <td><input name="healthfile" type="file" style="padding-right: 208px;"></td>
        </tr>
        <tr class="t5">
            <td>Thể loại</td>
            <td><Select name="theloaisach" style="padding-right: 286px;">
                    <?php while($dong=mysqli_fetch_array($qr)){
                ?>
                    <option value="<?php echo $dong['id_loai'];?>">
                        <?php echo $dong['tentheloai'];?></option>
                    <?php }?>
                </Select></td>
        </tr>
        <tr class="t5">
            <td>Mô tả</td>
            <td><textarea name="mota" cols="30" rows="10"></textarea></td>
        </tr>
        <tr class="t6">
            <td colspan="2"><input type="submit" name="them" value="Thêm"></td>
        </tr>
    </table>
</form>