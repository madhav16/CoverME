<?php
session_start();
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
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = "mams";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$sql="select * from phone_name order by id asc";
$res=mysqli_query($conn,$sql);
if(isset($_GET['type']) && $_GET['type']!='')
{
$type=$_GET['type'];
 
//delete code
if($type=='delete')
{

    $id=$_GET['id'];
    

    $delete_sql_status="delete from phone_name where id='$id'";
    mysqli_query($conn,$delete_sql_status);
    header("location:phone_management.php");
}
}
else
{

}

?>

    <?php require("head_side_bar.inc.php") ?>
    <main>
        <h1 class="shouldlookcool" style="margin-left:2rem">
                 Phone Management
        </h1>
        <div class="seprater"></div>
        <h2 style="margin-top: 2rem; margin-bottom: 3rem;" ><a class="addbutton" style="text-decoration:none; transition: 400ms ease-in-out; color: white; padding: 1rem;margin: 1rem; background-color: rgb(83, 53, 81); border-radius: 20px;" href="add_phone.php">ADD Phone </a></h2>
        <p><table class="table_class">
<tr class="headers">
<th id="pehla" class="a head">ID</th>
<th class="a head">Cat</th>
<th class="a head">Phone Name</th>
<th class="a head">img</th>
<th id="akhri" class="a head">Status</th>
</tr>
<?php 

while($row=mysqli_fetch_assoc($res)){?>
<tr>
<td class="a"><?php echo $row['id']?></td>
<td class="a"><?php echo $row['cat']?></td>
<td class="a"><?php echo $row['phone_name']?></td>
<td class="a"><?php echo '<img style="height: 4rem; width: 2rem;" src="data:image/jpeg;base64,'.base64_encode($row['img']).'"/>'?></td>


<td class="a">
<?php

echo "&nbsp&nbsp<a style='text-decoration:none;color: #e26c48;text-shadow: 0px .5px 10px orangered;'href='phone_management.php?type=delete&id=".$row['id']."'>Delete</a>&nbsp";
echo "&nbsp&nbsp<a  style='text-decoration:none;color: white;text-shadow: 0px 1px 10px white' href='edit_phone.php?type=update&id=".$row['id']."'>Edit</a>&nbsp";
?></td>
</tr>
<?php }?>
</table></p>
    </main>
</body>
</html>