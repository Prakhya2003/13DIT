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

    <div class="item4">
        <h2>Steer where Students Volunteer</h2>
        <p>Volunteering is a key element to character and experience building. That is why Steer encourages and aids students to volunteer and steer their futures in the direction that they choose. Steer allows members of the community to sign up to local volunteering or rostered events and keep track of their progress in reaching out. We try to encourage and foster the sense of achievement and humility felt when volunteering and stepping out of your comfort zone. Volunteering brings a wide range of benefits including a sense of purpose and belonging within the community. Volunteering improves interpersonal connections and social relationships too. </p>
    </div>
    
    <div class="item2">
        <p> Volunteering is a wonderful way to give back to the community and start contributing at an early stage. Along with being empathetic and compassionate youth leaders, when you volunteer, you have the opportunity to learn exceptional lifestyle skills. Some of these vital skills include punctuality, team work, time management, working with authority, communication, leadership, professionalism, accountability, customer service, work ethics, public relations, networking, flexibility, problem solving and training. As well as all of these skills, volunteering is always a respected and valued addition to anyone’s Curriculum Vitae (CV). It greatly increases the chances of performing well at a job if you have previous experience. Volunteering can give you the experience you need to take a step towards achieving your dreams. Results of Deloitte research showed that 82% of employers preferred applicants with volunteering experience.  </p>
    </div>

    <div class="item1"> 
    <img src="assets/index_img.jpeg" alt="People Volunteering" width="80%">
    </div>
    
<?php 
include 'footer.php';
?>
    
<!-- Footer and Navigation Bar is same on every page, common component code -->
