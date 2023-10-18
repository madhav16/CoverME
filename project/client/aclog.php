<?php require("head.inc.php");
require("connection.inc.php");
 ?>
<?php
if(isset($_SESSION['username']) && $_SESSION['username']!='')
{
$u=$_SESSION['username'];
header("Location: aflog.php");
}
else
{
  //header("Location: aclog.php?error=PLZ login First");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login » dbrand</title>
    <!-- <link rel="stylesheet" href="styleop.css"> -->
    <link rel="stylesheet" href="style_L - Copy.css">
</head>
<body style="padding: 0;margin: 0;">
    <div class="cartt">Login</div>
    <div style="display: flex;">
        <main style="margin-bottom: 5rem;width: 50%;" >
            <form method="POST" style="width:60%" action="login.php">
                <!-- <?php if(isset($_GET['error'])) { ?>
                   <div class="error"><?php echo $_GET['error']; ?></div>
        
                <?php } ?> -->
                <div class="field">
                    <input type="text" style="color: black;" ID="user" name="user" class="input" placeholder="">
                    <label for="email" class="label">Username Or Email</label>
                </div>

                <div class="field" style="margin-bottom: 1;">
                    <input type="password" ID="pass" name="pass" class="input" style="color: black;" placeholder="">
                    <label for="password" class="label">Password</label>
                </div>
                <!-- <a style="margin:0; margin-bottom: 2rem; float: right; color:#ffbb00;" href="#">Forgot Password?</a> -->
        
                <?php if(isset($_GET['error'])) { ?>
               <div class="error"><?php echo $_GET['error']; ?></div>

            <?php } ?>
            
                    <input type="submit" name="btn" value="🔒 Login"class="bb"><br>
                    
            </form>
        </main>
        <div style="width:50%;display: flex; align-items: center;justify-content: center;">
            <div style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px; background-color: #161616; width: 80%; border-radius: 5px;  padding:2rem; padding-top: 3rem; margin-right: 2rem;  display: flex;flex-direction: column; align-items: center; justify-content: center;"><label style="font-size: 1.7rem; margin-bottom: 1rem;">I don't have an account</label>
            <a href="acreg.php" style="border: 1px solid white; padding: .6rem; margin-top: 1rem; border-radius: 4px;" >Create an account</a>
            </div>
            
        </div>
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