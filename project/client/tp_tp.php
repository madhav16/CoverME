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
  header("Location: aclog.php?error=PLZ login First");
}
$con = mysqli_connect("localhost", "root", "", "mams");

$sql_cart="select * from cart where username='".$u."'";
$sub_total=0;
//echo $sql_cart;
$res_cart=mysqli_query($con,$sql_cart);
$conttt=mysqli_num_rows($res_cart);
if($conttt<=0)
{
    header("Location:cartempty.php");
}
$i=0;

function add()
{
    echo "add:";
}

?>
<?php require("head.inc.php");?>
<body>

    <section class="cartt" >
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,300&display=swap" rel="stylesheet"> 
        <h1 style=" font-family: 'Roboto Condensed', sans-serif; font-style:italic; padding: 0; margin: 0;">Cart</h1>
    </section>

    <div class="cartc">
        
    <div style="margin-top: 1rem;"  class="citems">
    
    <?php
$a=[];
    while($row_cart=mysqli_fetch_array($res_cart)) { 
        // $ab=$row_cart;
        $i++;
        $a[$i] =[
            "p".$i=>$row_cart['p_name'],
            "p_qty".$i=>$row_cart['qty'],
            "p_tot".$i=>$row_cart['total']
        ];
    //    $_SESSION['p'.$i]=$a[$i];
    
    ?>
        <ul style="padding-top: 1rem;padding-bottom: 1rem;  margin-bottom: 1rem;">
            <li style="display:flex; flex-direction:row;align-items: center;  align-content: space-between;">
                <div style="width: 100%;"><lable id="p_name<?php echo $i; ?>"><?php  echo $row_cart['p_name']; ?></lable></div>
                <div style="width: 90%; display: flex;align-items:center;align-content: center; justify-content: center;">
                    <label  id="mrp<?php echo $i; ?>" style="width: 100%; color: gray;">Rs <?php  echo $row_cart['mrp']; ?></label>
                    <!-- <input style="border-bottom: #ffbb00 2px solid; width: 3rem;cursor: pointer; background-color: #111111; color: white;"  type="number" id="qty<?php echo $i; ?>" value="<?php  echo $row_cart['qty']; ?>" name="qty[][]" min="1" onchange="abc( <?php echo $row_cart['mrp']; ?> , <?php echo $i; ?>,this.value )"> -->
                <select id="qty<?php echo $i; ?>"  style="border-bottom: #ffbb00 2px solid; width: 3rem;cursor: pointer; background-color: #111111; color: white;" name="qty" class="droplist" onchange="abc( <?php echo $row_cart['mrp']; ?> , <?php echo $i; ?>,this.value )">
                <option value="<?php echo $row_cart['qty'] ?>" selected><?php echo $row_cart['qty']; ?></option>
                    <option value="1" >1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
                <!-- <input style="width:2rem;" type="number"> -->
                <button class="delet" value="<?php  echo $row_cart['p_name']; ?>" onclick="delete_item(this.value)"><img src="delete.svg"></button>
                <label id="lbl_total<?php echo $i; ?>" style="width: 100%; text-align: right; padding-right:1rem;">Rs <?php  echo $row_cart['total']; $sub_total=$sub_total+$row_cart['total']; ?></label>
                </div>


            </li>
        </ul> 

<?php }

 ?>
        </div>
   
        <div class="csubtotal">
            <label>Subtotal</label>
            <label id="sub_total" style="float:right">Rs <?php echo $sub_total; ?></label>
            <!-- <p id="error"></p> -->
        </div>  


        

        <div class="stotal">
            <div><label style="color: gray;">Estimated Shipping</label><label style="float:right">Rs 50.00</label></div>
            <div  style="margin-bottom: .5rem;margin-top: .5rem;" class="seprater"></div>
            <div><label  style="color: gray;">Total</label><label id="f_total" style="float:right">Rs <?php echo $sub_total+50;?></label></div>
        </div>

        <article class="align-mid">
            
            <a class="bb"  style=" color: gray; border:2px grey solid;"  name="update_cart" href="#" onclick="update_cart()">Update Cart</a>
            <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
            <a class="bb" id="chkout" style=" color: rgb(22, 22, 22); border:none; border-radius: 5px; font-family: 'Roboto Condensed', sans-serif; font-size: 1.3rem; background-color: #ffbb00" href="chko1.php">CHECKOUT ></a>
        </article>
    </div>
    <div class="seprater"></div>
    <nav style="padding-left:3rem;color: #858585;background-color: #1b1b1b;">dbrand: All rights reserved</nav>
 
    <div class="seprater"></div>
    <nav style="font-family: 'Roboto Condensed', sans-serif; background-color: #1b1b1b;">
        <div style="display: flex; align-items: center; color: #858585; padding-left: 1rem;"><a href="index.php"><img  src="home_black_24dp.svg" alt=""></a><a style="margin-left: .25rem;margin-right: .25rem;" href="index.php">Home</a>><a style="  color: gray;margin-left: .25rem;margin-right: .25rem;" href="#">Cart</a></div>
    </nav>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    function abc(mrp,i,qty)
    {
     var x=qty;
     var total=0;   

        var total = x * mrp;
        var id_total="lbl_total"+i;
        

      document.getElementById(id_total).innerHTML="Rs "+total;
      
        sub_total();
        
    }
    function update_cart(){
            // all_item(username);
            // var u=username;
            var i = '<?php echo $i; ?>'
            var u = '<?php echo $u; ?>'
            
        // alert("the "+u+"has this "+i+"rows in cart");
        var j=0;
        var a =  new Object();
        for(j=1;j<=i;j++)
        {
            var p_name=document.getElementById("p_name"+j).textContent
            var qty=document.getElementById("qty"+j).value
            
            var tmp=document.getElementById("lbl_total"+j).textContent
            var matches = tmp.match(/(\d+)/);
            if(matches)
            {
                var tot = Number(matches[0])
            }
            //alert("p_name :- "+p_name+"   qty:-"+qty+"  tot:- "+tot );
            //alert("j:- "+j+"  i:-"+i);
           a["p_name"+j]=p_name;
           a["qty"+j]=qty;
           a["tot"+j]=tot;
        //    console.log(a["p_name"+j])
        //    console.log(a["qty"+j])
        //    console.log(a["tot"+j])
        }
    console.log(a)
    $.ajax({
        url:"readjson.php",
        method:"POST",
        data:a,
        success:function (res) {
            console.log(res)
        // alert(res);
        //window.location.replace("html_js_array.html?a=")
        }
    });
    
        
    }
//     function test(i,a) {
// //  console.log(i);
// //  console.log(a);
//  $.ajax({
//         url:"readjson.php",
//         method:"POST",
//         data:a,
//         success:function(res) {
//             // console.log(res)
//         alert(res);
//         //window.location.replace("html_js_array.html?a=")
//         }
//     });

// }
    function sub_total()
    {
  
        var i=0;
        var total=0;
      var total_row = '<?php echo $i; ?>';
      //alert(total_row);
      for(i=1;i<=total_row;i++)
      {
          var lbl = "lbl_total"+i;
         // console.log(lbl);
          var tmp=document.getElementById(lbl).textContent;
          var matches = tmp.match(/(\d+)/);
          if(matches)
          {
              total+=Number(matches[0]);
          }
        //   console.log(total);
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
       // document.getElementById("error").innerHTML = this.responseText;
        window.location.reload(); 
        window.location.href=window.location.href;
      }
    };
    xmlhttp.open("GET","delete_cart_item.php?p_name="+val+"&username="+u,false);
    xmlhttp.send();

    }
    // function all_item(u)
    // {
       
    // }
</script>
</html>