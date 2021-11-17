<?php
 include 'dbConnect.php';
  //get input values from form
     extract($_POST);
     $sql = "INSERT INTO feedback (Username, memEmail, Idea) 
     VALUES ('$Username', '$memEmail', '$Idea')";

      //execute query
      if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
            echo "<script type='text/javascript'>alert('New record created successfully!');
    document.location='home.php'</script>";
      } 
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      //close connection
      $conn->close();
  ?> 