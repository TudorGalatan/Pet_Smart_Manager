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
              $sql = "SELECT allergies,diseases, next_date, previous_date, previous_surgeries, first_aid FROM medical WHERE id_pet =$id_pet;";
              $result = mysqli_query($dbconn, $sql);
              $row = mysqli_fetch_row($result);

             mysqli_close($dbconn);



        ?>
        
        
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <a class="menu" href="./medical_history.php">Come back</a>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="./my_profile.php">Profile</a>
            </header>
            <section>
                <div class="panel">
                <h1>Edit pet information</h1>
                    <form  method="POST" action="./modifyMedicalHistory.php"  enctype="multipart/form-data">
                        <div class="fields">
                        
                            <div>Allergies:        <input type="text" id="allergies" name="allergies" value="<?php echo $row[0]?>"></div>
                            <div>Diseases:        <input type="text" id="diseases" name="diseases" value="<?php echo $row[1]?>"></div>
                            <div>Next doctor appointment: <input type="text" id="next_date" name="next_date" value="<?php echo $row[2]?>"></div>
                            <div>Previous doctor appointments:        <input type="text" id="previous_date" name="previous_date" value="<?php echo $row[3]?>"></div>
                            <div>Previous surgeries:        <input type="text" id="previous_surgeries" name="previous_surgeries" value="<?php echo $row[4]?>"></div>
                            <div>First aid:        <input type="text" id="first_aid" name="first_aid" value="<?php echo $row[5]?>"></div>
                        </div>
                        <br>
                        <input type="submit" value="Submit" name="submit" id="button"
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