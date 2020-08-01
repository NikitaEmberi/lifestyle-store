  <?php
	require "includes/common.php";
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
	<body style="padding-top: 100px;">
		<div class="header">
        <?php
			require "includes/header.php";
        ?>
        </div>
        <div class="container panel-margin panel-primary">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Login to make purchase</h3>
				</div>
				<div class="panel-body">
					<form action="login_submit.php" method="post">
						<div class="form-group">
							<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
				<div class="panel-footer">
					Don't have an account?Register<a href="signup.php"> here</a> to create one.
				</div>
			</div>
		</div>
		<div style="position:fixed;bottom:0px;width:100%;">
            <center>
            <?php
			   require "includes/footer.php";
		    ?>
            </center>
        </div>
	</body>
</html>
