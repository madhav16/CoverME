<?php
require("connection.inc.php");
if(isset($_SESSION['username']) && $_SESSION['username']!='')
{
$u=$_SESSION['username'];

}
else
{
  header("Location: aclog.php?error=PLZ login First");
}
$email=$_POST['email'];
$full_name=$_POST['full_name'];
$country=$_POST['country'];
$street=$_POST['street'];
$apartment=$_POST['apartment'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin_code=$_POST['pin_code'];
$phone_number=$_POST['phone_number'];
$h_tot=$_POST['h_tot'];
$h_i=$_POST['h_i'];

$sql="insert into check_out_master(email,full_name,country,street,apartment,city,state,pin_code,phone_number,total) values('".$email."','".$full_name."','".$country."','".$street."','".$apartment."','".$city."','".$state."',".$pin_code.",".$phone_number.",".$h_tot.")";
if($res=mysqli_query($con,$sql))
{
    // header("Location:chko1.php?done=ho gaya submit");
    // header("Location:index.php");

}
else
{
    // header("Location:chko1.php?error=error");
}
$sql_oid="select * from check_out_master";
$res_oid=mysqli_query($con,$sql_oid);
while($row_oid=mysqli_fetch_array($res_oid))
{
    $oid=$row_oid['id'];
}
echo $oid;
$sql_s_cart="select * from cart where username='".$u."'";
$res_s_cart=mysqli_query($con,$sql_s_cart);
while($row_s_cart=mysqli_fetch_array($res_s_cart))
{
    $data=mysqli_real_escape_string($con,$row_s_cart['img']);
    $sql_insert_order_d="insert into check_out_d(order_id,phone_name,p_name,img,qty,total) values(".$oid.",'".$row_s_cart['phone_name']."','".$row_s_cart['p_name']."','".$data."',".$row_s_cart['qty'].",".$row_s_cart['total'].")";
    //echo $sql_insert_order_d;
    $r=mysqli_query($con,$sql_insert_order_d);
    
}
// echo $sql_insert_order_d;
if($r)
{
    header("Location:index.php");
}
else
{
    header("Location:chko1.php?error=error");
}
$sql_del="DELETE FROM cart WHERE username='".$u."'";
mysqli_query($con,$sql_del);
// echo $sql;

?>