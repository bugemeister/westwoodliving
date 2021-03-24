<html>
<body>

<?php
		$host = "localhost";
		$username = "root";
		$passW = "usbw";
		$database = "westwoodliving";
// Create connection
    $conn = new mysqli($host, $username, $passW, $database);


	if (!$conn)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	$sql="INSERT INTO booking (firstName, lastName, emailAddress, description, address, phoneNumber)

	VALUES

	('$_POST[field1]','$_POST[field2]','$_POST[field3]','$_POST[field4]','$_POST[field5]','$_POST[field6]')";
	
	if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.html");

	?>

</body>
</html>