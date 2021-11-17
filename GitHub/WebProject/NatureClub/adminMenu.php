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



.menu {
  display: none;
}

     background-image:hover {
  opacity: 0.5;
    }
</style>

<!-- <For the colour> -->
<div class="w3-sand w3-grayscale w3-large">

</head>

<body>
       
		 <div class="w3-top">
			<div class="w3-row w3-padding w3-black">
			  <div class="w3-col s3">
				<a href="#" class="w3-button w3-block w3-black">Admin Main Menu</a>
			  </div>
		    </div> 
		</div>
		

			<!-- main content -->
			<div class="w3-content"style="max-width:700px">
				
			<div class="w3-row w3-container">

       <!-- About Container -->
      <div class="w3-container">
      <div class="w3-content" style="max-width:700px">
      <?php echo $_SESSION['Username']?>
      </div>
      </div>



  <!-- <p>Main Menu for</p> -->
  <?php echo $_SESSION['Username']?>



  

 <form  action="memberList.php" method="post">
 
  
   <br><p><input class="w3-input w3-padding-16 w3-border" type="submit" value="View Record" name="cmdView"></p></b>
 
  </form>

  <form action="searchRecord.php" method="post">

     <p><input class="w3-input w3-padding-16 w3-border" type="submit" value="Search Record" name="cmdSearch"></p>

  </form>


  <form action="feedbackList.php" method="post">

     <p><input class="w3-input w3-padding-16 w3-border" type="submit" value="feedback" name="cmdView"></p>

  </form> 

  <form action="logout.php" method="post">

<p><input class="w3-input w3-padding-16 w3-border" type="submit" value="Log Out" name="cmdlogout"></p>

</form>


</body>
</html>