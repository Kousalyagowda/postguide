<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Admin login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="image-holder">

				<img src="images/admin1.jpg" alt="CAN NOT DISPLAY THE IMAGE">
			</div>
			<div class="form-inner">
				<form action="../controller/adminlogin.php" method="POST">
					<div class="form-header">
						<h3>Sign up</h3>
						<img src="images/sign-up.png" alt="" class="sign-up-icon">
					</div>
					<div class="form-group">
						<label for="">Username:</label>
						<input type="text" name="name" class="form-control" data-validation="length alphanumeric" data-validation-length="3-12">
					</div>
					<div class="form-group">
						<label for="">E-mail:</label>
						<input type="email" name="mail" patrern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" data-validation="email">
					</div>
					<div class="form-group" >
						<label for="">Password:</label>
						<input type="password" name="password" class="form-control" data-validation="length" data-validation-length="min8">
					</div>
					<button type="submit">LOGIN</button>
					
				</form>
			</div>
			
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script src="js/main.js"></script>
	
		</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>