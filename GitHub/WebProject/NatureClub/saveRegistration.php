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
  <?php
    session_start();
     $date = date("d-m-Y");

     //get input values from form
     include 'dbConnect.php';
     extract($_POST);
 
  ?>
  <p>Date: <b><?php print($date) ?></b></p>
  <h3>Nature Club</h3>
  <table>
     <tr><td> Name</td>
        <td>:</td>
        <td><b><?php print($Username) ?></b></td>
     </tr>
    
    <tr><td>Email</td>
        <td>:</td>
        <td><b><?php print($MemEmail) ?></b></td>
    </tr>

    <tr><td>Address</td>
        <td>:</td>
        <td><b><?php print($MemAddress) ?></b></td>
    </tr>

    <tr><td>Contact</td>
        <td>:</td>
        <td><b><?php print($MemContact) ?></b></td>
    </tr>

    <tr><td>Password</td>
        <td>:</td>
        <td><b><?php print($Password) ?></b></td>
    </tr>
  </table>

  <?php
   include 'dbConnect.php';
        //create query
      $sql = "INSERT INTO member (Username, MemEmail, MemAddress, MemContact, Password) VALUES ('$Username', '$MemEmail', '$MemAddress', '$MemContact', '$Password')";

      //execute query
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } 
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      //close connection
      $conn->close();
  ?> 

  <br>

  <form action="home.php">
     <input type="button" name="printButton" onClick="window.print()" value="Print">
     <input type="submit" value="Back to Main" name="cmdBackMain">
  </form>


</body>
</html>