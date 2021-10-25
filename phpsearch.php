<h2 align='center'>Your Activity Search Results</h2>

<table border="2" align='center'>
  <tr>
    <td style="padding:10px">Username</td>
    <td style="padding:10px">Data</td>
    <td style="padding:10px">Phone Number</td>
    <td style="padding:10px">Suburb</td>
  </tr>
  
<?php
$search = $_POST['search'];

include "config.php"; // Using database connection file here to display profile from database

$sql = "select * from sign_ups where Activity like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
?>
  <tr>
    <td style="padding:10px"><?php echo $row['user_id']; ?></td>
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
