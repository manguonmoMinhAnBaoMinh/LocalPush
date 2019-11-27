<?php
$id= $_GET['id'];
    $conn=mysqli_connect("localhost", "root", "", "webdocsach") or die("Error connect!");
 
    $query="select * from sach where id_sach='$id'";

    $run = mysqli_query($conn, $query)or die("Error query sach!"); 
?>
<?php
 $conn=mysqli_connect("localhost", "root", "", "webdocsach") or die("Error connect!");
   $query="select  * from theloai";
   $qr= mysqli_query($conn,$query) or die("Error query theloai!"); 
    ?>

<style>
table {
    border: 1px solid black;
    width: 100%;
}

.t1 td {
    border: 1px solid black;
    text-align: center;
}
.t1 td span{
    font-weight: bold;
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
    text-align: center;
}

.t7 td {
    border: 1px solid black;

}
</style>


<form action="xulysua.php?id=<?=$id?>" method="post" enctype="multipart/form-data">
    <table>
        <?php while($dong1=mysqli_fetch_array($run)){
                ?>
        <tr class="t1">
            <td colspan="2">Sửa sách: <span><?php echo $dong1['tensach'];?></span></td>
        </tr>
        <?php }?>

        <tr class="t2">
            <td>Tên sách</td>
            <td><input type="text" name="tensach" placeholder="Nhập tên sách..." size="60"></td>
        </tr>
        <tr class="t3">
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr class="t4">
            <td>PDF</td>
            <td><input name="healthfile" type="file"></td>
        </tr>
        <tr class="t5">
            <td>Thể loại</td>
            <td><Select name="theloaisach">
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
            <td colspan="2"><input type="submit" name="them" value="Sửa"></td>
        </tr>
    </table>
</form>