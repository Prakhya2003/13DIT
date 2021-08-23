<?php 

include "config.php"; // Using database connection file here
include 'nav_bar.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}

?>

<link rel="stylesheet" type="text/css" href="assets/template.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
</head>
<body>
    
<body>
    
<!-- 1st Drop Down -->
<button class="accordion"> ≡ Menu</button>

<div class="panel">
  
  <!-- Nav Bar Inside Drop Down -->
  <div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
  <a href="opportunities.php"> Opportunities</a>
  <a href="welcome.php" class="active"> My Profile </a>
  <a href="register.php">Register</a>
  <a href="login.php">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  
</div>

<!-- Nav Bar Javascript --><script>
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

<!-- Accordion Javascript --> <script> 
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
    
    
    <img src="assets/car.jpg" alt="Steering" width="100%" height='300px'>

    
<!-- Nav Bar is same on every page, common component code -->
    
<div class="grid-container">

    <div class="item4">
    
    <?php echo "<h1>Welcome " . $_SESSION['user_id'] . "</h1>"; ?> <!-- Personalised welcome -->
    
<!-- user registration details table -->
    
    <h2>User Details</h2>

<table border="2" align='center'>
  <tr>
    <td style="padding:10px">ID</td>
    <td style="padding:10px">Username</td>
    <td style="padding:10px">Full Name</td>
    <td style="padding:10px">Email</td>
    <td style="padding:10px">Date of Birth</td>
  </tr>

<?php
    
    $user_id = ($_SESSION['user_id']);

$records = mysqli_query($conn,"SELECT * FROM user WHERE user_id='$user_id'"); // fetch data from user info table

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td style="padding:10px"><?php echo $data['ID']; ?></td>
    <td style="padding:10px"><?php echo $data['user_id']; ?></td>
    <td style="padding:10px"><?php echo $data['fullname']; ?></td>
    <td style="padding:10px"><?php echo $data['email']; ?></td>   
    <td style="padding:10px"><?php echo $data['DOB']; ?></td>

  </tr>	

<?php
}
?>

</table> <br>

<a href="edit.php?id=<?php echo $data['ID']; ?>">Edit</a> 

<a href="delete.php?id=<?php echo $data['ID']; ?>">Delete</a> <br><br>

<!-- previous sign ups table -->
    
    <h2>Your previous volunteering experience on Steer</h2>

<table border="2" align='center'>
  <tr>
    <td style="padding:10px">Date</td>
    <td style="padding:10px">Activity</td>
    <td style="padding:10px">Phone Number</td>
    <td style="padding:10px">Suburb</td>
  </tr>

<?php

    $user_id = ($_SESSION['user_id']);

$records = mysqli_query($conn,"SELECT * FROM sign_ups WHERE user_id='$user_id'"); // fetch data from sign ups table

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td style="padding:10px"><?php echo $data['Date']; ?></td>
    <td style="padding:10px"><?php echo $data['Activity']; ?></td>
    <td style="padding:10px"><?php echo $data['Phone']; ?></td>
    <td style="padding:10px"><?php echo $data['Suburb']; ?></td>   
  </tr>	

<?php
}
?>

</table> <br>

<a href="logout.php">Logout</a> <br><br>

</div>
</div>

<div class="grid-container">
    
<?php include 'footer.php'; ?>

<!-- continued Footer Code with common Footer.php code -->
