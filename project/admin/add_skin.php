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
$pre_cat="Choose Manufacturer";
if(isset($_GET['cat_phone']))
                     {
                         $pre_cat= $_GET['cat_phone'];
                     }
?>

<?php
$con=mysqli_connect("localhost","root","","mams");
if(isset($_POST['btn']))
{
    $cat_name=$_POST['hidden_cat_name'];
    $phone_name=$_POST['phone_name'];
    $s_name=$_POST['name'];
    $des_skin=$_POST['des_skin'];
    $mrp=$_POST['mrp'];
   // echo "cat name is $cat_name";
    //echo "skin name is $name";
    // $a=$_FILES['file'];
    // pr($a);
    if(isset($_FILES['file']))
    {
      $data= mysqli_real_escape_string($con,file_get_contents($_FILES['file']['tmp_name']));
    }

 if (!$con) {
   die("Connection failed: " . mysqli_error($con));
 }

$sql = "INSERT INTO test_skin (cat,phone_name,s_name,des_skin,mrp,img,status) VALUES ('$cat_name','$phone_name','$s_name','$des_skin','$mrp','$data','1')";
$sql_c = "select * from test_skin where s_name='$s_name'";
$result=mysqli_query($con,$sql_c);
$c=mysqli_num_rows($result);
if($c>0)
{
    header("location:add_skin.php?error=skin name allready there");
}
else{
    if (mysqli_query($con,$sql)) {
        //echo "New record created successfully";
        //echo $cat_name;
        //echo $sql;
        header("location:Skin_Management.php");
      
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
    
}




mysqli_close($con);
}

?>

    <?php require("head_side_bar.inc.php") ?>
    <main>
        <h1 class="shouldlookcool" style="margin-left:2rem">
            Skin Management
        </h1> 
     <div class="seprater"></div> 
     <h2  class="addbutton" style="margin-top: 2rem; margin-bottom: 3rem;
    text-decoration:none; transition: 400ms ease-in-out; color: white;
     padding: 1rem;margin: 1rem; background-color: #292929; border-radius: 10px;">ADD new skins in the form below...</h2> 
    <form style="background: #292929; padding: 2rem;border-radius: 10px;" method="POST" action="add_skin.php" enctype="multipart/form-data">
   
        <select class="droplist" name="cat_name" id="cat_name" onchange="abc()">
                    <option value="<?php echo $pre_cat; ?>"  selected > <?php echo $pre_cat;  ?></option>
                    <?php 
                    $con=mysqli_connect("localhost","root","","mams");
                    $sql = mysqli_query($con, "SELECT cat FROM cat");
                   while ($row = mysqli_fetch_array($sql)){
                    echo "<option value='". $row['cat'] ."'>" . $row['cat'] . "</option>";
                   }
                    ?>
                </select><br><br>
      
        <select  class="droplist" name="phone_name" id="phone_name" >
                    <option value="-1"  selected >Phone Name</option>
                    <?php 
                    if(isset($_GET['cat_phone']))
                    {
                        $s_cat=$_GET['cat_phone'];
                    $con=mysqli_connect("localhost","root","","mams");
                    $sql_s="select * from phone_name where cat='".$s_cat."'";
                    $sql = mysqli_query($con,$sql_s);
                    while ($row = mysqli_fetch_array($sql)){
                    echo "<option value='". $row['phone_name'] ."'>" . $row['phone_name'] . "</option>";
                    echo"hello";
                    }   
                }
                    ?>
                </select>
               
              
              
                
        <div class="field">   
            <input type="text" name="name" class="input" id="name" placeholder=" " required/>
            <label for="text" class="label">Skin Name</label>
        </div>
        <div class="field">   
            <input type="text" name="des_skin" class="input" id="des_skin" placeholder=" " required/>
            <label for="text" class="label">Describe it</label>
        </div>
        <div class="field">  
            <input  type="text" name="mrp" class="input"  id="mrp" placeholder=" " required maxlength="5"/>
            <label  for="text" class="label">Price</label>
        </div>
        <div class="fi">
            Choose Image
            <input type="file" name="file" id="file"><br>
        </div>
        <input type="hidden" name="hidden_cat_name" value="<?php echo $pre_cat; ?>">
        <!-- <input type="hidden" name="hidden_p_name" value="<script><script>"> -->
        <!-- <div class="fi">
            Add Skin -->
            <input style="  background-color: #63bb30;border-radius: 5px;
            box-shadow: 0px 7px 15px #2e7222; color: white;font-size: 1rem;
            border: none;width: 120px; margin-top: 1rem;padding-top: 1rem;padding-bottom: 1rem;" type="submit" name="btn" value="ADD Skin"><br/>
        <!-- </div> -->
        <?php if(isset($_GET['error'])) { ?>
               <div class="error"><?php echo $_GET['error']; ?></div>

            <?php } ?>
</form>
    </main>
    
</body>
<script>
   function abc() 
    {
        var x = document.getElementById("cat_name").value;
        window.location.replace("add_skin.php?cat_phone="+x);
        
    }
   
    </script>
</html>