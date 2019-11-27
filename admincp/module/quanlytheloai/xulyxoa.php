<?php
    $id=$_GET['id'];
    $conn=mysqli_connect("localhost", "root", "", "webdocsach") or die("Error connect!");
    $qr= "delete from theloai where id_loai='$id'"; 
    $result=mysqli_query($conn,$qr) or die("Error query string!");
    if($result){
        header("Location: ../../index.php?quanly=quanlytheloai&ac=them");
    }
?>

