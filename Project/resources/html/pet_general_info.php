<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/style.css" /> 
        <link rel = "stylesheet" href = "./../css/pet_general_info_style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Pet_general_info</title>

    </head>
    <body>
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <div class="menu">Come back</div>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="./my_profile.html">Profile</a>
            </header>
            <h1>Toby</h1>
            <section>
                <div class="panel">
                    <?php
                        include('./../php/connect.php');

                        // -----

                        $return ="";  


                        $sql = "SELECT age,type,breed FROM pets WHERE id = '9';";
                        
                        $result = mysqli_query($dbconn, $sql);
                        $row = mysqli_fetch_row($result);

                        if ($result) {

                            $age = $row[0];
                            $type = $row[1];
                            $breed = $row[2];
                                
                        } 
                        else {
                            $return .= "Code error: " . $sql . " " . mysqli_error($dbconn);
                        }

                        echo $return;

                        mysqli_close($dbconn);

                    ?>
                   
                    <p>Age: <?php echo $age?> </p>
                    <p>Type of pet: <?php echo $type?></p>
                    <p>Breed: <?php echo $breed?></p>
                       
                        <br>
                        
                    
                    <a class="edit_buttom" href="./edit_general_info.php"> Edit</a>
                </div>
            </section>
            <section>
                <div class="panel">
                    <div class="title_timeline">
                        <h2>Timeline &rarr;</h2>
                    </div>
                    <div class="timeline">
                        <ol>
                            <?php 
                                include('./../php/connect.php');
                                $return ="";  
                                $sql = "SELECT * FROM events where id_pet=9 order by date;";
                                $result = mysqli_query($dbconn, $sql);
                                $num_rows = mysqli_num_rows($result);
                                
                                    for($i == 0; $i < $num_rows; $i++){ 
                                        $row = mysqli_fetch_row($result);
                                        ?>
                                        
                                            <li>
                                                <div>
                                                    <p class="date"><?php echo $row[3] ?></p>
                                                    <time><?php echo $row[2] ?></time>
                                                    <p class="description"><?php echo $row[4] ?></p>
                                                </div>
                                            </li>
                                        
                                        
                                        <?php 
                                        
                                    }
                            ?>
                        </ol>
                       
                       
                        <div class="arrows">
                            <button class="arrow arrow__prev disabled" disabled>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_prev.svg" alt="prev timeline arrow">
                            </button>
                            <button class="arrow arrow__next">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_next.svg" alt="next timeline arrow">
                            </button>
                        </div>
                        <div class="buttons">
                            <div class="modify_event"><a href="./add_event.php">Add event</a></div>
                            <div class="modify_event"><a href="./remove_event.php">Delete event</a></div>
                        </div>
                        <br>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <a href="./about_us.html">About us</a>
        </footer>
    </body>
</html>


