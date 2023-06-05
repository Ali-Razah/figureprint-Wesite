<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h3 style="text-align:center">Login to Account</h3>
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM ulogin WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:Applications/index.php');
					
				}
			else
				{
					echo '<i style="color:red;font-size:15px;font-family:calibri ;">
					Invalid Username and Password Combination </i> '; 
					
					//'Invalid Username and Password Combination';
				}
		}
		else
		{
			
		}


  ?>
 
 <div class="dark fire">
		    <h1 class="Blazing" contenteditable="true">ALI RAZAH</h1>
	</div>
</div>

</body>

</html>