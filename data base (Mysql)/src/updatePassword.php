<?php

	include_once 'config.php'; //config file

	
?>
<?php

	if(isset($_POST['submit'])){
		
		$errors = array();
		
		if(!isset($_POST['pwd']) || strlen(trim($_POST['pwd'])) < 1 ){
			
			$errors[] = "Password Is Missing / Invalid";
			
		}
		if(!isset($_POST['uname']) || strlen(trim($_POST['uname'])) < 1 ){
			
			$errors[] = "User Name Is Missing / Invalid";
			
		}
		
		
		if(empty($errors)){
		$nepwd = mysqli_real_escape_string($conn ,$_POST['pwd']);
		$unme = mysqli_real_escape_string($conn ,$_POST['uname']);
		
		$query = "Update account set Password = '{$nepwd}' where FirstName = '{$unme}'"; //update the data base
		
		$result = mysqli_query($conn,$query);
			
			if($result) {
				
					header('Location: userLogin.php'); //updated and redirect to the login page
				
			}
	}
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Home/tourkenya</title>
	<link rel="stylesheet" type = "text/css" href = "styles/styles.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

	<script src = "js/traveltime.js"></script>
</head>

<body>
	<div class="head">
	<button id = "log"  type = "button" value = "Login"><a href="userLogin.html" style="text-decoration: none;">Login</a></button>
	<button id = "sign"  type = "button" value = "Sign Up"> <a href="userSignUp.html" style="text-decoration: none;">Sign Up </a></button>
	<image class="logpic"src="images/log.jpg" alt="Avatar">
	</br>
	
	<image class = "logo" src = "images/lion.jpg"alt = "logo">
	
	<center>
	<h2>TOUR KENYA</h2>
	<h3>Visit see and love<h3>
	</center>
	

	<ul class="menu">
		<li class = "menu1" ><a href = "Home.html">Home</a></li>
		<li class = "menu1"><a href = "About us.html">About us</a></li>
		<li class = "menu1"><a href = "services.html">Service</a></li>
		<li class = "menu1"><a href = "category.html">Catogery</a></li>
		<li class = "menu1"><a href = "contactus.html">Contact</a></li>
		<li><a id = "admin" href = "adminlogin.php">Admin user</a></li>
		<br>
		<input id ="btn"type ="button" value = "search">
		<input id = "searchbar" type = "text" placeholder = "search"></li>
		
	</ul>
	</div>
	<center>
	
	<form method="post" action="#">
	<div class="productData" style="border-style:groove; border-color=dark-blue;">
	<table width="50%">
		<tr>
		<td>
		
		<?php 
			if(isset($errors) && !empty($errors)){
				
				echo "<h3 style='color:red;'> Invalid username / Password !!!!</h3>"; //if system has any display the error masg 
			}?>
		
		
		<center>
			<br><br>
			<h2> Enter The New Password </h2><br><br>
		</center>
		
				<br>Enter Your User Name Again : <br>
				<input type="text" class="box"  name="uname" required><br><br>
				
				<br>Enter the new password : <br>
				<input type="password" class="box"  name="pwd" placeholder="*********" pattern="(?=.+\d)(?=.+[a-z])(?=.+[A-Z]){5,10}"><br><br>
				
				Re-enter the password : <br>
				<input type="password" class="box"  name="repwd" placeholder="*********" pattern="(?=.+\d)(?=.+[a-z])(?=.+[A-Z]){5,10}"> <br><br>
				
				<center><input type="submit" name="submit" class="button button1" value="Log In" onsubmit="checkPassword()"></center> <!--check the first password and re-enter password are same-->
				
			</td>
		</tr>
	</table>
	</div>
	</form>
	
	</center>
	</div>
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