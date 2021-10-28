<?php
include 'nav_bar.php'; //include the common code for navigation bar
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search</title>
        <link rel="stylesheet" type="text/css" href="assets/template.css"> <!-- Include CSS template common code -->
    </head>
    
<!-- Nav Bar is same on every page so common component code already included, specifc code starts here -->

<!-- 1st Menu Drop Down -->
<button class="accordion"> ≡ Menu</button>

<div class="panel">
  
  <!-- Nav Bar Inside Drop Down -->
  <div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
  <a href="opportunities.php"> Opportunities</a>
  <a href="welcome.php"> My Profile </a> 
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

<body>
    
<div class="grid-container">

    <div class="item4"> <!-- Center page section used -->
  
<?php
$search = $_POST['search'];

include "config.php"; // Using database connection file here to display profile from database

echo "<h1>Search Results for " . $search . "</h1>"; // Personalised list

$sql = "SELECT sign_ups.Date, sign_ups.Phone, sign_ups.Suburb, user.fullname 
        FROM user 
        INNER JOIN sign_ups ON sign_ups.user_id = user.user_id 
        WHERE Activity like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
?>
<table border="2" align='center'>
  <tr>
    <td style="padding:10px">Full Name</td>
    <td style="padding:10px">Data</td>
    <td style="padding:10px">Phone Number</td>
    <td style="padding:10px">Suburb</td>
  </tr>
<?php
while($row = $result->fetch_assoc() ){
?>
  <tr>
    <td style="padding:10px"><?php echo $row['fullname']; ?></td>
    <td style="padding:10px"><?php echo $row['Date']; ?></td>
    <td style="padding:10px"><?php echo $row['Phone']; ?></td>
    <td style="padding:10px"><?php echo $row['Suburb']; ?></td>   
  </tr>	

<?php
} // end php code for sign up details (sign_ups table) from database
?>

 </table> <br>
 
<?php 
} else {
	echo nl2br ("No entries found \n Try again later or use different keywords");
}

$conn->close();

?>

<p align='center'>Want to search for another activity? <a href='search.php'>Go back to Search</a></p>

</div>

<?php include 'footer.php'; ?> <!-- continued Footer Code with common Footer.php code -->
