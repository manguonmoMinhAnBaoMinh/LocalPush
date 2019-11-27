<?php
    $conn=mysqli_connect("localhost", "root", "", "webdocsach") or die("Error connect!");
    $query="select * from sach, theloai where sach.theloai = theloai.id_loai";
    $qr= mysqli_query($conn,$query) or die("Error query!"); 
?>


<style>
table {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
}

.t1 td {
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
}

.t9 td {
    border: 1.5px solid black;
}
</style>

<table>
    <tr class="t1">
        <td colspan="6">Thông tin sách</td>

    </tr>
    <tr class="t9">
        <td>ID</td>
        <td>tên sách </td>
        <td>Thể loại </td>
        <td>Hình ảnh</td>
        
        <td colspan="2">quản lý</td>
    </tr>
    <?php
    $i=1;
    while($dong=mysqli_fetch_array($qr)){
    ?>
    <tr class="t2">
        <td><?php echo $i;?></td>
        <td><?php echo $dong['tensach']?></td>
        <td><?php echo $dong['tentheloai']?></td>
        <td><img src="module/quanlysach/upload/<?php echo $dong['hinhanh']?>" height="90" width="60"></td>
        <td><a href="module/quanlysach/xulyxoa.php?id=<?php echo $dong['id_sach']?>" style="text-decoration:none;">Xóa</a></td>
        <td><a href="module/quanlysach/sua.php?id=<?php echo $dong['id_sach']?>" style="text-decoration:none;">Sửa</a></td>

    </tr>
    <?php
    $i++;
}
    ?>
</table>