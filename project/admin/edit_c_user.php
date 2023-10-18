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

$con=mysqli_connect("localhost","root","","mams");
$id1=0;
if(isset($_GET['id']))
{
$id=$_GET['id'];
// echo $id;
$id1=$id;
}
$sql_select="select * from users where ID='$id'";
$result=mysqli_query($con,$sql_select);
while($row=mysqli_fetch_assoc($result))
{
    $s_username=$row['username'];
    $s_password=$row['password'];

    
}
//&& $_POST['cat_name']!=''
if(isset($_POST['btn']))
{
    if(isset($_POST['id']))
    {
        $id_p=$_POST['id'];
    }
    else
    {
        //echo "plz select cat name";
    }
if(isset($_POST['uname']))
    {
        $username=$_POST['uname'];
    }
    else
    {
        echo "plz select username";
    }
    if(isset($_POST['pass']))
    {
        $password=$_POST['pass'];
    }
    else
    {
        echo "plz select password";
    }

  
   $update_sql_status="update users set username='$username',password='$password' where ID='$id_p'";

   $sql_c = "select * from users where username='$username'";
   $result=mysqli_query($con,$sql_c);
   $c=mysqli_num_rows($result);
   if($c>0)
   {
       $data=mysqli_fetch_assoc($result);
       if($id_p==$data['ID'])
       {
        if (mysqli_query($con,$update_sql_status)) {
            echo "New record created successfully";
           header("location:C_user_management.php");
          
          } else {
            echo "Error: " . $update_sql_status . "<br>" . mysqli_error($con);
          }
       }
       else{
        header("location: edit_c_user.php?error=Username allready there&id=".$id_p);
       }
   }
   else{
    if (mysqli_query($con,$update_sql_status)) {
        echo "New record created successfully";
        header("location:c_user_management.php");
      
      } else {
        echo "Error: " . $update_sql_status . "<br>" . mysqli_error($con);
      }
   }
   
}
?>

<?php require("head_side_bar.inc.php"); ?>
    <main>
        <h1 class="shouldlookcool" style="margin-left:2rem">
           Admin User Management
    </h1>
    <div class="seprater"></div>
    <h2  class="addbutton" style="margin-top: 2rem; margin-bottom: 3rem;
    text-decoration:none; transition: 400ms ease-in-out; color: white;
     padding: 1rem;margin: 1rem; background-color: #292929; border-radius: 10px;">ADD new User in the form below...</h2>
    <form style="background: #292929; padding: 2rem;border-radius: 10px;" method="POST" action="edit_c_user.php" enctype="multipart/form-data">
        <div class="field">  
            <input type="text" name="uname" class="input" placeholder="" value="<?php echo $s_username?>" >
                <label for="text" class="label"  placeholder="">Username</label>
        </div>
        <div class="field">   <input type="text" name="pass"  placeholder="" class="input" value="<?php echo $s_password?>" >
            <label for="text" class="label"  placeholder="">Password</label>
        </div>
 
            <input style="  background-color: #63bb30;border-radius: 5px;
            box-shadow: 0px 7px 15px #2e7222; color: white;font-size: 1rem;
            border: none;width: 120px; margin-top: 1rem;padding-top: 1rem;padding-bottom: 1rem;" type="submit" name="btn" value="Edit User"><br/>
        <!-- </div> -->
        <input type="hidden" name="id" value="<?php echo $id1; ?>">
        <?php if(isset($_GET['error'])) { ?>
               <div class="error"><?php echo $_GET['error']; ?></div>

            <?php } ?>
</form>
    </main>
</body>
</html>