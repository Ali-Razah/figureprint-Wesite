<?php 
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper"> 
    <h2 class="text-center">Greetings!</h2>
    <h3>Welcome Home <?php echo $row['name']; ?>!</h3>
	 <div class="logout">
    <p><a class="btn btn-danger" href="logout.php">Log out</a></p>
  </div>
</div>

</body>
</html>