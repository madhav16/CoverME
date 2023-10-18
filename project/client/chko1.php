<?php 
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
$tot=0;
$total_item_in_cart=0;
$sql_total="select * from cart where username='".$u."'";
$res_total=mysqli_query($con,$sql_total);
while($row=mysqli_fetch_array($res_total))
{
    $tot+=$row['total'];
    $total_item_in_cart++;
}
$tot+=50;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout » dbrand</title>
    <!-- <link rel="stylesheet" href="styleop.css"> -->
    <link rel="stylesheet" href="style_L_-_Copy_-_Copy.css">
</head>
<body style="padding: 0;margin: 0;">
    <div class="cartt" style ="background-color: black;color: #afafaf;border-bottom: 5px solid #ffbb00;">Checkout</div>
 
    <main style="margin-bottom: 5rem;" >
        <a onclick="window.history.back() " style="cursor: pointer;
        margin: 1rem; background-color: #ffbb00; margin-top:2rem; padding:1rem; position: absolute; left: 5rem; box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;border-radius: 5px;color: #1b1b1b;" >< Back to Shop</a>
    <form method="POST" style="width:60%" action="checkout.php">
        <!-- <?php if(isset($_GET['error'])) { ?>
           <div class="error"><?php echo $_GET['error']; ?></div>

        <?php } ?> -->
        <label style="color: #afafaf; font-size: 2rem; margin-top: 2.5rem;">Account details</label>
        <div class="field">
            <input type="email" ID="email" name="email" class="input" value="<?php echo $email; ?>" required placeholder="" >
            <label for="password" class="label">email</label>
        </div>
        <label style="color: #afafaf; font-size: 2rem; margin-top: 2.5rem;">Shipping details</label>
        <div class="field">
            <input type="text" style="color: black;" ID="full_name" name="full_name" class="input" placeholder="">
            <label for="email" class="label">full name</label>
        </div>

        <div class="field">
            <input type="text" style="color: black;" ID="country" name="country" class="input" placeholder="">
            <label for="email" class="label">country</label>
        </div>

        <div class="field">
            <input type="text" style="color: black;" ID="street" name="street" class="input" placeholder="">
            <label for="email" class="label">street name and number , p.o. box, etc.</label>
        </div>

        <div class="field">
            <input type="text" style="color: black;" ID="apartment" name="apartment" class="input" placeholder="">
            <label for="email" class="label">apartment,suite,plot,etc.</label>
        </div>

        <div class="field">
            <input type="text" style="color: black;" ID="city" name="city" class="input" placeholder="">
            <label for="email" class="label">city</label>
        </div>

        <div class="field">
            <input type="text" style="color: black;" ID="state" name="state" class="input" placeholder="">
            <label for="email" class="label">state</label>
        </div>

        <div class="field">
            <input type="text" style="color: black;" ID="pin_code" name="pin_code" class="input" placeholder="">
            <label for="email" class="label">pin code</label>
        </div>

        <div class="field">
            <input type="text" style="color: black;" ID="phone_number" name="phone_number" class="input" placeholder="">
            <label for="email" class="label">phone number</label>
        </div>
        <input type="submit" style="float:right ; margin-right: 0;" name="btn" value="Ship to this address »"class="bb"><br>
        <label style="color: #afafaf; margin-top:.5rem; margin-bottom: .5rem;">Currently Cash on Delivery is only supported</label>
       
        <input type="hidden" name="h_tot" value="<?php echo $tot; ?>">
        <input type="hidden" name="h_i" value="<?php echo $total_item_in_cart; ?>">
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