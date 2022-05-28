<!-- Pets -->

<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/pets_style.css" />
        <link rel = "stylesheet" href = "./../css/style.css" />

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Pets</title>

    </head>


    <body>
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <div class="menu">Come back</div>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="my_profile.html">Profile</a>
            </header>

            <!-- Title -->
            <h1 class = "pets_title">Pets</h1>

            <section>
                <!-- Pets Content -->
                <div class = "pets_content">

                    <?php 
                        include('./../php/connect.php');
                        $return ="";  
                        $username = $_COOKIE["username"];
                        $sql = "SELECT * FROM pets where username='$username';";
                        $result = mysqli_query($dbconn, $sql);
                        $num_rows = mysqli_num_rows($result);
                        
                        for($i == 0; $i < $num_rows; $i++){ 
                           $row = mysqli_fetch_row($result);
                    ?>
                            <!-- Pet Summary -->
                            <div class = "pet_summary">

                                <!-- Photograph -->
                                <img class = "pet_photograph" src = "./../images/dog.jpg" alt = "A photograph of Rex."  />

                                <!-- Name -->
                                 <a class="pet_name" href="./pet_page.html"><?php echo $row[1] ?></a> 

                                <!-- Delete -->
                                <p>Delete pet</p>
                                

                            </div>
                    <?php 
                        } ?>

                    <!-- New Pet -->
                    <div class = "pet_summary">

                        <!-- Add New Pet -->
                        <a class="add_new_pet" href="./pet_registration.php">Add new pet</a>

                    </div>

                </div>
            </section>
        </div>
        <footer>
            <a href="./about_us.html">About us</a>
        </footer>
    </body>

</html>