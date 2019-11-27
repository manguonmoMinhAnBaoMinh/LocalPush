<?php
        $id= $_GET['id'];
        $tensach=$_POST['tensach'];
        $mota=$_POST['mota'];
        $theloaisach=$_POST['theloaisach'];
        $hinhanh=$_FILES['hinhanh']['name'];
        $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
      
        $folder_path = 'pdf/';
        $filename = basename($_FILES['healthfile']['name']);
        $newname = $folder_path . $filename;
        move_uploaded_file($_FILES['healthfile']['tmp_name'], $newname);
    
    
        $conn=mysqli_connect("localhost", "root", "", "webdocsach") or die("Error connect!");
    
        $qr= "update sach set tensach='@tensach', hinhanh='$hinhanh', pdf='$filename', theloai='$theloaisach', mota='$mota' where id_sach='$id'"; 
        $result=mysqli_query($conn,$qr) or die("Error query string!");
        if($result){
            header("Location: ../../index.php?quanly=quanlysach&ac=them");
        }
        else {
            echo "no";
        }

?>