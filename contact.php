<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="contact.css">
</head>

<body style="background: #E9E0D9;">


<ul id="navbar">
  <li><a href="index.html">Home</a></li>
  <li><a href="Gallery.html">Gallery</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.html">About</a></li>
</ul>

<h1 style =" font-family:georgia,garamond,serif;font-size:35px;font-style:italic; text-align: center; margin-top:6%;"> Westwood Living </h1>




<div id=aboutPreview>
	<div id=leftTitle>
		<h2 style =" font-family:georgia,garamond,serif;font-size:25px;font-style:italic;">Contact Information</h2>
	</div>
	<div id=leftBackground> </div>
	<div id=leftForeground>
	
	<div class="form-style-2">
	<div class="form-style-2-heading">Provide your information</div>
	<form action="contactForm.php" method="post">
<label for="field1"><span>First Name <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
<label for="field2"><span>Last Name <span class="required">*</span></span><input type="text" class="input-field" name="field2" value="" /></label>
<label for="field3"><span>Email Address <span class="required">*</span></span><input type="text" class="input-field" name="field3" value="" /></label>
<label for="field5"><span>Address <input type="text" class="input-field" name="field5" value="" /></label>
<label for="field6"><span>Phone No. <input type="text" class="input-field" name="field6" value="" /></label>


</div>
		
	
	</div>
	
	<div id=rightTitle>
		<h2 style =" font-family:georgia,garamond,serif;font-size:25px;font-style:italic;"> Project Information </h2>
	</div>
	<div id=rightBackground></div>
	<div id=rightDescription>
	<div class="form-style-2">
	<div class="form-style-2-heading">Tell us about your Project!</div>
	<label for="field4"><span>Message <span class="required">*</span></span><textarea name="field4" class="textarea-field"></textarea></label>


	<label><span> </span><input type="submit" value="Submit" /></label>
		</form>
	</div>
</div>



	
	
</body>


<div id=footer>
	<p id=footerInside>
		<a href="Gallery.html">Gallery</a><br><br><br>
		<a href="contact.html">Contact<br><br><br>
		<a href="about.html">About
	</p>
	<div id=logoBox>
		<a href="home.html"><img id=logoFooter src="images/westwood.png" ></img></a>
	</div>
</div>









</html>