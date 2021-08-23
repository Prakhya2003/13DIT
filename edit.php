<?php

include "config.php"; // Using database connection file here

$id = (isset($_GET['id']) ? $_GET['id'] : ''); // get id through query string

$qry = mysqli_query($conn,"select * from user where ID='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    echo "<script>alert('User Profile Successfully Updated')</script>";
    
    $username = $_POST['username'];
    $email = $_POST['email'];
	
    $edit = mysqli_query($conn,"update user set username='$username', email='$email' where ID='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:logout.php"); // logs out
        exit;
    }
    else
    {
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
  <input type="text" name="username" value="<?php echo $data['username'] ?>" placeholder="Enter New Username">
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter New Email">
  <input type="date" name="DOB" value="<?php echo $data['DOB'] ?>" placeholder="Enter New Date of Birth">
  <input type="submit" name="update" value="Update">
</form>

<p> Here you can edit your Profile Details incing your Name, Email and Date of Birth. <br><br> Once you have edited as per your wish, press the Update button. <br><br> 
The website will redirect you to the home page. Please Login with any updated details to continue browsing. 
<br><br>
Do you wish to go back without editing? <a href="index.php">Go Home</a> <br><br>
Wish to view your profile? <a href="welcome.php">My Profile</a> <br><br>
Please note that all the information you provide in this registration will be stored on this website's database. This will be later displayed on 'My Profile' for you to view on logging in. The information can be edited later if you wish. <br> None of the registration information will be shared with any other organisation at any point.

</p>

</div>
</div>
