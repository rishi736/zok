<?php
if(isset($_POST['login'])){
include "config.php";

$email = $_POST["lmail"];
$password = $_POST["lpass"];


$sql = mysqli_query($conn, "SELECT count(*) as total from register WHERE email = '".$email."' and 
    password = '".$password."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
    $_SESSION["email"] = $row["email"];
    $_SESSION["password"] = $row["password"];
    ?>
    <script>
        window.location.assign("index.html");
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
}
?>
