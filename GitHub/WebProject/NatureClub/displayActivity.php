<?php
  include 'dbConnect.php';
  
  //escape special characters in a string
  $Username = mysqli_real_escape_string($conn, $_POST['Username']);
 
  //create and execute query
  $sql = "SELECT * FROM activity WHERE Username LIKE '%$Username%'";
  // $sql = "SELECT * FROM member INNER JOIN membership ON membership.memId = member.memId";
  

   $result = $conn->query($sql);

  //check if records were returned
  if ($result->num_rows > 0) {

     //create a table to display the record
     echo 'Selected record as the following: <br><br>';
     echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
    echo '<tr><td align="center"><b>memId</b></td>

     <td align="center"><b>Username</b></td>
     <td align="center"><b>activity</b></td>
     <td align="center"><b>Date</b></td>
     <td align="center"><b>Fees</b></td>

     

   
     </tr>';
     
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td align="center">'.$row["memId"].'</td>';
        echo '<td align="center">'.$row["Username"].'</td>';
        echo '<td align="center">'.$row["activity"].'</td>';
        echo '<td align="center">'.$row["date"].'</td>';
        echo '<td align="center">'.$row["Fees"].'</td>';

        // echo '<td align="center">'.$row["registerDate"].'</td>';
        // echo '<td align="center">'.$row["startDate"].'</td>';
        // echo '<td align="center">'.$row["endDate"].'</td>';
        
       echo '</tr>';
     }
     echo '</table></p>';
  } 
  else {
    echo '<font color=red>No record found';
  }

  //close connection 
  $conn->close();

  echo '<p class=button><a href="adminMenu.php">Back to Main Menu</a></p>';



?>