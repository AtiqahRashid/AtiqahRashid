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
include 'dbConnect.php';

$user=$_SESSION['Username'];

$sql = "SELECT * FROM member r, activity m, membership c WHERE r.Username = c.Username AND m.activityId = c.activityId AND r.Username = '$user'";

$result = $conn->query($sql);

     //check if records were returned
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $Id=$row["memId"];
        $Username=$row["Username"];
        $Email=$row["memEmail"];
        $Address=$row["memAddress"];
        $Contact=$row["memContact"];
       
          
        }//close while loop
    }//close if loop
    else{
    echo'<font color=red>No record found';
    }
?>

    <div class="w3-top">
    <div class="w3-row w3-padding w3-black">
    <ul>
      <li class="w3-col s3">
        <a href="home.php" class="w3-button w3-block w3-black">HOME</a>
      </li>
      <li class="w3-col s3">
        <a href="home.php" class="w3-button w3-block w3-black">Activity</a>
  
      <li class="w3-col s3">
        <a href="logout.php" class="w3-button w3-block w3-black">Log Out</a>
  </li>
  </ul>
  </div>


  <div class="w3-content"style="max-width:700px">
				
        <div class="w3-row w3-container">
  


     <!-- main content -->
      <div class="main-content">
        <div class="container">
          <!-- register area -->
          <div class="register-area">
            <!-- heading -->
            <h3>Club Registration Slip</h3>
            <form role="form" id="register-form">
              <div class="form-group">
                <label for="sId">Member Id : </label>
                <label><?php echo $Id?></label>
              </div>
              <div class="form-group">
                <label for="sName">Username: </label>
                <label><?php echo $Username?></label>
              </div>
              <div class="form-group">
                <label for="sProg">Email: </label>
                <label><?php echo $Email?></label>
              </div>
              <div class="form-group">
                <label for="sPhone">Address : </label>
                <label><?php echo $Address?></label>
              </div>
              <div class="form-group">
                <label for="sEmail">Contact: </label>
                <label><?php echo $Contact?></label>
              </div>
                <table class="form-group">
                <tr>
                    <th>Activity</th>
                    <th>Activity Date</th>
                    <th>Registration Date</th>
                    <th>Fee</th>
                </tr>

                <?php 
    $sql2 = "SELECT * FROM membership m, activity a WHERE m.activityId = a.activityId AND m.Username = '$user'";   
    $result2 = $conn->query($sql2);

     //check if records were returned
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result2->fetch_assoc()) {

        $activity=$row["activity"];
        $aDate=$row["date"];
        $rDate=$row["registerDate"];
        $Fee=$row["Fees"];
    ?>
                <tr>
                    <td><?php echo $activity?></td>
                    <td><?php echo $aDate?></td>
                    <td><?php echo $rDate?></td>
                    <td><?php echo $Fee?></td>
                 </tr>

                 <?php
        }//close while loop
    }//close if loop
    else{
    echo'<font color=red>No record found';
    }
?>
                </table>
              </form>
            </div>
        </div>
      </div>
     



 <!-- footer -->
 <footer>
        <div class="container">
          <!-- This theme comes under Creative Commons Attribution 4.0 Unported. So don't remove below link back -->
          <p class="copy-right">Copyright &copy; 2014 <a href="#">Your Site</a> | Designed By : <a href="http://www.indioweb.in/portfolio">IndioWeb</a>, All rights reserved. </p>
        </div>
      </footer>
    </div>    

<?php
    //close connection 
  $conn->close();
  echo '<p><a href="home.php">Back to Main Menu</a></p>';
?>
    
    <!-- Javascript files -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Respond JS for IE8 -->
    <script src="js/respond.min.js"></script>
    <!-- HTML5 Support for IE -->
    <script src="js/html5shiv.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
  </body>
</html>