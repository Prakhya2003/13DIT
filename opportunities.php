<?php 
include 'nav_bar.php';
?>

<link rel="stylesheet" type="text/css" href="template.css">

<body>
    
<!-- 1st Drop Down -->
<button class="accordion"> ≡ Menu</button>

<div class="panel">
  
  <!-- Nav Bar Inside Drop Down -->
  <div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
  <a href="opportunities.php" class="active"> Opportunities</a>
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
    
    
    <img src="car.jpg" alt="Steering" width="100%" height='300px'>

    
<!-- Nav Bar is same on every page, common component code -->

<div class="grid-container">

    <div class="item2">
        <p> Volunteering is a key element to character and experience building. That is why Steer encourages and aids students to volunteer and steer their futures in the direction that they choose. </p>
    </div>

    <div class="item1"> 
        <p> Volunteering is a key element to character and experience building.  </p>
    </div>
    
    <div class="item3">
        <p> footer </p>
    </div>
    
    <div class="item4">
        <p> Opportunities Page </p>
    </div>

</div>

</body>
</html>
    
<!-- Nav Bar is same on every page, common component code -->