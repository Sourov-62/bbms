<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/c1.css">


</head>
<body>
	<div id="full">
		<div id="inner-full">
			<div id="header" class="link-15"><h2 align="center"><a href="admin-home.php" style="text-decoration: none; color: whitesmoke;">CU Blood Bank</a></h2></div>
			<div id="body" >
				<br>
				<?php
				$un=$_SESSION['un'];
				if(!$un)  
				{
					header("Location:index.php"); 
				}
				?>
				<h2 align="center">Welcome To CU Blood Bank</h2>
				<br>
				<ul align="center">
					<li class="button11"><a href="donor-reg.php">Donor Registration</a></li>
					<li class="button12"><a href="donor-list.php">Donor List</a></li>
					<li class="button13"><a href="stoke-blood-list.php">Stock Blood List</a></li>
				</ul><br><br><br><br>
				<ul align="center">
					
					<li class="button14"><a href="exchange-blood-list.php">Blood Collection Registration</a></li>
					<li class="button15"><a href="exchange-list.php">Blood Collector History</a></li>
				</ul>
				<br>
				
			</div>

		</div>
	</div>
	</body>
	<style>
a {
  text-decoration: none;
  color: white;
  margin-top: -20px;
 

}

</style>

	<footer>
		<div id="footer">
			    <h4 class="link-11"align="center">Copyright © 2023-All rights are reserved</h4>
			     <p class="link-10" align="center"><a  href="logout.php" text-decoration="none">Log Out</a></p>
		</div>
	</footer>
	</html>