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
?>

<?php

$con=mysqli_connect("localhost","root","","mams");
if(isset($_POST['btn']))
{
    $cat=$_POST['cat'];
    $phone_name=$_POST['phone_name'];

    if(isset($_FILES['file']))
    {
      $data= mysqli_real_escape_string($con,file_get_contents($_FILES['file']['tmp_name']));
    }
 

 if (!$con) {
   die("Connection failed: " . mysqli_error($con));
 }


$sql = "INSERT INTO phone_name(cat,phone_name,img) VALUES ('$cat','$phone_name','$data')";
$sql_c = "select * from phone_name where phone_name='$phone_name'";
$result=mysqli_query($con,$sql_c);
$c=mysqli_num_rows($result);

if($c>0)
{
    header("location:add_phone.php?error=cat name allready there");
}
else{
    if (mysqli_query($con,$sql)) {
        echo "New record created successfully";
        header("location:phone_management.php");
      
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
           Phone Management
    </h1>
    <div class="seprater"></div>
    <h2  class="addbutton" style="margin-top: 2rem; margin-bottom: 3rem;
    text-decoration:none; transition: 400ms ease-in-out; color: white;
     padding: 1rem;margin: 1rem; background-color: #292929; border-radius: 10px;">ADD new Phone in the form below...</h2>
    <form style="background: #292929; padding: 2rem;border-radius: 10px;" method="POST" action="add_phone.php" enctype="multipart/form-data">
        <!-- <div class="field">  
            <input type="text" name="cat" class="input" placeholder="" id="cat">
                <label for="text" class="label"  placeholder="">Cat</label>
        </div> -->
        <select class="droplist" name="cat" id="cat">
                    <option value="-1" disabled selected >Category</option>
                    <?php 
                    $con=mysqli_connect("localhost","root","","mams");
                    $sql = mysqli_query($con, "SELECT cat FROM cat");
                   while ($row = $sql->fetch_assoc()){
                    echo "<option value=". $row['cat'] .">" . $row['cat'] . "</option>";
                   }
                    ?>
                </select><br><br>
        <div class="field">  
            <input type="text" name="phone_name" class="input" placeholder="" required id="phone_name">
                <label for="text" class="label"  placeholder="">Phone Name</label>
        </div>
        <div class="fi">
            Choose Image
            <input type="file" name="file" id="file"><br>
        </div>
       
             <input style="  background-color: #63bb30;border-radius: 5px;
            box-shadow: 0px 7px 15px #2e7222; color: white;font-size: 1rem;
            border: none;width: 120px; margin-top: 1rem;padding-top: 1rem;padding-bottom: 1rem;" type="submit" name="btn" value="ADD Users"><br/>
        <!-- </div> -->
        <?php if(isset($_GET['error'])) { ?>
               <div class="error"><?php echo $_GET['error']; ?></div>

            <?php } ?>
</form>
    </main>
</body>
</html>