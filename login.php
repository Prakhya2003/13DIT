<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['user_id'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$user_id = $_POST['user_id'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE user_id='$user_id' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['user_id'] = $row['user_id'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('The entered Username or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/login_register_stylesheet.css">

	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="text" placeholder="Your Username" name="user_id" value="<?php echo $user_id; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a></p> <br>
			<p class="login-register-text">Wish to do this later? <a href="index.php">Go Home</a></p>
		</form>
	</div>
</body>
</html>
