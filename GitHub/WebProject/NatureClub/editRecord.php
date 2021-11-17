<?php
include 'dbConnect.php';

$Id=$_REQUEST['memId'];

// $Username=$_REQUEST['Username'];
$query ="SELECT * FROM  member INNER JOIN membership ON membership.Username = member.Username INNER JOIN 
activity ON activity.activityId = membership.activityId";

$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h1>Update Record</h1>

<div>
<form name="form" method="post" action="updateRecord.php"> 
<input type="hidden" name="new" value="1" />
<input name="Id" type="hidden" value="<?php echo $row['memId'];?>" />
<p><input type="text" name="Username" value="<?php echo $row['Username'];?>" /></p>
<p><input type="text" name="memEmail" value="<?php echo $row['memEmail'];?>" /></p>
<p><input type="text" name="memAddress" value="<?php echo $row['memAddress'];?>" /></p>
<p><input type="text" name="memContact" value="<?php echo $row['memContact'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>

</div>
</div>
</body>
</html>