<!-- My Profile -->

<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/style.css" />
        <link rel = "stylesheet" href = "./../css/my_profile_style.css" />

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>My Profile</title>

    </head>


    <body>
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <a class="menu" href="./pets.php">Come back</a>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="my_profile.html">Profile</a>
            </header>

            <!-- Title -->
            <h1 class = "my_profile_title">My Profile</h1>

            <section>
            <!-- My Profile Content -->
                <div class = "my_profile_content">

                    <!-- Tudor Gălățan -->
                    <div class = "my_profile_photograph">
                       <?php include('./connect.php');

                        // -----

                            $return ="";  
                            $username = $_COOKIE["username"];
                            $sql = "SELECT img_dir FROM users WHERE username ='$username';";
                            $result = mysqli_query($dbconn, $sql);
                            $row = mysqli_fetch_row($result);
                            mysqli_close($dbconn);

                        ?>
                        <!-- Photograph -->
                        <img class = "team_member_photograph" src = "<?php echo $row[0]?>" alt = "A photograph of myself." />
                       
                    </div>

                    <div class = "panel">

                        <?php
                            include('./connect.php');

                        // -----

                            $return ="";  
                            $username = $_COOKIE["username"];
                            $sql = "SELECT username, password, name, email, type FROM users WHERE username ='$username';";
                            $result = mysqli_query($dbconn, $sql);
                            $row = mysqli_fetch_row($result);
                            mysqli_close($dbconn);
                        ?>

                        <p>First Name:  <?php echo $row[2]?></p>
                      
                        <p>Username: <?php echo $row[0]?></p>
                        <p>Type of account: <?php echo $row[4]?></p>
                        <p>Email: <?php echo $row[3]?></p>
                        <a class="edit_buttom" href="./edit_profile.php"> Edit</a>

                    </div>

                </div>
            </section>
        </div>
        <footer>
            <a href="./about_us.html">About us</a>
        </footer>

    </body>

</html>