<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$user_id = $_POST['user_id'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
	$DOB = $_POST['DOB'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user WHERE user_id='$user_id'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (user_id, fullname, email, password, DOB)
					VALUES ('$user_id', '$fullname', '$email', '$password', '$DOB')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User Registration Complete. Please Login to view your profile.')</script>";
				$user_id = "";
				$fullname = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				$DOB = "";
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
			}
		} else {
			echo "<script>alert('Username Already Exists. Please login or choose a different username.')</script>";
		}
	} else {
		echo "<script>alert('Please try again, the Password does not match.')</script>";
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

	<title>Register</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Your Username" name="user_id" value="<?php echo $user_id; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Full Name" name="fullname" value="<?php echo $fullname; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="date" placeholder="Date of Birth" name="DOB" value="<?php echo $DOB; ?>" required>
			</div>
		    <div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p> <br><br>
			<p class="login-register-text">Wish to do this later? <a href="index.php">Go Home</a></p> <br><br>
			<p> Please note that all the information you provide in this registration will be stored on this website's database. This will be later displayed on 'My Profile' for you to view on logging in. The information can be edited later if you wish. <br> None of the registration information will be shared with any other organisation at any point.</p>
		</form>
	</div>
</body>
</html>
