<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/add_new_photo.css" /> 
        <link rel = "stylesheet" href = "./../css/style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Add new photo/video</title>

    </head>


    <body>
        
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <div class="menu">Come back</div>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="my_profile.html">Profile</a>
            </header>
            <section>
            <form  method="POST" action="./addPhoto.php"  enctype="multipart/form-data">
                    <div class="panel">
                    <h1>Add new photo/video</h1>
                    
            
                        <br>
                        <div>Photo: <input type="file" name="file" /></div>
                        <br>
                        <br>
                        <input type="submit" value="Submit" name="submit" id="button">
                    </div>
            </form>
            </section>
        </div>
        <footer>
            <a href="./about_us.html">About us</a>
        </footer>

    </body>

</html>