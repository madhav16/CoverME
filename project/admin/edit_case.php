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
$s_cat_name="Category";

if(isset($_GET['cat_phone']))
                     {
                        $s_cat_name= $_GET['cat_phone'];
                        $s_phone_name="Phone Name";
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
$sql_select="select * from test_case where id='$id'";
$result=mysqli_query($con,$sql_select);
while($row=mysqli_fetch_assoc($result))
{
    $s_cat_name=$row['cat'];
    $s_phone_name=$row['phone_name'];
    $s_sname=$row['case_name'];
    $s_sdes_case=$row['des_case'];
    $s_smrp=$row['mrp'];

}


if(isset($_GET['cat_phone']))
                     {
                        $s_cat_name= $_GET['cat_phone'];
                        $s_phone_name="Phone Name";
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
    if(isset($_POST['hidden_cat_name']))
    {
        $cat=$_POST['hidden_cat_name'];
    }
    else
    {
        echo "plz select category name";
    }
    if(isset($_POST['phone_name']))
    {
        $phone_name=$_POST['phone_name'];
    }
    else
    {
        echo "plz select phone name";
    }

    if(isset($_POST['name']))
    {
        $name=$_POST['name'];
    }
    else
    {
        echo "plz select name";
    }

    if(isset($_POST['des_case']))
    {
        $des_case=$_POST['des_case'];
    }
    else
    {
        echo "plz Des Case";
    }

    if(isset($_POST['mrp']))
    {
        $mrp=$_POST['mrp'];
    }
    else
    {
        echo "plz select Price";
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
   $update_sql_status="update test_case set cat='$cat',phone_name='$phone_name',case_name='$name',des_case='$des_case',mrp='$mrp',img='$data' where id='$id_p'";

   $sql_c = "select * from test_case where case_name='$name'";
   $result=mysqli_query($con,$sql_c);
   $c=mysqli_num_rows($result);
   if($c>0)
   {
       $data=mysqli_fetch_assoc($result);
       if($id_p==$data['id'])
       {
        if (mysqli_query($con,$update_sql_status)) {
            echo "New record created successfully";
            header("location:case_management.php");
          
          } else {
            echo "Error: " . $update_sql_status . "<br>" . mysqli_error($con);
          }
       }
       else{
        header("location:edit_case.php?error=skin name allready there&id=".$id_p);
       }
   }
   else{
    if (mysqli_query($con,$update_sql_status)) {
        echo "New record created successfully";
        header("location:case_management.php");
      
      } else {
        echo "Error: " . $update_sql_status . "<br>" . mysqli_error($con);
      }
   }
   
echo $update_sql_status;



}
?>
<?php require("head_side_bar.inc.php"); ?>
    <main>
    <h1 class="shouldlookcool" style="margin-left:2rem">
            Case Management
    </h1>
    <div class="seprater"></div>
    <h2  class="addbutton" style="margin-top: 2rem; margin-bottom: 3rem;text-decoration:none; transition: 400ms ease-in-out; color: white; padding: 1rem;margin: 1rem; background-color: #292929; border-radius: 10px;">Edit ur Case here...</h2>
    <form style="background: #292929; padding: 2rem;border-radius: 10px;" method="POST" action="edit_case.php" enctype="multipart/form-data">

    <!-- <div class="field">   <input type="text" name="cat" class="input" id="cat" placeholder="" value="<?php echo $s_scat?>">
            <label for="text" class="label">Category</label>
        </div>

        <div class="field">   <input type="text" name="phone_name" class="input" id="phone_name" placeholder="" value="<?php echo $s_s_phone_name?>">
            <label for="text" class="label">Phone Name</label>
        </div> -->
        
        <select class="droplist" name="cat_name" id="cat_name" onchange="abc()">
                    <option value="<?php echo $s_cat_name ?>" disabled selected > <?php  echo $s_cat_name ?></option>
                    <?php 
                    $con=mysqli_connect("localhost","root","","mams");
                    $sql = mysqli_query($con, "SELECT cat FROM cat");
                   while ($row = $sql->fetch_assoc()){
                    echo "<option value='". $row['cat'] ."'>" . $row['cat'] . "</option>";
                   }
                    ?>
                </select><br><br>
      
        <select class="droplist" name="phone_name" id="phone_name" >
                    <option value="<?php echo $s_phone_name?>"  selected ><?php echo $s_phone_name?></option>
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
                      </select><br><br>

        <div class="field">   
            <input type="text" name="name" class="input" id="name" placeholder="" value="<?php echo $s_sname?>">
            <label for="text" class="label">Case Name</label>
        </div>
        <div class="field">   
            <input type="text" name="des_case" class="input" id="des_case" placeholder="" value="<?php echo $s_sdes_case?>">
            <label for="text" class="label">Des Case</label>
        </div>
        <div class="field">   
            <input type="text" name="mrp" class="input" id="mrp" placeholder="" value="<?php echo $s_smrp?>">
            <label for="text" class="label">Price</label>
        </div>
        <input type="hidden" name="id" value="<?php echo $id1; ?>">
        <div class="fi">
            Choose Image
            <input type="file" name="file" id="file"><br>
        </div>
        <!-- <div class="fi">
            Add Skin -->
            <input style="  background-color: #63bb30;border-radius: 5px;
            box-shadow: 0px 7px 15px #2e7222; color: white;font-size: 1rem;
            border: none;width: 120px; margin-top: 1rem;padding-top: 1rem;padding-bottom: 1rem;" type="submit" name="btn" value="ADD Case"><br/>
          <input type="hidden" name="hidden_cat_name" value="<?php echo $s_cat_name ?>">
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

        var id= <?php echo $_GET['id'] ?>;
        // alert("hello error"+id);
       window.location.replace("edit_case.php?cat_phone="+x+"&id="+id);
   
        
    }
   
    </script>
</html>