
<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Custom CSS -->
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body style="padding-top: 50px;">

        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>We sell Lifestyle.</h1>
                            <h4><p>Flat 40% OFF on premium brands</p></h4>
                            <br>
                            <br>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
            <br>
            <br>
            <!--Main banner image end-->

            <!--Item categories listing-->

            <div class="container">
            <div class="items">
                <a href="products.php" style="text-decoration:none;">
                    <img src="img/camera.jpg" alt="" class="img img-thumbnail">
                    <div class="caption">
                        <h2>Cameras</h2>
                        <p>Choose among the best available in the world.</p>
                    </div>
                </a>
            </div>
            <div class="items">
                <a href="products.php" style="text-decoration:none;">
                    <img src="img/watch.jpg" alt="" class="img img-thumbnail">
                    <div class="caption">
                        <h2>Watches</h2>
                        <p>Original watches from the best brands.</p>
                    </div>
                </a>
            </div>
            <div class="items">
                <a href="products.php" style="text-decoration:none;">
                    <img src="img/H&W.jpg" alt="" class="img img-thumbnail">
                    <div class="caption">
                        <h2>Shirts</h2>
                        <p>Our exquisite collection of shirts.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->

    </body>
</html>
