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
				<h2>Upload Documents</h2>
				
			</center>
		
		
			<form class="form-group" action="" method="post" enctype="multipart/form-data"><hr>
                                        
                                       <label><b>Please Enter Vehicle Registration No<b></label>
					<input name="vrno" type="text" class="form-control" required  /><br><br>
                                     
                                        <label><b>Driving License<b></label>
					<input type="file" name="file1" id="file1" />
                                        <br><br>
                                        <label><b>Registration Cerficate(Original)<b></label>
					<input type="file" name="file2" id="file2" />
                                        <br><br>
                                        <label><b>AADHAR Card(Proof of identification)<b></label>
					<input type="file" name="file3" id="file3" />
                                        <br><br>
                                         <label><b>Repair Bills<b></label>
					<input type="file" name="file4" id="file3" />
                                        <br><br>
				    <input name="send" type="submit" value="Upload All Documents" class="btn btn-primary btn-lg btn-block"/></br>
		
				</form>

		</div>
              <?php
                 
                $conn=new PDO('mysql:host=localhost; dbname=insurance_claim_system', 'root', '') or die(mysql_error());
                   if(isset($_POST['send']))
                    {
                       $vrno=$_POST['vrno'];
                       $name1=$_FILES['file1']['name'];
                       $temp1=$_FILES['file1']['temp1'];
                       $name2=$_FILES['file2']['name'];
                        $temp2=$_FILES['file2']['temp2'];
                         $name3=$_FILES['file3']['name'];
                        $temp3=$_FILES['file3']['temp3'];
                         $name4=$_FILES['file4']['name'];
                        $temp4=$_FILES['file4']['temp4'];
                        $location = "uploads/".$vrno."/".$name1;
                        $location = "uploads/".$vrno."/".$name2;
                        $location = "uploads/".$vrno."/".$name3;
                        $location = "uploads/".$vrno."/".$name4;
                      if(!file_exists("uploads/".$vrno)){
			mkdir("uploads/".$vrno);
		         }
                        move_uploaded_file($temp1,$location);
                         move_uploaded_file($temp2,$location);
                         move_uploaded_file($temp3,$location);
                         move_uploaded_file($temp4,$location);
                         $query=$conn->query("insert into uploads (vrno,d_license,regcert,adhar,rpbill) values('$vrno','$name1','$name2','$name3','$name4') ");
                         if($query){
                           echo '<script type="text/javascript"> alert("Successfully applied to claim the insurance...")</script>';
                            }
                            else{
                                echo'<script type="text/javascript">alert("File Upload failed")</script>'; 
                                }
                         
                    }
                                    
               ?>
         </body>
        </html>



					
