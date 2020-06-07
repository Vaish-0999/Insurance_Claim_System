
<!DOCTYPE html>
<html>
<head>
		<title>insurance claim application</title>
		<link rel="stylesheet" href="css/police_reg_style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <style>
		input[type=date],input[type=text],input[type=password],input[type=email],input[type=text],select,textarea,input[type=number],input[type=time] {
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
				display:block;
				margin-left:15%;
				margin-right:15%;
				font-size:15px;	
			}
			h2 {
				color: #1A237E;
			}
			h3 {
				color: #1A237E;
			}
			#main-wrapper2{
				width:800px;
				background:white;
				margin-left: auto;
				margin-right:auto;
				padding:5px;
				border-radius:10px;
			}
			.btn{
				padding: 10px;
			}
			body{
				background-color: #010218;
			}
			.p_avatar
			{
				max-height:100px;
				max-width:100px;
			}
			#p_regi_btn{
				margin-left: 0%;
			}
		</style>
</head>
	<body>
		<div id="main-wrapper2" align="center">
			
			<center>
				<h2>Insurance Application</h2>
				
			</center>
		
		
			<form class="form-group" action="" method="post">
					<center><h3>Victim's Information</h3><br></center>
					<label><b>Name</b></label>
					<input name="name" type="text" class="form-control" placeholder="Type your name" required/><br>
					<label><b>Vehicle Registration No<b></label>
					<input name="vrno" type="text" class="form-control" required  /><br>
					<label><b>License Number<b></label>
					<input name="lno" type="text" class="form-control" required /><br>
					<label><b>Vehicle Policy number<b></label>
					<input name="vpno" type="text" class="form-control"  required/><br>
					<label><b>Policy Expiration Date<b></label>
					<input name="edate" type="date" class="form-control" required/><br>
				    <input name="send" type="submit" id="p_regi_btn" value="Submit" class="btn btn-primary btn-lg btn-block"/></br>
                                 <a href="uploaddocs.php"><input type="button" id="b_btn" value="next>>" class="btn btn-primary btn-lg"/></a>
		
				</form>

		</div>
      <?php
   
         $con = mysqli_connect("localhost",'root',"","insurance_claim_system");
	if(isset($_POST['send']))
	{
		$name=$_POST['name'];
		$vrno=$_POST['vrno'];
                $vlicense=$_POST['lno'];
                $vpolicy=$_POST['vpno'];
                $pedate=$_POST['edate'];
		$query="INSERT INTO vehicleinfo (name,vrno,licenseno,vpolicy,edate) VALUES ('$name','$vrno','$vlicense','$vpolicy','$pedate')";
			
			$query_run=mysqli_query($con,$query);
			if(mysqli_affected_rows($con) > 0)
			{
			//valid
			 	
			}
			else
			{
				//invalid
				echo '<script type="text/javascript"> alert("sorry your data is not sent. ")</script>';
			}
	}
?>
	</body>
</html>
