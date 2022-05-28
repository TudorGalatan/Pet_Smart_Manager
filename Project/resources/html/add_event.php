<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/add_event_style.css" /> 
        <link rel = "stylesheet" href = "./../css/style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Add a new event</title>

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
                <div class="panel">
                <h1>Add a new event</h1>
                    <form  method="POST" action="./../php/insertEvent.php">
                        <div class="fields">
                        
                            <div>Name of the event:        <input type="text" id="name" name="name"></div>
                            <div>Date:        <input type="text" id="date" name="date"></div>
                            <div>Description:        <input type="text" id="description" name="description"></div>
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