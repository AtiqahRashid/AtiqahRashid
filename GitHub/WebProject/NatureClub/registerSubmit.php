<?php
    session_start();

    include 'dbConnect.php';
    extract($_POST);

    $user=$_SESSION['Username'];

    $sql = "SELECT * FROM member where Username = '$user'";
    $result = $conn->query($sql);

     //check if records were returned
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
        $Username=$row["Username"];
        }
    }
    

    

    $date=date("Y/m/d");
   $sql = "INSERT INTO membership (Username, activityId, registerDate) VALUES ( '$Username','$activityId','$date')";
   
    //execute query
    if(mysqli_query($conn,$sql)){

        echo "<script type='text/javascript'>alert('You have succesfully register for activity.');
        document.location='slipRegistration.php'</script>";
           

    }else{
     if(mysqli_errno($conn) == 1062)
     echo "<script type='text/javascript'>alert('You have already register for Activity Nature Club ');
     document.location='acvityRegistration.php'</script>";
     else
     echo "<script type='text/javascript'>alert('Database insertion error:'.$sql.'<br>');
     document.location='acvityRegistration.php'</script>";
      
    }//else end

    $conn->close();
?>



