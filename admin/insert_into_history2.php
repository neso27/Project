<?php
require "../config.php";
if(isset($_POST['insert'])){
					if(isset($_POST['comment'])){
						if(!empty($_POST['comment'])){
							$comment = trim($_POST['comment']);
							$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
							$comment = mysqli_real_escape_string($conn, $comment);
							
							$query = "INSERT INTO comment (comment) VALUES ('{$comment}')";
							if(mysqli_query($conn, $query) === TRUE){
								session_start();
								$_SESSION['status'] = $user->status;
								header("location: Comment_history2.php");
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