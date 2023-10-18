<?php
require("connection.inc.php");
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
$count_skin=0;
$count_case=0;

$sql_skin="select * from test_skin";
$res_skin=mysqli_query($con,$sql_skin);
$count_skin=mysqli_num_rows($res_skin);

$sql_case="select * from test_case";
$res_case=mysqli_query($con,$sql_case);
$count_case=mysqli_num_rows($res_case);


?>

    <?php require("head_side_bar.inc.php") ?>
    <main>
        <h1 class="shouldlookcool" style="margin-left:2rem">
                Main Dashboard
        </h1>
        <div class="seprater"></div>
        <!-- <h2 style="margin-top: 2rem; margin-bottom: 3rem;" ><a class="addbutton" style="text-decoration:none; transition: 400ms ease-in-out; color: white; padding: 1rem;margin: 1rem; background-color: rgb(83, 53, 81); border-radius: 20px;" href="add_skin.php">ADD more Skins</a></h2> -->
        <p>
            <div class="counter">
                <section class="counter-item"><h3>Skins Currenlty Available</h3><div class="seprater"></div>
                    <div class="thingychild"><?php echo $count_skin;?></div>
                </section>
                <section class="counter-item"><h3>Covers Currenlty Available</h3><div class="seprater"></div>
                    <div class="thingychild"><?php echo $count_case;?></div>
                </section>
                <section class="counter-item"><h3>In Progress</h3><div class="seprater"></div>
                    <div class="thingychild">In Progress</div>
                </section>
                <section class="counter-item"><h3>In Progress</h3><div class="seprater"></div>
                    <div class="thingychild">In Progress</div>
                </section>

            </div>
          <div class="notgrid">
                <section class="first"><h3>In Progress</h3><div class="seprater"></div>
                    <div class="thingychild">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis quos veniam sit, rerum minima ipsum laudantium aperiam sapiente minus at doloribus accusantium asperiores aut soluta atque, quam praesentium, ea fugit.</div>
                </section>
                <section class="second"><h3>In Progress</h3><div class="seprater"></div>
                    <div class="thingychild">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia corporis sint vero, numquam et consequatur sit reiciendis asperiores commodi nulla voluptas totam fuga veritatis, culpa quaerat ipsam earum, tempore odio.</div>
                </section>
                <section class="third"><h3>In Progress</h3><div class="seprater"></div>
                    <div class="thingychild">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde consequatur repellat neque voluptas officia atque enim expedita nobis id corrupti commodi, hic sunt harum ex sapiente ad vel magni vero!</div>
                </section>
                <section class="forth"><h3>In Progress</h3><div class="seprater"></div>
                    <div class="thingychild">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, tempora quasi harum ipsam a voluptates. Quasi reprehenderit aperiam enim, tempore necessitatibus sequi aliquid saepe, consequuntur nobis iste, error nostrum in?</div>
                </section>

          </div>  
        </p>
    </main>
</body>
</html>