<?php

include "config.php";

$email = $_POST["lmail"];
$password = $_POST["lpass"];
$salt = "zok2";


$sql = mysqli_query($conn, "SELECT count(*) as total from register WHERE email = '".$email."' and 
	password = '".$password."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	$_SESSION["email"] = $row["email"];
	$_SESSION["password"] = $row["password"];
	?>
	<script>
		window.location.assign("log.php");
		alert('Login successful');
	</script>
	<?php
}
else{
	?>
	<script>
	window.location.assign("login.html");
		alert('Login failed');
	</script>
	<?php
}








?>