<div style="overflow:auto">
  <!-- left -->
  <div class="menu">
    <?php
      include('module/left/danhsach.php');
    ?>
  </div>
  <!-- het left -->

  <!-- right -->
  <div class="main">
    <?php
      if(isset($_GET['xem'])){
        $tam=$_GET["xem"];
      }
      else{
        $tam='';
      }
      if($tam=='chitietloaisach'){
        include('module/right/chitietloaisach.php');
      }
      elseif($tam=='chitietsach'){
        include('module/right/chitietsach.php');
      }
      else{include('module/right/tatcasach.php');}
        
      
    ?>
  </div>
  <!-- het right -->

</div>