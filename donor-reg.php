<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Donor Reg</title>
	<link rel="stylesheet" type="text/css" href="css/c1.css">
</head>
<body>
	<div id="full">
		<div id="inner-full">
		<div id="header" class="link-15"><h2 align="center"><a href="admin-home.php" style="text-decoration: none; color: whitesmoke;">CU Blood Bank</a></h2></div>
			<div id="body">
				<br>
				<?php
				$un=$_SESSION['un'];
				if(!$un)  
				{
					header("Location:index.php"); 
				}
				?>
				<h1>Donor Registration</h1>
				<center><div id ="form">
					<form action="" method="post">
					<table>
						<tr>
							<td width="200px" height="50px">Enter Name</td>
							<td width="200px" height="50px"><input type="text" name="dname" placeholder= "Enter Name" ></td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Address</td>
							<td width="200px" height="50px"><textarea name="address"></textarea></td>
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
							<td width="200px" height="50px"><input type="text" name="age" placeholder= "Enter Age" ></td>
							<td width="200px" height="50px">Select Blood Group</td>
							<td width="200px" height="50px">
							<select name="bgroup">
								<option>A+</option>
								<option>A-</option>
								<option>B+</option>
								<option>B-</option>
								<option>AB+</option>
								<option>AB-</option>
								<option>O+</option>
								<option>O-</option>
							</select >
						</td>
					</tr>
					<tr>
						<td width="200px" height="50px">Enter E-mail</td>
						<td width="200px" height="50px"><input type ="text" name="email" placeholder= "Enter E-Mail"></td>
						<td width="200px" height="50px">Enter Mobile No</td>
						<td width="200px" height="50px"><input type="text" name="mno" placeholder= "Enter Mobile No"></td>
					</tr>
					<tr>
						<td width="200px" height="50px">Date of Donation</td>
						<td width="200px" height="50px"><input type ="date" name="date" placeholder= " "></td>
						<td width="200px" height="50px">Date of Last Donation</td>
						<td width="200px" height="50px"><input type="date" name="ldate" placeholder= " "></td>
					</tr>
					<tr>
						<td><input type="submit" name="sub" value="Save"></td>
					</tr>

				</table>
			</form>
			<?php
			if(isset($_POST['sub']))
			{
				$dname=$_POST['dname'];
				$gender=$_POST['gender'];
				$address=$_POST['address'];
				$age=$_POST['age'];
				$bgroup=$_POST['bgroup'];
				$date=$_POST['date'];
				$ldate=$_POST['ldate'];
				$email=$_POST['email'];
				$mno=$_POST['mno'];
				global $pdo;
				$q=$db->prepare("INSERT INTO donate_blood (dname, gender, address, age, bgroup,date, ldate, mno, email) VALUES (:dname, :gender, :address, :age, :bgroup, :date, :ldate, :mno, :email)");
				$q->bindValue('dname', $dname);
				$q->bindvalue('gender', $gender);
				$q->bindValue('address', $address);
				$q->bindValue('age', $age);
				$q->bindValue('date', $date);
				$q->bindValue('ldate', $ldate);
				$q->bindValue('bgroup', $bgroup);
				$q->bindValue('mno', $mno);
				$q->bindValue('email', $email);
				if($q->execute())
				{
					echo "<script>alert('Donor Registration Successfull')</script>"	;
				}
				else
				{
					echo "<script>alert('Donor Registration failed.')</script>"	;
				}
			}
			?>
			</div></center>
		</div>
		<footer>
		<div id="footer">
			    <h4 class="link-11"align="center">Copyright © 2023-All rights are reserved</h4>
			     <p style="margin:5px;" align="center"><a class="link-10" href="logout.php" text-decoration="none">Log Out</a></p>
		</div>
	</footer>
		</div>
	</div>
	</body>
	</html>