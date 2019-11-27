<?php
    $id=$_GET['id'];
    $conn=mysqli_connect("localhost", "root", "", "webdocsach") or die("Error connect!");
    $qr= "delete from sach where id_sach='$id'"; 
    $result=mysqli_query($conn,$qr) or die("Error query string!");
    if($result){
        header("Location: ../../index.php?quanly=quanlysach&ac=them");
    }
?>

