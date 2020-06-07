<?php
#session_start();
?>
<!DOCTYPE html>
<html>
<head>
		<title>Police Report</title>
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
				<h2>Police Report</h2>
				
			</center>
		
		
			<form class="form-group" action="" method="post">
					<center><h3>Victim's Information</h3><br></center>
					<label><b>First Name</b></label>
					<input name="pr_name" type="text" class="form-control" placeholder="Type victim's first name" required/><br>
					<label><b>Middle Name<b></label>
					<input name="pr_mname" type="text" class="form-control" placeholder="Type victim's middle name" required/><br>
					<label><b>Last Name<b></label>
					<input name="pr_lname" type="text" class="form-control" placeholder="Type victim's last name" required/><br>
					<label><b>Vehicle registration number<b></label>
					<input name="pr_vrno" type="text" class="form-control"  required/><br>
					<label><b>Age</b></label>
					<input name="age" type="number"  min="18"><br>
					<hr>
					<center><h3>Accident Information</center></h3>
					<label><b>Location<b></label>
					<input name="pr_loc" type="text" class="form-control" required/><br>
					<label><b>Land mark<b></label>
					<input name="pr_mark" type="text" class="form-control" required/><br>
					<label><b>Weather<b></label>
					<select name="category">
					<option value="cloudy">Cloudy</option>
					<option value="sunny">Sunny</option>
					<option value="rainy">Rainy</option>
					<option value="humid">Humid</option>
					<option value="dry">Dry</option>
					<option value="foggy">Foggy</option>
					<option value="clear">Clear</option>
					<option value="breezy">Breezy</option>
					<option value="stormy">Stormy</option>
					<option value="calm">Calm</option>
					</select>
					<label><b>Road condition<b></label><br>
					<select name="category1">
					<option value="wet">Wet</option>
					<option value="dry">Dry</option>
					<option value="slippery">Slippery</option>
					<option value="gravel">Gravel</option>
					<option value="potholes">Potholes</option>
					<option value="faded">Faded road Signs</option>
					<option value="cracks">Cracks</option>
					</select>
					<label><b>Light conditions<b></label><br>
					<select name="category2">
					<option value="nolight">No light</option>
					<option value="light">Light</option>
					<option value="dim">Dim</option>
					</select>
					
					<label><b>Date of accident<b></label>
					<input name="pr_date" type="date" class="form-control" required/><br>
					<label><b>Time of accident<b></label>
					<input name="pr_time" type="time" class="form-control" required/><br>
					<hr>
					<center><h3>Witness Information</center></h3>
					<label><b>First Name</b></label>
					<input name="pr_wname" type="text" class="form-control" placeholder="Type your first name" required/><br>
					<label><b>Middle Name<b></label>
					<input name="pr_wmname" type="text" class="form-control" placeholder="Type your middle name"/><br>
					<label><b>Last Name<b></label>
					<input name="pr_wlname" type="text" class="form-control" placeholder="Type your last name" required/><br>
					<label><b>Phone number<b></label>
					<input name="pr_witness_no" type="number" class="form-control" placeholder="Type phone number"  /><br>
					<hr>
				    <input name="policereportsend" type="submit" id="p_regi_btn" value="Submit" class="btn btn-primary btn-lg btn-block"/></br>
				<input type="button" id="p_back_btn" value="<< Back" class="btn btn-primary btn-lg"/></a>
		
				</form>
<?php
if(isset($_POST['policereportsend']))
{
	$con=mysqli_connect("localhost",'root',"","insurance_claim_system");
	$firstname=$_POST['pr_name'];
	$middlename=$_POST['pr_mname'];
	$lastname=$_POST['pr_lname'];
	$vrno=$_POST['pr_vrno'];
	$age=$_POST['age'];
	$location=$_POST['pr_loc'];
	$landmark=$_POST['pr_mark'];
	$weather=$_POST['category'];
	$road=$_POST['category1'];
	$light=$_POST['category2'];
	$adate=$_POST['pr_date'];
	$atime=$_POST['pr_time'];
	$wfirstname=$_POST['pr_wname'];
	$wmiddlename=$_POST['pr_wmname'];
	$wlastname=$_POST['pr_wlname'];
	$phoneno=$_POST['pr_witness_no'];
	$query="INSERT INTO policereport (fname,mname,lname,vrno,age,loc,lmark,weather,road,light,adate,atime,wfname,wmname,wlname,phoneno)  VALUES ('$firstname','$middlename','$lastname','$vrno','$age','$location','$landmark','$weather','$road','$light','$adate','$atime','$wfirstname','$wmiddlename','$wlastname','$phoneno')";
	$query_run = mysqli_query($con,$query);
	if(mysqli_affected_rows($con) > 0)
	{	
		//echo "<p>Row Added</p>";
		echo "<script type='text/javascript'>alert('data submitted')</script>";
	}
	else {
		//echo "<p>Row not Added</p>";
		echo "<script type='text/javascript'>alert('data not submitted')</script>";
		}
	}

?>

		</div>
	</body>
</html>
