<?php
require('connection.inc.php');
require('functions.inc.php');
$username = get_safe_value($con,$_POST['user']);
$password = get_safe_value($con,$_POST['pass']);

if(empty($username))
{
    header("Location: index.php?error=username is required");
    exit();
}
if(empty($password))
{
    header("Location: index.php?error=Password is required");
    exit();
}
//$con=mysqli_connect("localhost","root","","mams");
if($con===false)
{
    die("Failed to query database".mysqli_error());    
}
$result=mysqli_query($con,"select * from users where username='$username' and password='$password'") or die("Failed to query database".mysqli_error());
$row = mysqli_fetch_array($result);
if($row['username']==$username && $row['password']==$password)
{
    $_SESSION['admin_login']='yes';
    $_SESSION['admin_username']=$username;
 
    //header("Location:home/admin dash v3/index.php");
    header("Location:dash.php");
}
else
{
header("Location: index.php?error=Incorect Username OR Password");
}
?>
 
