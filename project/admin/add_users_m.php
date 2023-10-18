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
    $email=$_POST['email'];
    //$address=$_POST['address'];

 if (!$con) {
   die("Connection failed: " . mysqli_error($con));
 }


$sql = "INSERT INTO test_users_m (username,password,email) VALUES ('$username','$password','$email')";
$sql_c = "select * from test_users_m where username='$username'";
$result=mysqli_query($con,$sql_c);
$c=mysqli_num_rows($result);

if($c>0)
{
    header("location:add_users_m.php?error=username name allready there");
}
else{
    if (mysqli_query($con,$sql)) {
        echo "New record created successfully";
        header("location:user_management.php");
      
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
            Client User Management
    </h1>
    <div class="seprater"></div>
    <h2  class="addbutton" style="margin-top: 2rem; margin-bottom: 3rem;
    text-decoration:none; transition: 400ms ease-in-out; color: white;
     padding: 1rem;margin: 1rem; background-color: #292929; border-radius: 10px;">ADD new Users in the form below...</h2>
    <form style="background: #292929; padding: 2rem;border-radius: 10px;" method="POST" action="add_users_m.php" enctype="multipart/form-data">
        <div class="field">  
            <input type="text" name="uname" class="input" required placeholder="" id="cat_name">
                <label for="text" class="label"  placeholder="">Username</label>
        </div>
        <div class="field">   <input type="text" required name="pass" class="input"  placeholder="" id="name">
            <label for="text" class="label"  placeholder="">Password</label>
        </div>
        <div class="field">   <input type="email" required name="email"  placeholder="" class="input" id="name">
            <label for="text" class="label"  placeholder="">Email</label>
        </div>
     
            <input style="  background-color: #63bb30;border-radius: 5px;
            box-shadow: 0px 7px 15px #2e7222; color: white;font-size: 1rem;
            border: none;width: 120px; margin-top: 1rem;padding-top: 1rem;padding-bottom: 1rem;" type="submit" name="btn" value="ADD Users"><br/>

        <?php if(isset($_GET['error'])) { ?>
               <div class="error"><?php echo $_GET['error']; ?></div>

            <?php } ?>
</form>
    </main>
</body>
</html>