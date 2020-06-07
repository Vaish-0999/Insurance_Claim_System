<!DOCTYPE html>
<html>
	<head>
		<title>Registration page</title>
		<!--<link rel="stylesheet" href="css/style.css">-->
		<link rel="stylesheet" href="css/insurance_reg_style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
			alert("successful");
		}
		else
		{
		alert("error");
		}
		if(inputpwd.match(pwd_re))
		{
			alert("successful pwd");
		}
		else
		{
			alert("error");
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
		
		input[type=text],input[type=password],input[type=email],input[type=number],select,textarea {
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
			margin-left: 20%;
		}
		label {
			display: inline-block;
			margin-bottom: 1em;
			width:70%;
		}
		label.inline, input[type="checkbox"]{
			 display: inline-block;
			margin-bottom: 1em;
		}
		form{
			display:inline-block;
			text-align: left;
			margin-left:10%;
			margin-right:10%;
		}
		h2 {
			color: #192a56;
			font-weight: bold;
		}
		.i_avatar{
			margin-bottom:20px;
		}
		#main-wrapper2{
			width:650px;
			background:white;
			margin-left: auto;
			margin-right:auto;
			padding:5px;
			margin-top:30px;
			border-radius:10px;	
		}
		body{
				background-color: #010218;
			}
	</style>
	</head>
	
	<body bgcolor="#010218">
		<div id="main-wrapper2" align="center">
			<center>
			<h2>Insurer Registration Form</h2>
			<img src="imgs/3_log.png" class="i_avatar"/>
			</center>
		
		
		<form class="p_myform" action="" method="post">
			<label for="userid"><b>Username</b>
			<input name="username" id="userid" type="text" class="i_inputvalues" placeholder="Type your username" required/>
			</label><br>
			<label for="userpwd"><b>Password</b>
			<input name="password" id="userpwd" type="password" class="i_inputvalues" placeholder="Your password" required/><br>
			<input type="checkbox" id="checkboxpwd" onclick="myFunction()">
			<label class="check1" for="checkboxpwd" >Show Password</label>
			<br>
			<label for="conpwd"><b>Confirm Password</b>
			<input name="cpassword" type="password" id="conpwd" class="i_inputvalues" placeholder="Confirm password" required/>
			</label><br>
			<label for="mail"><b>Email id:<b>
			<input name="email_id" type="email" id="mail" class="i_inputvalues" placeholder="Type company's email address" required/>
			</label><br>
			<label for="custcare"><b>Customer care number<b>
			<input name="insurance_no" type="number" id="custcare" class="i_inputvalues" pattern="[0-9]{10}" inputmode="numeric"required/>
			</label><br>	
			
			<input name="insurance_reg_btn" type="submit"   onclick="register_reg_exp()"  value="Submit" class="btn btn-primary btn-lg btn-block"/></br>
			<a href="insulogin.php"><input type="button"  value="<< Login" class="btn btn-primary btn-lg btn-block"/></a>
		
		</form>
		<?php
		$connect=mysqli_connect("localhost",'root',"","insurance_claim_system");
		if(isset($_POST['insurance_reg_btn']))
		{
			//echo '<script type="text/javascript"> alert("Sign up button clicked")</script>';
			$username=$_POST['username'];
			$password=$_POST['password'];
			$cpassword=$_POST['cpassword'];
			$emailid=$_POST['email_id'];
			$contactNo=$_POST['insurance_no'];
			
			if($password==$cpassword)
			{
				$query= "select * from insureg WHERE username='$username' ";
				$query_run= mysqli_query($connect,$query);
				
				if(mysqli_num_rows($query_run)>0)
				{
					//there is already a user with the same username
					echo '<script type="texts/javascript"> alert("User already exists..try another username")</script>';
				}
				else
				{
					//$query= "insert into user values('$username','$password')";
					$query= "insert into insureg (username,password,email,contactno) values('$username','$password','$emailid','$contactNo')";
					$query_run=mysqli_query($connect,$query);
					if(mysqli_affected_rows($connect) > 0)
					
					{
						echo '<script type="text/javascript"> alert("User Registered...Go to login to login")</script>';
						//header('location:index2.php');
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error!")</script>';
					}
				}
			}
			else
			{
				echo '<script type="text/javascript"> alert("Password and confirm password does not match")</script>';
			}
			
		}
		mysqli_close($connect);
	?>
		
	
	</div>	
	
	
	</body>
</html>
