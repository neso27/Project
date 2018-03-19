<?php
require "../config.php";
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
?>

<!DOCTYPE html>

<html>

<head>

	<title> Children's books </title>
	<meta charset="UTF-8">
	<link href="style1.css" rel="stylesheet" type="text/css">
	<link href="awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div id="wraper">

	<div id="header">
	
		<img src="../Velike slike/home.jpg" alt="Home">
		
		<a name="back to the top of the page"> </a>
	
	</div>
	
	<div id="komentari">
	
		<form method='post' action='insert_into_one_shot1.php'>
		
			<textarea name="comment" class="comments">Write your comment here...</textarea> <br> <br>
					
			<input type="submit"  name="insert" value="Send">
		
		</form> <br> <br>
		
		<div id="posted_comments">
  
				<?php
				
					$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB); 
					$q = "SELECT comment FROM comment";
					$res = mysqli_query($conn,$q);
					 
					echo "<table>"; 
					
					if(mysqli_num_rows($res) > 0){
							while($row = mysqli_fetch_assoc($res)){
								
				?>
									
									<div id="result">
										<tr><td>
										<p><?php echo $row['comment']?></p>
										<a class="del" href="delete_one_shot1.php?comment=<?php echo $row['comment'] ?>">Delete</a><br><hr>
										</td></tr>
									</div>
									
								<?php
								
							}
							
						}else{
							echo "No news.";
						}
					echo "</table>";
				
				?>
				
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
					}
					
			</script>
				
	</div>
			
	</div>
	

	<div id="footer">
	
		<p> Library &copy </p>
		
		<a href="One shot1.php"> Back to the previous page </a>
		
		<a href="#back to the top of the page" id="link"> Back to the top of the page </a>

	</div>

	</div>

</body>

</html>