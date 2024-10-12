<!DOCTYPE html>
<html>
  <head>
    <title>Electro Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- style shop -->
        <?php
            require_once ('pages/layouts/style_shop.php');
        ?>
    <!-- end style shop -->
  </head>
    <!-- svg -->
        <?php
            require_once ('pages/layouts/svg.php');
        ?>
    <!-- end svg -->

    <!-- search -->
    <?php
            include ('pages/layouts/search.php');
        ?>
    <!-- end search -->
    
    <!-- header -->
    <?php
            if(isset($_GET['pg'])){
                include_once ('pages/layouts/header_shop.php');
            }else{                   
                include_once ('pages/layouts/header.php');
            }

        ?>
    <!-- end header -->
    <!-- mian_container -->
      <?php
            if(isset($_GET['pg'])){
                include ("pages/singlepage/".$_GET['pg'].'.php');
            }else{                   
                include ('pages/layouts/main_container.php');
            }

        ?>
    <!-- end mian_container -->
    <!-- PIc -->
    <?php
            require ('pages/layouts/picture.php');
        ?>
    <!-- end pic -->
    <!-- footer -->
    <?php
            require ('pages/layouts/footer.php');
        ?>
    <!-- end footer -->
    <!-- script-->
    <?php
            require ('pages/layouts/java_script.php');
        ?>
    <!--  end script-->
  </body>
</html>