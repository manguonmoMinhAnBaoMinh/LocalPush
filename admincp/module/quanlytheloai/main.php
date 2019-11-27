<div class="left">
            <?php
            if(isset($_GET['ac'])){
                $tam=$_GET['ac'];
            }else{
                $tam='';
            }if($tam=='them'){
                include('module/quanlytheloai/them.php');
            }if($tam=='sua'){
                include('module/quanlytheloai/sua.php');
            }
              
            ?>
        </div>
        <div class="right">
            <?php
            include('module/quanlytheloai/lietke.php');
            ?>
        </div> 