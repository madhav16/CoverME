<?php
session_start();
?>
<?php
// if(isset($_SESSION['username']) && $_SESSION['username']!='')
// {

// }
// else
// {
//   header("Location: index.php?error=PLZ login First");
// }
$con = mysqli_connect("localhost", "root", "", "mams");



?>
<?php require("head.inc.php"); ?>
<body>
    <div class="snapiboi">
    <section class="sec1">
        <article style="background-color: rgb(241, 241, 241);padding: 5rem;" class="deev">
            <div  style=" padding:0 1rem 0; white-space: nowrap; font-size: 3rem;font-family: 'Zen Dots', cursive; color: rgb(49, 49, 49);">ONEPLUS 9</div>
            <div  style="font-size:1.1rem;font-family: 'Libre Franklin', sans-serif; color: rgb(49, 49, 49);">New skins are now available</div>
            <a  class="bb" href="skins.php?cat=OnePlus" style="padding: 0 2rem 0;  padding-top: 1rem; padding-bottom: 1rem; margin: 1rem;font-family: 'Zen Dots', cursive; background:rgb(49, 49, 49)">BUY THIS!</a>
              
        </article>
        <article style="background-color: #7eead0; width:100%;" class="deev">
            <img style="width: 50%;" src="ep8.jpg" alt="">
        </article>

    </section>

    <section class="sec1">
        <article style="background-color: rgb(86, 163, 50);width: 100%;" class="deev">
            <img style="width:40%;" src="i12.jpg.png" alt="">
              
        </article>
        <article style="background-color:rgb(241, 241, 241);padding: 5rem;" class="deev">
            <div  style=" padding:0 1rem 0; white-space: nowrap; font-size: 3rem;font-family: 'Zen Dots', cursive; color: rgb(49, 49, 49);">IPHONE 12</div>
            <div  style="font-size:1.1rem;font-family: 'Libre Franklin', sans-serif; color: rgb(49, 49, 49);">New skins are now available</div>
            <a class="bb" href="skins.php?cat=Apple" style="padding: 0 2rem 0;  padding-top: 1rem; padding-bottom: 1rem; margin: 1rem;font-family: 'Zen Dots', cursive; background:rgb(49, 49, 49)">BUY THIS!</a>
           
        </article>
    </section>   
    <section class="sec1">
        <article style="background-color: rgb(241, 241, 241);padding: 5rem;" class="deev">
            <div  style=" padding:0 1rem 0;  text-align: center; font-size: 3rem;font-family: 'Zen Dots', cursive; color: rgb(49, 49, 49);">RAZER BLADE 15</div>
            <div  style="font-size:1.1rem;font-family: 'Libre Franklin', sans-serif; color: rgb(49, 49, 49);">Coming Soon!</div>
            <a class="bb" href="#" style="padding: 0 2rem 0;  padding-top: 1rem; padding-bottom: 1rem; margin: 1rem;font-family: 'Zen Dots', cursive; background:rgb(49, 49, 49)">Remind Me!</a>
              
        </article>
        <article style="background-color: white;width:100%;" class="deev">
            <img style="width: 80%;" src="rzr.jpg" alt="">
        </article>
    </section>
</div>
    
    
    
    
    <div class="seprater"></div>
    <nav style="padding-left:3rem;color: #858585;background-color: #1b1b1b;">dbrand: All rights reserved</nav>
    <!-- <section style="padding: 1rem; padding-left: 2rem; text-align: center;font-size: 1.3rem;color: #858585;" >
        dbrand offers a wide selection of skins for OnePlus devices - from the newest OnePlus 8T skins to OnePlus 8 skins, and OnePlus 8 Pro skins, as well as OnePlus Nord skins and OnePlus 7T skins. Select your device to visit our fully interactive build-it-yourself OnePlus skin customizer.
    </section> -->
    <div class="seprater"></div>
    <nav style="font-family: 'Roboto Condensed', sans-serif; background-color: #1b1b1b;">
        <div style="display: flex; align-items: center; color: #858585; padding-left: 1rem;"><a href="index.php"><img  src="home_black_24dp.svg" alt=""></a><a style="margin-left: .25rem;margin-right: .25rem;" href="index.php">Home</a>><a style="  color: gray;margin-left: .25rem;margin-right: .25rem;" href="#">Dashboard</a></div>
    </nav>
</body>
</html>