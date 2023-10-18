<?php
session_start();
?>
<?php
if(isset($_SESSION['username']) && $_SESSION['username']!='')
{
$u=$_SESSION['username'];

}
else
{
  header("Location: index.php?error=PLZ login First");
}
$con = mysqli_connect("localhost", "root", "", "mams");
$sql_cat="select * from cat";
$res_cat=mysqli_query($con,$sql_cat);
$sql_cat1="select * from cat";
$res_cat1=mysqli_query($con,$sql_cat1);
$sql_cart="select * from cart where username='".$u."'";
$sub_total=0;
//echo $sql_cart;
$res_cart=mysqli_query($con,$sql_cart);
$i=0;

function add()
{
    echo "add:";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleop.css">
    <!-- <script>
        function changetext(obj, text){
            obj.innerText= text
        }
    </script> -->

    <nav class="mainnav">
       
        <ul  class="navbar-nav">
            <li class="nav-item"><a style="font-size: 1.3rem; font-weight: bold;" class="dbrandlogo" href="dash.php">DBrand</a></li>
            
            <!-- dropdown pain starts here...-->
            <li class="nav-item has-dropdown"><a class="skinb"  href="#">Skins</a>

                <ul class = "dropdown">
                    <li class="dropdown-item">
                        <h3>Skins</h3>
                    </li>
                    <?php while($row=mysqli_fetch_array($res_cat)) {?>
                    <div class="seprater"></div>
                    <li class="dropdown-item">
                        <a style="color: #ffbb00;" href = "skins.php?cat=<?php echo $row['cat']; ?>"><?php echo $row['cat']; ?></a>
                    </li>
                    <div class="seprater"></div>
                    <?php } ?>
                  
                        
                </ul>
        
            </li>
            <li class="nav-item"><a class="skinb" onclick="menuToggle();" href="#">Covers</a><ul>
    
                <li class="d2" >
                <?php while($row1=mysqli_fetch_array($res_cat1)) {?>
                    <a style="color: #ffbb00;" href="case.php?cat=<?php echo $row1['cat']; ?>"><?php echo $row1['cat']; ?></a>
                
                    <?php }?>
                </li>
            
            </ul></li>

            <li class="nav-item"><a class="kart" style="  float:right;  font-size: 1.5rem;" href="dummy.php"><img  style="width: 1.8rem;" src="cart.svg"></a></li>
            <li class="nav-item"><a style="float: right; font-size: 1.5rem;" href="#"><img style="width: 1.8rem;" src="acc.svg"></a></li>
            <li class="nav-item"><a style="  float:right; font-size: 1.5rem;" href="logout.php"><img style="width: 1.8rem;" src="logout.svg"></a></li>
        </ul>
    </nav>
    <script>
        function menuToggle() {
            const toggleMenu=document.querySelector('.d2');
            toggleMenu.classList.toggle('active');
        }
        
    </script>
</head>
<body>

    <section class="cartt" >
        <h1 style="padding: 0; margin: 0;">Cart</h1>
    </section>

    <div class="cartc">
        
    <div style="margin-top: 1rem;"  class="citems">
    <?php
    
    while($row_cart=mysqli_fetch_array($res_cart)) { $i++;
    
    ?>
        <ul>
            <li style="display:flex; flex-direction:row;align-items: center;  align-content: space-between;">
                <div style="width: 100%;"><?php  echo $row_cart['p_name']; ?></div>
                <div style="width: 90%; display: flex;align-items:center;align-content: center; justify-content: center;">
                    <label  id="mrp" style="width: 100%; color: gray;">Rs <?php  echo $row_cart['mrp']; ?></label>
                    <input style="border-bottom: #ffbb00 2px solid; width: 3rem;cursor: pointer; background-color: #111111; color: white;"  type="number" id="qty" value="<?php  echo $row_cart['qty']; ?>" name="qty" min="1" onchange="abc( <?php echo $row_cart['mrp']; ?> , <?php echo $i; ?>,this.value )">
                <!-- <select  style="border-bottom: #ffbb00 2px solid; width: 3rem;cursor: pointer; background-color: #111111; color: white;" class="droplist">
                <option value="<?php echo $row_cart['qty'] ?>" selected><?php echo $row_cart['qty']; ?></option>
                    <option value="1" >1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select> -->
                <!-- <input style="width:2rem;" type="number"> -->
                <button class="delet" value="<?php  echo $row_cart['p_name']; ?>" onclick="delete_item(this.value)"><img src="delete.svg"></button>
                <label id="lbl_total<?php echo $i; ?>" style="width: 100%; text-align: right; padding-right:1rem;">Rs <?php  echo $row_cart['total']; $sub_total=$sub_total+$row_cart['total']; ?></label>
                </div>


            </li>
        </ul> 
<?php } ?>
        <!-- </div>
        <div style="margin-top: 1rem;"  class="citems">
 
            <ul>
                <li style="display:flex; flex-direction:row;align-items: center;  align-content: space-between;">
                    <div style="width: 100%;">Skin Name</div>
                    <div style="width: 90%; display: flex;align-items:center;align-content: center; justify-content: center;">
                        <label  style="width: 100%; color: gray;">$69.99</label>
                    <select  style="border-bottom: #ffbb00 2px solid; width: 3rem;cursor: pointer; background-color: #111111; color: white;" class="droplist">
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                    
                    <button class="delet"><img src="delete.svg"></button>
                    <label style="width: 100%; text-align: right; padding-right:1rem;">$69.99</label>
                    </div>
    
    
                </li>
            </ul> 
    
            </div> -->
        <!-- <div  class="citems">

                    <ul>
                        <li>
                            <div>Phone Name</div>
                            <div>Skin Name</div>
                        </li>
                    </ul> 
            
                    </div> -->
        <div class="csubtotal">
            <label>Subtotal</label>
            <label id="sub_total" style="float:right">Rs <?php echo $sub_total; ?></label>
            <p id="error"></p>
        </div>  

        <div class="stotal">
            <div><label style="color: gray;">Estimated Shipping</label><label style="float:right">Rs 50.00</label></div>
            <div  style="margin-bottom: .5rem;margin-top: .5rem;" class="seprater"></div>
            <div><label  style="color: gray;">Total</label><label id="f_total" style="float:right">Rs <?php echo $sub_total+50;?></label></div>
        </div>

        <article class="align-mid">
            <a class="bb"  style=" color: rgb(112, 255, 112); border:2px grey solid;" href="dash.php">Continue Shopping</a>
            <a class="bb"  style=" color: rgb(112, 255, 112); border:2px grey solid;" href="#" onclick="update_cart(<?php echo $u; ?>)">Update Your Cart</a>
            <a class="bb" style=" color: black; border:none; border-radius: 5px; font-size: 1.3rem; background-color: #ffbb00" href="#">CHECKOUT ></a>
        </article>
    </div>
    <div class="seprater"></div>
    <nav style="padding-left:3rem;color: #858585;background-color: #1b1b1b;">dbrand: All rights reserved</nav>
    <!-- <section style="padding: 1rem; padding-left: 2rem; text-align: center;font-size: 1.3rem;color: #858585;" >
        dbrand offers a wide selection of skins for OnePlus devices - from the newest OnePlus 8T skins to OnePlus 8 skins, and OnePlus 8 Pro skins, as well as OnePlus Nord skins and OnePlus 7T skins. Select your device to visit our fully interactive build-it-yourself OnePlus skin customizer.
    </section> -->
    <div class="seprater"></div>
    <nav style="font-family: 'Roboto Condensed', sans-serif; background-color: #1b1b1b;">
        <div style="display: flex; align-items: center; color: #858585; padding-left: 1rem;"><a href="dash.php"><img  src="home_black_24dp.svg" alt=""></a><a style="margin-left: .25rem;margin-right: .25rem;" href="dash.php">Home</a>/<a style="  color: gray;margin-left: .25rem;margin-right: .25rem;" href="skins.php">Skins</a>/
        <a style="color: gray;margin-left: .25rem;margin-right: .25rem;" href="case.php">Covers</a></div>
    </nav>
</body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script>

    function abc(mrp,i,qty)
    {
     var x=qty;
     var total=0;   
       // var x = Number(document.getElementById("qty").value);
        var total = x * mrp;
        var id_total="lbl_total"+i;
       // alert("konsa row   "+id_total+"   total kay liya   "+ total+ "");
      document.getElementById(id_total).innerHTML="Rs "+total;
        // $("#"+id_total).html("Rs "+x*val);
        // var mrp = Number(document.getElementById("mrp").value);
        // var total = mrp * x;
        // document.getElementById("error").innerHTML = total;
        // num1 = Number(document.getElementById("qty").value);
        // num2 = Number(document.getElementById("mrp"));
        // alert("qty:- "+num1+"   mrp:- "+num2);
        // document.getElementById("error").innerHTML = Number(num1 * num2);
        // if(x<0)
        // {
        //     document.getElementById("qty").value=0;

        // }
        // var res=" <?php add(); ?>";
        // alert(res);
        sub_total();
        
    }
    function update_cart(username){

    }
    function sub_total()
    {
  
        var i=0;
        var total=0;
      var total_row = '<?php echo $i; ?>';
      //alert(total_row);
      for(i=1;i<=total_row;i++)
      {
          var lbl = "lbl_total"+i;
          console.log(lbl);
          var tmp=document.getElementById(lbl).textContent;
          var matches = tmp.match(/(\d+)/);
          if(matches)
          {
              total+=Number(matches[0]);
          }
          console.log(total);
      }
      document.getElementById("sub_total").textContent="Rs "+total;
      document.getElementById("f_total").textContent="Rs "+(total+50);
       // alert("konsa row   "+id_total+"   total kay liya   "+ total+ "");
     //var v1= document.getElementById();
    }
    function delete_item(val)
    {
        
        var u='<?php echo $u; ?>'
       var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("error").innerHTML = this.responseText;
        window.location.reload(); 
      }
    };
    xmlhttp.open("GET","delete_cart_item.php?p_name="+val+"&username="+u,false);
    xmlhttp.send();

    }
</script>
</html>