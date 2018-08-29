<!DOCTYPE html>
<html>

	<title>LNHS - Login</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="index.css">

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
				<p style="font-family: Century; font-size: 35px; font-weight: bold; text-align: left;"> LAHUG NIGHT HIGH SCHOOL</p>
				<p style="margin-top: -15px ; font-family: Century; font-size: 15px; text-align: left;">371 Gorordo Ave, Cebu City, 6000 Cebu</p>
			</div>

		</div>
	</div>

 	<hr class="style">
 	<br>

 	<div class="container">
		<div class="row"> 
			
			<div class="col-sm-8">
				
			</div>

			<div class="col-sm-4" style="border-left: double; border-right: double; height: 100%;">

			<form action="login.php" method="POST" id="form">
				<p style="font-family: Century; font-size: 30px;">LOGIN</p>
				<br>

				<label style="font-family: Century;">Username</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-user" id="icon"></i>
					</div>
					<input class="text" name="Username" required type="text" placeholder="Enter Username"/>
				</div>
				<br>
				<label style="font-family: Century;">Password</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-key" id="icon"></i>
					</div>
					<input class="text" name="Password" required type="password" placeholder="Enter Password"/>
				</div>

				<br>
				<br>

				<input style="font-family: Century; font-size: 15px" class="btn" type="submit" value="Login" name="Login" />

				<br>
				<br>
			</form>
			
			<br>
			
			</div>
		</div>
	</div>
	<br>

	<hr class="style2">

	<center> <footer style="font-family: Century;"> ACR: Automated Class Record &copy; Capstone 2018</footer> </center>
</body>
</html>