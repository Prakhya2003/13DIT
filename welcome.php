<?php 

include "config.php"; // Using database connection file here to display profile from database
include 'nav_bar.php'; //include the common code for navigation bar

session_start();

if (!isset($_SESSION['user_id'])) {   //If not logged in then redirect to the login page
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title> <!-- My Profile tab title -->
    <link rel="stylesheet" type="text/css" href="assets/template.css"> <!-- CSS Style sheet used commonly -->
</head>

<body>

<!-- Nav Bar is same on every page so common component code already included, specifc code starts here -->

<!-- 1st Menu Drop Down -->
<button class="accordion"> ≡ Menu</button>

<div class="panel">
  
  <!-- Nav Bar Inside Drop Down -->
  <div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
  <a href="opportunities.php"> Opportunities</a>
  <a href="welcome.php" class="active"> My Profile </a> <!-- My Profile active page defined -->
  <a href="register.php">Register</a>
  <a href="login.php">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  
</div>

<!-- Nav Bar Javascript -->
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</div>

<!-- Accordion Javascript --> 
<script> 
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
    
    
    <img src="assets/car.jpg" alt="Steering" width="100%" height='300px'> <!-- top car image -->
    
<div class="grid-container">

    <div class="item4"> <!-- Center page section used -->
    
    <?php echo "<h1>Welcome " . $_SESSION['user_id'] . "</h1>"; ?> <!-- Personalised welcome -->
    
    <p>This is your profile. Here you can view, edit or delete your information. Along with that, you can see a glimpse of everytime you have steped out of your comfort zone and signed up for a volunteering opportunity on steer. So go ahead to the <a href = "opportunities.php">opportunities page</a> and continue adding to your experiences. </p> <!-- Information for users to make website easier to opperate -->
    
<!-- user registration details table -->
    
    <h2>User Details</h2>

<table border="2" align='center'>
  <tr>
    <td style="padding:10px">Username</td>
    <td style="padding:10px">Full Name</td>
    <td style="padding:10px">Email</td>
    <td style="padding:10px">Date of Birth</td>
  </tr>

<?php
    
    $user_id = ($_SESSION['user_id']); // call for records for the currently logged in user

$records = mysqli_query($conn,"SELECT * FROM user WHERE user_id='$user_id'"); // fetch data from user info table

while($data = mysqli_fetch_array($records)) // display current user profile details
{
?>
  <tr>
    <td style="padding:10px"><?php echo $data['user_id']; ?></td>
    <td style="padding:10px"><?php echo $data['fullname']; ?></td>
    <td style="padding:10px"><?php echo $data['email']; ?></td>   
    <td style="padding:10px"><?php echo $data['DOB']; ?></td>

  </tr>	

</table> <br>

<a href="edit.php?id=<?php echo $data['ID']; ?>">Edit</a> <!-- link that allows users to edit the currently saved entries in the database for their unique user_id -->

<a href="delete.php?id=<?php echo $data['ID']; ?>">Delete</a> <br><br> <!-- link that allows users to delete the currently logged in profile -->

<?php
} // end php code for user details (user table) from database
?>

<!-- previous sign ups table -->
    
    <h2>Your previous volunteering experience on Steer</h2>
    
    <p>Volunteering Organisation One</p>

<table border="2" align='center'>
  <tr>
    <td style="padding:10px">Date</td>
    <td style="padding:10px">Activity</td>
    <td style="padding:10px">Phone Number</td>
    <td style="padding:10px">Suburb</td>
  </tr>

<?php

    $user_id = ($_SESSION['user_id']); // call for records for the currently logged in user

$records = mysqli_query($conn,"SELECT * FROM sign_ups WHERE user_id='$user_id'"); // fetch data from sign ups table

while($data = mysqli_fetch_array($records))  // display current user's sign uped entries
{
?>
  <tr>
    <td style="padding:10px"><?php echo $data['Date']; ?></td>
    <td style="padding:10px"><?php echo $data['Activity']; ?></td>
    <td style="padding:10px"><?php echo $data['Phone']; ?></td>
    <td style="padding:10px"><?php echo $data['Suburb']; ?></td>   
  </tr>	
  
 </table> <br>

<?php
} // end php code for sign up details (sign_ups table) from database
?>

<a href="logout.php">Logout</a> <br><br> <!-- link that allows users to log out from the currently logged in profile -->

</div>
</div>

<div class="grid-container"> <!-- starting the code for the common footer -->
    
<?php include 'footer.php'; ?> <!-- continued Footer Code with common Footer.php code -->
