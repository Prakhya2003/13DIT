<?php 
include 'nav_bar.php';
?>

<link rel="stylesheet" type="text/css" href="assets/template.css">
<title> Steer Opportunities </title>

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
    
    
    <img src="assets/car.jpg" alt="Steering" width="100%" height='300px'>

    
<!-- Nav Bar is same on every page, common component code -->

<div class="grid-container">
    
        <?php
            session_start();
            if(!isset($_SESSION['user_id']))
            {
        ?>
    
    <div class="item1"> 
        <p> If you would like to sign up to any of the volunteering opportunities, you are required to <a href="login.php">Login</a>. <br> If you have not previously Registered, please do so here; <a href="register.php">Register</a>. <br> <br> Please Note that all the information you provide on this sign up form will be shared with the administration for volunteering at this specific organisation. No other information (including registration) will be shared with the organisation. This entry will be recorded and displayed as a record of achivement and experience on the 'My Profile' page.</p>
    </div>
    
            <?php 
            }
            else
            {
                include 'Elizabeth_knox_form.php';
            }
            ?>
    
    <div class="item2">
        <h3> Below is the Casual Volunteering Schedule for Elizabeth Knox </h3>
        <iframe width="100%" height="500px"frameborder="0" scrolling="no" src="https://epsomgirls-my.sharepoint.com/personal/17027_eggs_school_nz/_layouts/15/Doc.aspx?sourcedoc={852e3996-b044-4b2b-ae31-cf31cb0afc94}&action=embedview&wdAllowInteractivity=False&ActiveCell='Weekly%20Voulnteer%20Requirements'!B2&Item='Weekly%20Voulnteer%20Requirements'!A1%3AL40&wdHideGridlines=True&wdDownloadButton=True&wdInConfigurator=True"></iframe>
        <p> Alternatively, click this<a href="https://epsomgirls-my.sharepoint.com/:x:/g/personal/17027_eggs_school_nz/EZY5LoVEsCtLrjHPMcsK_JQBNms9Kwa0FTGSjhfV4H6mCQ?e=HJ8DCP"> Link </a>to open the timetable in another tab. </p>
    </div>
    
    <div class="item4">
        <p> Opportunities Page </p>
    </div>
    
<?php 
include 'footer.php';
?>
    
<!-- Nav Bar is same on every page, common component code -->
