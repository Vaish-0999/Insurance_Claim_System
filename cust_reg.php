<!DOCTYPE html>
<html>
	<head>
		<title>Registration page</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style>
		input[type=date],input[type=text],input[type=password],input[type=email],input[type=text],select,textarea,input[type=number] {
			margin-top: 10px;
			border: none;
			  font-size: 12px;
			  height: 40px;
			  margin: 0;
			  outline: 0;
			  padding: 5px;
			  width: 550px;
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
			form{
				text-align: left;
				display:inline-block;
				margin-left:10%;
				margin-right:15%;
				font-size:15px;	
			}
			h2 {
				color: #1A237E;
			}
			#main-wrapper2{
				width:700px;
				background:white;
				margin-left: auto;
				margin-right:auto;
				margin-top:40px;
				padding:5px;
				border-radius:10px;
			}
			.p_avatar{
				width:150px;
				text-align:center;
				border-radius:40%;
			}
			.btn{
				padding: 10px;
			}
			body{
				background-color: #010218;
			}
		</style>
	</head>
	
	<body>
		<div id="main-wrapper2">
		<center>
		<h2>Registration Form</h2>
		<img src="imgs/teamwork.png" class="p_avatar"/>
		</center>
		<hr>
		
		<form class="r_myform" action="cust_reg.php" method="post">
			<center><h2>Customer's Information</h2><br></center>
			<label><b>First Name</b></label>
			<input name="rf_name" type="text" class="p_inputvalues" placeholder="Type your first name" required/>
			<label><b>Middle Name<b></label>
			<input name="rm_name" type="text" class="p_inputvalues" placeholder="Type your middle name" required/>
			<label><b>Last Name<b></label>
			<input name="rl_name" type="text" class="p_inputvalues" placeholder="Type your last name" required/><br>
			<label><b>Designation<b></label>
			<input name="r_degsn" type="text" class="p_inputvalues" required/>
			<label><b>Date Of Birth<b></label>
			<input name="r_dob" type="date" class="p_inputvalues" required/><br>
			<label><b>location<b></label>
			<input name="r_location" type="text" value="pune" class="p_inputvalues" />
			<label><b>contact number<b></label>
			<input name="r_contactno" type="number" class="p_inputvalues" />
			<label><b>Email ID<b></label>
			<input name="remail_name" type="email" class="p_inputvalues" placeholder="Type your email ID" required/>
                        <label><b>Username</b></label><br>
		         <input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
		          <label><b>Password</b></label><br>
		        <input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br>
			
		<br><hr>
			<input name="rto_reg_btn" type="submit" id="r_regi_btn" value="Submit"  class="btn btn-primary btn-lg btn-block"/></br>
			<a href="custlogin.php"><input type="button" id="p_back_btn" class="btn btn-primary btn-lg btn-block" value="<< Back" /></a>
		
		</form>
		
<?php
		$connect=mysqli_connect("localhost","root","","insurance_claim_system");
		if(isset($_POST['rto_reg_btn']))
		{
			$firstname=$_POST['rf_name'];
			$middlename=$_POST['rm_name'];
			$lastname=$_POST['rl_name'];
			$designation=$_POST['r_degsn'];
			$dob=$_POST['r_dob'];
			$location=$_POST['r_location'];
			$contactno=$_POST['r_contactno'];
			$emailid=$_POST['remail_name'];
                        $username=$_POST['username'];
                        $password=$_POST['password'];
			$query= "INSERT INTO custreg (firstname,middlename,lastname,designation,dob,location,contactno,emailid,username,password) values('$firstname','$middlename','$lastname','$designation','$dob','$location','$contactno','$emailid','$username','$password')";
			$query_run=mysqli_query($connect,$query);
			if(mysqli_affected_rows($connect) > 0)
			{
			echo '<script type="text/javascript"> alert("Registration is successfully completed.")</script>';
			header('location:custlogin.php');
			}
			else
			{
			echo '<script type="text/javascript"> alert("Sorry registration is not completed.")</script>';
			//echo "<p>Row not Added</p>";
			}
		}
?>
	</div>	
	
	
	</body>
</html>
