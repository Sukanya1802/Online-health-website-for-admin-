<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where username='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>Welcome: <?php echo $row['username']; ?> </h3></center>
	 <div class="reminder">
    <p><a href="logout.php">Log In</a></p>
  </div>
</div>

</body>
</html>