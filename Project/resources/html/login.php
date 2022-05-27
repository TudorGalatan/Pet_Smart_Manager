<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/login.css" /> 
        <link rel = "stylesheet" href = "./../css/style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Login</title>

    </head>


    <body>
        
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <div class="menu" >Come back</div>
                <a class="menu" href="./pets.html">Home</a>
                <a class="menu" href="my_profile.html">Profile</a>
            </header>
            <div class="panel">
            <h1>Login</h1>
            
                <div class="fields">
                    <form  method="POST" action="./../php/loginUser.php">
                        <div>Username:     <input type="text" id="username" name="username"></div> 
                        <div>Password:        <input type="text" id="password" name="password"></div>
                        <input type="submit" value="Submit" name="submit" id="button"> 
                        <?php
                            include "./../php/loginUser.php";
                        ?>
                    </form>             
                </div>
                <br>
               
                <br>
                <br>
                <p>Don't have an account? Register <a href="./registration.html">here</a></p>
            </div>
        </div>
        <footer>
            <a href="./about_us.html">About us</a>
        </footer>

    </body>

</html>