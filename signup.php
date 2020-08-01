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
        <link href="css/index.css" rel="stylesheet">
    </head>

    <body style="padding-top: 100px;">
    <?php include "includes/header.php"; ?>

   
    <div class="container panel-margin">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">SignUp</h2>
				</div>
				<div class="panel-body">
        <form  action="signup_script.php" method="POST">

           <div class="form-group col-sm-10">
            <input class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
          </div>

          <div class="form-group col-sm-10">
           <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
          <?php
           if(isset($_GET["m1"])){
          echo $_GET['m1'];
          }
         ?>
        </div>

<div class="form-group col-sm-10">
        <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
</div>

<div class="form-group col-sm-10">
        <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
        <?php
        if(isset($_GET["m2"])){
          echo $_GET['m2'];
        }
        ?>
</div>

<div class="form-group col-sm-10">
        <input  type="text" class="form-control"  placeholder="City" name="city"  >
</div>

<div class="form-group col-sm-10">
        <input  type="text" class="form-control"  placeholder="Address" name="address" >
</div>

<div class="col-sm-10">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>  
<div class="col-sm-10">
          Already have an account ?<a href="login.php"> Login</a>
</div>

</form>
      </div>
    </div>
  </div>
  
  <div style="background-color: #101010;
    color:#9d9d9d;
    font-size:14px;
    padding:10px 0;
    margin-top:auto;
    position:fixed;
    bottom:0px;
    width:100%;
   ">
	<center>
    <div class="container">
		Copyright <span class="glyphicon glyphicon-copyright-mark"></span> LifeStyle Stores.
		All Rights Reserved | Contact Us: +91 90000 00000
	</div>
  </center>
      </div>
  </body>
</html>