<!-- Medical History -->

<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/medical_history_style.css" />
        <link rel = "stylesheet" href = "./../css/style.css" />

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Medical History</title>

    </head>


    <body>
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <a class="menu" href="./pet_page.php">Come back</a>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="my_profile.php">Profile</a>
            </header>

            <!-- Title -->
            <h1 class = "medical_history_title">Medical History</h1>
            <section>
                <div class = "panel">

                     <?php
                            include('./connect.php');

                        // -----

                            $return ="";  
                            $id_pet = $_COOKIE["id_pet"];
                            $sql = "SELECT allergies, diseases, next_date, previous_date, previous_surgeries, first_aid FROM medical WHERE id_pet =$id_pet;";
                            $result = mysqli_query($dbconn, $sql);
                            $row = mysqli_fetch_row($result);
                            mysqli_close($dbconn);
                        ?>

                    <p>Allergies: <?php echo $row[0]?></p>
                    <p>Diseases: <?php echo $row[1]?></p>
                    <p>Next doctor appointment: <?php echo $row[2]?></p>
                    <p>Previous doctor appointments:<?php echo $row[3]?></p>
                    <p>Previous surgeries: <?php echo $row[4]?></p>
                    <p>First aid: <?php echo $row[5]?></p>
                    <div class="buttons">
                            <div class="modify_event"><a href="./edit_medical_history.php">Edit</a></div>
                            
                    </div>
                    

                    
                </div>
            </section>
        </div>
        <footer>
            <a href="./about_us.html">About us</a>
        </footer>

    </body>

</html>