<html>
<head>
<title>Nature Club</title>
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
     <tr><td>activityId</td>
        <td>:</td>
        <td><b><?php print($Username) ?></b></td>
     </tr>
    
    <tr><td>Username</td>
        <td>:</td>
        <td><b><?php print($MemEmail) ?></b></td>
    </tr>

    <tr><td>activity</td>
        <td>:</td>
        <td><b><?php print($MemAddress) ?></b></td>
    </tr>

    <tr><td>date</td>
        <td>:</td>
        <td><b><?php print($MemContact) ?></b></td>
    </tr>

    <tr><td>Fees</td>
        <td>:</td>
        <td><b><?php print($Password) ?></b></td>
    </tr>
  </table>

  <?php
   include 'dbConnect.php';
        //create query
      $sql = "INSERT INTO activity (Username, activity, date, Fees) VALUES ('$Username','$activity', '$date', '$Fees')";

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