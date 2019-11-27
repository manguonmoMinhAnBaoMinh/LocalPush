<div style="overflow:auto">
    <?php
        if(isset($_GET['quanly'])){
            $tam=$_GET['quanly'];
        }else{
            $tam='';
        }if($tam=='quanlytheloai'){
            include('module/quanlytheloai/main.php');
        }if($tam=='quanlysach'){
            include('module/quanlysach/main.php');
        }
    ?>
    </div>  






  