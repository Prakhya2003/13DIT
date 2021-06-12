<?php

include "config.php"; // Using database connection file here

//session_start();

//if (!isset($_SESSION['username'])) {
//    header("Location: login.php");
//}

$id = (isset($_GET['id']) ? $_GET['id'] : ''); // get id through query string

$qry = mysqli_query($conn,"select * from user where ID='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	
    $edit = mysqli_query($conn,"update users set username='$username', email='$email', password='$password where username='$name'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:welcome.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($conn);
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="username" value="<?php echo $data['username'] ?>" placeholder="Enter New Username">
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter New Email">
  <input type="submit" name="update" value="Update">
</form>