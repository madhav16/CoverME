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
$sql="select * from test_case order by id asc";
$res=mysqli_query($conn,$sql);
if(isset($_GET['type']) && $_GET['type']!='')
{
$type=$_GET['type'];
if($type=='status')
{
    $operation=$_GET['operation'];
    $id=$_GET['id'];
    if($operation=='active'){
        $status='1';
    }
    else{
        $status='0';
    }

    $update_sql_status="update test_case set status='$status' where id='$id'";
    mysqli_query($conn,$update_sql_status);
    header("location:case_management.php");
}
//delete code
if($type=='delete')
{

    $id=$_GET['id'];

    $delete_sql_status="delete from test_case where id='$id'";
    mysqli_query($conn,$delete_sql_status);
    header("location:case_management.php");
}
}
else
{

}
?>


    <?php require("head_side_bar.inc.php") ?>
    <main>
        <h1 class="shouldlookcool" style="margin-left:2rem">
                Case Management
        </h1>
        <div class="seprater"></div>
        <h2 style="margin-top: 2rem; margin-bottom: 3rem;" ><a class="addbutton" style="text-decoration:none; transition: 400ms ease-in-out; color: white; padding: 1rem;margin: 1rem; background-color: rgb(83, 53, 81); border-radius: 5px;" href="add_case.php">ADD more Case</a></h2>
        <p><table class="table_class">
<tr class="headers">
<th style="padding-left:1rem" id="pehla" class="a head">ID</th>
<th id="pehla" class="a head">Category</th>
<th class="a head">Phone Name</th>
<th id="pehla" class="a head">Case Name</th>
<th id="pehla" class="a head">Des Case</th>
<th id="pehla" class="a head">Price</th>
<th class="a head">Image</th>
<th id="akhri" class="a head">Status</th>
</tr>
<?php 
while($row=mysqli_fetch_assoc($res)){?>
<tr>
<td class="a"><?php echo $row['id']?></td>
<td class="a"><?php echo $row['cat']?></td>
<td class="a"><?php echo $row['phone_name']?></td>
<td class="a"><?php echo $row['case_name']?></td>
<td class="a"><?php echo $row['des_case']?></td>
<td class="a"><?php echo $row['mrp']?></td>
<td class="a"><?php echo '<img style="height: 4rem; width: 2rem;" src="data:image/jpeg;base64,'.base64_encode($row['img']).'" />'?></td>
<td class="a">
<?php
if($row['status']==1)
{
    echo "<a style='text-decoration:none;color: yellowgreen; text-shadow: 0px 2.5px 10px yellowgreen;' href='case_management.php?type=status&operation=deactive&id=".$row['id']."'>Active</a>&nbsp";
}
else
{
    echo "<a style='text-decoration:none;color: orangered;text-shadow: 0px 2.5px 10px orangered;' href='case_management.php?type=status&operation=active&id=".$row['id']."'>DeActive</a>&nbsp";
}
echo "&nbsp&nbsp<a style='text-decoration:none;color: #e26c48;text-shadow: 0px .5px 10px orangered;'href='case_management.php?type=delete&id=".$row['id']."'>Delete</a>&nbsp";
echo "&nbsp&nbsp<a  style='text-decoration:none;color: white;text-shadow: 0px 1px 10px white' href='edit_case.php?type=update&id=".$row['id']."'>Edit</a>&nbsp";
?></td>
</tr>
<?php }?>
</table></p>
    </main>
</body>
</html>