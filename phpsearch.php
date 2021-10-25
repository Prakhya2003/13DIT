<h2 align='center'>Your Activity Search Results</h2>

<table border="2" align='center'>
  <tr>
    <td style="padding:10px">Full Name</td>
    <td style="padding:10px">Data</td>
    <td style="padding:10px">Phone Number</td>
    <td style="padding:10px">Suburb</td>
  </tr>
  
<?php
$search = $_POST['search'];

include "config.php"; // Using database connection file here to display profile from database

$sql = "SELECT sign_ups.Date, sign_ups.Phone, sign_ups.Suburb, user.fullname 
        FROM user 
        INNER JOIN sign_ups ON sign_ups.user_id = user.user_id 
        WHERE Activity like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
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
	echo "0 records";
}

$conn->close();

?>

<p align='center'>Want to search for another activity? <a href='search.php'>Go back to Search</a></p>
