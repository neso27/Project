<?php
require "config.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
?>

<!DOCTUPE html>

<html>

<head>

	<title> Library </title>
	<meta charset="UTF-8">
	<link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div id="wraper">

	<div id="header">
	
		<img src="Velike slike/home.jpg" alt="Home">
		
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
	
	<div id="hr">
	
	<div class="children">
	
	<div class="sirina">
	
		<h2> Books for children </h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<div class="img"> <a href="The most beautiful stories.php"> <img src="Velike slike/prica.jpg" alt="The most beautiful stories"> </a> </div>
		<div class="prica"> <a href="The most beautiful stories.php"> <h3> The most beautiful <br> stories from around the world </h3> </a> </div>
		<div class="autor"> <a href="The most beautiful stories.php"> <p> Stefania Leonardi Hartley </p> </a> </div>
		
	</div>
	
	</div>
	
	<div id="books">
	
		<ul>
		
		<li> <a href="#See the search result"> See the search result </a> </li>
		
		</ul>
	
		<?php 
		  
					$q = mysqli_query($conn,"select * from category");
					while($rw=mysqli_fetch_object($q)){ 
			
		?>
				
					<a href="Library.php?cid=<?php echo $rw->id; ?>"><?php echo $rw->name; ?></a> <br>
					
		<?php
		
			}
		
		?>
		
	<div id="post_news">
	
		<marquee behavior="scroll" direction="up" height="250" scrollamount="2" scrolldelay="10">
		
			<?php
						
				$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB); 
				$q = "SELECT * FROM new";
				$res = mysqli_query($conn,$q);
				echo "<table>"; 
				
				
				if(mysqli_num_rows($res) > 0){
					while($row = mysqli_fetch_assoc($res)){ 
								
			?>
									
				<div id="result">
					<tr><td>
					<h2 class="dele"><?php echo $row['category']?></h2>
					<p class="dele"><img class="news_pic" width="147px" height="247px"  src="Velike slike/<?php echo $row['photo']?>"></p>
					<h2 class="dele"><?php echo $row['title']?></h2> 
					<p class="dele"><?php echo $row['news']?></p> <br> <br>
					</td></tr>
				</div>
										
			<?php
			
						}
						
					}else{
						echo "No news.";
					}
					
				echo "</table>";
						
			?>

		</marquee>
		
		<script>
			
					var dele = document.getElementsByClassName("dele")
					for(i=0; i < dele.length; i++) {
						dele[i].style.padding = "5px";
						dele[i].style.marginTop = "5px";
						dele[i].style.marginBottom = "5px";
						dele[i].style.marginRight = "5px";
						dele[i].style.marginLeft = "80px";
						dele[i].style.color = "#fff";
						dele[i].style.textAlign = "center";
					}
					
		</script>
				
	</div>
	
	</div>
	
	</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<hr> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<div class="sirina">
	
		<h2> Books for adults </h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<div class="img"> <a href="Angel flight.php"> <img src="Velike slike/let_andjela.jpg" alt="Angel flight"> </a> </div>
		<div class="prica"> <a href="Angel flight.php"> <h3> Angel flight </h3> </a> </div>
		<div class="autor"> <a href="Angel flight.php"> <p> Michael Connelly </p> </a> </div>
		
	</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<hr> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	
	<div class="sirina">
	
		<h2> History books </h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<div class="img"> <a href="History of the Old World.php"> <img src="Velike slike/istorija_starog_sveta.jpg" alt="History of the Old World"> </a> </div>
		<div class="prica"> <a href="History of the Old World.php"> <h3> History of the Old World <br> - I Tom: The First Civilizations </h3> </a> </div>
		<div class="autor"> <a href="History of the Old World.php"> <p> Suzanne Weiss Bauer </p> </a> </div>
	
	</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<hr> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	
	<div class="sirina">
	
		<h2> Books for children </h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<div class="img"> <a href="Legend of the Knights.php"> <img src="Velike slike/legend of the Knights.jpg" alt="Legend of the Knights"> </a> </div>
		<div class="prica"> <a href="Legend of the Knights.php"> <h3> Angel flight </h3> </a> </div>
		<div class="autor"> <a href="Legend of the Knights.php"> <p> Michael Connelly </p> </a> </div>
	
	</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<hr> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	
	<div class="sirina">
	
		<h2> Books for adults </h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<div class="img"> <a href="One shot.php"> <img src="Velike slike/one shot.jpg" alt="One shot"> </a> </div>
		<div class="prica"> <a href="One shot.php"> <h3> Angel flight </h3> </a> </div>
		<div class="autor"> <a href="One shot.php"> <p> Michael Connelly </p> </a> </div>
		
	</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<hr> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	
	<div class="sirina">
	
		<h2> History books </h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<div class="img"> <a href="Storm rampage.php"> <img src="Velike slike/storm rampage.jpg" alt="Storm rampage"> </a> </div>
		<div class="prica"> <a href="Storm rampage.php"> <h3> Angel flight </h3> </a> </div>
		<div class="autor"> <a href="Storm rampage.php"> <p> Michael Connelly </p> </a> </div>
		
	</div>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<hr> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<a name="See the search result"> </a>
	
	<div class="del">
  
		<?php include "new_news.php";?>
	
	</div>
	
		<script>
			
					var del = document.getElementsByClassName("del")
					for(i=0; i < del.length; i++) {
						del[i].style.padding = "10px";
						del[i].style.marginTop = "5px";
						del[i].style.marginBottom = "5px";
						del[i].style.marginRight = "5px";
						del[i].style.marginLeft = "20px";
						del[i].style.color = "#4d1a00";
						del[i].style.textAlign = "center";
					}
					
		</script>
	
	<div id="footer">
	
		<p> Library &copy </p>
		
		<a href="#back to the top of the page"> Back to the top of the page </a>
	
	</div>
	
	</div>

</body>

</html>