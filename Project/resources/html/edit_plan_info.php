<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/edit_plan_info_style.css" /> 
        <link rel = "stylesheet" href = "./../css/style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Edit plan info</title>

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
                <form  method="POST" action="./modifyPlanInfo.php"  enctype="multipart/form-data">
                    <div class="panel">
                    <h1>Edit food information</h1>
                    
                        <div class="fields">
                            <div>Monday:        <input type="text" id="monday" name="monday"></div>
                            <div>Tuesday:        <input type="text" id="tuesday" name="tuesday"></div>
                            <div>Wednesday:        <input type="text" id="wednesday" name="wednesday"></div>
                            <div>Thursday:        <input type="text" id="thursday" name="thursday"></div>
                            <div>Friday:        <input type="text" id="friday" name="friday"></div>
                            <div>Saturday:        <input type="text" id="saturday" name="saturday"></div>
                            <div>Sunday:        <input type="text" id="sunday" name="sunday"></div>
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