<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/edit_general_info_style.css" /> 
        <link rel = "stylesheet" href = "./../css/style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Edit pet info</title>

    </head>


    <body>

    <?php
             include('./connect.php');

                        // -----

             $return ="";  
              $id_pet = $_COOKIE["id_pet"];
              $sql = "SELECT name, type, breed, age, img_dir FROM pets WHERE id =$id_pet;";
              $result = mysqli_query($dbconn, $sql);
              $row = mysqli_fetch_row($result);

             mysqli_close($dbconn);



        ?>
        
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <a class="menu" href="./pet_general_info.php">Come back</a>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="my_profile.html">Profile</a>
            </header>
            <section>
                <div class="panel">
                <h1>Edit pet information</h1>
                    <form  method="POST" action="./modifyPet.php"  enctype="multipart/form-data">
                        <div class="fields">
                        
                            <div>Name:        <input type="text" id="name" name="name" value="<?php echo $row[0]?>"></div>
                            <div>Type of pet:        <input type="text" id="type" name="type" value="<?php echo $row[1]?>"></div>
                            <div>Breed:        <input type="text" id="breed" name="breed" value="<?php echo $row[2]?>"></div>
                            <div>Age:        <input type="text" id="age" name="age" value="<?php echo $row[3]?>"></div>
                            <div>Photo: <input type="file" name="file" value="<?php echo $row[4]?>"/></div>
                        </div>
                        <br>
                        <input type="submit" value="Submit" name="submit" id="button">
                        <br>
                        <br>
                    </form>
                </div>
            </section>
        </div>
        <footer>
            <a href="./about_us.html">About us</a>
        </footer>

    </body>

</html>