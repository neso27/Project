<?php
require "config.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
?>

<!DOCTUPE html>

<html>

<head>

	<title> Member </title>
	<meta charset="UTF-8">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div id="wraper">

	<div id="member2">
	
		<img src="Velike slike/members.jpg" alt="Members">
		
		<a name="back to the top of the page"> </a>
	
	</div>
	
	<div id="nav">
	
		<ul>
			<li>  <a href="Home.php"> &raquo; Home </a> </li>
			<li>  <a href="Library.php"> &raquo; Library </a> </li>
			<li>  <a href="Member.php"> &raquo; Member </a> </li>
			<li>  <a href="Contact.php"> &raquo; Contact </a> </li>
		</ul>
	
	</div>
	
	<div id="member">
	
		<h2> Register </h2>
	
		<form method="post" action="registration.php">
		
		<label for="name"><i class="fa fa-user" aria-hidden="true"></i> Name </label>
		
		<br>
		
		<input type="text" name="name" id="name" placeholder="Name">
		
		<br> <br>
		
		<label for="surname"><i class="fa fa-user" aria-hidden="true"></i> Surname </label>
		
		<br>
		
		<input type="text" name="surname" id="surname" placeholder="Surname">
		
		<br> <br>
		
		<label for="email"><i class="fa fa-envelope" aria-hidden="true"></i> E-mail </label> 
		
		<br>
		
		<input type="email" name="email" id="email" placeholder="E-mail">
		
		<br> <br>
		
		<label for="password"><i class="fa fa-key fa-spin" aria-hidden="true"></i> Password: </label>
		
		<br>
		
		<input type="password" name="password" id="password" placeholder="Password">
		
		<br> <br>
		
		<label for="Repeat password"><i class="fa fa-key fa-spin" aria-hidden="true"></i> Repeat password: </label>
		
		<br>
		
		<input type="password" name="repeat_password" id="Repeat password" placeholder="Repeat password">
		
		<br> <br>
		
		<label for="reset"><i class="fa fa-trash" aria-hidden="true"></i> </label>
		<input type="reset" name="reset" value="Delete">
		
		<br> <br>
		
		<label for="submit"><i class="fa fa-share" aria-hidden="true"></i> </label>
		<input type="submit" name="submit" value="Send">
		
		</form>
	
	</div>
	
	<div id="member3">
	
		<h2> Sign up </h2>
	
		<form method="post" action="login.php">
		
			<value for="Name"> <i class="fa fa-user" aria-hidden="true"></i> Name: </value>
			<input type="text" name="name" id="Name" placeholder="Name">
			
			<br> <br>
			
			<value for="Password"> <i class="fa fa-key fa-spin" aria-hidden="true"></i> Password: </value>
			<input type="password" name="password" id="Password" placeholder="Password">
			
			<br> <br>
			
			<label for="reset"><i class="fa fa-trash" aria-hidden="true"></i> </label>
			<input type="reset" name="reset" value="Delete">
			
			<br> <br>
			
			<label for="submit"><i class="fa fa-share" aria-hidden="true"></i> </label>
			<input type="submit" name="submit" value="Send">
		
		</form>
	
	</div>
	
	
	<div id="footer">
	
		<p> Library &copy </p>
		
		<a href="#back to the top of the page"> Back to the top of the page </a>
	
	</div>
	
	</div>

</body>

</html>