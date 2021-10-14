<!-- ONLY form for Sign Ups that will be included on Opportunities page LHS if logged in -->

<?php 

include 'config.php'; // establish connection with database

error_reporting(0); 

if (isset($_POST['submit'])) {        // If all okay, Add record with filled out data
	$user_id = $_SESSION['user_id'];
	$date = $_POST['date'];
	$activity = $_POST['activity'];
	$phone = $_POST['phone'];
	$suburb = $_POST['suburb'];

		if (!$result->num_rows > 0) {    // If form is filled, add records
			$sql = "INSERT INTO sign_ups (user_id, date, activity, phone, suburb)
					VALUES ('$user_id', '$date', '$activity', '$phone', '$suburb')";
			$result = mysqli_query($conn, $sql);
			if ($result) {       // On successfull completion
				echo "<script>alert('Volunteering Sign Up Complete. You will be contacted directly by the organisation for further details and confirmation.')</script>";
				$user_id = "";
				$date = "";
				$activity = "";
				$phone = "";
				$suburb = "";
			} else {
				echo "<script>alert('Woops! Something Went Wrong. Please ensure that what you have entered is correct with no special characters.')</script>";   // Incase of invalid entries
			}
		}
	} 
?>

<!DOCTYPE html>  <!-- start of HTML code -->
<html>
<head>  
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  <!-- CSS Style specific font link -->
	<link rel="stylesheet" type="text/css" href="style.css">  <!-- CSS Style sheet used commonly -->

	<title>Volunteering Sign Up</title>  <!-- Form title -->
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Volunteering Sign Up</p>
			<div class="input-group">
				<p> Which date do you wish to sign up for?</p>
				<input type="date" placeholder="Chosen Date" name="date" value="<?php echo $date; ?>" required>  <!-- Ask for Chosen Date -->
			</div>
			<div class="input-group">
			    <p> What is the activity you wish to volunteer at? </p>
				<input type="text" placeholder="Chosen Activity" name="activity" value="<?php echo $activity; ?>" required>  <!-- Ask for chosen activity -->
			</div>
			<div class="input-group">
			    <p> What is your contact phone number? </p>
				<input type="number" placeholder="Your Phone Number" name="phone" value="<?php echo $phone; ?>">  <!-- Ask for contact number -->
			</div>
			<div class="input-group">
			    <p> What is the suburb you prefer? (Optional) </p>
				<input type="text" placeholder="Your Suburb" name="suburb" value="<?php echo $suburb; ?>">  <!-- Ask for Area of work if relevant (optional field) -->
			</div>
			<br>
			<div class="input-group">
				<button name="submit" class="btn">Sign Up</button>  <!-- submit and sign up button -->
			</div>
		</form>
	</div>
</body>
</html>  <!-- End of HTML code for this page -->
