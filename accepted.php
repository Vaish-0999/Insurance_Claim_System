<?php


$vrno=$_GET['id'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'insurance_claim_system');
$ch='Accepted';

$q="UPDATE vehicleinfo SET status='$ch' WHERE vrno='$vrno'";
$num=mysqli_query($con,$q);
echo'<script type="text/javascript"> alert("Application Accepted...")</script>';

$query="Delete from vehicleinfo where vrno='$vrno'";
$n=mysqli_query($con,$query);
if($n)
 { 
   echo'<script type="text/javascript">alert("This case has been solved")</script>';
 }
else{}
?>
