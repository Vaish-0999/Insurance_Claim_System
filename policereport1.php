<?php
session_start();
$vrno=$_GET['id'];
#session vrno
//$vrno=$_SESSION['vrnorow'];

//$i=$_SESSION['rowvalue'];
//$rowv=$_SESSION['rowv'];
//$vrnonew=$vrno[$rowv];
//echo $vrnonew;
//echo $rowv;
//print_r($i);
//print_r($vrno);
$con=mysqli_connect("localhost",'root',"","insurance_claim_system");
	if(!$con)
	{
		die("Could not connect: ".mysqli_connect_error());
	}

	$sql="SELECT * FROM policereport where vrno='$vrno'";
	//echo $sql;
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{ 
		while($row=mysqli_fetch_assoc($result))
		{
			
			$firstname=$row['fname'];
			$middlename=$row['mname'];
			$lastname=$row['lname'];
			$vrno=$row['vrno'];
                        $age=$row['age'];
			$location=$row['loc'];
			$landmark=$row['lmark'];
                        $weather=$row['weather'];
			$road=$row['road'];
			$light=$row['light'];
			$adate=$row['adate'];
			$atime=$row['atime'];
			$wfirstname=$row['wfname'];
			$wmiddlename=$row['wmname'];
			$wlastname=$row['wlname'];
			$phoneno=$row['phoneno'];
			
		}
	}
	else{
		echo "<script type='text/javascript'>alert('Police report not found')</script>";
		 return false;
		}
	?>
<!DOCTYPE html>
<html>
<head>
		<title>Police Report</title>
		<link rel="stylesheet" href="css/police_reg_style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	        <script src="http://code.jquery.com/jquery-1.4.min.js" type="text/javascript"></script>
	        <meta charset="UTF-8">
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
			
		
		</style>
</head>
	<body>
	
		<div id="main-wrapper2" align="center">
			
			<center>
				<h2>Police Report</h2>
				
			</center>
		
		
			<form class="form-group" action="" method="post">
					<center><h3>Victim's Information</h3><br></center>
					<label><b>First Name</b></label>
					<input name="pr_name" type="text" class="form-control" value='<?php echo (isset($firstname)) ? $firstname: ''; ?>' /><br>
					<label><b>Middle Name<b></label>
					<input name="pr_mname" type="text" class="form-control" value='<?php echo (isset($middlename)) ? $middlename: ''; ?>' /><br>
					<label><b>Last Name<b></label>
					<input name="pr_lname" type="text" class="form-control" value='<?php echo (isset($lastname)) ? $lastname: ''; ?>'/><br>
					<label><b>Vehicle registration number<b></label>
					<input name="pr_vrno" type="text" class="form-control" value='<?php echo (isset($vrno)) ? $vrno: ''; ?>' /><br>
					<label><b>Age</b></label>
					<input type="number" name="age" value='<?php echo (isset($age)) ? $age: ''; ?>' ><br>
					<hr>
					<center><h3>Accident Information</center></h3>
					<label><b>Location<b></label>
					<input name="pr_loc" type="text" class="form-control" value='<?php echo (isset($location)) ? $location: ''; ?>'/><br>
					<label><b>Land mark<b></label>
					<input name="pr_mark" type="text" class="form-control" value='<?php echo (isset($landmark)) ? $landmark: ''; ?>'/><br>
					<label><b>Weather<b></label>
					<input name="pr_weather" type="text" class="form-control" value='<?php echo (isset($weather)) ? $weather: ''; ?>'/><br>
					<label><b>Road condition<b></label><br>
					<input name="category1" type="text" class="form-control" value='<?php echo (isset($road)) ? $road: ''; ?>'/><br>
					<label><b>Light conditions<b></label><br>
					<input name="category2" type="text" class="form-control" value='<?php echo (isset($light)) ? $light: ''; ?>'/><br>
					
					<label><b>Date of accident<b></label>
					<input name="pr_date" type="date" class="form-control" value='<?php echo (isset($adate)) ? $adate: ''; ?>'/><br>
					<label><b>Time of accident<b></label>
					<input name="pr_time" type="text" class="form-control" value='<?php echo (isset($atime)) ? $atime: ''; ?>'/><br>
					<hr>
					<center><h3>Witness Information</center></h3>
					<label><b>First Name</b></label>
					<input name="pr_wname" type="text" class="form-control" value='<?php echo (isset($wfirstname)) ? $wfirstname: ''; ?>'/><br>
					<label><b>Middle Name<b></label>
					<input name="pr_wmname" type="text" class="form-control" value='<?php echo (isset($wmiddlename))? $wmiddlename: ''; ?>'/><br>
					<label><b>Last Name<b></label>
					<input name="pr_wlname" type="text" class="form-control" value='<?php echo (isset($wlastname)) ? $wlastname: ''; ?>'/><br>
					<label><b>Phone number<b></label>
					<input name="pr_witness_no" type="number" class="form-control" value='<?php echo (isset($phoneno)) ? $phoneno: ''; ?>' /><br>
					<hr>		
				<a href="pendingapps.php"><input type="button" id="p_back_btn" value="<< Back" class="btn btn-primary btn-lg"/></a>
		
				</form>
				</div>
	</body>
</html>
