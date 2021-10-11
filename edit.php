<?php

include "config.php"; // Using database connection file here

$user_id = (isset($_GET['user_id']) ? $_GET['user_id'] : ''); // get id through query string

$qry = mysqli_query($conn,"select * from user where user_id='$user_id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    echo "<script>alert('User Profile Successfully Updated')</script>";
    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $DOB = $_POST['DOB'];
	
    $edit = mysqli_query($conn,"update user set fullname='$fullname', email='$email', DOB='$DOB' where user_id='$user_id'");
	
    if($edit)
    {
        echo "<script>alert('User Profile Successfully Updated')</script>";
        mysqli_close($conn); // Close connection
        header("location:logout.php"); // logs out
        exit;
    }
    else
    {
            echo "<script>alert('Connection Failed')</script>";
	    echo mysqli_error($conn);
    }    	
}

?>

<link rel="stylesheet" type="text/css" href="assets/template.css">

<div class="grid-container">

    <div class="item4">

<title> Update Profile </title>

<h3>Update Profile Details</h3>

<form method="POST">
  <input type="text" name="fullname" value="<?php echo $data['fullname'] ?>" placeholder="Enter New Full Name">
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter New Email">
  <input type="date" name="DOB" value="<?php echo $data['DOB'] ?>" placeholder="Enter New Date of Birth">
  <input type="submit" name="update" value="Update">
</form>
	    
<p> Here you can edit your Profile Details including your Name, Email and Date of Birth. <br><br> Once you have edited as per your wish, press the Update button. <br><br> 
The website will redirect you to the home page. Please Login with any updated details to continue browsing. 
<br><br>
Do you wish to go back without editing? <a href="index.php">Go Home</a> <br><br>
Wish to view your profile? <a href="welcome.php">My Profile</a> <br><br>
Please note that all the information you provide in this registration will be stored on this website's database. This will be later displayed on 'My Profile' for you to view on logging in. The information can be edited later if you wish. <br> None of the registration information will be shared with any other organisation at any point.

</p>

</div>
</div>
