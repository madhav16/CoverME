
<?php
$con = mysqli_connect("localhost","root","","mams");
$sql_cat1="select * from cat";
$res_cat1=mysqli_query($con,$sql_cat1);
$sql_cat2="select * from cat";
$res_cat2=mysqli_query($con,$sql_cat2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dbrand » Official Shop</title>
    <link rel="stylesheet" href="styleop.css">


      <nav class="mainnav">
       
        <ul  class="navbar-nav">
            <li class="nav-item"><a style="font-size: 1.3rem; font-weight: bold;" class="dbrandlogo" href="index.php">DBrand</a></li>
            
            <!-- dropdown pain starts here...-->
         
            <li class="nav-item"><a class="skinb" onclick="menuToggle1();" href="#">Skins</a>
            <ul>
    
                <li class="d2" >
                <?php while($row1=mysqli_fetch_array($res_cat1)) {?>
                    <a style="color: #ffbb00;" href="skins.php?cat=<?php echo $row1['cat']; ?>"><?php echo $row1['cat']; ?></a>
                
                    <?php }?>
                    
                </li>
            
            </ul>
            </li>
            <li class="nav-item"><a class="skinb" onclick="menuToggle2();" href="#">Covers</a>
            <ul>
    
                <li class="d3" >
                <?php while($row2=mysqli_fetch_array($res_cat2)) {?>
                    <a style="color: #ffbb00;" href="case.php?cat=<?php echo $row2['cat']; ?>"><?php echo $row2['cat']; ?></a>
                
                    <?php }?>
    
                </li>
            
            </ul>
            </li>

            <li class="nav-item"><a class="kart" style="  float:right;  font-size: 1.5rem;" href="tp_tp.php"><img  style="width: 1.8rem;" src="cart.svg"></a></li>
            <li class="nav-item"><a style="float: right; font-size: 1.5rem;" href="aclog.php"><img style="width: 1.8rem;" src="acc.svg"></a></li>
            <li class="nav-item"><a style="  float:right; font-size: 1.5rem;" href="logout.php"><img style="width: 1.8rem;" src="logout.svg"></a></li>
        </ul>
    </nav>
    <script>
        function menuToggle1() {
            const toggleMenu=document.querySelector('.d2');
            toggleMenu.classList.toggle('active');
        }
        function menuToggle2() {
            const toggleMenu=document.querySelector('.d3');
            toggleMenu.classList.toggle('active');
        }
        
    </script>
</head>