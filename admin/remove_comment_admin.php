<?php

	if (isset($_GET['comment'])){
		
		$comment = $_GET['comment'];
		require "../config.php";
		$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
		$query = "DELETE FROM comment WHERE comment = '{$comment}'";
		mysqli_query($conn, $query);
		header("Location: See_comment2.php");
		
	}

?>