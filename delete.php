<?php

include "config.php"; // Using database connection file 

$user_id = (isset($_GET['user_id']) ? $_GET['user_id'] : ''); // get id through query string

$del = mysqli_query($conn,"delete from user where user_id = '$user_id'"); // delete entry of this record 

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:logout.php"); // redirects to post logout code - i.e index page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
