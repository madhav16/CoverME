
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
    <script src="index.js"></script>
</head>
<body style="height:80vh;">
    <!-- <nav class="mainnav">
        <a style="font-size: 1.3rem; font-weight: bold;" class="dbrandlogo" href="#">DBrand</a>
        <a href="#">Skins</a>
        <a href="#">Covers</a>
        <a style="float: right; padding-right: 2rem; font-size: 1.5rem;" href="#">👤</a>
        <a style="  float:right; padding-right: 1rem; font-size: 1.5rem;" href="#">🛒</a>
    </nav> -->
    
    <div class="backpanel" style="height: 63%;">
    <p style="font-size: 2rem;font-family: sans-serif;font-weight: 400;font-style: normal;text-align: center;">Login</p>
    <main>
        <form method="POST" action="login.php">
            <?php if(isset($_GET['error'])) { ?>
               <div class="error"><?php echo $_GET['error']; ?></div>

            <?php } ?>
            <div class="field">
                <input type="text" ID="user" name="user" class="input" placeholder="">
                <label for="email" class="label">username</label>
            </div>
            <div class="field">
                <input type="password" ID="pass" name="pass" class="input" placeholder="" on:input={validatePassword}>
                <label for="password" class="label">Password</label>
            </div>
        
                <input type="submit" name="btn" value="Login"class="bb">
            
          
            
        </form>

    </main>
</div>
<div class="seprater"></div>
<nav style=" padding-left:3rem;color: #858585;background-color: #1b1b1b;">DBrand: All rights reserved</nav>
</body>
</html>
