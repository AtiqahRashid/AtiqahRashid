<?php
session_start();

// Code to connect to database
include 'dbConnect.php';

// Define $myusername and $mypassword
$Username=$_POST['Username'];
$Password=$_POST['Password'];

$sql = "SELECT Username, Password FROM member WHERE Username='$Username' and Password='$Password'";
$result = $conn->query($sql);

$row=mysqli_fetch_array($result);


// Mysql_num_row is counting table row
if ($result->num_rows > 0) 
{
    $_SESSION['Username']=$row['Username'];

    //redirect to file "home.php"
    header("location:home.php");
}
else 
{
    echo "<p>Wrong Username or Password. Please try again.</p>";
}

$sql2 = "SELECT Username, Password FROM admin WHERE Username='$Username' and Password='$Password'";
$result = $conn->query($sql2);

$row=mysqli_fetch_array($result);


// Mysql_num_row is counting table row
if ($result->num_rows > 0) 
{
    $_SESSION['Username']=$row['Username'];

    //redirect to file "home.php"
    header("location:adminMenu.php");
}
else 
{
    echo "<p>Wrong Username or Password. Please try again.</p>";
}
$conn->close();
?>