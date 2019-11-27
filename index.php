<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <!-- Phan menu -->
    <?php
    include('module/menu.php');
    ?>
    <!-- Het phan menu -->
    <div class="clear"></div>


    <!-- Phan content -->
    <?php
    include('module/content.php');
    ?>
    <!-- Het phan content -->


    <!-- Phan footer -->
    <?php
    include('module/footer.php');
    ?>
    <!-- Het phan footer -->


    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); 
        }
    </script>
</body>

</html>