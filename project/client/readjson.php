<?php
require("connection.inc.php");

$a=$_POST;

print_r($a);
$i=count($a)/3;
echo $i;

$u=$_SESSION['username'];
$j=1;
echo $u;
while($j<=$i)
{
$sql="update cart set qty=".$a['qty'.$j].",total=".$a['tot'.$j]." where username='".$u."' AND p_name='".$a['p_name'.$j]."'";
$res=mysqli_query($con,$sql);
echo $res;
$j++;

}
?>