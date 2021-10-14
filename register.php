<?php 

include 'config.php'; // establish connection with database to insert new entries into users table

error_reporting(0);

session_start();
  
if (isset($_SESSION['user_id'])) {  // If user already logged in then redirect to the My Profile page
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {  // Remeber the data entered into the form
	$user_id = $_POST['user_id']; 
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
	$DOB = $_POST['DOB'];

	if ($password == $cpassword) {  //check if both passwords match 
		$sql = "SELECT * FROM user WHERE user_id='$user_id'";  // check if there is a similar user_id already existing 
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {  // If no similar user_id is found then inserted the entered data as a new row in the user table
			$sql = "INSERT INTO user (user_id, fullname, email, password, DOB) 
					VALUES ('$user_id', '$fullname', '$email', '$password', '$DOB')";
			$result = mysqli_query($conn, $sql);  // On successfull enter show alert
			if ($result) {
				echo "<script>alert('User Registration Complete. Please Login to view your profile and sign up for volunteering opportunities.'); window.location.href='login.php';</script>";
				$user_id = "";
				$fullname = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				$DOB = "";
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";  //If unknown error occured
			}
		} else {
			echo "<script>alert('Username Already Exists. Please login or choose a different username.')</script>";  // If there is a repeat in username, notify user and suggest next steps
		}
	} else {
		echo "<script>alert('Please try again, the Password does not match.')</script>";  // If both passwords don't match then alert users
	}
}

?>

<!DOCTYPE html>  <!-- start of HTML code -->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  <!-- CSS Style specific font link -->
	<link rel="stylesheet" type="text/css" href="assets/login_register_stylesheet.css">  <!-- CSS Style sheet used commonly -->
	<title>Register</title>  <!-- Register page tab title -->
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Your Username" name="user_id" value="<?php echo $user_id; ?>" required>  <!-- Ask for Username -->
			</div>
			<div class="input-group">
				<input type="text" placeholder="Full Name" name="fullname" value="<?php echo $fullname; ?>" required>  <!-- Ask for Full Name -->
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>  <!-- Ask for email -->
			</div>
			<p>  Your Date of Birth</p>
			<div class="input-group">
				<input type="date" placeholder="Date of Birth" name="DOB" value="<?php echo $DOB; ?>" required>  <!-- Ask for Date of Birth -->
			</div>
		    <div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>  <!-- Ask for password -->
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>  <!-- Ask to confirm password -->
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>  <!-- submit and register button -->
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p> <br><br>  <!-- allow users to login first incase they are in the wrong place -->
			<p class="login-register-text">Wish to do this later? <a href="index.php">Go Home</a></p> <br><br>  <!-- Error Prevention allowing users to go back home -->
			<p> Please note that all the information you provide in this registration will be stored on this website's database. This will be later displayed on 'My Profile' for you to view on logging in. The information can be edited later if you wish. <br> None of the registration information will be shared with any other organisation at any point.</p>  <!-- inofrmation that clarifies the use of any data provided, makes users feel safer about enter personal information -->
		</form>
	</div>
</body>
</html>  <!-- End of HTML code for this page -->
