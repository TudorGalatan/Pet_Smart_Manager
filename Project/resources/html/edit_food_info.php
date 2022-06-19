<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/edit_food_info_style.css" /> 
        <link rel = "stylesheet" href = "./../css/style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Edit food info</title>

    </head>


    <body>

        <?php
             include('./connect.php');

                        // -----

             $return ="";  
              $id_pet = $_COOKIE["id_pet"];
              $sql = "SELECT can_eat, cannot_eat FROM food WHERE id_pet =$id_pet;";
              $result = mysqli_query($dbconn, $sql);
              $row = mysqli_fetch_row($result);

             mysqli_close($dbconn);



        ?>
        
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <a class="menu" href="./food_info.php">Come back</a>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="my_profile.php">Profile</a>
            </header>
            <section>
                <form  method="POST" action="./modifyFood.php"  enctype="multipart/form-data">
                    <div class="panel">

                    <h1>Edit food information</h1>
                    
                        <div class="fields">
                            <div>Pet can eat:       <input type="text" id="can_eat" name="can_eat" value="<?php echo $row[0]?>"></div>
                            <div>Pet can't eat:        <input type="text" id="cannot_eat" name="cannot_eat" value="<?php echo $row[1]?>"></div>
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