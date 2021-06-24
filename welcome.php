<?php 

include "config.php"; // Using database connection file here
include 'nav_bar.php';

session_start();

if (!isset($_SESSION['username'])) {
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
    
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    
    <h2>User Details</h2>

<table border="2">
  <tr>
    <td>ID</td>
    <td>Username</td>
    <td>Email</td>
    <td>Date of Birth</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php
    
    $username = ($_SESSION['username']);

$records = mysqli_query($conn,"SELECT * FROM user WHERE username='$username'"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['ID']; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['email']; ?></td>   
    <td><?php echo $data['DOB']; ?></td> 
    <td><a href="edit.php?id=<?php echo $data['ID']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['ID']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

<a href="logout.php">Logout</a>
    
<div class="grid-container">
    
<?php include 'footer.php'; ?>

<!-- continued Footer Code with common Footer.php code -->
