<?php
    $conn=mysqli_connect("localhost", "root", "", "webdocsach") or die("Error connect!");
    $query="select  * from theloai";
    $qr= mysqli_query($conn,$query) or die("Error query!"); 
?>

<style>
    table{
        width: 100%;
        border: 1.5px solid black;
        font-family: Arial, Helvetica, sans-serif;
    }
    .t1 td{
        border: 1px solid black;
        text-align:  center;
    }
    .t2 td{
        border: 1px solid black;
        text-align:  center;
    }
</style>

<Table>
<tr class="tr1">
            <td colspan="5"><div>Thông tin sách</div></td>
        </tr>
    <tr class="t2">
        <td>ID</td>
        <td>Tên thê loại</td>
        <td>Mã thể loại</td>
        <td colspan="2">Quản lý</td>
    </tr>
    <?php
    $i=0;
    while($dong=mysqli_fetch_array($qr)){
    ?>
    <tr class="t3">
        <td><?php echo $dong['id_loai'];?></td>
        <td><?php echo $dong['tentheloai'];?></td>
        <td><?php echo $dong['thutu'];?></td>
        <td><a href="module/quanlytheloai/xulyxoa.php?id=<?php echo $dong['id_loai']?>" style="text-decoration:none;">Xóa</a></td>
        <td><a href="module/quanlytheloai/sua.php?id=<?php echo $dong['id_loai']?>" style="text-decoration:none;">Sửa</a></td>
    </tr>

    <?php
    $i++;
}
    ?>
</Table>