<?php
$id= $_GET['id'];
    $conn=mysqli_connect("localhost", "root", "", "webdocsach") or die("Error connect!");
    $query="select  * from theloai where id_loai='$id'";
    $qr= mysqli_query($conn,$query) or die("Error query!"); 
?>
<style>
table {
    width: 100%;
    border: 1.5px solid black;
}

table tr td {
    border: 1px solid black;
}

.tr1 td {
    text-align: center;
}
.tr1 td div span{
    font-weight: bold;
}
.tr2 td {
    text-align: center;
}

.tr3 td {
    text-align: center;
}

.tr4 td {
    text-align: center;
}
</style>

<form action="xulysua.php?id=<?=$id?>" method="post">

    <table>
        <tr class="tr1">
        <?php
    $i=0;
    while($dong=mysqli_fetch_array($qr)){
        ?>
            <td colspan="2">
                <div>Sửa thể loại: <span ><?php echo $dong['tentheloai']?></span></div>
                </td>
                <?php    
                $i++;
            }
            ?>
    </tr>
    <tr class="tr2">
        <td>Tên thể loại cần sửa</td>
        <td><input type="text" name="tentheloai" size="60" placeholder="Nhập tên thể loại..."></td>
    </tr>
    <tr class="tr3">
        <td>Mã số cần sửa</td>
        <td><input type="text" name="thutu" size="60" placeholder="Nhập mã..."></td>
    </tr>
    <tr class="tr4">
        <td colspan="2"><input type="submit" name="them" id="them" value="Thêm"></td>
    </tr>
    </table>
</form>