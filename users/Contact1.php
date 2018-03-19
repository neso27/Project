<!DOCTUPE html>

<html>

<head>

	<title> Contact </title>
	<meta charset="UTF-8">
	<link href="style1.css" rel="stylesheet" type="text/css">
	<link href="../awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div id="wraper">
	
	<div id="contact">
	
		<img src="../Velike slike/contact.jpg" alt="Contact">
		
		<a name="back to the top of the page"> </a>
	
	</div>
	
	<div id="nav">
	
		<ul>
			<li>  <a href="Home1.php" class="a"> &raquo; Home </a> </li>
			<li>  <a href="Library1.php"> &raquo; Library </a> </li>
			<li>  <a href="Contact1.php"> &raquo; Contact </a> </li>
			<li>  <a href="Logout1.php"> &raquo; Logout </a> </li>
		</ul>
	
	</div>
	
	<div class="form">
	
		<p><i class="fa fa-phone" aria-hidden="true"></i>	Contact:<br>
			011 715 0 900 </p> 
			
			<br> <br>
			
		<p><i class="fa fa-clock-o" aria-hidden="true"></i>	Working time:<br>
			00 - 24 h </p>
			
			<br> <br>
			
		<p><i class="fa fa-envelope" aria-hidden="true"></i>	E-mail:slavko.micic@gmail.com </p>
		
			<br> <br>
		
		<form method="post" action="insert_into_comment.php">
			
		<label for="Coment" id="coment"><i class="fa fa-comment" aria-hidden="true"></i> Ask the question library </label>
			
		<br>
				
		<textarea name="comment" id="Coment"></textarea>
		
		<br> <br>
		
		<label for="submit"><i class="fa fa-share" aria-hidden="true"></i> </label>
		<input type="submit" name="submit" value="Send">
				
		</form>
		
	<div   class="shadow">
			
		<p>
			<a href="See_comment1.php"> See comments </a>
		</p>
	
	</div>
		
	</div>
	
	<div id="frame">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.0918367724607!2d20.45635141560178!3d44.8196936790987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a654b53c11537%3A0x3fd4ab0476f211d3!2z0KHRgtGD0LTQtdC90YLRgdC60Lgg0YLRgNCzLCDQkdC10L7Qs9GA0LDQtA!5e0!3m2!1ssr!2srs!4v1506471093002" width="400" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	</div>
	
	<div id="footer">
	
		<p> Library &copy </p>
		
		<a href="#back to the top of the page"> Back to the top of the page </a>
	
	</div>
	
	</div>

</body>

</html>