<?php
$con = mysqli_connect("localhost","root","","mams");
$sql_cat1="select * from cat";
$res_cat1=mysqli_query($con,$sql_cat1);
$sql_cat2="select * from cat";
$res_cat2=mysqli_query($con,$sql_cat2);

?>
<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_L.css">

</head>
<body>
    <nav class="mainnav">
        <a style="font-size: 1.3rem; font-weight: bold;" class="dbrandlogo" href="dash.php">DBrand</a>
        <a href="skins.php">Skins</a>
        <a href="case.php">Covers</a>
        <!-- <a style="  float:right; padding-right: 1rem; font-size: 1.5rem;" href="logout.php"><img style="width: 2rem;" src="logout.svg"></a>   what are u doing yoobo why are u putting a logout button on a login page --> 
        <a style="float: right; padding-right: 2rem; font-size: 1.5rem;" href="#"><img style="width: 2rem;" src="acc.svg"></a>
        <a style="  float:right; padding-right: 1rem; font-size: 1.5rem;" href="#"><img style="width: 2rem;" src="cart.svg"></a>
 
    </nav>
    
    <div class="backpanel">
    <p style="font-size: 2rem;font-family: sans-serif;font-weight: 400;font-style: normal;text-align: center;">Login</p>
    <main>
        <form method="POST" action="login.php">
            <?php if(isset($_GET['error'])) { ?>
               <div class="error"><?php echo $_GET['error']; ?></div>

            <?php } ?>
            <div class="field">
                <input type="text" ID="user" name="user" class="input" placeholder="">
                <label for="email" class="label">Username</label>
            </div>
            <div class="field">
                <input type="password" ID="pass" name="pass" class="input" placeholder="" on:input={validatePassword}>
                <label for="password" class="label">Password</label>
            </div>

            <div class="strength">
      <span class="bar bar-1" class:bar-show={strength > 0} />
      <span class="bar bar-2" class:bar-show={strength > 1} />
      <span class="bar bar-3" class:bar-show={strength > 2} />
      <span class="bar bar-4" class:bar-show={strength > 3} />
    </div>
        
                <input type="submit" name="btn" value="Login"class="subbut">
            
          
            
        </form>

    </main>
</div>
<div class="seprater"></div>
<nav style="padding-left:3rem;color: #858585;background-color: #1b1b1b;">DBrand: All rights reserved</nav>
</body>
</html>
