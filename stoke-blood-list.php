<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Stock Blood List</title>
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
				<h1>Stock Blood List</h1>
				<center><div id ="form">
				<table>
				<tr>
				<td><center><b><font color="blue">Name</font></b></center></td>
				<td><center><b><font color="blue">Quantity</b></font></center></td>
			</tr>
            <tr>
                <td><center>A+</center></td>
                <td><center>
                    <?php
                    $q=$db->query("SELECT * FROM donate_blood WHERE bgroup='A+'");
                    $row1=$q->rowCount();
                    $q=$db->query("SELECT * FROM collect_blood WHERE bgroup='A+'");
                    $row2=$q->rowCount();
                    echo $row1-$row2;
                    ?>
                </center></td>
            </tr>
            <tr>
                <td><center>A-</center></td>
                <td><center>
                    <?php
                                        $q=$db->query("SELECT * FROM donate_blood WHERE bgroup='A-'");
                                        $row1=$q->rowCount();
                                        $q=$db->query("SELECT * FROM collect_blood WHERE bgroup='A-'");
                                        $row2=$q->rowCount();
                                        echo $row1-$row2;
                    ?></center></td>
            </tr>
            <tr>
                <td><center>B+</center></td>
                <td><center>
                <?php
                                        $q=$db->query("SELECT * FROM donate_blood WHERE bgroup='B+'");
                                        $row1=$q->rowCount();
                                        $q=$db->query("SELECT * FROM collect_blood WHERE bgroup='B+'");
                                        $row2=$q->rowCount();
                                        echo $row1-$row2;
                    ?>
                </center></td>
            </tr>
            <tr>
                <td><center>B-</center></td>
                <td><center>
                <?php
                                        $q=$db->query("SELECT * FROM donate_blood WHERE bgroup='B-'");
                                        $row1=$q->rowCount();
                                        $q=$db->query("SELECT * FROM collect_blood WHERE bgroup='B-'");
                                        $row2=$q->rowCount();
                                        echo $row1-$row2;
                    ?>
                </center></td>
            </tr>
            <tr>
                <td><center>AB+</center></td>
                <td><center>
                <?php
                                       $q=$db->query("SELECT * FROM donate_blood WHERE bgroup='AB+'");
                                       $row1=$q->rowCount();
                                       $q=$db->query("SELECT * FROM collect_blood WHERE bgroup='AB+'");
                                       $row2=$q->rowCount();
                                       echo $row1-$row2;
                    ?>
                </center></td>
            </tr>
            <tr>
                <td><center>AB-</center></td>
                <td><center>
                <?php
                                       $q=$db->query("SELECT * FROM donate_blood WHERE bgroup='AB-'");
                                       $row1=$q->rowCount();
                                       $q=$db->query("SELECT * FROM collect_blood WHERE bgroup='AB-'");
                                       $row2=$q->rowCount();
                                       echo $row1-$row2;
                    ?>
                </center></td>
            </tr>
            <tr>
                <td><center>O+</center></td>
                <td><center>
                <?php
                                        $q=$db->query("SELECT * FROM donate_blood WHERE bgroup='O+'");
                                        $row1=$q->rowCount();
                                        $q=$db->query("SELECT * FROM collect_blood WHERE bgroup='O+'");
                                        $row2=$q->rowCount();
                                        echo $row1-$row2;
                    ?>
                </center></td>
            </tr>
            <tr>
                <td><center>O-</center></td>
                <td><center>
                <?php
                                       $q=$db->query("SELECT * FROM donate_blood WHERE bgroup='O-'");
                                       $row1=$q->rowCount();
                                       $q=$db->query("SELECT * FROM collect_blood WHERE bgroup='O-'");
                                       $row2=$q->rowCount();
                                       echo $row1-$row2;
                    ?>
                </center></td>
            </tr>	
		</table>
        <div class="divvvv">
            
        </div>
			
		<div class="sourov-100">
        <div id="footer">
			    <h4 class="link-11"align="center">Copyright © 2023-All rights are reserved</h4>
			     <p style="margin:5px;" align="center"><a class="link-10"  href="logout.php" text-decoration="none">Log Out</a></p>
		</div>
		</div>
	</div>
        </div>
	</body>
	</html>