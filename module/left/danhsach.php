<?php
$conn = mysqli_connect("localhost", "root", "", "webdocsach") or die("Error connect!");
mysqli_query($conn,"SET NAMES 'utf8'");
$query = "select * from theloai";
$qr = mysqli_query($conn, $query) or die("Error query!");
?>


<p class="menu-chude">Thể loại</p>

<?php
$i = 1;
while ($dong = mysqli_fetch_array($qr)) {
    $name = $dong['tentheloai'];
    $name = (string) $name;
    ?>
    <a href="index.php?xem=theloai&id=<?php echo $dong['id_loai']?>"><?php echo $name; ?></a>
<?php
    $i++;
}
?>