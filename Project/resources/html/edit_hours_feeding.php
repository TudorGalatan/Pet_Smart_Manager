<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/edit_food_info_style.css" /> 
        <link rel = "stylesheet" href = "./../css/style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Edit food info</title>

    </head>


    <body>
        
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <div class="menu" href="./food_info.php">Come back</div>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="my_profile.php">Profile</a>
            </header>
            <section>
                <form  method="POST" action="./modifyHours.php"  enctype="multipart/form-data">
                    <div class="panel">

                    <h1>Edit hours of feeding</h1>
                    
                        <div class="fields">
                            <div>Lunch:       <input type="text" id="lunch" name="lunch"></div>
                            <div>Dinner:        <input type="text" id="dinner" name="dinner"></div>
                        </div>
                        <br>
                        <input type="submit" value="Submit" name="submit" id="button">
                        <br>
                        <br>
                    </div>
                </form>
            </section>
        </div>
        <footer>
            <a href="./about_us.html">About us</a>
        </footer>

    </body>

</html>