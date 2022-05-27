<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/style.css" /> 
        <link rel = "stylesheet" href = "./../css/pet_general_info_style.css" /> 

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Pet_general_info</title>

    </head>
    <body>
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <div class="menu">Come back</div>
                <a class="menu" href="./pets.html">Home</a>
                <a class="menu" href="./my_profile.html">Profile</a>
            </header>
            <h1>Toby</h1>
            <section>
                <div class="panel">
                    <form  method="GET" action="./../php/consultGeneralInfo.php">
                        <p>Age: <input type="text" id="age" name="age" value='$_GET[$age]' ></p>
                        <p>Type of pet: <input type="text" id="type" name="type" value='$type'></p>
                        <p>Breed: <input type="text" id="breed" name="breed" value='$breed'></p>
                        <a class="edit_buttom" href="./edit_general_info.html"> Edit</a>
                        <br>
                        <?php
                            include "./../php/consultGeneralInfo.php";
                        ?>
                    </form>
                </div>
            </section>
            <section>
                <div class="panel">
                    <div class="title_timeline">
                        <h2>Timeline &rarr;</h2>
                    </div>
                    <div class="timeline">
                        <ol>
                            <li>
                                <div>
                                    <time>Day of birth</time>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <time>Day of adoption</time>
                                </div>
                            </li>
                        </ol>
                       
                        <div class="arrows">
                            <button class="arrow arrow__prev disabled" disabled>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_prev.svg" alt="prev timeline arrow">
                            </button>
                            <button class="arrow arrow__next">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_next.svg" alt="next timeline arrow">
                            </button>
                        </div>
                        <div class="buttons">
                            <div class="modify_event"><a href="./add_event.html">Add event</a></div>
                            <div class="modify_event"><a href="./remove_event.html">Delete event</a></div>
                        </div>
                        <br>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <a href="./about_us.html">About us</a>
        </footer>
    </body>
</html>

