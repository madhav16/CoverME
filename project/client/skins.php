<?php
session_start();
?>

<?php 
  $conn = mysqli_connect("localhost", "root", "", "mams");
  
if(isset($_GET['cat']) && $_GET['cat']!='')
{
    $s_cat_cat=$_GET['cat'];
  
    $sql="select * from phone_name where cat='$s_cat_cat' order by id asc";
    $res=mysqli_query($conn,$sql);
    $count_cat=mysqli_num_rows($res);
    
}
    
?>
<?php
    if(isset($_GET['phone_name']) && $_GET['phone_name']!='')
    {
        $s_phone_name=$_GET['phone_name'];
      
        $sql_phone_name="select * from test_skin where phone_name='$s_phone_name' order by id asc";
        $res_phone_name=mysqli_query($conn,$sql_phone_name);
        $count_phone=mysqli_num_rows($res_phone_name);
        
        if($count_phone<=0)
        {
        
            header("Location:skinempty.php");
        }
    }
?>
<?php

$sql_cat="select * from cat";
$res_cat=mysqli_query($conn,$sql_cat);
$sql_cat1="select * from cat";
$res_cat1=mysqli_query($conn,$sql_cat1);
?>


<?php require("head.inc.php"); ?>


<body>
<div class="skinst">Skins & Wraps//</div>
<nav style="   background-color: #1b1b1b; " ><a style="margin-left:2rem;" href="index.php" class="bh">< Back to Shop</a></nav>
    <section class="basicgrid">

    <?php 
        if(isset($_GET['cat']) && $_GET['cat']!=''){
        while($row=mysqli_fetch_assoc($res)){?>
            <div class="c1"><br>
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['img']).'" height="200" width="100"/>'?>
            <br>
            <!-- <h3 style="font-weight:lighter;">Oneplus</h3> -->
            <a href="skins.php?phone_name=<?php echo $row['phone_name']; ?>&cat_phone_name=<?php echo $row['cat']; ?>">
            <h2 style="position: relative; bottom:10px;font-family: 'Antonio', sans-serif;"><?php echo $row['cat'];?></h2>
             <h3 style="position: relative; bottom:20px;font-weight: lighter; font-family: 'Antonio', sans-serif;"><?php echo $row['phone_name'];?><h3></a>

        </div>

<?php }}?>

<?php 
        if(isset($_GET['phone_name']) && $_GET['phone_name']!=''){
        while($row=mysqli_fetch_assoc($res_phone_name)){?>
            <div class="c1"><br>
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['img']).'" height="200" width="100"/>'?>
            <br>
            <!-- <h3 style="font-weight:lighter;">Oneplus</h3> -->
            <a href="navabishok.php?phone_name=<?php echo $row['phone_name'];?>&skin_name=<?php echo $row['s_name'];?>">  <h2 style="position: relative; bottom:10px;font-family: 'Antonio', sans-serif;"><?php echo $row['cat'];?></h2>
            <h3 style="position: relative; bottom:20px;font-weight: lighter; font-family: 'Antonio', sans-serif;"><?php echo $row['phone_name'];?><h3>
            <h3 style="position: relative; bottom:20px;font-weight: lighter; font-family: 'Antonio', sans-serif;"><?php echo $row['s_name'];?><h3></a>

        </div>

<?php }}?>
    
    </section>
    
   
    <div class="seprater"></div>
    <nav style="padding-left:3rem;color: #858585;background-color: #1b1b1b;">dbrand: All rights reserved</nav>
    <!-- <section style="padding: 1rem; padding-left: 2rem; text-align: center;font-size: 1.3rem;color: #858585;" >
        dbrand offers a wide selection of skins for OnePlus devices - from the newest OnePlus 8T skins to OnePlus 8 skins, and OnePlus 8 Pro skins, as well as OnePlus Nord skins and OnePlus 7T skins. Select your device to visit our fully interactive build-it-yourself OnePlus skin customizer.
    </section> -->
    <div class="seprater"></div>
    <nav style="font-family: 'Roboto Condensed', sans-serif; background-color: #1b1b1b;">
        <div style="display: flex; align-items: center; color: #858585; padding-left: 1rem;"><a href="index.php"><img  src="home_black_24dp.svg" alt=""></a><a style="margin-left: .25rem;margin-right: .25rem;" href="index.php">Home</a>><a style="  color: gray;margin-left: .25rem;margin-right: .25rem;" href="#">Skin</a></div>
    </nav>
</body>
</html>