<html>
<body>

<?php
// Create connection
    $conn = new mysqli($localhost, $root, $usbw, $westwoodliving);


	$con = mysql_connect("localhost","westwoodliving","usbw");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	mysql_select_db("westwoodliving", $con);

	$sql="INSERT INTO booking (firstName, lastName, emailAddress, description)

	VALUES

	('$_POST[firstName]','$_POST[lastName]','$_POST[emailAddress]','$_POST[description]')";

	if (!mysql_query($sql,$con))
	  {
	  die('Error: ' . mysql_error());
	  }

	echo "1 record added";

	mysql_close($con)
	?>

</body>
</html>