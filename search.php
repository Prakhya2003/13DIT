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

    <div class="item4">

<h2> Search for Sign Ups </h2> 
<p>Welcome to the sub-section of Steer. This page is for organisations to conduct a search to find individuals for have signed up for a specific activity. <br> All you need to do is type in the activity and hit the submit button to view a list of users (with their full name, phone number, suburb and chosen date) in chronological order. </p> <br>
<form action="phpsearch.php" method="post">
Search Activity: <input type="text" name="search"><br><br>
<input type ="submit">
</form> <br> <br>

</div>

<?php include 'footer.php'; ?> <!-- continued Footer Code with common Footer.php code -->

</body>
</html>
