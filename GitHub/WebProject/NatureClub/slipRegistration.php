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

<div class="w3-sand w3-grayscale w3-large">
<!-- <For the colour> -->
<div class="w3-sand w3-grayscale w3-large">


  </head>  
  <body>
  
       
    <?php session_start();
    include 'dbConnect.php';



    $user=$_SESSION['Username'];

    $sql = "SELECT * FROM  membership s, member m, activity a WHERE  s.Username= m.Username AND a.activityId = s.activityId AND s.Username = '$user'";

    $result = $conn->query($sql);

     //check if records were returned
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Username=$row["Username"];
        $memEmail=$row["memEmail"];
        $memContact=$row["memContact"];
        $activity=$row["activity"];
        $date=$row["date"];
        $Fees=$row["Fees"];
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
      <a href="profile.php" class="w3-button w3-block w3-black">My Profile</a>

    <li class="w3-col s3">
      <a href="logout.php" class="w3-button w3-block w3-black">Log Out</a>
</li>
</ul>
</div>
    </div>
		
     <!-- Slip Activity Registration -->
     <div class="w3-content"style="max-width:700px">
		 <div class="w3-row w3-container">

          <!-- register area -->
          <!-- <div class="register-area"> -->
            <!-- heading -->
            <h3>Nature Club Registration Slip</h3> <br>
            <form role="form" id="register-form">
            <table align="center" border="1">
              <tr>
                  <th width="104">Username</td>
                  <td width="350"><?php echo $Username?></td>
              </tr>

              <tr>
                  <th width="104">Email</td>
                  <td width="350"><?php echo $memEmail?></td>
              </tr>

              <tr>
                  <th width="104">Contact</td>
                  <td width="350"><?php echo $memContact?></td>
              </tr>

              <tr>
                  <th width="104">Activity</td>
                  <td width="350"><?php echo $activity?></td>
              </tr> 

              <tr>
                  <th width="104">date</td>
                  <td width="350"><?php echo $date?></td>
              </tr>

              <tr>
                  <th width="104">Fees</td>
                  <td width="350"><?php echo $Fees?></td>
              </tr>


              <tr>
                  <th width="104">&nbsp&nbsp</td>
                  <td width="350"><button type="submit" class="btnbtn-warning" onclick="window.print()">Print Registration Slip</button></td>
                  
                </tr>
              </table>
          </div>
        </div>
      </div>
          
 
  </body>
</html>