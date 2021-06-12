<?php

include "config.php"; // Using database connection file here

$id = (isset($_GET['id']) ? $_GET['id'] : '');

$sql = "select * from user where ID='$id'";

$result = $conn->query($sql);

if ($result->num_rows > 0){

$row = $result->fetch_assoc();

$username = $row["username"];
$email = $row["email"];

echo

"<html>
<body>

<form action='phpUpdateFormScript.php' method='post'>
Username: $username<br>
Username: <input type='text' name='name' value='$username'><br>
Email: <input type='text' name='age' value='$email'><br>
<input type ='submit'>
</form>

</body>
</html>";

} else {
	echo "Not Found";
}
$conn->close();

?>