<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	</head>
	<body>
	<div id="show" ></div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.4.1.js"></script>
	<script type="text/javascript">
		4(document).ready(function(){
		setInterval(function(){
		$('#show').load('rto_retrieve_data.php')
		},1000);
		});
		</script>
		</body>
		</html>