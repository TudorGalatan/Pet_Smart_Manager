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
                <a class="menu" href="./pet_general_info.php">Come back</a>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="my_profile.html">Profile</a>
            </header>
            <section>
                <div class="panel">
                <h1>Select the pet you want to add as a friend</h1>
                    <form  method="POST" action="./addFriend.php">
                        <div class="fields">
                            
                            <select name = "id_pet_guest">
                                <?php 
                                include('./connect.php');
                                $return ="";  
                                $id_pet = $_COOKIE["id_pet"];
                                $sql = "SELECT name, username, id FROM pets ";
                                $result = mysqli_query($dbconn, $sql);
                                $num_rows = mysqli_num_rows($result);
                                for($i == 0; $i < $num_rows; $i++){ 
                                    $row = mysqli_fetch_row($result);
                                    ?>
                                    <option value="<?php echo $row[2] ?>"><?php echo $row[0]?> from  <?php echo $row[1]?></option>
                                    <?php 
                                } ?>
                            </select>
                            <div>Description:     <input type="text" id="description" name="description"></div> 
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