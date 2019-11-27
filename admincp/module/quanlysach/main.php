<div class="left">
            <?php
            if(isset($_GET['ac'])){
                $tam=$_GET['ac'];
            }else{
                $tam='';
            }if($tam=='them'){
                include('module/quanlysach/them.php');
            }if($tam=='sua'){
                include('module/quanlysach/sua.php');
            }
              
            ?>
        </div>
        <div class="right">
            <?php
            include('module/quanlysach/lietke.php');
            ?>
        </div> 