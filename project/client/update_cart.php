<?php
require("connection.inc.php");
if(isset($_SESSION['username']) && $_SESSION['username']!='')
{
$u=$_SESSION['username'];

}
else
{
  header("Location: index.php?error=PLZ login First");
}
$a=$_POST;
echo $i;
$i=count($a);
print_r($a);


// $sql_cart="select * from cart where username='".$u."'";


?>