<?php
	require 'includes/common.php';
	
	// destroy the session if present
	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
	}else{
		session_unset();
		session_destroy();
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
	<body>
		<?php
			require './includes/header.php';
		?>
        <div class="container panel-margin">
            <div class="alert alert-success">
                You have successfully logged out. Click <a href="index.php">here</a> to go back to index page.
            </div>
        </div>
		<?php
			require 'includes/footer.php';
		?>
	</body>
</html>