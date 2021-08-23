<!-- ONLY form for Sign Ups that will be included on Opportunities page LHS if logged in -->

<?php 

include 'config.php'; // establish connection with database

error_reporting(0); 

if (isset($_POST['submit'])) {        // If all okay, Add record with filled out data
	$user_id = $_POST['user_id'];
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
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
			}
		}
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Volunteering Sign Up</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Volunteering Sign Up</p>
			<div class="input-group">
				<input type="text" placeholder="Your Username" name="user_id" value="<?php echo $user_id; ?>" required>
			</div>
			<div class="input-group">
				<input type="date" placeholder="Chosen Date" name="date" value="<?php echo $date; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Chosen Activity" name="activity" value="<?php echo $activity; ?>" required>
			</div>
			<div class="input-group">
				<input type="number" placeholder="Your Phone Number" name="phone" value="<?php echo $phone; ?>">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Your Suburb" name="suburb" value="<?php echo $suburb; ?>">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Sign Up</button>
			</div>
		</form>
	</div>
</body>
</html>
