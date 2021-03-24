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
	<h2 style="margin-left:20%;">Project Information:</h2>
	<div id=informationBox>
		<!-- Database will populate project info here -->
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