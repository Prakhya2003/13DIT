<?php 

include 'config.php'; // establish connection with the database to enable searching for matching user_id and password

session_start();

error_reporting(0);

if (isset($_SESSION['user_id'])) {   //If already logged in, redirect to the My Profile Page
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {    // If Login submited, remember the entered user_id and password
	$user_id = $_POST['user_id'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE user_id='$user_id' AND password='$password'"; //Check for existing 
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['user_id'] = $row['user_id']; //check if the entered data is the same as the stored entries
		header("Location: welcome.php"); // redirect to the My Profile page if entered matches stored.
	} else {
		echo "<script>alert('The entered Username or Password is Wrong.')</script>";  //If they don't match then ask again
	}
}

?>

<!DOCTYPE html> <!-- start of HTML code -->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- CSS Style specific font link -->
	<link rel="stylesheet" type="text/css" href="assets/login_register_stylesheet.css"> <!-- CSS Style sheet used commonly -->

	<title>Login Form</title> <!-- Login page tab title -->
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p> <!-- Login heading -->
			<div class="input-group">
				<input type="text" placeholder="Your Username" name="user_id" value="<?php echo $user_id; ?>" required> <!-- Ask for user_id / username -->
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required> <!-- Ask for password -->
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button> <!-- submit and log in button -->
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a></p> <br> <!-- allow users to register first incase they are in the wrong place -->
			<p class="login-register-text">Wish to do this later? <a href="index.php">Go Home</a></p> <!-- Error Prevention allowing users to go back home -->
		</form>
	</div>
</body>
</html> <!-- End of HTML code for this page -->
