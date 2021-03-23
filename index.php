<?php

echo "<h1>Hello</h1>";

$host = "localhost";
$username = "root";
$passW = "usbw";
$database = "westwoodliving";

// Create connection
$conn = new mysqli($host, $username, $passW, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br><br>";


$sql = "SELECT projectID, bookingID, projectName, description, createdAt, finalPrice, category, buildingType,
projectAddress FROM project";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["projectID"] . " - Project ID <br>" . $row["bookingID"] . " - Booking ID <br>" . $row["description"] . " - Description <br>" . $row["createdAt"] . " - Date Created <br>" . $row["finalPrice"] . " - Final Price <br>" . $row["category"] . " - Category <br>" . $row["buildingType"] . " - Building Type <br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();

echo "<a href='admin.php'>click</a>";

?>
