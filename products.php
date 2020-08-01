<?php
include "includes/common.php"
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
            <!-- Header file -->
    <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
    <br>
    <br>
    
    <div class="container">
        <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <center>
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have best cameras, watches and shirts for you. No need to hunt around,
                     we have all in one place.
                </p>             
                </center>
            </div>
            <hr>
            <br>
                    
            <div class="row text-center">
                <div class="col-sm-6 col-md-3">
                    <img class="img img-thumbnail" src="img/Cannon EO5.jpg" alt="">
                    <caption>
                        <h3>Cannon EO5</h3>
                        <p>Price: Rs.36000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                            <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                 if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                 <?php
                               }
                            }
                            ?>
                    </caption>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="img img-thumbnail" src="img/Sony DSLR.jpg" alt="">
                    <caption>
                        <h3>Sony DSLR</h3>
                        <p>Price: Rs.40000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                            <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                 if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                 <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                 <?php
                               }
                            }
                            ?>
                    </caption>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="img img-thumbnail" src="img/Sony DSLR1.jpg" alt="">
                    <caption>
                        <h3>Sony DSLR</h3>
                        <p>Price: Rs.50000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                            <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                 if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                 <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                 <?php
                               }
                            }
                            ?>
                    </caption>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="img img-thumbnail" src="img/Olympus DSLR.jpg" alt="">
                    <caption>
                        <h3>Olympus DSLR</h3>
                        <p>Price: Rs.80000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                            <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                 if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                 <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                 <?php
                               }
                            }
                            ?>
                    </caption>
                </div>
            </div>
        </br>
        </br>
            <div class="row text-center">
                <div class="col-sm-6 col-md-3">
                    <img class="img img-thumbnail" src="img/watch1.jpg" alt="">
                    <caption>
                        <h3>Titan Model #301</h3>
                        <p>Price: Rs.13000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                            <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                 if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                 <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                 <?php
                               }
                            }
                            ?>
                    </caption>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="img img-thumbnail" src="img/watch2.jpg" alt="">
                    <caption>
                        <h3>Titan Model #201</h3>
                        <p>Price: Rs.3000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                            <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                 if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                 <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                 <?php
                               }
                            }
                            ?>
                    </caption>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="img img-thumbnail" src="img/HMT Milan.jpg" alt="">
                    <caption>
                        <h3>HMT Milan</h3>
                        <p>Price: Rs.8000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                            <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                 if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                 <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                 <?php
                               }
                            }
                            ?>
                    </caption>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="img img-thumbnail" src="img/faber.jpg" alt="">
                    <caption>
                        <h3>Faber Luba #111</h3>
                        <p>Price: Rs.10000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                            <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                 if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                 <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                 <?php
                               }
                            }
                            ?>
                    </caption>
                </div>
            </div>
        </br>
    </br>
            <div class="row text-center">
                <div class="col-sm-6 col-md-3">
                    <img class="img img-thumbnail cloth1" src="img/cloth1.jpg" alt="">
                    <caption>
                        <h3>H&W</h3>
                        <p>Price: Rs.800.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                            <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                 if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                 <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                 <?php
                               }
                            }
                            ?>
                    </caption>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="img img-thumbnail" src="img/Luis Phil.jpg" alt="">
                    <caption>
                        <h3>Luis Phil</h3>
                        <p>Price: Rs.1000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                            <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                 if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                 <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                 <?php
                               }
                            }
                            ?>
                    </caption>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="img img-thumbnail" src="img/John Zok.jpg" alt="">
                    <caption>
                        <h3>John Zok</h3>
                        <p>Price: Rs.1500.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                            <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                 if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                 <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                 <?php
                               }
                            }
                            ?>
                    </caption>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="img img-thumbnail" src="img/Jhalsani.jpg" alt="">
                    <caption>
                        <h3>Jhalsani</h3>
                        <p>Price: Rs.1300.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href= "login.php" role="button" class="btn btn-primary btn-block">Add to Cart</a></p>
                            <?php
                                } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                 if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                ?>
                                 <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                 <?php
                               }
                            }
                            ?>
                    </caption>
                </div>
            </div>
        </div>
        </br>
       </br>
    <?php include 'includes/footer.php'; ?>
</body>
</html>