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
      <a class="w3-button w3-block w3-black">Search Record</a>
    </div>
  </div>


	<div class="w3-row w3-container">
  <div class="w3-content"style="max-width:700px">  
         <!-- heading -->
    	
  <p><form action="displayRecord.php" method="post">
     Email: <input name="memEmail" type="text" size="30"><br><br>
     <input type="submit" name="Submit" value="Search">
  </form></p>
  <p><a href="adminMenu.php">Back to Main Menu</a></p>
</div>
</div>

</body>
</html>