<?php
	//require 'dbconfig/config.php';
	$con = mysqli_connect("localhost","root","") or die("Unable to connect");
     mysqli_select_db($con,'insurance_claim_system');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Police Login Page </title>
<link rel="stylesheet" href="css/style.css"	>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>
		#login_btn{
			background-color:#34495e;
			margin-top:10px;
			padding:5px;
			color:white;
			width:440px;
			text-align:center;
			font-size:18px;
			font-weight:normal;
			border-radius:2px;
			border:none;
		}
		#register_btn{
			margin-bottom:60px;
			background-color:#34495e;
			margin-top:10px;
			padding:5px;
			color:white;
			width:440px;
			text-align:center;
			font-size:18px;
			font-weight:normal;
			border-radius:2px;
			border:none;
		}
form{
	text-align: left;
	display:inline-block;
	padding-left:15%;
	padding-right:15%;
	font-size:15px;	
}
			h2 {
				color: #1A237E;
			}
			input[type=text],input[type=password] {
			margin-top: 10px;
			border: none;
			  font-size: 12px;
			  height: 40px;
			  margin: 0;
			  outline: 0;
			  padding: 5px;
			  width: 440px;
			  background-color: #CFD8DC;
			  color: #212121;
			  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
			  margin-bottom: 10px;
			  border-radius: 5px;
			  display:inline-block;
		}
		label {
			display: inline-block;
			margin-bottom: 1em;
			width:40%;
		}
		#main-wrapper{
			width:650px;
			margin-top:60px;
			background:white;
			margin-left: auto;
			margin-right:auto;
			padding:5px;
			border-radius:10px;	
		}
		body{
			background-color:#010218;
		}
</style>
</head>
<body>

	<div id="main-wrapper">
	<center>
	<h2>Police</h2>
	<img src="imgs/2_log.jpg" class="avatar"/>
	</center>
	
	
	<form class="myform" action="policelogin.php" method="post">
		<label><b>Username</b></label><br>
		<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
		<label><b>Password</b></label><br>
		<input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br>
		<input name="login" type="submit" id="login_btn" value="Login"/><br>
		<a href="policereg.php"><input type="button" id="register_btn"  value="Register"/></a>
		
	</form>
	<?php
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$_SESSION['username']=$username;
			$query="select * from policereg WHERE username='$username' AND password='$password'";
			
			$query_run=mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				//valid
				$_SESSION['username']=$username;
				header('location:police_home.php');
			}
			else
			{
				//invalid
				echo '<script type="text/javascript"> alert("Invalid credentials!")</script>';
			}
	}
	?>
	</div>
</body>
</html>
