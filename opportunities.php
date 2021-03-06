<?php 
include 'nav_bar.php';
?>

<!DOCTYPE html> <!-- start of HTML code -->
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/template.css"> <!-- CSS Style sheet used commonly -->
    <title> Steer Home </title> <!-- Index / home page tab title -->
</head>

<body>

<!-- Nav Bar is same on every page so common component code already included, specifc code starts here -->
    
<!-- 1st Drop Down -->
<button class="accordion"> ≡ Menu</button>

<div class="panel">
  
  <!-- Nav Bar Inside Drop Down -->
  <div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
  <a href="opportunities.php" class="active"> Opportunities</a> <!-- Home active page defined -->
  <a href="welcome.php"> My Profile </a>
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
    
    <img src="assets/car.jpg" alt="Steering" width="100%" height='300px'> <!-- top car image in assests folder -->

<div class="grid-container" style="text-align:center;">  <!-- center align text for aesthetics -->
    
        <?php
            session_start();
            if(!isset($_SESSION['user_id'])) // If user is not logged in
            {
        ?>
    
    <div class="item1">  <!-- information asking them to log in to sign up -->
        <p style="text-align:left;"> If you would like to sign up to any of the volunteering opportunities, <br> you are required to <a href="login.php">Login</a>. <br> If you have not previously Registered, please do so here; <a href="register.php">Register</a>. <br> <br> Please Note that all the information you provide on this sign up form will be shared with the administration for volunteering at this specific organisation. No other information (including registration) will be shared with the organisation. This entry will be recorded and displayed as a record of achivement and experience on the 'My Profile' page.</p>
    </div>
    
            <?php 
            }
            else  // if the user is logged in
            {
                include 'sign_up_form.php';  // Display Sign Up Form 
            }
            ?>
    
    <div class="item2"> <!-- Right side section to display a schedule -->
        <h3> Below is the Casual Volunteering Schedule for Volunteering Organisation </h3>
        <iframe width="100%" height="400px"frameborder="0" scrolling="no" title="Volunteering schedule" src="assets/plan_pdf.pdf"> </iframe> <!-- embeded pdf file from assests folder -->
        <p> Alternatively, to view an active Microsoft Excel file which click this <a href="https://epsomgirls-my.sharepoint.com/:x:/g/personal/17027_eggs_school_nz/EZY5LoVEsCtLrjHPMcsK_JQBNms9Kwa0FTGSjhfV4H6mCQ?e=HJ8DCP">Link</a>. <br>
            If you would like to view in another tab or download the PDF file, use this <a href="assets/plan_pdf.pdf">Link</a>. <!-- links to excel and open in another tab -->
        </p>
    </div>
    
    <div class="item4">
        <h2> Opportunities </h2> <!-- top center section that describes the purpose of this page -->
        <p>Here you have the option of signing up to the various volunteering opportunities provided. If the organisation finds that you are appropriate for the role, they will contact you directly to work out the details. </p>
    </div>
    
<?php 
include 'footer.php'; // Footer is same on every page, common component code
?>
