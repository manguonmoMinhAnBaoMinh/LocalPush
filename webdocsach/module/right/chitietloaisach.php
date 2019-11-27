<?php
$conn = mysqli_connect("localhost", "root", "", "webdocsach") or die("Error connect!");
mysqli_query($conn,"SET NAMES 'utf8'");
$query = "select * from sach, theloai where sach.theloai=theloai.id_loai and sach.theloai='$_GET[id]'";
$qr = mysqli_query($conn, $query) or die("Error query!");
?>

<h1 style="text-align: center; background-color: indigo; height: auto; width: 100%; margin-left: 0.8rem;">Chi tiết sách</h1>

<div class="main-nd">
    <div class="main-nds">
    <?php
            $i = 1;
            while ($dong = mysqli_fetch_array($qr)) {
                $name =$dong['tensach'];
                $name = (string)$name;
                ?>
        <ul>
                <li><a href="index.php?xem=chitietsach&id=<?php echo $dong['id_sach'] ?>"><img src="../admincp/module/quanlysach/upload/<?php echo $dong['hinhanh'] ?>" />
                <p style="width: 150px; overflow: hidden;white-space: nowrap; text-overflow: ellipsis;"><?php echo $name;?></p>
                    </a></li>
        </ul>
    <?php
        $i++;
    }
    ?>
    </div>

</div>
