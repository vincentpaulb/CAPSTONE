<!DOCTYPE html>
<html>

	<title>LNHS - Teacher</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="teacher.css">

</head>


<body id="bg">
	<br>
	<div class="container">  <!-- LOGO  -->
		<div class="row">
			<div class="col-sm-1" style="padding: 0">
				<img src="logo.png" id="logo" align="center">
			</div> 

			<div class="col-sm-6" style="padding: 0">
				<br>
				<p style="font-family: Century; font-size: 25px; font-weight: bold; text-align: left;"> LAHUG NIGHT HIGH SCHOOL</p>
				<p style="margin-top: -15px ; font-family: Century; font-size: 10px; text-align: left;">371 Gorordo Ave, Cebu City, 6000 Cebu</p>
			</div>

			<div class="col-sm-2" style="padding: 0">

				<a href="###" style="font-family: Century"> 

				<?php
			
					
					$con = mysqli_connect('localhost', 'root', '');
					mysqli_select_db($con, 'lnhs');
					
					if($con){
						$query = mysqli_query($con, 'SELECT * FROM admin');
					
						while($row = mysqli_fetch_array($query))
						{   
							
							$uname = $row['username'];
							echo $uname; 
							
						}
					
					}					
				?>
				
				</a>
				<span> | </span>
        		<a href="index.php">Logout</a>
      		</div>

		</div>
	</div>

 	<hr class="style">

 	<div class="container-fluid">
  		<div class="row content">

    		<div class="col-sm-2 sidenav" style="padding-left: 30px; padding-right: 15px">
     			<h3 style="font-family: Century; font-weight: bold; text-align: center"><a href="Teacher.html" style="color: black; text-decoration: none;">Teacher</a></h3>
     			<hr>
     			<br>
     			<ul class="nav nav-pills nav-stacked" id="nav">
       			<li>
       				<a type="button" class="btn btn-info" href="ClassRecord.html">Class Record</a>
       			</li>
       			<hr>
       			<li>
       				<a type="button" class="btn btn-info" href="CreateReport.html">Create Reports</a>
       			</li>
      			</ul>
    		</div>

   			<div class="col-sm-10" style="padding: 60px">
      		</div>

      	</div>
	<div>
 	

	<hr class="style2">

	<center> <footer style="font-family: Century;"> ACR: Automated Class Record &copy; Capstone 2018</footer> </center>
</body>
</html>