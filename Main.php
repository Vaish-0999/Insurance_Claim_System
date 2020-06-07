
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Automatic Insurance Validation</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/stylemain.css">
		<link rel="stylesheet" href="css/stylelogin.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	</head>
	<style>
		.navbar-default .navbar-nav li a:hover{
			color:#ecf0f1;
		}
		img.avatar {
			width: 30%;
			height: 30%;
		}
	</style>
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="20">
	<form action="" method="post">
		<!--about#1	-->
			<div class="jumbotron text-center" style="background-image:url(imgs/4.jpg)">
				
				<h1>Insurance Claim System</h1>
				<p>for Vehicle Accidents</p>
			</div>
	
			<div id="about" class="container-fluid bg-grey">
				<div>
					<h2>About Us</h2>
					<h4>
						<p>Nowadays it is long process to claim insurance when accident happens. It involves long procedure as it involves police, RTO and insurance companies. <br>
						As accident happen it is necessary to inform near police station, then respected police officer take action, he informs to Regional Traffic Office.<br>
						He informs via phone call. This may take long time. After this when RTO get informed, office sends information about vehicle to police officer. After this for claiming insurance victim or his/her family inform to insurance company. Insurance company investigates accident event, which take more time. In this procedure victim may suffers a lot. He/she will not get insurance on time which may lead loss.</p>
					</h4>
				</div>
			</div>

		<!--about#2	-->
			<div class="container-fluid bg-grey">
				<div class="row">
					<div class="col-sm-4">
						<span class="glyphicon glyphicon-globe logo"></span>
					</div>
					<div class="col-sm-8">
					<h2>Our Values</h2>
					<h4><strong>VISION:</strong><p> Our mission is to use this online portal for fatal accident in which police,victim and insurance company can report at any time and any place. So we get whole detail at one place and cases of fatal accident resolved easily and one can get all the benefits in time.</p></h4>
			
					</div>
				</div>
			</div>
		<!-- login-->
			<div class="row" id="login">
				<h2 style="text-align:center">LOGIN</h2>
					<div class="imgcontainer col-sm-4 ">
						 <h4 style="text-align:center">CUSTOMER</h4>
						 <a href="custlogin.php"><img src="imgs/teamwork.png" alt="CUSTOMER" class="avatar"></a>
					</div>
					<div class="imgcontainer col-sm-4 ">
						<h4 style="text-align:center">POLICE</h4>
						<a href="policelogin.php"><img src="imgs/2_log.jpg" alt="POLICE" class="avatar"></a>
					</div>
					<div class="imgcontainer col-sm-4 ">
						<h4 style ="text-align:center">INSURER</h4>
						<a href="insulogin.php"><img src="imgs/3_log.png" alt="INSURER" class="avatar"></a>
					</div>
			</div>
	
		<!--Gallery	-->
			<div id="gallary" class="container-fluid text-center bg-grey">
				<h2>Gallery</h2>
				<h4>Some images...</h4>
				<div class="row text-center">
					<div class="col-sm-4">
						<div class="thumbnail">
							<img  class="img-thumbnail" src="imgs/a.jpg" alt="RTO">
							<p><strong>Police Station</strong></p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="thumbnail">
							<img  class="img-thumbnail" src="imgs/b.jpg" alt="RTO">
							<p><strong>RTO</strong></p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="thumbnail">
							<img  class=" img-thumbnail" src="imgs/a.jpg" alt="RTO">
							<p><strong>Police Station</strong></p>
						</div>
					</div>
				</div>
			</div>
	
		<!--navigation bar	-->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#myPage">Insurance Claim System</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right ">
							<li class="active"><a href="#about">ABOUT</a></li>
							<li><a href="#login">LOGIN</a></li>
							<li><a href="#gallary">GALLERY</a></li>
							<li><a href="#contact">CONTACT</a></li>
						</ul>
					</div>
				</div>
			</nav>

		<!--Contact	-->
			<div id="contact" class="container-fluid bg-grey">
				<h2 class="text-center">CONTACT</h2>
					<div class="row">
						<div class="col-sm-5">
						  <p>Contact us and we'll get back to you within 24 hours.</p>
						  <p><span class="glyphicon glyphicon-map-marker"></span> Pune, Maharashtra</p>
						  <p><span class="glyphicon glyphicon-phone"></span> +91 8788639239</p>
						  <p><span class="glyphicon glyphicon-envelope"></span> ICS@gmail.com</p> 
						</div>
						<div class="col-sm-7">
							<div class="row">
								<div class="col-sm-6 form-group">
									<input class="form-control" id="name" name="name" placeholder="Name" type="text" required />
								</div>
								<div class="col-sm-6 form-group">
									<input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
								</div>
							</div>
							<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
							<div class="row">
								<div class="col-sm-12 form-group">
									<button class="btn btn-default pull-right" name="send" type="submit">Send</button>
								</div>
							</div> 
						</div>
					</div>
			</div>

		<!--footer	-->
			<footer class="container-fluid text-center bg-footer">
				<a href="#myPage" title="To Top">
				<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
				<p style="color:#d2dae2">Insurance Claim System </p>
			</footer>
			<?php
$con = mysqli_connect("localhost",'root',"","insurance_claim_system");
	if(isset($_POST['send']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$comments=mysqli_real_escape_string($con,$_POST['comments']);
		//$comments==$_POST['comment'];
		$query="INSERT INTO feedback (name,email,comment) VALUES ('$name','$email','$comments')";
			
			$query_run=mysqli_query($con,$query);
			if(mysqli_affected_rows($con) > 0)
			{
			//valid
				echo '<script type="text/javascript"> alert("Thank you...")</script>';
			}
			else
			{
				//invalid
				echo '<script type="text/javascript"> alert("sorry your data is not sent. ")</script>';
			}
	}
?>
</form>
	</body>
</html>

