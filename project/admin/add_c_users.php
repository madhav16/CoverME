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
if(isset($_POST['btn']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
 

 if (!$con) {
   die("Connection failed: " . mysqli_error($con));
 }


$sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";
$sql_c = "select * from users where username='$username'";
$result=mysqli_query($con,$sql_c);
$c=mysqli_num_rows($result);

if($c>0)
{
    header("location:add_c_users.php?error=username name allready there");
}
else{
    if (mysqli_query($con,$sql)) {
        echo "New record created successfully";
        header("location:c_user_management.php");
      
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
    
}
mysqli_close($con);
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
     padding: 1rem;margin: 1rem; background-color: #292929; border-radius: 10px;">ADD new Users in the form below...</h2>
    <form style="background: #292929; padding: 2rem;border-radius: 10px;" method="POST" action="add_c_users.php" enctype="multipart/form-data">
        <div class="field">  
            <input type="text" name="uname" class="input" required placeholder="" id="cat_name">
                <label for="text" class="label"  placeholder="">Username</label>
        </div>
        <div class="field">   <input type="text" required  name="pass" class="input"  placeholder="" id="name">
            <label for="text" class="label"  placeholder="">Password</label>
        </div>
             <input style="  background-color: #63bb30;border-radius: 5px;
            box-shadow: 0px 7px 15px #2e7222; color: white;font-size: 1rem;
            border: none;width: 120px; margin-top: 1rem;padding-top: 1rem;padding-bottom: 1rem;" type="submit" name="btn" value="ADD Users"><br/>
        <!-- </div> -->
        <?php if(isset($_GET['error'])) { ?>
               <div class="error"><?php echo $_GET['error']; ?></div>

            <?php } ?>
</form>
    </main>
</body>
</html>