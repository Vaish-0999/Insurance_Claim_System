
<!DOCTYPE html>
<html>
<head>
	<title>Police'sHomepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/police_home_style.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.4.min.js" type="text/javascript"></script>
	<meta charset="UTF-8">
	<script type="text/javascript">
		$(document).ready(function(){
		   $("#getinfo").click(function(){
			$('#result').load('vehicledummy.php');
			 //alert("Thanks for visiting!");
		   }); 
		 });
	
		function form1()
		{
		    d1 = document.getElementById('con');
			d2 = document.getElementById('con1');
			
			d1.style.display = "block";
			d2.style.display = "none";
		}
		
		function form2()
		{
		    d1 = document.getElementById('con');
			d2 = document.getElementById('con1');
			
			d2.style.display = "block";
			d1.style.display = "none";
		}

	</script>
<style>
		.container{
			position:relative;
			margin-bottom:10px;
			
		}
		
		img{
			opacity: 50;
			height: 550px;
		        margin-top: 50px;
			margin-left: -2%;
			overflow: hidden;
			padding: 0px;
			width: 1400px; 
		}
		.logout{
			position: absolute;
			top: 20px;
			right:0%;
			transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			background-color: #130f40;
			color: white;
			font-size: 16px;
			padding: 12px 24px;
			border: none;
			cursor: pointer;
			border-radius: 5px;
			text-align: center;
		}
		ul {
			list-style-type: none;
			margin:0;
			padding: 0;
			overflow: hidden;
			background-color: #130f40;
			margin-bottom:30%;
			
		}

		li {
			float: left;;
		}

		li a {
			display:inline-block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li a:hover {
			background-color: #ecf0f1;
			text-decoration: none;
		}
		.content{
			margin-left:20%;
			margin-top:20%
		}
		a:active{
			background-color: #ecf0f1;
			text-decoration: none;
		}
		
</style>
</head>
<body>
	<div class="container">
		
		<img src="imgs/pol.PNG" alt="police" width="1000" height="300">
		<a href="logout1.php"><input type="submit" class="logout" name="logout" value="Log out"/>
		<div class="bottomright"></div>
	</div>
	<ul>
	  <li><a href="javascript:form2()" id="link2">Fill Victim's Report</a></li>
	</ul>
	<div class="content" id="con1">
		  <?php require('policereport.php'); ?>
	</div>
	
	<div class="getclass" id="result" style="clear:both;">
	</div>
</body>
</html>



