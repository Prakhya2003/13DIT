<?php

include 'nav_bar.php'; //include the common code for navigation bar
include "config.php"; // Using database connection file here

$id = (isset($_GET['id']) ? $_GET['id'] : ''); // get id through query string

$qry = mysqli_query($conn,"select * from user where ID='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    
    $fullname = $_POST['fullname']; 
    $email = $_POST['email'];
    $DOB = $_POST['DOB'];
	
    $edit = mysqli_query($conn,"update user set fullname='$fullname', email='$email', DOB='$DOB' where ID='$id'");  // sql code to edit a row (row with the same id) in the user table 
	
    if($edit)
    {
        echo "<script>alert('User Profile Successfully Updated')</script>"; //If successful update the entered details below
        mysqli_close($conn); // Close connection
        header("location:logout.php"); // logs out
        exit;
    }
    else
    {
            echo "<script>alert('Connection Failed')</script>"; //If connection is not established
	    echo mysqli_error($conn); //show error
    }    	
}

?>

<!DOCTYPE html> <!-- HTML code starts -->
<html>

<head>
    
<title> Update Profile </title> <!-- Update Profile title -->
<link rel="stylesheet" type="text/css" href="assets/template.css"> <!-- Include CSS template common code -->

</head>

<body>
    
<div class="grid-container">

    <div class="item4">

<h3>Update Profile Details</h3>

<form method="POST">
  <p>Enter Full Name</p>
  <input type="text" name="fullname" value="<?php echo $data['fullname'] ?>" placeholder="Enter New Full Name"> <!-- Update Full Name field for the current user -->
  <p>Enter Email</p>
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter New Email"> <!-- Update email field for the current user -->
  <p>Enter Date of Birth</p>
  <input type="date" name="DOB" value="<?php echo $data['DOB'] ?>" placeholder="Enter New Date of Birth"> <!-- Update date of birth field for the current user -->
  <input type="submit" name="update" value="Update">
</form>
	    
<p> <!-- Information for users to make site simpler to use -->
Here you can edit your Profile Details including your Name, Email and Date of Birth. <br><br> Once you have edited as per your wish, press the Update button. <br><br> 
The website will redirect you to the home page. Please Login with any updated details to continue browsing. 
<br><br>

Do you wish to go back without editing? <a href="index.php">Go Home</a> <br><br> <!-- Error Prevention and Correction allowed by giving users choice to go back home -->
Wish to view your profile? <a href="welcome.php">My Profile</a> <br><br> <!-- Error Prevention and Correction allowed by giving users choice to go back to my profile -->

Please note that all the information you provide in this registration will be stored on this website's database. This will be later displayed on 'My Profile' for you to view on logging in. The information can be edited later if you wish. <br> None of the registration information will be shared with any other organisation at any point.

</p>

</div>
</div>

</body>
</html>
