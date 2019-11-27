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
      if($tam=='theloai'){
        include('module/right/chitietloaisach.php');
      }
      elseif($tam=='chitietsach'){
        include('module/right/chitietsach.php');
      }
      elseif($tam=='tatcasach'){
        include('module/right/tatcasach.php');
      }
      elseif($tam=='tacgia'){
        include('module/right/tacgia.php');
      }
      else{
        include('module/right/gt.php');
      }
     
      
    ?>
  </div>
  <!-- het right -->

</div>