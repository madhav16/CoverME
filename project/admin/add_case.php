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
$pre_cat="Category";
if(isset($_GET['cat_phone']))
                     {
                         $pre_cat= $_GET['cat_phone'];
                     }
?>

<?php
$con=mysqli_connect("localhost","root","","mams");
if(isset($_POST['btn']))
{
    $s_cat=$_POST['hidden_cat_name'];
    $s_phone_name=$_POST['phone_name'];
    $s_name=$_POST['name'];
    $s_des_case=$_POST['des_case'];
    $s_mrp=$_POST['mrp'];
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

$sql = "INSERT INTO test_case (cat,phone_name,case_name,des_case,mrp,img,status) VALUES ('$s_cat','$s_phone_name','$s_name','$s_des_case','$s_mrp','$data','1')";
$sql_c = "select * from test_case where case_name='$s_name'";
$result=mysqli_query($con,$sql_c);
$c=mysqli_num_rows($result);
if($c>0)
{
    header("location:add_case.php?error=skin name allready there");
}
else{
    if (mysqli_query($con,$sql)) {
        echo "New record created successfully";
        header("location:case_management.php");
      
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
    
}




mysqli_close($con);
}

?>

    <?php require("head_side_bar.inc.php") ?>
    <style>
        .field{
            width: 100%;
            position: relative;
            border-bottom: 1px dashed white;
            margin: 4rem auto 1rem;
        }

        .label{
            color: white;
            font-size: 1.2rem;
        }

        .error
{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bold;
  background-color: rgb(245, 58, 58);
  color: white;
  padding: 10px;
  width: 95%;
  border-radius: 5px;  
}
        .input{
            outline: none;
            border:none;
            overflow: hidden;
            margin:0;
            width: 100%;
            padding:.25rem 0;
            background: none;
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
        }

            .field:after{
            content: "";
            position: relative;
            display: block;
            height: 4px;
            width: 100%;
            background: rgb(68, 207, 68);
            transform: scaleX(0);
            transform-origin: 0;
            transition: all 500ms ease-out;
            top: 2px;
        }

        .field:focus-within{
    border-color: transparent;
}

.field:focus-within::after{
    transform: scaleX(1);
}

.label{
    z-index: 1; /*donot change it to minus one*/
    position: absolute;                             /* there is an imposter here= label does not group*/
    transform: translateY(-2rem);
    transform-origin: 0%;
    /* transform: transform 2000ms; */
    transition:  500ms ease-in-out;
}

.field:focus-within .label,
 .input:not(:placeholder-shown) + .label {
    transform: scale(0.8) translateY(-5rem);
    transition:  250ms ease-in-out;
}


    </style>
    <main>
        <h1 class="shouldlookcool" style="margin-left:2rem">
            Case Management
    </h1>
    <div class="seprater"></div>
    <h2  class="addbutton" style="margin-top: 2rem; margin-bottom: 3rem;
    text-decoration:none; transition: 400ms ease-in-out; color: white;
     padding: 1rem;margin: 1rem; background-color: #292929; border-radius: 10px;">ADD new skins in the form below...</h2>
    <form style="background: #292929; padding: 2rem;border-radius: 10px;" method="POST" action="add_case.php" enctype="multipart/form-data">
    
        <select class="droplist" name="cat_name" id="cat_name" onchange="abc()">
                    <option value="<?php echo $pre_cat; ?>" disabled selected > <?php echo $pre_cat;  ?></option>
                    <?php 
                    $con=mysqli_connect("localhost","root","","mams");
                    $sql = mysqli_query($con, "SELECT cat FROM cat");
                   while ($row = $sql->fetch_assoc()){
                    echo "<option value='". $row['cat'] ."'>" . $row['cat'] . "</option>";
                   }
                    ?>
                </select><br><br>
      
        <select class="droplist" name="phone_name" id="phone_name" >
                    <option value="-1" disabled selected >Phone Name</option>
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
            <input type="text" name="name" class="input" required id="name"  placeholder="">
            <label for="text" class="label" placeholder="">Case Name</label>
        </div>
        <div class="field">   
            <input type="text" name="des_case" class="input" required id="des_case"  placeholder="">
            <label for="text" class="label" placeholder="">Des Case</label>
        </div>
        <div class="field">   
            <input type="text" name="mrp" class="input" required  id="mrp"  placeholder="">
            <label for="text" class="label" placeholder="">Price</label>
        </div>
        <div class="fi">
            Choose Image
            <input type="file" name="file" id="file"><br>
        </div>
        <!-- <div class="fi">
            Add Skin -->
            <input style="  background-color: #63bb30;border-radius: 5px;
            box-shadow: 0px 7px 15px #2e7222; color: white;font-size: 1rem;
            border: none;width: 120px; margin-top: 1rem;padding-top: 1rem;padding-bottom: 1rem;" type="submit" name="btn" value="ADD Case"><br/>
            <input type="hidden" name="hidden_cat_name" value="<?php echo $pre_cat; ?>">
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
        window.location.replace("add_case.php?cat_phone="+x);
        
    }
   
    </script>
</html>