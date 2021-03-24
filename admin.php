<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="admin.css">
</head>

<body style="background: #E9E0D9;">


<ul id="navbar">
  <li><a href="index.html">Home</a></li>
  <li><a href="Gallery.html">Gallery</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.html">About</a></li>
</ul>

<h1 style ="text-align: center; margin-top:6%;"> Westwood Living </h1>

<div id=projectProposal style="float:left;">
	<h2 style="margin-left:5%;">Project Proposals:</h2>
	<form action="projectProposals.php" method="get">
		<input list="projectproposals" name="projectproposals" style="margin-left:31px;">
		<datalist id="projectproposals">
		<!-- Database will populate in here -->
		<?php 
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
		$sql = "SELECT projectID, projectName, status FROM project";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			  if($row['status'] == 0){
				echo "<option value='{$row['projectID']}'>{$row['projectName']}</option>";
			  }
		  }
		} else {
		  echo "0 results";
		}
		$conn->close();
		
		
		?>
		</datalist><br>
		
	<div id=button><input type='submit' name='submit' value='Accept'></input></div>
	<div id=button><input type='submit' name='submit' value='Remove'></input></div>
	</form>
</div>

<div id=projectProposal style="float:left;">
	<h2 style="margin-left:5%;">Accepted Projects:</h2>
	<form action="acceptedProjects.php" method="get">
		<input list="acceptedProjects" name="acceptedProjects" style="margin-left:31px;">
		<datalist id="acceptedProjects">
		<!-- Database will populate in here -->
		<?php 
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
		$sql = "SELECT projectID, projectName, status FROM project";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			  if($row['status'] == 1){
				echo "<option value='{$row['projectID']}'>{$row['projectName']}</option>";

			  }
		  }
		} else {
		  echo "0 results";
		}
		$conn->close();
		
		
		?>
		</datalist><br>
		
	<div id=button><input type='submit' value='Remove'></input></div>
	</form>
</div>

<div id=projectProposal style="float:left;">
	<h2 style="margin-left:5%;">Not Accepted Projects:</h2>
		<form action="notAcceptedProjects.php" method="get">
		<input list="notAcceptedProjects" name="notAcceptedProjects" style="margin-left:31px;">
		<datalist id="notAcceptedProjects">
		<!-- Database will populate in here -->
		<?php 
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
		$sql = "SELECT projectID, projectName, status FROM project";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			  if($row['status'] == 2){
				echo "<option value='{$row['projectID']}'>";
				echo "{$row['projectName']}";
			  }
		  }
		} else {
		  echo "0 results";
		}
		$conn->close();
		
		
		?>
		</datalist><br>
		
	<div id=button><input type='submit' value='Accept'></input></div>
	</form>
</div>


<div id=projectInformation>
	<h2 style="margin-left:20%;">Project Information</h2>
	<form style='margin-left:380px; margin-bottom:50px;' action='' method='get'>
		<input type='text' id='projectSearch' name='projectSearch'/>
		<input type='submit' name='Search' value='Search'/>
	</form>
	<div id=informationBox>
		<!-- Database will populate project info here -->
		<?php
			if(isset($_GET['Search'])){
				session_start();
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
				$sql = "SELECT projectID, projectName, status, description, createdAt, bookingID FROM project";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				  // output data of each row
					  while($row = $result->fetch_assoc()) {
						   if($row['projectID'] == $_GET['projectSearch']){
						  echo "
						  <form action='' method='get'>
						  <h3>Project ID:</h3>
						<input type='text' id='projectID' name='projectID' value='{$row['projectID']}' hidden/>
						<h5>{$row['projectID']}</h5>
						<h3>Project Name:</h3>
						<input type='text' id='projectName' name='projectName' value='{$row['projectName']}'/>
						<h3>Status Code:</h3>
						<input type='text' id='status' name='status' value='{$row['status']}'/>
						<h3>Description:</h3>
						<input type='text' id='description' name='description' value='{$row['description']}'/>
						<h3>Date Created:</h3>
						<input type='text' id='createdAt' name='createdAt' value='{$row['createdAt']}'/>
						<h3>Booking ID:</h3>
						<input type='text' id='bookingID' name='bookingID' value='{$row['bookingID']}' disabled/>
						<input type='submit' name='Update' value='Update'/>
						</form>";
						  
					  }
					}
				$conn->close();
				}
				
			}
			
			if (isset($_GET['Update'])){
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
				
				$sql = "UPDATE project SET 
				'projectName' = '{$_GET['projectName']}',
				'description' = '{$_GET['description']}',
				'status' = '{$_GET['status']}',
				'createdAt' = '{$_GET['createdAt']}',
				WHERE projectID='{$_GET['projectID']}'";

				if ($conn->query($sql) === TRUE) {
				  echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . $conn->error;
				}

				$conn->close();
			}
		?>
	</div>
</div>

	
</body>


<footer>
<div id=footer>
	<p id=footerInside>
		<a href="Gallery.html">Gallery</a><br><br><br>
		<a href="contact.html">Contact<br><br><br>
		<a href="about.html">About
	</p>
	<div id=logoBox>
		<a href="home.html"><img id=logoFooter src="images/westwood.png" ></img>
	</div>
</div>
</footer>




</html>