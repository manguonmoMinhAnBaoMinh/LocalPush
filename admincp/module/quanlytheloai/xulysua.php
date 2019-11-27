<?php
    $tentheloai=$_POST['tentheloai'];
    $thutu=$_POST['thutu'];
    $id=$_GET['id'];
    $conn=mysqli_connect("localhost", "root", "", "webdocsach") or die("Error connect!");
    $qr= "update theloai set tentheloai='$tentheloai', thutu='$thutu' where id_loai='$id'"; 
    $result=mysqli_query($conn,$qr) or die("Error query string!");
    if($result){
        header("Location: ../../index.php?quanly=quanlytheloai&ac=them");
    }
?>

