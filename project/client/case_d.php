<?php

require("connection.inc.php");
?>
<?php
if(isset($_SESSION['username']) && $_SESSION['username']!='')
{

}
else
{
  header("Location: aclog.php?error=PLZ login First");
}
?>

<?php
            $skin_name="";
            $cat="";
            $phone_name="";
            $des_skin="";
            $mrp="";
    if(isset($_GET['phone_name']) && $_GET['phone_name']!='' && isset($_GET['skin_name']) && $_GET['skin_name']!='')
    {
        $s_phone_name=$_GET['phone_name'];
        $s_skin_name=$_GET['skin_name'];
      
        $sql_phone_name="select * from test_case where phone_name='$s_phone_name' AND case_name='$s_skin_name' order by id asc";
        $res_phone_name=mysqli_query($con,$sql_phone_name);
       // echo $sql_phone_name;
        while($row=mysqli_fetch_array($res_phone_name)){
            $skin_name=$row['case_name'];
            $cat=$row['cat'];
            $mrp=$row['mrp'];
            $phone_name=$row['phone_name'];
            $des_skin=$row['des_case'];
            $data=$row['img'];
        }
        
    }
?>



<?php require("head.inc.php"); ?>
<body>
    <form action="add_to_cart_php.php" method="POST" enctype="multipart/form-data">
    <div class="formb">
    <div class="hor">
        <!-- <img style="width:25%; border-radius:15px;" src="ep8.jpg"> -->
        
        <?php   echo '<img style="width:25%; border-radius:15px;" name="file" src="data:image/jpeg;base64,'.base64_encode($data).'">';?>
        <div class="farm"><h4>
            Case Name:<input type="text"  name="p_name" value="<?php echo $skin_name; ?>" readonly >
        </h4>
        <h4>
            Category Name:<input type="text" name="cat" value="<?php echo $cat; ?>" readonly >
        </h4>
        <h4>
            Phone Name:<input type="text" name="phone_name"  value="<?php echo $phone_name; ?>" readonly >
        </h4>
        <h4>
            Price:<input type="text"  name="mrp" value="<?php echo $mrp; ?>" readonly >
        </h4>
        <h4>
        About Case:<br><input type="textarea" class="abs" name="about_p" style="margin-top: .3rem;" value="<?php echo $des_skin; ?>" placeholder="describe your product..." readonly >
        </h4>
        <h4>
            Quantity:<select id="items" class="droplist" name="qty" style="margin-top: .3rem;" name="simple"> 
            <option value="1">1</option>      
            <option value="2">2</option>
            <option value="3">3</option>
            </select>
        </h4>
        <input type="hidden" name="type" value="case">
        <!-- <a href="#" class="bb" style="display: flex; justify-content: center; color: black; background-color: rgb(221, 221, 221);">BUY</a> -->
        <input  class="bb" style="display: flex; justify-content: center; color: black; background-color: rgb(221, 221, 221);"  type="submit" name="btn" value="BUY">
        </form>
    </div>
        
    </div>
    </div>
    <div class="seprater"></div>
    <nav style="padding-left:3rem;color: #858585;background-color: #1b1b1b;">dbrand: All rights reserved</nav>
    <!-- <section style="padding: 1rem; padding-left: 2rem; text-align: center;font-size: 1.3rem;color: #858585;" >
        dbrand offers a wide selection of skins for OnePlus devices - from the newest OnePlus 8T skins to OnePlus 8 skins, and OnePlus 8 Pro skins, as well as OnePlus Nord skins and OnePlus 7T skins. Select your device to visit our fully interactive build-it-yourself OnePlus skin customizer.
    </section> -->
    <div class="seprater"></div>
    <nav style="font-family: 'Roboto Condensed', sans-serif; background-color: #1b1b1b;">
        <div style="display: flex; align-items: center; color: #858585; padding-left: 1rem;"><a href="dash.php"><img  src="home_black_24dp.svg" alt=""></a><a style="margin-left: .25rem;margin-right: .25rem;" href="dash.php">Home</a>><a style="  color: gray;margin-left: .25rem;margin-right: .25rem;" href="#">Case</a></div>
    </nav>
</body>
</html>