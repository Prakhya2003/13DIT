<?php 
include 'nav_bar.php';
?>

<link rel="stylesheet" type="text/css" href="assets/template.css">

<title> Steer Home </title>

<body>
    
<!-- 1st Drop Down -->
<button class="accordion"> ≡ Menu</button>

<div class="panel">
  
  <!-- Nav Bar Inside Drop Down -->
  <div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="opportunities.php"> Opportunities</a>
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
    
    
    <img src="assets/car.jpg" alt="Steering" width="100%" height='300px'>

    
<!-- Nav Bar is same on every page, common component code -->


<div class="panel">
  
  <!-- Nav Bar Inside Drop Down -->
  <div class="topnav" id="myTopnav">
    <a href="index.php" class="active">Home</a>
    <a href="opportunities.php"> opportunities</a>
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


<div class="grid-container">

    <div class="item2">
        <p> Volunteering is a key element to character and experience building. That is why Steer encourages and aids students to volunteer and steer their futures in the direction that they choose. </p>
    </div>

    <div class="item1"> 
        <p> Volunteering is a key element to character and experience building.  </p>
    </div>
    
    <div class="item4">
        <p> Home Page </p>
    </div>
    
<?php 
include 'footer.php';
?>
    
<!-- Footer and Navigation Bar is same on every page, common component code -->
