<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/remove_event_style.css" /> 
        <link rel = "stylesheet" href = "./../css/style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Remove an event</title>

    </head>


    <body>
        
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <div class="menu">Come back</div>
                <a class="menu" href="./pets.html">Home</a>
                <a class="menu" href="my_profile.html">Profile</a>
            </header>
            <section>
                <div class="panel">
                <h1>Select the event you want to remove</h1>
                    <form  method="POST" action="./../php/deleteEvent.php">
                        <div class="fields">
                            
                            <select name = "id_event">
                                <?php 
                                include('./../php/connect.php');
                                $return ="";  
                                $sql = "SELECT * FROM events where id_pet=9 order by date;";
                                $result = mysqli_query($dbconn, $sql);
                                $num_rows = mysqli_num_rows($result);
                                for($i == 0; $i < $num_rows; $i++){ 
                                    $row = mysqli_fetch_row($result);
                                    ?>
                                    <option value=<?php echo $row[1] ?>><?php echo $row[2] ?></option>
                                    <?php 
                                } ?>
                            </select>
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