<?php 
require("connection.inc.php");

$p_name=$_GET['p_name'];
$u=$_GET['username'];

$sql="delete from cart where p_name='".$p_name."' AND username='".$u."'";
$res = mysqli_query($con,$sql);
echo mysqli_error($con);



?>