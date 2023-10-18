<?php require("head.inc.php");
require("connection.inc.php"); ?>
<?php
if(isset($_SESSION['username']) && $_SESSION['username']!='')
{
$u=$_SESSION['username'];
// header("Location: aflog.php");
}
else
{
  header("Location: aclog.php?error=PLZ login First");
}
$sql="select * from test_users_m where username='".$u."'";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{
    $email=$row['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, Username » dbrand</title>
    <!-- <link rel="stylesheet" href="styleop.css"> -->
    <link rel="stylesheet" href="style_L_-_Copy_-_Copy.css">
</head>
<body style="padding: 0;margin: 0;">
    <div class="cartt">Hello, User</div>
    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <label style="color: #afafaf; font-size: 1.5rem;margin-bottom: 2.5rem; margin-top: 6rem;">Account information</label>
        <div style="background-color: #afafaf; float:left; margin-right: 17rem;padding: 1rem; padding-top: .5rem;border-top-right-radius: 5px; border-top-left-radius: 5px; padding-bottom: .5rem;color: #161616;">Email address</div>
        <div style="background-color: #161616; width: 25%;  margin-bottom: 16rem; border-radius: 5px;box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
            <label style="color: #afafaf; font-size: 1.5rem;margin-bottom: 2.5rem; margin-top: 2.5rem; text-align: center;"><?php echo $email;?>  <br><?php echo $u;?> </label></div>
            <!-- <a href="#" style="border: 1px solid white; padding: .6rem; margin-top: 1rem; margin-bottom: 2rem; border-radius: 4px;" >Create an account</a> -->
        </div>
    
<article>
    
    <div class="seprater"></div>
    <nav style="font-family: 'Roboto Condensed', sans-serif; background-color: #1b1b1b;">
        <div style="display: flex; align-items: center; color: #858585; padding-left: 1rem;"><a href="dash.php"><img  src="home_black_24dp.svg" alt=""></a><a style="margin-left: .25rem;margin-right: .25rem;" href="dash.php">Home</a>/<a style="  color: gray;margin-left: .25rem;margin-right: .25rem;" href="skins.php">Login</a></div>
    </nav>
    <div class="seprater"></div>
    <nav style="padding-left:3rem;color: #858585;background-color: #1b1b1b;">dbrand: All rights reserved</nav>
    </article>

</body>

</html>