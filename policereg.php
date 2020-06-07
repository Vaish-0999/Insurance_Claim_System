<?php
	//require 'dbconfig/config.php';
	$con = mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,'insurance_claim_system');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style.css"	>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script language="Javascript" type="text/javascript">
function register_reg_exp()
{
	var inputuser=document.getElementById("userid").value;
	var inputpwd=document.getElementById("userpwd").value;
	var user_re=/^[a-zA-Z0-9$\._]{3,20}$/;
	var pwd_re=/^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8}$/;
	alert(inputpwd);
	if(inputuser.match(user_re) )
	{
	//alert("successful");
	}
	
	if(inputpwd.match(pwd_re))
	{
	//	alert("suu pwd");
	}
	
}
function myFunction()
{
	var x=document.getElementById("userpwd");
	if(x.type==="password")
	{
		x.type="text";
	}
	else
	{
		x.type="password";
	}
}
</script>
	<style>
		#signup_btn{
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
		#back_btn{
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
		.check1{	
			position: relative;
			padding-left: 0%;
			margin-bottom: 12px;
			cursor: pointer;
			font-size: 15px;
			font-weight: normal;
			font-color: #27ae60;
		}
		input[type=checkbox] {
			zoom: 1.5;
			vertical-align:middle;
		}
		#main-wrapper{
		    width:700px;
			background:white;
			margin-left: auto;
			margin-right:auto;
			padding:5px;
			border-radius:10px;	
			margin-top:50px;
		}
		form{
			text-align: left;
			display:inline-block;
			padding-left:15%;
			padding-right:10%;
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
			  width: 500px;
			  background-color: #CFD8DC;
			  color: #212121;
			  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
			  margin-bottom: 10px;
			  border-radius: 5px;
			  display:inline-block;
		}
		input[type=submit],input[type=button]{
			margin-left:30%;
		}
		label {
			display: inline-block;
			margin-bottom: 1em;
			width:50%;
		}
		body{
				background-color: #010218;
			}
	</style>
</head>
<body>

	<div id="main-wrapper">
	<center>
	<h2> Police Registration Form</h2>
	<img src="imgs/2_log.jpg" class="avatar"/>
	</center>
	
	
	<form class="myform" action="policereg.php" method="post">
		<label><b>Username</b></label><br>
		<input name="username" id="userid" type="text" class="inputvalues" placeholder="Type your username" required/><br>
		<label><b>Password</b></label><br>
		<input name="password" id="userpwd" type="password" class="inputvalues" placeholder="Your password" required/><br>
		<input type="checkbox" id="checkboxpwd" onclick="myFunction()">
		<label class="check1" for="checkboxpwd" >Show Password</label>
		<label><b>Confirm Password</b></label><br>
		<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
		<input name="submit_btn" type="submit" id="signup_btn" onclick="register_reg_exp()" value="Sign Up"/><br>
		<a href="policelogin.php"><input type="button" id="back_btn"  value="<< Back"/></a>
		
	</form>
	<?php
	
		if(isset($_POST['submit_btn']))
		{
			//echo '<script type="text/javascript"> alert("Sign up button clicked")</script>';
			$username=$_POST['username'];
			$password=$_POST['password'];
			$cpassword=$_POST['cpassword'];
			$_SESSION['username']=$username;
			if($password==$cpassword)
			{
				$query= "select * from policereg WHERE username='$username' ";
				$query_run= mysqli_query($con,$query);
				
				if(mysqli_num_rows($query_run)>0)
				{
					//there is already a user with the same username
					echo '<script type="text/javascript"> alert("User already exists..try another username")</script>';
					
				}
				else
				{
					$query= "insert into policereg (username,password) values('$username','$password')";
					$query_run=mysqli_query($con,$query);
					
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("User Registered...Go to login to login")</script>';
						//header('location:policelogin.php');
					}
					
				}
			}
			else
			{
				echo '<script type="text/javascript"> alert("Password and confirm password does not match")</script>';
			}
			
		}
	?>
	</div>
</body>
</html>
