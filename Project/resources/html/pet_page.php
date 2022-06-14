<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/style.css" /> 
        <link rel = "stylesheet" href = "./../css/pet_page_style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Pet_page</title>

    </head>
    <body>
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <a class="menu" href="./pets.php">Come back</a>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="./my_profile.php">Profile</a>
            </header>
            <h1>
                
                <?php
                include('./connect.php');

            // -----

                $return ="";  
                $id_pet = $_COOKIE["id_pet"];
                $sql = "SELECT name,img_dir FROM pets WHERE id = $id_pet;";
                $result = mysqli_query($dbconn, $sql);
                $row = mysqli_fetch_row($result);
                echo $row[0];
                ?>
            </h1>
            <section>
                <div class="wrapper">
                    <div class="panel" id="photo">
                        <div>
                            <img src="<?php echo $row[1]?>" alt="photo of the pet" >
                        </div>
                        
                        <a href="gallery.html">
                            Gallery
                        </a>
                    </div>
                    <div class="panel" id="info" >
                        <a class="panel-son" href="pet_general_info.php">
                            General information
                        </a>
                        <a class="panel-son" href="medical_history.php">
                            Medical history
                        </a>
                        <a class="panel-son" href="food_info.html">
                            Food information
                        </a>
                    </div>
                </div>
            </section>
        </div class="content">
        <footer>
            <a href="./about_us.html">About us</a>
        </footer>
    </body>
</html>