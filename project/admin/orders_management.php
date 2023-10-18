<?php
require("connection.inc.php");
?>
<?php
if(isset($_SESSION['admin_login']) && $_SESSION['admin_username']!='')
{

}
else
{
  header("Location: index.php?error=PLZ login First");
}
?>

<?php

$sql="select * from check_out_master order by id asc";
$res=mysqli_query($con,$sql);


?>

    <?php require("head_side_bar.inc.php") ?>
    <main>
        <h1 class="shouldlookcool" style="margin-left:2rem">
                 Orders Management
        </h1>
        <div class="seprater"></div>
        
        <p><table class="table_class">
<tr class="headers">
<th id="pehla" class="a head">Order ID</th>
<th class="a head">Email Id</th>
<th class="a head">Full Name</th>
<th class="a head">Country</th>
<th class="a head">Address</th>
<th class="a head">Pin Code</th>
<th class="a head">Phone Number</th>
<th class="a head">Total</th>
<th id="akhri" class="a head">View Orders</th>
</tr>
<?php 

while($row=mysqli_fetch_assoc($res)){?>
<tr>
<td class="a"><?php echo $row['id']?></td>
<td class="a"><?php echo $row['email']?></td>
<td class="a"><?php echo $row['full_name']?></td>
<td class="a"><?php echo $row['country']?></td>
<td class="a"><?php echo $row['street']."<br>".$row['apartment']."<br>".$row['city'] ?></td>
<td class="a"><?php echo $row['pin_code']?></td>
<td class="a"><?php echo $row['phone_number']?></td>
<td class="a"><?php echo $row['total']?></td>



<td class="a">
<?php

echo "&nbsp&nbsp<a style='text-decoration:none;color: #e26c48;text-shadow: 0px .5px 10px orangered;'href='orders_d.php?id=".$row['id']."'>View</a>&nbsp";
// echo "&nbsp&nbsp<a  style='text-decoration:none;color: white;text-shadow: 0px 1px 10px white' href='edit_phone.php?type=update&id=".$row['id']."'>Edit</a>&nbsp";
?></td>
</tr>
<?php }?>
</table></p>
    </main>
</body>
</html>