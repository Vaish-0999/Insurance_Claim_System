
<!DOCTYPE html>
<html>
<head>
<title>VEHICLE INFORMATION</title>
<link rel="stylesheet" href="css/style.css"	>
<link rel="stylesheet" href="css/police_home_style.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script language="Javascript" type="text/javascript">
	function vehicle_reg_exp()
	{
		var inputString=document.getElementById("vehicleregno").value;
		var re=/^(MH|mh)( |,|\-|\.)?(12|14)( |,|\-|\.)?[A-Za-z]{2}( |,|\-|\.)?[0-9]{1,4}$/;
		if(inputString.match(re))
		{
			var op=inputString.replace(/[ \-,\.]/g,'');
			var vrno=document.getElementById("vehicleregno").value=op;
		}
		else
		{
			//alert("unregistered.");
		}
		
	}

</script>
<style>
	input[type=date],input[type=text],input[type=password],input[type=email],input[type=text],select,textarea,input[type=number],input[type=time]
 {
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
		label {
			display: inline-block;
			margin-bottom: 1em;
			width:40%;
		}
		h2 {
				color: #1A237E;
			}
	
		form{
				margin-top:20px;
				display:block;
				font-size:18px;	
				
			}
		#main-wrapper{
			margin-left:%;
		}
}
</style>
</head>
<body>

	<div id="main-wrapper">
	<center>
	<h2>VEHICLE INFORMATION</h2>
	</center>	
	<form name="vehiclefrm" class="vehicleform" action="" method="post">
		
		<label><b>Name of victim</b></label><br>
		<input   name="victimname" type="text" class="inputvalues" /><br>

		<label><b>Vehicle Registration Number</b></label><br>
		<input name="vehicleregno" type="text" class="inputvalues" required/><br>
		
		<label><b>License no</b></label><br>
		<input  name="licenseno" type="text" class="inputvalues" /><br>
           
                <label><b>Vehicle Policy Number</b></label><br>
		<input name="vehiclepolicy" type="text" class="inputvalues" required/><br>
	
		<label><b>Policy expiration Date</b></label><br>
		<input  name="edate" type="date" class="inputvalues" /><br>
		
		<input name="vehiclereg" type="submit"  id="vehiclereg_btn" onclick="vehicle_reg_exp()" value="Submit" class="btn btn-primary btn-lg btn-block"/><br>
		

		
		
		</form>

	
	</div>
<?php
   
$con = mysqli_connect("localhost",'root',"","insurance_claim_system");
	if(isset($_POST['vehiclereg']))
	{
		$name=$_POST['victimname'];
		$vrno=$_POST['vehicleregno'];
                $vlicense=$_POST['licenseno'];
                $vpolicy=$_POST['vehiclepolicy'];
                $pedate=$_POST['edate'];
                
		$query="INSERT INTO vehicleinfo (name,vrno,licenseno,vpolicy,edate) VALUES ('$name','$vrno','$vlicense','$vpolicy','$pedate')";
			
			$query_run=mysqli_query($con,$query);
			if(mysqli_affected_rows($con) > 0)
			{
			//valid
				echo '<script type="text/javascript"> alert("Successfully applied to claim the insurance...")</script>';
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
