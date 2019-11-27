<style>
    .menu{
     
    }
    .ttsach{
        text-align: center;
        
    }
    .ttsach h3{
      background-color: #016232;
    }
    .ttsach1{
        margin-top: 2px;
    }
</style>

<?php
$conn = mysqli_connect("localhost", "root", "", "webdocsach") or die("Error connect!");
mysqli_query($conn,"SET NAMES 'utf8'");
$query = "select  * from sach where id_sach='$_GET[id]'";
$qr = mysqli_query($conn, $query) or die("Error query!");
?>

<div class="main-nd">
    <div class="main-nds">
    <?php
            $i = 1;
            while ($dong = mysqli_fetch_array($qr)) {
                $name =$dong['tensach'];
                $name = (string)$name;
                ?>
    <div class="ttsach">
        
       <div class="ttsach1"> <iframe src="../admincp/module/quanlysach/pdf/<?php echo $dong['pdf'] ?>" style="width:500px; height:550px;" frameborder="0"></iframe></div>
    </div>

    <?php
        $i++;
    }
    ?>
    </div>

</div>
