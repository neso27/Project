<?php

if (isset($_GET['title'])){
	
	$title = $_GET['title'];
	require "../config.php";
	$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
	$query = "DELETE FROM new WHERE title = '{$title}'";
	mysqli_query($conn, $query);
	header("Location: Library2.php");
	
}

?>