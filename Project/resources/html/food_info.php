<!-- Food information -->

<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/food_info.css" />
        <link rel = "stylesheet" href = "./../css/style.css" />

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Food information</title>

    </head>


    <body>
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <div class="menu" href="./pet_page.php">Come back</div>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="my_profile.php">Profile</a>
            </header>

            <!-- Title -->
            <h1 class = "food_info_title">Food information</h1>

            <section>
                <div class = "food_info_content">
                    <?php
                            include('./connect.php');

                        // -----

                            $return ="";  
                            $id_pet = $_COOKIE["id_pet"];
                            $sql = "SELECT can_eat, cannot_eat, monday, tuesday, wednesday, thursday, friday, saturday, sunday FROM food WHERE id_pet =$id_pet;";
                            $result = mysqli_query($dbconn, $sql);
                            $row = mysqli_fetch_row($result);
                            mysqli_close($dbconn);
                    ?>
                    <p>Pet can eat: <?php echo $row[0]?></p>
                    <p>Pet can't eat: <?php echo $row[1]?></p>
                    <a class="edit_buttom" href="./edit_food_info.php"> Edit</a>
                </div>
            </section>

            <div class="buttons">
                <div class="modify_event"><a href="./removeFood.php">Delete info</a></div>
            </div>




            <h2 class = "calendar">Weekly planner</h2>
            <section>
                <div class = "calendar">

                    <p>Monday: <?php echo $row[2]?></p>
                    <p>Tuesday: <?php echo $row[3]?></p>
                    <p>Wednesday: <?php echo $row[4]?></p>
                    <p>Thursday: <?php echo $row[5]?></p>
                    <p>Friday: <?php echo $row[6]?></p>
                    <p>Saturday: <?php echo $row[7]?></p>
                    <p>Sunday: <?php echo $row[8]?></p>
                    <a class="edit_buttom" href="./edit_plan_info.php"> Edit</a>
                </div>
            </section>

            <div class="buttons">
                <div class="modify_event"><a href="./removePlan.php">Delete plan</a></div>
            </div>


        

            


        <footer>
            <a href="./about_us.html">About us</a>
        </footer>

    </body>

</html>