<?php
session_start();
if(!isset($_SESSION["username"]))
{

    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php

}
?>
<?php
include "connection.php";
include "header.php";
?>


    <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

        <div class="col-lg-9 col-lg-push-3" style="min-height: 500px; background-color: white;">

            <?php
            $res=mysqli_query($conn,"select * from check_out");
            while($row=mysqli_fetch_array($res))
            {
                ?>
                <div  style="border-style: solid;  border-color: green;">
                <h1>Date:-<?php echo $row["out_date"]; ?></h1>
                <h1>Item:-<?php echo $row["out_item"]; ?></h1>
                <h1>Qty:- <?php echo $row["out_qty"]; ?></h1>
                <h1>Rate:-<?php echo $row["out_rate"]; ?></h1>
            </div>
                <?php

            }



            ?>


        </div>

    </div>


    <?php
include "footer.php";
?>

