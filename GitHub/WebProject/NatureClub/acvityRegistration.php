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

div Content{
   padding: 25px 50px 75px 100px;
   }


</style>
</head> 
<body>
<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<?php session_start();
 include 'dbConnect.php';

$user=$_SESSION['Username'];

$sql = "SELECT * FROM member where Username = '$user'";
$result = $conn->query($sql);

     //check if records were returned
  if ($result->num_rows > 0) {
      
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
       $Username=$row["Username"];
      ?>
      

  




  <!-- Links (sit on top) -->
 

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
    </div>
    

   
      
      <!-- main content -->
  <div Content>
  <div class="w3-content"style="max-width:700px">
  <div class="w3-row w3-container">
          <!-- register area -->
          <!-- <div class="register-area"> -->
            <!-- heading -->
           
            <p><form role="form" id="register-form" action="registersubmit.php" method='post'>
            <!-- <h3>Activity Registration </h3> <br> -->
              <br><div class="form-group">
                <label for="Username">Username : </label>
                <label><?php echo $row["Username"]?></label></br>
              </div> <br>
              <div class="form-group">
                <label for="memEmail">Email : </label>
                <label><?php echo $row["memEmail"]?></label></br>
              </div> </br>
              <div class="form-group">
                <label for="memContact">Contact: </label>
                <label><?php echo $row["memContact"]?></label>
              </br></p>
</div> 
</div>


<?php
    }//close while loop
  }//close if loop
  else{
    echo'<font color=red>No record found';
  }
?>

              <div class="form-group">
                <label for="activityId">Activity : </label>
                <select name="activityId" required>
                        <option value="Select Option">Select Option</option>
                        <option value="121">Hiking</option>
                        <option value="122">Gratitute Walk</option>
                        <option value="123">Kayak</option>
                        <option value="124">Planting Trees</option>
                        <option value="125">Taman Negara Tour</option>
                        <option value="126">Bird Tour</option>
                    </select>
              </div> <br>
              <button type="submit" class="btn btn-warning">Submit</button>&nbsp; 
              <button type="reset" class="btn btn-default">Reset</button>
              
               </form>
              </div>
</div>
  </body>
</html>