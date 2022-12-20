<?php

session_start();

$koneksi = mysqli_connect('localhost','root','','youthcare_db');

if (isset($_POST["register"])) {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	$sql = "INSERT INTO tb_user(username,email,password)VALUES('$username','$email','$password')";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		header("location: login.php");

	} else {


		echo 'error';
	}
}

if (isset($_POST["login"])) {
	$username = $_POST['loginusername'];
	$password = $_POST['loginpassword'];

	$sql = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
	$result = mysqli_query($koneksi, $sql);
	if ($result->num_rows > 0) {

		$_SESSION["login"] = true;
		$_SESSION['user_name'] = $username;
		header("Location: index.php");
	} else {
		echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";

	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign In</title>
	<link rel="stylesheet" href="index.php">
	<link rel="stylesheet" href="assets/css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="" method="POST">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
				</div>
				<span>or use your email for registration</span>
				<input type="text" name="username" placeholder="Username" id="username" />
				<input type="email" name="email" placeholder="Email" id="email" />
				<input type="password" name="password" placeholder="Password" id="password" />
				<input type="password" name="password2" placeholder="Confirm Password" id="password2" />
				<button type="submit" name="register">Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="" method="POST">
				<h1>Sign in</h1>
				<div class="social-container">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
				</div>
				<span>or use your account</span>
				<input type="text" name="loginusername" placeholder="Username" id="loginusername" />
				<input type="password" name="loginpassword" placeholder="Password" id="loginpassword" />
				<button type="submit" name="login">Sign In</button>
				<a href="#">Forgot your password?</a>

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
</body>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});

	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>