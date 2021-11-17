<?php
 include 'dbConnect.php';
  //get input values from form
     extract($_POST);
     $sql = "INSERT INTO member (Username, memEmail, memAddress, memContact, Password) 
     VALUES ('$Username', '$memEmail', '$memAddress', '$memContact', '$Password')";

      //execute query
      if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
            echo "<script type='text/javascript'>alert('New record created successfully!');
    document.location='SignIn.html'</script>";
      } 
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      //close connection
      $conn->close();
  ?> 