<!DOCTYPE html>
<html lang="en">
<head>
	<title>South Paris Restore</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo URL;?>/view/_asset/_img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/view/_asset/_vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/view/_asset/_font/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/view/_asset/_font/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/view/_asset/_vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/view/_asset/_vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/view/_asset/_vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/view/_asset/_vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/view/_asset/_vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/view/_asset/_css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/view/_asset/_css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?php echo URL;?>/view/_asset/_img/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form action="UserController/getAccess" method="POST"  class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" id="email" type="text" name="email" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" id="password" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

				
					<div class="container-login100-form-btn">
						 <button id="btn" class="login100-form-btn" type="submit">
							Login
						</button> 
					
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--===============================================================================================-->
<script src="<?php echo URL;?>/view/_asset/_js/login.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo URL;?>/view/_asset/_vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo URL;?>/view/_asset/_vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo URL;?>/view/_asset/_vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo URL;?>/view/_asset/_vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo URL;?>/view/_asset/_vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo URL;?>/view/_asset/_vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo URL;?>/view/_asset/_vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo URL;?>/view/_asset/_vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo URL;?>/view/_asset/_js/main.js"></script>

</body>
</html>