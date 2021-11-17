

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
   <div class="w3-row w3-padding w3-black">
                <div class="w3-col s3">
                  <a href="#home" class="w3-button w3-block w3-black">Activity Registration List</a>
                </div>
              </div>
            </div>

  <!-- <h3 align="center">Activity List</h3> -->

<?php
  include 'dbConnect.php';

  //create and execute query
  // $sql = "SELECT * FROM member INNER JOIN membership ON membership.memId = member.memId";
  $sql = "SELECT * FROM  member INNER JOIN membership ON membership.Username = member.Username INNER JOIN 
  activity ON activity.activityId = membership.activityId";


  $result = $conn->query($sql);

           

  //check if records were returned
  if ($result->num_rows > 0) {
 
    

     //create a table to display the record


    echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
     echo '<td align="center"><b>memId</b></td>
     <td align="center"><b>Username</b></td>
     <td align="center"><b>memEmail</b></td>
     <td align="center"><b>memAddress</b></td>
     <td align="center"><b>memContact</b></td>

     <td align="center"><b>activityId</b></td>
     <td align="center"><b>registerDate</b></td>

     <td align="center"><b>activity</b></td>
     <td align="center"><b>date</b></td>
     <td align="center"><b>Fees</b></td>

     </tr>';

     
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td align="center">'.$row["memId"].'</td>';
        echo '<td align="center">'.$row["Username"].'</td>';
        echo '<td align="center">'.$row["memEmail"].'</td>';
        echo '<td align="center">'.$row["memAddress"].'</td>';
        echo '<td align="center">'.$row["memContact"].'</td>';

        echo '<td align="center">'.$row["activityId"].'</td>';
        echo '<td align="center">'.$row["registerDate"].'</td>';

        echo '<td align="center">'.$row["activity"].'</td>';
        echo '<td align="center">'.$row["date"].'</td>';
        echo '<td align="center">'.$row["Fees"].'</td>';

        ?>
        <td><a href="deleteRecord.php?memId=<?php echo $row["Username"];?>" onclick="return confirm('Are sure to delete data?')">REMOVE</a></td>
       <?php
        echo '<td><a href="editRecord.php?memId='.$row["Username"].'">UPDATE</a></td>';
        echo '</tr>';
     }
  } 
  else {
    echo "0 results";  //if no record found in the database
  }

  //close connection 
  $conn->close();
  echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
?>

</body>
</html>