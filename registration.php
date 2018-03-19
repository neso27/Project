<?php
require "config.php";
if(isset($_POST['submit'])){
					if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['password']) && isset($_POST['repeat_password']) && isset($_POST['email'] )){
						if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['password']) && !empty($_POST['repeat_password']) && !empty($_POST['email'])){
							$name = trim($_POST['name']);
							$surname = trim($_POST['surname']);
							$password = trim($_POST['password']);
							$repeat_password = trim($_POST['repeat_password']);
							$email = trim($_POST['email']);
							$status = 0;
							$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
							$name = mysqli_real_escape_string($conn, $name);
							$surname = mysqli_real_escape_string($conn, $surname);
							$password = mysqli_real_escape_string($conn, $password);
							$repeat_password = mysqli_real_escape_string($conn, $repeat_password);
							$email = mysqli_real_escape_string($conn, $email);
							$status = mysqli_real_escape_string($conn, $status);
							
							$query = "INSERT INTO users (name, surname, password, repeat_password, email, status) VALUES ('{$name}','{$surname}','{$password}','{$repeat_password}','{$email}','{$status}')";
							if(mysqli_query($conn, $query) === TRUE){
								session_start();
								$_SESSION['status'] = $user->status;
								header("location: users/Home1.php");
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