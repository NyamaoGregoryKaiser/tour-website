<?php
	include_once 'config.php' 
?>


<!DOCTYPE html>
<html>

<head>
	<title>Foreign-normal/traveltime</title>
	<link rel="stylesheet" type = "text/css" href = "styles/styles.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

	<script src = "js/traveltime.js"></script>
</head>

<body>
	<div class="head">

	<image class="logpic"src="images/log.jpg" alt="Avatar">
	</br>
	
	<image class = "logo" src = "images/logo.jpg"alt = "logo">
	
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
	</ul>
	</div>

	
	<br>
	<br> 
	
	<a href="Home.html" class="inlinethepages">Home   >> </a><a href="category.html" class="inlinethepages"> Catogery >> </a><a href="foreignnormal.php" class="inlinethepages"> Foreign Nomal </a><br>
	<br><br>
	<center>
	<h2>Foreign Normal Tour Catogery</h2><br>
	
	<table  border="2" width="80%" bgcolor="#e8e8e8" class="table2" >
		
		<tr class="th">
			<th>Tour Id</th>
			<th>Tour Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Tour code</th>
			<th>Register Now !</th>
		</tr>
		</tr>
		
		
		<?php
			$sql = "select * from foreginnormal";
			$result = $conn->query($sql);
			
			if($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					
					echo "<tr class='td'><td>".$row["Tour_id"]."</td><td>".$row["Name"]."</td><td>".$row["Descriptiom"]."</td><td>".$row["Price"]."</td><td>".$row["Tour_code"]."</td><td><button type='button' value='Register'><a href='registerPage1.html'>Register</a></button></td></tr>";
					
				}
				
			}
			
			else{
				echo "0 results";
			}		
			echo "</table>";
			$conn->close();
			
			?>
	</center>
	
	<br>
	<button class="button button1"><a href="category.html" style="text-decoration: none;"> Back </a></button>
	<br><br>
	
	
	
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
  	 				<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
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
		<!--i copied this code from http://www.credit-card-logos.com/ web site-->
		</div>
	</div>
  </footer>
		
</body>

</html>