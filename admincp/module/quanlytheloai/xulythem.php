<?php

    $tentheloai=$_POST['tentheloai'];
    $thutu=$_POST['thutu'];

    $conn=mysqli_connect("localhost", "root", "", "webdocsach") or die("Error connect!");

    $qr= "insert into theloai(tentheloai, thutu) values('$tentheloai','$thutu')"; 
    $result=mysqli_query($conn,$qr) or die("Error query string!");
    if($result){
        header("Location: ../../index.php?quanly=quanlytheloai&ac=them");
    }
    else {
        echo "no";
    }
?>

