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

	if($_GET['submit'] == 'Accept'){
		$sql = "UPDATE project SET status='1' WHERE projectID={$_GET['projectproposals']}";

		if ($conn->query($sql) === TRUE) {
		  echo "Record updated successfully";
		} else {
		  echo "Error updating record: " . $conn->error;
		}
	}
	
	if($_GET['submit'] == 'Remove'){
		$sql = "UPDATE project SET status='2' WHERE projectID={$_GET['projectproposals']}";

		if ($conn->query($sql) === TRUE) {
		  echo "Record updated successfully";
		} else {
		  echo "Error updating record: " . $conn->error;
		}
	}



$conn->close();
clearstatcache();
header("Location: admin.php");

	?>

</body>
</html>