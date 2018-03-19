<?php
require "../config.php";
if(isset($_POST['set'])){
					if(isset($_POST['naziv']) && isset($_POST['slika']) && isset($_POST['opis']) && isset($_POST['pisac']) && isset($_POST['category'])){
						if(!empty($_POST['naziv']) && !empty($_POST['slika']) && !empty($_POST['opis']) && !empty($_POST['pisac']) && !empty($_POST['category'])){
							$naziv = trim($_POST['naziv']);
							$slika = trim($_POST['slika']);
							$opis = trim($_POST['opis']);
							$pisac = trim($_POST['pisac']);
							$category = trim($_POST['category']);
							$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
							$naziv = mysqli_real_escape_string($conn, $naziv);
							$slika = mysqli_real_escape_string($conn, $slika);
							$opis = mysqli_real_escape_string($conn, $opis);
							$pisac = mysqli_real_escape_string($conn, $pisac);
							$category = mysqli_real_escape_string($conn, $category);
							
							$query = "INSERT INTO knjige (naziv, slika, opis, pisac, category) VALUES ('{$naziv}', '{$slika}', '{$opis}', '{$pisac}', '{$category}')";
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