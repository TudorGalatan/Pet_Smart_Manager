<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/pet_registration.css" /> 
        <link rel = "stylesheet" href = "./../css/style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Registrate a pet</title>

    </head>


    <body>
        
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <div class="menu" href="./pets.php">Come back</div>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="my_profile.php">Profile</a>
            </header>
            <section>
                <div class="panel">
                <h1>Registrate a new pet</h1>
                    <form  method="POST" action="./insertPet.php" enctype="multipart/form-data">
                        <div class="fields">
                            
                                <div>Name:        <input type="text" id="name" name="name"></div>
                                <div>Type of pet:        <input type="text" id="type" name="type"></div>
                                <div>Breed:       <input type="text" id="breed" name="breed"></div>
                                <div>Photo: <input type="file" name="file" /></div>
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