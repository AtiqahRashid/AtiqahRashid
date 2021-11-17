<?php 

session_start();

if(empty($_SESSION['Username'])):
   header('Location:SignIn.html');
endif;
?>


<!DOCTYPE html>
<html>
<head>
<title>Nature Club</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>

body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("forest.jpeg");
  min-height: 75%;
}

.menu {
  display: none;
}
</style>

<!-- <For the colour> -->
<div class="w3-sand w3-grayscale w3-large">

	</head>

	
	<body>


	
       
		 <div class="w3-top">
			<div class="w3-row w3-padding w3-black">
			  <div class="w3-col s3">
				<a href="#" class="w3-button w3-block w3-black">Nature Club</a>
			  </div>
		    </div> 
		</div>
					

<div class="w3-content"style="max-width:700px">
				
    <div class="w3-row w3-container">

	 <!-- "wrapper" -->
	 <!-- container -->
	
    <div class= "w3-container"style="max-width:700px">
	<div class="w3-row w3-container">
		<h3>Log Out</h3> <br>
		<?php include "banner.php"; ?> <!-- Banner -->
			
						<!-- main content -->
					<div class="w3-row w3-container">
				    <div class= "w3-container"style="max-width:700px">
					<div class="banner pad">
						<p><h1 class="w3-row w3-container"><span>Nature Club</span></h1></p>
						<p class="w3-row w3-container"><strong>You can check your club information here.</strong></p>
					</div>
				    </div>
                    </div>
	</div>
    </div>

<?php

// session_start();
// if(empty($_SESSION['Username'])):
//    header('Location:SignIn.html');
// endif;

$servername="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$dbName="natureClub"; // Database name

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbName);

session_destroy();

echo '<meta http-equiv="refresh" content="2;url=SignIn.html">';
echo '<progress max=100><strong>Progress: 60% done.</strong></progress><br>';
echo '<span class="itext">Logging out please wait!....</span>';
?>


</body>
</html>