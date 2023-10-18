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
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
    }
$sql="select * from check_out_d where order_id=".$id." order by id asc";
$res=mysqli_query($con,$sql);


?>

    <?php require("head_side_bar.inc.php") ?>
    <main>
        <h1 class="shouldlookcool" style="margin-left:2rem">
                 Orders Management
        </h1>
        <div class="seprater"></div>
        <!-- <h2 style="margin-top: 2rem; margin-bottom: 3rem;" ><a class="addbutton" style="text-decoration:none; transition: 400ms ease-in-out; color: white; padding: 1rem;margin: 1rem; background-color: rgb(83, 53, 81); border-radius: 20px;" href="add_phone.php">ADD Phone </a></h2> -->
        <p><table class="table_class">
<tr class="headers">
<th id="pehla" class="a head">Order ID</th>
<th class="a head">Phone Name</th>
<th class="a head">Product Name</th>
<th class="a head">Img</th>
<th class="a head">Qty</th>
<th class="a head">Total</th>
<!-- <th class="a head">Phone Number</th>
<th class="a head">Total</th>
<th id="akhri" class="a head">View Orders</th> -->
</tr>
<?php 

while($row=mysqli_fetch_assoc($res)){?>
<tr>
<td class="a"><?php echo $row['order_id']?></td>
<td class="a"><?php echo $row['phone_name']?></td>
<td class="a"><?php echo $row['p_name']?></td>
<td class="a"><?php echo '<img style="height: 4rem; width: 2rem;" src="data:image/jpeg;base64,'.base64_encode($row['img']).'" height="50" width="50"/>'?></td>
<td class="a"><?php echo $row['qty'] ?></td>
<td class="a"><?php echo $row['total']?></td>
<!-- <td class="a"><?php //echo $row['phone_number']?></td>
<td class="a"><?php //echo $row['total']?></td> -->



<!-- <td class="a">
<?php

// echo "&nbsp&nbsp<a style='text-decoration:none;color: #e26c48;text-shadow: 0px .5px 10px orangered;'href='orders_d.php?id=".$row['id']."'>View</a>&nbsp";
// echo "&nbsp&nbsp<a  style='text-decoration:none;color: white;text-shadow: 0px 1px 10px white' href='edit_phone.php?type=update&id=".$row['id']."'>Edit</a>&nbsp";
?></td> -->
</tr>
<?php }?>
</table></p>
    </main>
</body>
</html>