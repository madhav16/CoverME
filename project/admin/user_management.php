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
$sql="select * from test_users_m order by id asc";
$res=mysqli_query($conn,$sql);
if(isset($_GET['type']) && $_GET['type']!='')
{
$type=$_GET['type'];
// if($type=='status')
// {
//     $operation=$_GET['operation'];
//     $id=$_GET['id'];
//     if($operation=='active'){
//         $status='1';
//     }
//     else{
//         $status='0';
//     }

//     $update_sql_status="update test_skin set status='$status' where id='$id'";
//     mysqli_query($conn,$update_sql_status);
//     header("location:Skin_Management.php");
// }
//delete code
if($type=='delete')
{

    $id=$_GET['id'];
    

    $delete_sql_status="delete from test_users_m where id='$id'";
    mysqli_query($conn,$delete_sql_status);
    header("location:user_management.php");
}
}
else
{

}

?>


    <?php require("head_side_bar.inc.php") ?>
    <main>
        <h1 class="shouldlookcool" style="margin-left:2rem">
               Client User Management
        </h1>
        <div class="seprater"></div>
        <h2 style="margin-top: 2rem; margin-bottom: 3rem;" ><a class="addbutton" style="text-decoration:none; transition: 400ms ease-in-out; color: white; padding: 1rem;margin: 1rem; background-color: rgb(83, 53, 81); border-radius: 20px;" href="add_users_m.php">ADD Users </a></h2>
        <p><table class="table_class">
<tr class="headers">
<th id="pehla" class="a head">ID</th>
<th class="a head">Username</th>
<th class="a head">Password</th>
<th class="a head">Email</th>
<!-- <th class="a head">Address</th> -->
<th id="akhri" class="a head">Status</th>
</tr>
<?php 

while($row=mysqli_fetch_assoc($res)){?>
<tr>
<td class="a"><?php echo $row['id']?></td>
<td class="a"><?php echo $row['username']?></td>
<td class="a"><?php echo $row['password']?></td>
<td class="a"><?php echo $row['email']?></td>
<!-- <td class="a"><?php //echo $row['address']?></td> -->
<!-- <td class="a"><?php //echo '<img src="data:image/jpeg;base64,'.base64_encode($row['img']).'" height="50" width="50"/>'?></td> -->
<td class="a">
<?php
// if($row['status']==1)
// {
//     echo "<a style='text-decoration:none;color: yellowgreen; text-shadow: 0px 2.5px 10px yellowgreen;' href='Skin_Management.php?type=status&operation=deactive&id=".$row['id']."'>Active</a>&nbsp";
// }
// else
// {
//     echo "<a style='text-decoration:none;color: orangered;text-shadow: 0px 2.5px 10px orangered;' href='Skin_Management.php?type=status&operation=active&id=".$row['id']."'>DeActive</a>&nbsp";
// }
echo "&nbsp&nbsp<a style='text-decoration:none;color: #e26c48;text-shadow: 0px .5px 10px orangered;'href='user_management.php?type=delete&id=".$row['id']."'>Delete</a>&nbsp";
echo "&nbsp&nbsp<a  style='text-decoration:none;color: white;text-shadow: 0px 1px 10px white' href='edit_user_m.php?type=update&id=".$row['id']."'>Edit</a>&nbsp";
?></td>
</tr>
<?php }?>
</table></p>
    </main>
</body>
</html>