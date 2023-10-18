<?php
require("connection.inc.php");
$s_qty=0;
            $s_total=0;
            $type_p=$_POST['type'];
$cat=$_POST['cat'];
$phone_name=$_POST['phone_name'];
$p_name=$_POST['p_name'];
$mrp=$_POST['mrp'];
if($type_p=="skin")
{
    $sql_d="select * from test_skin where s_name='".$p_name."' AND phone_name='".$phone_name."'";
    $res_d=mysqli_query($con,$sql_d);
    while($row_d=mysqli_fetch_array($res_d))
    {
        $data=mysqli_real_escape_string($con,$row_d['img']);
    }
}
if($type_p=="case")
{
    $sql_d="select * from test_case where case_name='".$p_name."' AND phone_name='".$phone_name."'";
    $res_d=mysqli_query($con,$sql_d);
    while($row_d=mysqli_fetch_array($res_d))
    {
        $data=mysqli_real_escape_string($con,$row_d['img']);
    }
}


// if(isset($_FILES['file']))
//     {
//         echo "done";
//       $data= mysqli_real_escape_string($con,file_get_contents($_FILES['h_file']['tmp_name']));
//     }
$about_p=$_POST['about_p'];
$qty=$_POST['qty'];
$total=$mrp*$qty;
$u=$_SESSION['username'];
$sql="insert into cart values('".$cat."','".$phone_name."','".$p_name."',".$mrp.",'".$data."','".$about_p."',".$qty.",".$total.",'".$u."')";
$sql_check="select * from cart where p_name='".$p_name."' AND phone_name='".$phone_name."' AND username='".$u."'";
$res_check=mysqli_query($con,$sql_check);
$count_check=mysqli_num_rows($res_check);
if($count_check>0)
{
        while($row_check=mysqli_fetch_array($res_check))
        {
            $s_qty=$row_check['qty'];
            $s_total=$row_check['total'];
        }
;
        

        $ans_qty=$s_qty+$qty;
 
        $ans_total=$s_total+$total;

    $sql="update cart set qty=".$ans_qty.", total=".$ans_total." where p_name='".$p_name."' AND phone_name='".$phone_name."' AND username='".$u."'";
}


if(mysqli_query($con,$sql))
{
    if($type_p=="skin")
    {
        header("Location:navabishok.php?phone_name=".$phone_name."&skin_name=".$p_name);
    }
    elseif($type_p=="case")
    {
        header("Location:case_d.php?phone_name=".$phone_name."&skin_name=".$p_name);
    }

}
else{
    echo mysqli_error($con);
}


echo $sql;
?>