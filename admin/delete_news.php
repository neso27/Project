<?php
if (isset($_GET['id'])){
	$id = $_GET['id'];
	require "../config.php";
	$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
	$query = "DELETE FROM knjige WHERE id = '{$id}'";
	mysqli_query($conn, $query);
	header("Location: Library2.php");
	
}
			?>