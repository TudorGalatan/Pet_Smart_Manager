<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/registration.css" /> 
        <link rel = "stylesheet" href = "./../css/style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Create an account</title>

    </head>


    <body>
        
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <a class="menu" href="./login.php">Come back</a>

            </header>
            <section>
                <div class="panel">
                <h1>Create an account</h1>
                    <form  method="POST" action="./insertUser.php">
                        <div class="fields">
                            
                                <div>Select the type of account:     <input type="text" id="type" name="type" required></div> 
                                <div>Username:        <input type="text" id="username" name="username"></div>
                                <div>Name:        <input type="text" id="name" name="name" required></div>
                                <div>Password:        <input type="text" id="password" name="password"></div>
                                <div>Email:        <input type="text" id="email"  name="email" required></div>
                        
                        
                        <br>
                        <input type="submit" value="Submit" name="submit" id="button"> 
                        <br>
                        <br>
                   
                    
                    </form>
                    </div>
                 
                </div>
            </section>
        </div>
        <footer>
            <a href="./about_us.html">About us</a>
        </footer>

    </body>

</html>