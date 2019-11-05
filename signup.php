<?php
if (isset($_POST["reg"])) {
require "config.php";

$name = $_POST["lname"];
$email = $_POST["lmail"];
$password = $_POST["lpass"];
$phno = $_POST["lno"];

/*if (empty($name) || empty($email) || empty($password)) {
	header("Location: login.html?error=emptyfields&uid=.$name.&mail=.$email");
	exit();
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header("Location: login.html?error=invalidemail&uid=.$name");
	exit();
}
elseif (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
	header("Location: login.html?error=invalidusername&mail=.$email");
	exit();
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $name)) {
	header("Location: ../index.php?error=invalidemailuid");
	exit();
}
else{
$sql="select name from register where name=?";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
	header("Location: login.html?error=sqlerror");
	exit();
}
else{
	mysqli_stmt_bind_param($stmt,"s",$name);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
	$resultcheck=mysqli_stmt_num_rows($stmt);
	if ($resultcheck>0) {
		header("Location: login.html?error=useralreadyexist&mail=.$email");
		exit();
	}
	else{*/
		$sql="insert into register(name,email,password,phno) values(?,?,?,?)";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: register.html?error=sqlerror");
			exit();
		}
		else{
			
			mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$password,$phno);
			mysqli_stmt_execute($stmt);
			header("Location: login.html?signup=success");
			exit();
	}

/*
}
}
}*/
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else{
  header("Location: register.html");
  exit();
}
 