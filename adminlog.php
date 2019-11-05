<?php
if(isset($_POST['adminlogin']))
{
require "config.php";

$amail=$_POST['lmail'];
$apass=$_POST['lpass'];

    $sql = mysqli_query($conn, "SELECT count(*) as total from radmin WHERE admin_email = '".$amail."' and 
    admin_pass = '".$apass."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
        $_SESSION["login"]=$row["id"];
        ?>
    <script>
        window.location.assign("adminma.html");
        alert('Login successful');
    </script>
    <?php
}
else{
    ?>
    <script>
    window.location.assign("aump.html");
        alert('Login failed');
    </script>
    <?php
}
}
/*if(isset($_POST['areg']))
{
	$aid=$_POST["laid"];
	$apass=$_POST["lapass"];
	
	$laphno=$_POST["laphno"];
	$query="INSERT INTO radmin(id, laid,laphno,lapass) VALUES (0,'$aid','$laphno','$apass')";
    $red=mysqli_query($con,$query);
    if($red==true)
    {
    	echo '<script language="javascript">';
        echo 'alert("details entered Successfully!!!")';
        echo '</script>';
        echo "<script> window.location.assign('adminlogin.html'); </script>";
 
    }
    else
    {
     echo '<script language="javascript">';
        echo 'alert("failed to add details")';
        echo '</script>';
        echo "<script> window.location.assign('radmin.html'); </script>";
    }

}*/
