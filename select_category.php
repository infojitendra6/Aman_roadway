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

        <div class="col-lg-9 col-lg-push-6" style="min-height: 500px; background-color: white;">

            <?php
            $res=mysqli_query($conn,"select * from category");
            while($row=mysqli_fetch_array($res))
            {
                ?>
                
        <div  style="border-style: solid;  border-color: green;">

                <img src="<?php echo $row["image"]; ?>" alt="raman roadway">
                <h1>Name :- <?php echo $row["name"]; ?></h1>
                <h1>Code :- <?php echo $row["code"]; ?></h1>

                </div>
            
                <?php

            }



            ?>


        </div>

    </div>


    <?php
include "footer.php";
?>


<script type="text/javascript">
    function set_exam_type_session(category)
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				
                window.location = "item.php";
            }
        };
        xmlhttp.open("GET","forajax/set_exam_type_session.php?exam_category="+ code,true);
        xmlhttp.send(null);
    }
</script>