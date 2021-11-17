<html>
<head>
  <title>Nature Club</title>
</head>
<body>


<script>
      // The function below will start the confirmation dialog
      function deleteProfile(i) {

    if (confirm("Do you really want to delete your profile?")) {
        location.href = '/deleteRecord.php?memId=+i';
    }
</script>

  <h3 align="center">Nature Club</h3>

<?php
  include 'dbConnect.php';

  //create and execute query
  // $sql = "SELECT * FROM member INNER JOIN membership ON membership.memId = member.memId";
  $sql = "SELECT * FROM member";
  $result = $conn->query($sql);

  //check if records were returned
  if ($result->num_rows > 0) {

     //create a table to display the record
     echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
     echo '<tr><td align="center"><b>memId</b></td>
     <td align="center"><b>Username</b></td>
     <td align="center"><b>activity</b></td>
     <td align="center"><b>date</b></td>
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
        ?>
        <td><a href="deleteRecord.php?memId=<?php echo $row["memId"];?>" onclick="return confirm('Are sure to delete data?')">REMOVE</a></td>
       <?php
        echo '<td><a href="editRecord.php?memId='.$row["memId"].'">UPDATE</a></td>';
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