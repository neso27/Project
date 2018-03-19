<?php
require "../config.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
?>


<!DOCTUPE html>

<html>

<head>

	<title> Library </title>
	<meta charset="UTF-8">
	<link href="style2.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div id="wraper">

	<div id="header">
	
		<img src="../Velike slike/home.jpg" alt="Home">
		
		<a name="back to the top of the page"> </a>
	
	</div>
	
	<div id="nav">
	
		<ul>
			<li>  <a href="Home2.php"> &raquo; Home </a> </li>
			<li>  <a href="Library2.php"> &raquo; Library </a> </li>
			<li>  <a href="Contact2.php"> &raquo; Contact </a> </li>
			<li>  <a href="Logout2.php"> &raquo; Logout </a> </li>
		</ul>
	
	</div>
	
	<div id="hr">
	
	<div class="children">
	
	<div class="sirina">
	
		<h2> Books for children </h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<div class="img"> <a href="Children's books2.php"> <img src="../Velike slike/prica.jpg" alt="The best price"> </a> </div>
		<div class="prica"> <a href="Children's books2.php"> <h3> The most beautiful <br> stories from around the world </h3> </a> </div>
		<div class="autor"> <a href="Children's books2.php"> <p> Stefania Leonardi Hartley </p> </a> </div>
		
	</div>
	
	</div>
	
	<div id="books2">
		
		<h1> Welcome admin </h1>
	
		<ul>
		
		<li> <a href="#See the search result"> See the search result </a> </li>
		
		</ul>
	
		<?php 
		  
					$q = mysqli_query($conn,"select * from category");
					while($rw=mysqli_fetch_object($q)){ 
			
				?>
				
					<a href="Library2.php?cid=<?php echo $rw->id; ?>"><?php echo $rw->name; ?></a> <br>
					
				<?php
		
			}
		
				?>
	
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
					
						
						<a class="del" href="delete_news_admin.php?title=<?php echo $row['title'] ?>">Delete</a>
						<h2 class="dele"><?php echo $row['category']?></h2> 
						<p class="dele"><img width="150px" height="230px"  src="../Velike slike/<?php echo $row['photo']?>"></p>
						<h2 class="dele"><?php echo $row['title']?></h2> 
						<p class="dele"><?php echo $row['news']?></p>
						
						
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
			
					var del = document.getElementsByClassName("del")
					for(i=0; i < del.length; i++) {
						del[i].style.backgroundColor = "#331100";
						del[i].style.border = "2px solid";
						del[i].style.borderRadius = "20px";
						del[i].style.borderColor = "#331100";
						del[i].style.padding = "5px";
						del[i].style.margin = "5px";
						del[i].style.color = "#fff";
						del[i].style.textDecoration = "none";
						del[i].style.textAlign = "center";
					}
					
		</script>
		
		<script>
			
					var dele = document.getElementsByClassName("dele")
					for(i=0; i < dele.length; i++) {
						dele[i].style.padding = "5px";
						dele[i].style.marginTop = "5px";
						dele[i].style.marginBottom = "5px";
						dele[i].style.marginRight = "5px";
						dele[i].style.marginLeft = "30px";
						dele[i].style.color = "#fff";
						dele[i].style.textAlign = "center";
					}
					
		</script>
		
	</div>
	
	</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<hr> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<div class="sirina">
	
		<h2> Books for adults </h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<div class="img"> <a href="Angel flight2.php"> <img src="../Velike slike/let_andjela.jpg" alt="Angel flight"> </a> </div>
		<div class="prica"> <a href="Angel flight2.php"> <h3> Angel flight </h3> </a> </div>
		<div class="autor"> <a href="Angel flight2.php"> <p> Michael Connelly </p> </a> </div>
		
	</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<hr>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<div class="sirina">
	
		<h2> History books </h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<div class="img"> <a href="History of the old world2.php"> <img src="../Velike slike/istorija_starog_sveta.jpg" alt="History of the old world"> </a> </div>
		<div class="prica"> <a href="History of the old world2.php"> <h3> History of the Old World <br> - I Tom: The First Civilizations </h3> </a> </div>
		<div class="autor"> <a href="History of the old world2.php"> <p> Suzanne Weiss Bauer </p> </a> </div>
		
	</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<hr>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<div class="sirina">
	
		<h2> Books for children </h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<div class="img"> <a href="Legend of the Knights2.php"> <img src="../Velike slike/legend of the Knights.jpg" alt="Legend of the Knights"> </a> </div>
		<div class="prica"> <a href="Legend of the Knights2.php"> <h3> Legend of the Knights </h3> </a> </div>
		<div class="autor"> <a href="Legend of the Knights2.php"> <p> Group of authors </p> </a> </div>
		
	</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<hr>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<div class="sirina">
	
		<h2> Books for adults </h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<div class="img"> <a href="One shot2.php"> <img src="../Velike slike/one shot.jpg" alt="One shot"> </a> </div>
		<div class="prica"> <a href="One shot2.php"> <h3> One shot </h3> </a> </div>
		<div class="autor"> <a href="One shot2.php"> <p> Li Čajld </p> </a> </div>
		
	</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<hr>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	
	<div class="sirina">
	
		<h2> History books </h2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<div class="img"> <a href="Storm rampage2.php"> <img src="../Velike slike/storm rampage.jpg" alt="Storm rampage"> </a> </div>
		<div class="prica"> <a href="Storm rampage2.php"> <h3> Storm rampage </h3> </a> </div>
		<div class="autor"> <a href="Storm rampage2.php"> <p> Michael Connelly </p> </a> </div> <br> <br>
		
		
	
	<div id="post_news">
	
		<form method='post' action='insert_into_news.php'>
		
			<input type="radio" name="category" value="Books for children" checked> Books for children <br>
			<input type="radio" name="category" value="Books for adults"> Books for adults <br>
			<input type="radio" name="category" value="History books"> History books <br>
			<label><h3>Choose an image:</h3></label>
			<input type="file" name="photo" title="Choose a file to upload" accept="Velike slike/*" multiple="1" size="0" id="js_5p"><br><br>
			<input type='text'  name='title' value='Write your title'><br><br>
			<textarea name="news" rows="10" cols="115">Write your news here...</textarea><br><br>
			<input type='submit'  name='set' value='Send'>
			
		</form>
		
	</div> <br> <br> <br> <br>
	
	<a name="See the search result"> </a>
	
	<div class="delet">
	  
		<?php include "new_news.php";?>
		
	</div> <br> <br>
	
		<script>
			
					var delet = document.getElementsByClassName("delet")
					for(i=0; i < delet.length; i++) {
						delet[i].style.padding = "5px";
						delet[i].style.marginTop = "5px";
						delet[i].style.marginBottom = "5px";
						delet[i].style.marginRight = "5px";
						delet[i].style.marginLeft = "20px";
						delet[i].style.color = "#4d1a00";
						delet[i].style.textAlign = "center";
					}
					
		</script>
	
	
		
	
	<div id="post_category">
	
			<form method='post' action='insert_into_new_category.php'>
			
			<select name="category">
			
						<option>1</option>
						<option>2</option>
						<option>3</option>
						
			</select>
				
				<label><h3>Choose an image:</h3></label>
				
				<input type="radio" name="naziv" value="Books for children" checked> Books for children <br>
				<input type="radio" name="naziv" value="Books for adults"> Books for adults <br>
				<input type="radio" name="naziv" value="History books"> History books <br> <br>
				<input type="file" name="slika" title="Choose a file to upload" accept="Velike slike/*" multiple="1" size="0" id="js_5p"><br><br>
				<input type='text'  name='opis' value='Write your title'><br><br>
				<textarea name="pisac" rows="10" cols="115">Write your news here...</textarea><br><br>
				<input type='submit'  name='set' value='Send'>
				
			</form>
		
	</div>
	
		<script>
			var y = document.getElementsByClassName("deletebtn")
			for (i = 0; i < y.length; i++) {
				y[i].style.border = "black";
				y[i].style.borderRadius = "20px";
				y[i].style.background = "black";
				y[i].style.padding = "10px";
				y[i].style.marginTop = "5px";
				y[i].style.marginBottom = "5px";
				y[i].style.marginRight = "5px";
				y[i].style.marginLeft = "20px";
				y[i].style.color = "#fff";
				y[i].style.fontWeight = "bold";
				y[i].style.textDecoration = "none";
				y[i].style.textAlign = "center";
			}
		</script>
	
	</div>
	
	<div id="footer">
	
		<p> Library &copy </p>
		
		<a href="#back to the top of the page"> Back to the top of the page </a>
	
	</div>
	
	</div>

</body>

</html>