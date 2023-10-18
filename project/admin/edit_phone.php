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
$id1=0;
if(isset($_GET['id']))
{
$id=$_GET['id'];
// echo $id;
$id1=$id;
}
$sql_select="select * from phone_name where id='$id'";
$result=mysqli_query($con,$sql_select);
while($row=mysqli_fetch_assoc($result))
{
    $s_cat=$row['cat'];
    $s_phone_name=$row['phone_name'];

    
}
//&& $_POST['cat_name']!=''
if(isset($_POST['btn']))
{
    if(isset($_POST['id']))
    {
        $id_p=$_POST['id'];
    }
    else
    {
        //echo "plz select cat name";
    }
if(isset($_POST['cat']))
    {
        $cat=$_POST['cat'];
    }
    else
    {
        echo "plz select username";
    }
    if(isset($_POST['phone_name']))
    {
        $phone_name=$_POST['phone_name'];
    }
    else
    {
        echo "plz select username";
    }
    if(isset($_FILES['file']))
    {
        //echo $_POST['file'];
      $data= mysqli_real_escape_string($con,file_get_contents($_FILES['file']['tmp_name']));
    }
    else
    {
        //echo 'Inside Else';
        echo "plz select image";
    }
    

  
   $update_sql_status="update phone_name set cat='$cat',phone_name='$phone_name',img='$data' where id='$id_p'";

   $sql_c = "select * from phone_name where phone_name='$phone_name'";
   $result=mysqli_query($con,$sql_c);
   $c=mysqli_num_rows($result);
   if($c>0)
   {
       $data=mysqli_fetch_assoc($result);
       if($id_p==$data['id'])
       {
        if (mysqli_query($con,$update_sql_status)) {
            echo "New record created successfully";
           header("location:phone_management.php");
          
          } else {
            echo "Error: " . $update_sql_status . "<br>" . mysqli_error($con);
          }
       }
       else{
        header("location: edit_phone.php?error=Phone  allready there&id=".$id_p);
       }
   }
   else{
    if (mysqli_query($con,$update_sql_status)) {
        echo "New record created successfully";
        header("location:phone_management.php");
      
      } else {
        echo "Error: " . $update_sql_status . "<br>" . mysqli_error($con);
      }
   }
   
}
?>


    <?php require("head_side_bar.inc.php"); ?>
    <main>
        <h1 class="shouldlookcool" style="margin-left:2rem">
            Phone Management
    </h1>
    <div class="seprater"></div>
    <h2  class="addbutton" style="margin-top: 2rem; margin-bottom: 3rem;
    text-decoration:none; transition: 400ms ease-in-out; color: white;
     padding: 1rem;margin: 1rem; background-color: #292929; border-radius: 10px;">edit Phone in the form below...</h2>
    <form style="background: #292929; padding: 2rem;border-radius: 10px;" method="POST" action="edit_phone.php" enctype="multipart/form-data">
        <!-- <div class="field">  
            <input type="text" name="cat" class="input" placeholder="" value="<?php// echo $s_cat?>" >
                <label for="text" class="label"  placeholder="">Cat</label>
        </div> -->
        <select class="droplist" name="cat" id="cat">
                    <option value="<?php echo $s_cat ?>"  selected ><?php echo $s_cat ?></option>
                    <?php 
                    $con=mysqli_connect("localhost","root","","mams");
                    $sql = mysqli_query($con, "SELECT cat FROM cat");
                   while ($row = $sql->fetch_assoc()){
                    echo "<option value=". $row['cat'] .">" . $row['cat'] . "</option>";
                   }
                    ?>
                </select><br><br>
        <div class="field">  
            <input type="text" name="phone_name" class="input" placeholder="" value="<?php echo $s_phone_name?>" >
                <label for="text" class="label"  placeholder="">Phone Name</label>
        </div>
 
        <div class="fi">
            Choose Image
            <input type="file" name="file" id="file"><br>
        </div>
            <input style="  background-color: #63bb30;border-radius: 5px;
            box-shadow: 0px 7px 15px #2e7222; color: white;font-size: 1rem;
            border: none;width: 120px; margin-top: 1rem;padding-top: 1rem;padding-bottom: 1rem;" type="submit" name="btn" value="Edit Phone"><br/>
        <!-- </div> -->
        <input type="hidden" name="id" value="<?php echo $id1; ?>">
        <?php if(isset($_GET['error'])) { ?>
               <div class="error"><?php echo $_GET['error']; ?></div>

            <?php } ?>
</form>
    </main>
</body>
</html>