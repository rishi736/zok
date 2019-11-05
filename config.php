<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "zok2";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection died".mysqli_connect_error());
}

?>
