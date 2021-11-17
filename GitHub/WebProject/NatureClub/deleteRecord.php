<html>
<head>
  <title>Nature Club</title>
</head>
<body>

<?php
    include 'dbConnect.php';

    $memId=$_REQUEST['memId'];
  
    //get input value
  // $adName=$_POST['advisor_name'];

  // sql to delete a record
  $sql = "DELETE FROM membership WHERE Username='$memId'";
 

  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } 
  else {
    echo "Error deleting record: " . $conn->error;
  }

  //close connection  
  $conn->close();
  echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
?>
</body> 
</html>


