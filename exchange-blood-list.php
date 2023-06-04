<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title >Collect Blood Registration</title>
	<link rel="stylesheet" type="text/css" href="css/c1.css">
	<style type="text/css">
		#form1{
			margin-top: 110px;
			width:100%;
			height: 320px;
			background-color: red ;
			color: white;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<div id="full">
		<div id ="inner_full">
		<div id="header" class="link-15"><h2 align="center"><a href="admin-home.php" style="text-decoration: none; color: whitesmoke;">Blood Bank Management System </a></h2></div>
			<div id="body">
				<?php
				$un=$_SESSION['un'];
				if(!$un)
				{
					header("Location:index.php");
				}
			?>
			<div class="lllmm">
			<h2 >Blood Collection Registration</h2>
			</div>
			<center><div id= "form1">
				<form action="" method= "post">
					<table>
						<tr>
							<td width="200px" height="50px">Enter Name</td>
							<td width="200px" height="50px"><input type="text" name= "pname" placeholder="Enter Name"></td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Address</td>
							<td width="200px" height="50px"><textarea name= "address"></textarea></td>
							<td width="200px" height="50px">Gender</td>
							<td width="200px" height="50px">
							<select name="gender">
								<option>Male</option>
								<option>Female</option>
								<option>Other</option>
							</select>
							</td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Age</td>
							<td width="200px" height="50px"><input type="text" name= "age" placeholder="Enter Age"></td>
							<td width="200px" height="50px">Enter E-Mail</td>
							<td width="200px" height="50px"><input type="text" name= "email" placeholder="Enter E-Mail"></td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Mobile No</td>
							<td width="200px" height="50px"><input type="text" name= "mno" placeholder="Enter Mobile No"></td>
						</tr>
						<tr>
							<td width="200px" height="50px">Select Blood Group</td>
							<td width="200px" height="50px">
								<select name= "bgroup">
								<option>A+</option>
								<option>A-</option>
								<option>B+</option>
								<option>B-</option>
								<option>AB+</option>
								<option>AB-</option>
								<option>O+</option>
								<option>O-</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><input type="submit" name="sub" value="save"></td>
						</tr>
					</table>
				</form>
				<?php
				if (isset($_POST['sub'])) 
				{
					$pname = $_POST['pname'];
					$address = $_POST['address'];
					$gender = $_POST['gender'];
					$age = $_POST['age'];
					$bgroup = $_POST['bgroup'];
					$email = $_POST['email'];
					$mno = $_POST['mno'];
					

					$q = $db->prepare("INSERT INTO collect_blood (pname, address, gender, age, bgroup, mno, email) VALUES (:pname,  :address, :gender, :age, :bgroup, :mno, :email)");
					$q->bindValue('pname', $pname);
					$q->bindValue('address', $address);
					$q->bindValue('gender', $gender);
					$q->bindValue('age', $age);
					$q->bindValue('bgroup', $bgroup);
					$q->bindValue('mno', $mno);
					$q->bindValue('email', $email);
					if ($q->execute()) {
						echo "<script>alert('Blood Collection Registration Successfull')</script>";
					} else {
						echo "<script>alert('Blood Collection Registration failed.')</script>";
					}
				}
			?>
			</div></center>
		</div>
		<footer>
		<div id="footer">
			    <h4 class="link-11"align="center">Copyright © 2023-All rights are reserved</h4>
			     <p style="margin:5px;" align="center"><a class="link-10"  href="logout.php" text-decoration="none">Log Out</a></p>
		</div>
	</footer>
		</div>
	</div>
	</body>
	</html>
