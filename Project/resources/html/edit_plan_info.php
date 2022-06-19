<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/edit_plan_info_style.css" /> 
        <link rel = "stylesheet" href = "./../css/style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Edit plan info</title>

    </head>


    <body>

    <?php
             include('./connect.php');

                        // -----

             $return ="";  
              $id_pet = $_COOKIE["id_pet"];
              $sql = "SELECT * FROM calendar WHERE id_pet =$id_pet;";
              $result = mysqli_query($dbconn, $sql);
              $row = mysqli_fetch_row($result);

             mysqli_close($dbconn);



        ?>
        
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <div class="menu">Come back</div>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="my_profile.html">Profile</a>
            </header>
            <section>
                <form  method="POST" action="./modifyPlanInfo.php"  enctype="multipart/form-data">
                    <div class="panel">
                    <h1>Edit food information</h1>
                    
                        <div class="fields">
                            <div>Monday lunch:        <input type="text" id="monday" name="monday_lunch" value="<?php echo $row[1]?>"></div>
                            <div>Monday dinner:        <input type="text" id="monday" name="monday_dinner" value="<?php echo $row[2]?>"></div>
                            <div>Tuesday lunch:        <input type="text" id="tuesday" name="tuesday_lunch" value="<?php echo $row[3]?>"></div>
                            <div>Tuesday dinner:        <input type="text" id="tuesday" name="tuesday_dinner" value="<?php echo $row[4]?>"></div>
                            <div>Wednesday lunch:        <input type="text" id="wednesday" name="wednesday_lunch" value="<?php echo $row[5]?>"></div>
                            <div>Wednesday dinner:        <input type="text" id="wednesday" name="wednesday_dinner" value="<?php echo $row[6]?>"></div>
                            <div>Thursday lunch:        <input type="text" id="thursday" name="thursday_lunch" value="<?php echo $row[7]?>"></div>
                            <div>Thursday dinner:        <input type="text" id="thursday" name="thursday_dinner" value="<?php echo $row[8]?>"></div>
                            <div>Friday lunch:        <input type="text" id="friday" name="friday_lunch" value="<?php echo $row[9]?>"></div>
                            <div>Friday dinner:        <input type="text" id="friday" name="friday_dinner" value="<?php echo $row[10]?>"></div>
                            <div>Saturday lunch:        <input type="text" id="saturday" name="saturday_lunch" value="<?php echo $row[11]?>"></div>
                            <div>Saturday dinner:        <input type="text" id="saturday" name="saturday_dinner" value="<?php echo $row[12]?>"></div>
                            <div>Sunday lunch:        <input type="text" id="sunday" name="sunday_lunch" value="<?php echo $row[13]?>"></div>
                            <div>Sunday dinner:        <input type="text" id="sunday" name="sunday_dinner" value="<?php echo $row[14]?>"></div>
                        </div>
                        <br>
                        <input type="submit" value="Submit" name="submit" id="button">
                        <br>
                        <br>
                    </div>
                </form> 
            </section>
        </div>
        <footer>
            <a href="./about_us.html">About us</a>
        </footer>

    </body>

</html>