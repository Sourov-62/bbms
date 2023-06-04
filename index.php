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
			<div id="header" class="link-14"><h2 align="center">WELCOME TO CU BLOOD BANK</h2></div>
			<div id="body">
				<br><br><br>
				<form action="" method="post">
				<table class="table-center" >
					<tr>
						<td width="250px" height="70px" ><b>Enter Email:</b></td>
						<td width="100px" height="70px"><input type="email" name="un" placeholder= "  Enter E-mail" style="width: 220px; height: 30px; border-radius: 8px;"></td>
					</tr>
					<tr>
						<td width="250px" height="70px"><b>Enter Password:</b></td>
						<td width="200px" height="70px"><input type="password" name="ps" placeholder= "  Enter Password"style="width: 220px; height: 30px; border-radius: 8px;"></td>
					</tr>
					<tr>
						<td><input type="submit" name="sub" value="Log in"style="width: 70px; height: 30px; border-radius: 7px";></td>
					</tr>
					
				</table>
				<br>
				<p class="message">Not registered? <a href="signUP.php">Create an account</a></p>
			</form>
			<?php
			if(isset($_POST['sub']))
			{
				 $un=$_POST['un'];
				 $ps=$_POST['ps'];
				$q=$db->prepare("SELECT * FROM user WHERE email= '$un' AND password='$ps'");
				$q-> execute();
				$res=$q->fetchAll(PDO::FETCH_OBJ);
				if($res)
				{
					$_SESSION['un']=$un;
					header("Location:admin-home.php");
				}
				else
				{
					echo "<script>alert('Wrong User')</script>";
				}
			}
			?>
			</div>
			<div id="footer" class="link-13"><h3 align="center" id="footer_text">Copyright © 2023-All rights are reserved</div>
			</div>
		</div>
	</body>
	</html>

