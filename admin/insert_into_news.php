<?php
require "../config.php";
if(isset($_POST['set'])){
					if(isset($_POST['category']) && isset($_POST['photo']) && isset($_POST['title']) && isset($_POST['news'])){
						if(!empty($_POST['category']) && !empty($_POST['photo']) && !empty($_POST['title']) && !empty($_POST['news'])){
							$category = trim($_POST['category']);
							$photo = trim($_POST['photo']);
							$title = trim($_POST['title']);
							$news = trim($_POST['news']);
							$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
							$category = mysqli_real_escape_string($conn, $category);
							$photo = mysqli_real_escape_string($conn, $photo);
							$title = mysqli_real_escape_string($conn, $title);
							$news = mysqli_real_escape_string($conn, $news);
							
							$query = "INSERT INTO new (category, photo, title, news) VALUES ('{$category}', '{$photo}', '{$title}', '{$news}')";
							if(mysqli_query($conn, $query) === TRUE){
								session_start();
								$_SESSION['status'] = $user->status;
								header("location: Library2.php");
							}else{
								echo "Error";
							}
						}else{
							echo "All fields must be filled in.";
						}
					}else{
						echo "All parameters must be sent!";
					}
				}

?>