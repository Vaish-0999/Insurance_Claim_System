
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/stylemain.css">
		<link rel="stylesheet" href="css/stylelogin.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 30pxpx;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			
			padding: 10px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #130f40;
			color: #FFFFFF;
			border-color: #130f40 !important;
			text-transform: uppercase;
			padding:20px;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: left;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #d1d8e0;
		}
		.data-table tbody tr:hover td {
			background-color: #34495e;
			color:white;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		label{
			margin-left:25%;
		}
		#enter{
	                background-color: #00b8e6;
	                margin-top:5px;
	                padding:15px;
	                color:black;
	                width:10%;
	                text-align:center;
	                font-size:16px;
	                font-weight:bold;
	                 border-radius:8px;
	
                       }
		
	</style>
</head>
<body>
<form action="" method="post">
	<h1>Welcome To BHARATI AXA</h1><br>
	         
                <p>
		<table class="data-table">
		<thead>
			<tr>
				<th>Victim name</th>
				<th>Vehicle No</th>
				<th>License No</th>
				<th>Policy No</th>
				<th>Policy Expiration date</th>
				<th>Police Report</th>
                                <th>Action</th>
			</tr>
		</thead>
		<tbody>
<?php
$link = mysqli_connect("localhost", "root", "", "insurance_claim_system");
if($link)
{
	
	$sql = "SELECT name,vrno,licenseno,vpolicy,edate  FROM vehicleinfo";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['vrno'] . "</td>";
                echo "<td>" . $row['licenseno'] . "</td>";
                echo "<td>" . $row['vpolicy'] . "</td>";
		echo "<td>" . $row['edate'] . "</td>";
		echo "<td><a href='policereport1.php?id=".$row['vrno']."'>view report</a></td>";
                //echo "<td><a href='?id=".$row['vrno']."'<input name='accept' type='submit' id='enter' value='Accept' /></a></td>";
                echo "<td><a href='accepted.php?id=".$row['vrno']."'<button class='btn btn-default pull-right' name='send' type='submit'>Accept</button></a></td>";
                
				//echo "<td><form action=\"policereport1.php\" method=\"post\"><input type=\"submit\" value=\"View Report\" name= \"report\" /></form></td>";
            echo "</tr>";
        }
		
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} 

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}

mysqli_close($link);
?>


</tbody>
	</table>
</p>
	</form>
</body>
</html
