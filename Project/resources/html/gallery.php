<!-- Gallery -->

<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/galleryy.css" />
        <link rel = "stylesheet" href = "./../css/style.css" />

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Gallery</title>

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
            <h1 class = "gallery_title">Gallery</h1>

            <section>
            <!-- Gallery Content -->
                <div class = "gallery_content">
                    <?php 
                        include('./connect.php');
                        $return ="";  
                        $id_pet = $_COOKIE["id_pet"];
                        $sql = "SELECT img_dir,id FROM gallery where id_pet=$id_pet;";
                        $result = mysqli_query($dbconn, $sql);
                        $num_rows = mysqli_num_rows($result);
                        
                        for($i == 0; $i < $num_rows; $i++){ 
                           $row = mysqli_fetch_row($result);
                    ?>
                    <!-- Gallery Summary -->
                    <div class = "gallery_summary">

                        <!-- Photograph -->
                        <img class = "pet_photograph" src = "<?php echo $row[0]?>" alt = "Photo or videos" />


                        
                        <!-- Delete -->
                        <?php echo '<a href="./deletePhoto.php?id='.$row[1].'">Delete</a>'?>
                    </div>

                    <?php 
                        } ?>

        
                    <!-- New Photo/Video -->
                    <div class = "gallery_summary">

                        <!-- Add Gallery -->
                        <a class="add_new" href="./add_new_photo.php">Add new photo/video</a>

                    </div>

                </div>
            </section>
        </div>
        <footer>
            <a href="./about_us.html">About us</a>
        </footer>
    </body>

</html>