<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/edit_general_info_style.css" /> 
        <link rel = "stylesheet" href = "./../css/style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Edit pet info</title>

    </head>


    <body>
        
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <a class="menu" href="./medical_history.php">Come back</a>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="./my_profile.php">Profile</a>
            </header>
            <section>
                <div class="panel">
                <h1>Edit pet information</h1>
                    <form  method="POST" action="./modifyMedicalHistory.php"  enctype="multipart/form-data">
                        <div class="fields">
                        
                            <div>Allergies:        <input type="text" id="allergies" name="allergies"></div>
                            <div>Diseases:        <input type="text" id="diseases" name="diseases"></div>
                            <div>Next doctor appointment: <input type="text" id="next_date" name="next_date"></div>
                            <div>Previous doctor appointments:        <input type="text" id="previous_date" name="previous_date"></div>
                            <div>Previous surgeries:        <input type="text" id="previous_surgeries" name="previous_surgeries"></div>
                
                        </div>
                        <br>
                        <input type="submit" value="Submit" name="submit" id="button"
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