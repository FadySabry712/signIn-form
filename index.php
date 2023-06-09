<?php 
include_once 'config/sereverside.php';  
include_once 'app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/02fd7ae18a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Sign in/Sign up form</title>
</head>
<body>
    <h2> Sign in/up Form</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="Name"/>
			<input type="email" placeholder="Email" name="Email"/>
			<input type="password" placeholder="Password" name="Password" />
			<button name="submit">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action=""  method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="Sign_in_email" />
			<input type="password" placeholder="Password" name="Sign_in_pwd"/>
			<a href="#">Forgot your password?</a>
			<button name="submitSignin">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script src="main.js"></script>

<footer>
	<p>
		Created by FadySabry.
		
	</p>
</footer>
</body>
</html>