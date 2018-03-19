<?php
require "config.php";
if(!isset($_POST['name'])||!isset($_POST['password'])){
	die("invalid parameters");
}	
$name = $_POST['name'];
$password = $_POST['password'];  
$name = str_replace("'","",$name);
$name = str_replace("-","",$name);
$password = str_replace("'","",$password);
$password = str_replace("-","",$password);

$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DB); 
$q = "select * from users where name='{$name}' and password='{$password}' limit 1";
 
$res = mysqli_query($conn,$q);
$user = mysqli_fetch_object($res);
if($user){
	session_start();
	$_SESSION['status'] = $user->status;
	header("location: admin/Home2.php");
} else {
	echo "Invalid user";
}


?>