<?php session_start();  //start session

	include_once 'config.php';  //include config file
	
	
	if(isset($_POST['logout'])){  //log out
		session_destroy();
		header('Location: Home.html');
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Home/traveltime</title>
	<link rel="stylesheet" type = "text/css" href = "styles/styles.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

	<script src = "js/traveltime.js"></script>
</head>

<body>
	<div class="head">
	
	</br>
	
	<image class = "logo" src = "images/lion.jpg"alt = "logo">
	
	<center>
	<h2>TOUR KENAY</h2>
	<h3>Visit see and love<h3>
	</center>
	

	<ul class="menu">
		<li class = "menu1" ><a href = "adminaccount.php">Admin Profile</a></li>
		<li class = "menu1"><a href = "SiteDetails.html">Site Details</a></li>
		<li class = "menu1"><a href = "inbox.html">Inbox</a></li>
		<li class = "menu1"><a href = "Financial.html">Finacial</a></li>
		<li class = "menu1"><a href = "settingsadmin.html">Settings</a></li>
		
	</ul>
	</div>
	
	
	
	<center>
	
	
	<br>
	<form method="post" action="#">
	<table  border="0" width="100%" bgcolor="#e8e8e8" class="table2" >
	<tr>
	<td>
	<br><br><h2><center>Admin Profile</center></h2><br><br>
		<?php
		
			echo "<center><table border='1' width='90%'><tr><td><br>Admin Name : ".$_SESSION['user_name']."</td>";
			echo "<td>Admin ID : ".$_SESSION['uid']."</td></tr>";
			echo "<tr><td> Admin Position : ".$_SESSION['up']."</td>";
			echo "<td> Admin Age : ".$_SESSION['age']."</td></tr>";
			echo "<tr><td>Date Of Birth : ".$_SESSION['dob']."</td>";
			echo "<td>Email : ".$_SESSION['email']."</td></tr>";
			echo "<tr><td> Mobile Number : ".$_SESSION['mb']."</td>";
			echo "<td>NIC : ".$_SESSION['nic'] ."</td></tr>";
			echo "<tr><td>Income : ".$_SESSION['in']."</td>";
			echo "<td>Password : ".$_SESSION['pw']."</td></tr></table></center><br><br>";
		
		?>
		
		<center><input type="submit" name="logout" class="button" value="Log Out"></center><br><br>
		
	</td>
	</tr>
	</table>
	</form>
	
	<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
		
  	 		<div class="footer-col">
  	 			
  	 			<ul class="list">
				   <li class ="text">Tour Kenya Ltd.</li>
					<li class ="text">+254 707453077</li>
					<li class ="text">+254 772877107</li>
					<li class ="text">Mail : tourkenya@gmail.com</li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
			<ul class="list">
  	 			<li class ="text">Follow Us</li>
			</ul>
  	 			<div class="social-links">
  	 				
  	 				<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
  	 				<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
  	 				<a href="https://lk.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
			
  	 	</div>
		
		<ul class="list">
		<li class ="text" style="margin-left:900px; margin-bottom:-170px;" >We accepted</li>
		</ul>
		<div class="creditlogo">
		<a href="http://www.credit-card-logos.com/"><img alt="Credit Card Logos" title="Credit Card Logos" 
		src="http://www.credit-card-logos.com/images/multiple_credit-card-logos-2/credit_card_logos_26.gif" width="302" height="45" border="0" /></a>
		<!--I used get idea for the footer this http://www.credit-card-logos.com/ web site-->
		</div>
	</div>
  </footer>
		
</body>

</html>