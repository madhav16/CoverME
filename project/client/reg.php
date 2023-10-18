<?php
require("connection.inc.php");
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$c_pass=$_POST['c_pass']; 
$sql_s="select * from test_users_m where username='".$uname."'";
$res_s=mysqli_query($con,$sql_s);
$count=mysqli_num_rows($res_s);
if($pass==$c_pass)
{


if($count>0)
{
    header("Location:acreg.php?error=username all ready exits");
}
    $sql="insert into test_users_m(username,password,email) values('".$uname."','".$pass."','".$email."')";
    mysqli_query($con,$sql);
    header("Location:aclog.php");

}
else{
    header("Location:acreg.php?error=Password Does Not Match");
}

?>