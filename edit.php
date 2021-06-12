<?php

include "config.php"; // Connect to the database

$id = (isset($_GET['id']) ? $_GET['id'] : ''); // get id through through link

$qry = mysqli_query($conn,"select * from user where ID='$id'"); // select query based on the ID

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $username = $_POST['username'];
    $email = $_POST['email'];
	
    $edit = mysqli_query($conn,"update user set username='$username', email='$email' where ID='$id'");
	
    if($edit) //if edit has worked
    {
        mysqli_close($conn); // Close connection
        header("location:logout.php"); // redirects to My Profile page after changed
        exit;
    }
    else 
    {
        echo mysqli_error($conn); //if the edit has not worked show error
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST"> 
  <input type="text" name="username" value="<?php echo $data['username'] ?>" placeholder="Enter New Username"> //Change Username
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter New Email"> // Change email
  <input type="submit" name="update" value="Update"> // commit changes
</form>
