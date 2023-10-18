<?php require("head.inc.php");
require("connection.inc.php"); ?>
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
    <title>Register » dbrand</title>
    <!-- <link rel="stylesheet" href="styleop.css"> -->
    <link rel="stylesheet" href="style_L - Copy.css">
</head>
<body style="padding: 0;margin: 0;">
    <div class="cartt">Register » dbrand</div>
    <main style="margin-bottom: 5rem;" >
    <form method="POST" style="width:60%" action="reg.php">
       
        <div class="field">
            <input type="text" style="color: black;" ID="uname" name="uname" class="input" placeholder="" required>
            <label for="email" class="label">Username</label>
        </div>
        <label style="color: #afafaf;">You may also use spaces, periods, hyphens, apostrophes, and underscores</label>
        <div class="field">
            <input type="email" ID="email" name="email" class="input" placeholder="" required >
            <label for="password" class="label">Email</label>
        </div>
        <label style="color: #afafaf;">A valid e-mail address. All e-mails from the system will be sent to this address. The e-mail address is not made public and will only be used if you wish to receive a new password or wish to receive certain news or notifications by e-mail.</label>
        <div class="field">
            <input type="password" ID="pass" name="pass" class="input" style="color: black;" placeholder="" required>
            <label for="password" class="label">Password</label>
        </div>
        <label style="color: #afafaf;">Always try to include alphanumeric characters symbols & special characters to make the password as strong as possible</label>
        <div class="field">
            <input type="password" ID="c_pass" name="c_pass" class="input" style="color: black;" placeholder="" required>
            <label for="password" class="label">Confirm Password</label>
        </div>

        <?php if(isset($_GET['error'])) { ?>
           <center><div class="error"><?php echo $_GET['error']; ?></div></center>

        <?php } ?>
            <input type="submit" name="btn" value="🔒 Create new account"class="bb"><br>
            <a style="margin:0;color:#ffbb00;" href="#">Back to Login</a>
    </form>
</main>
<article>
    
    <div class="seprater"></div>
    <nav style="font-family: 'Roboto Condensed', sans-serif; background-color: #1b1b1b;">
        <div style="display: flex; align-items: center; color: #858585; padding-left: 1rem;"><a href="dash.php"><img  src="home_black_24dp.svg" alt=""></a><a style="margin-left: .25rem;margin-right: .25rem;" href="dash.php">Home</a>/<a style="  color: gray;margin-left: .25rem;margin-right: .25rem;" href="skins.php">Register</a></div>
    </nav>
    <div class="seprater"></div>
    <nav style="padding-left:3rem;color: #858585;background-color: #1b1b1b;">dbrand: All rights reserved</nav>
    </article>

</body>

</html>