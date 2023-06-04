<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Exchange List</title>
	<link rel="stylesheet" type="text/css" href="css/c1.css">
	<style type="text/css">
		td{
			width: 200px;
			height: 40px;
		}
	</style>
</head>
<body>
	<div id="full">
		<div id="inner-full">
			<div id="header"><h2 align="center"><a href="admin-home.php" style="text-decoration: none; color: whitesmoke;">CU Blood Bank</a></h2></div>
			<div id="body">
				<br>
				<?php
				$un=$_SESSION['un'];
				if(!$un)  
				{
					header("Location:index.php"); 
				}
				?>
				<h1>Exchange Blood History</h1>
				<center><div id ="form">
				<table>
				<tr>
				<td><center><b><font color="blue">Name</font></b></center></td>
				<td><center><b><font color="blue">Address</b></font></center></td>
				<td><center><b><font color="blue">Gender</b></font></center></td>
				<td><center><b><font color="blue">Age</b></font></center></td>
				<td><center><b><font color="blue">Blood Group</b></font></center></td>
				<td><center><b><font color="blue">Mobile No</b></font></center></td>
				<td><center><b><font color="blue">E-Mail</b></font></center></td>
			</tr>
			<?php
			$q=$db-> query("SELECT * FROM collect_blood");
			while($r1=$q->fetch(PDO::FETCH_OBJ))
			{
				?>
				<tr>
				<td><center><?= $r1-> pname; ?></center></td>
				<td><center><?= $r1-> address; ?></center></td>
				<td><center><?= $r1-> gender; ?></center></td>
				<td><center><?= $r1-> age; ?></center></td>
				<td><center><?= $r1-> bgroup; ?></center></td>
				<td><center><?= $r1-> mno; ?></center></td>
				<td><center><?= $r1-> email; ?></center></td>
			</tr>
			<?php
			}
			?>	
		</table>

			</div></center>
		</div>
		<footer>
		<div id="footer">
			    <h4 class="link-11"align="center">Copyright © 2023-All rights are reserved</h4>
			     <p style="margin:5px;" align="center"><a class="link-10"  href="logout.php" text-decoration="none">Log Out</a></p>
		</div>
		</div>
	</div>
	</body>
	</html>