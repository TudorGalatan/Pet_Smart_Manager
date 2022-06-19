<!-- Food information -->

<!DOCTYPE html>



<html>

    <head>

        <!-- Stylesheet -->
        <link rel = "stylesheet" href = "./../css/food_info.css" />
        <link rel = "stylesheet" href = "./../css/style.css" />

        <!-- Charset -->
        <meta charset = "UTF-8" />

        <!-- Title -->
        <title>Food information</title>

    </head>


    <body>
        <div class="content">
            <header>
                <a class="menu" href="./main_page.html"><img src="./../images/indice.jpeg" alt="Logo" id="logo"  width="30" height="31"></a>
                <a class="menu" href="./pet_page.php">Come back</a>
                <a class="menu" href="./pets.php">Home</a>
                <a class="menu" href="my_profile.php">Profile</a>
            </header>

            <!-- Title -->
            <h1 class = "food_info_title">Food information</h1>

            <section>
                <div class = "food_info_content">
                    <?php
                            include('./connect.php');

                        // -----

                            $return ="";  
                            $id_pet = $_COOKIE["id_pet"];
                            $sql = "SELECT can_eat, cannot_eat, lunch, dinner FROM food WHERE id_pet =$id_pet;";
                            $result = mysqli_query($dbconn, $sql);
                            $row = mysqli_fetch_row($result);

                            $sql2 = "SELECT * FROM calendar WHERE id_pet =$id_pet;";
                            $result2 = mysqli_query($dbconn, $sql2);
                            $row2 = mysqli_fetch_row($result2);


                            mysqli_close($dbconn);



                    ?>
                    <p>Pet can eat: <?php echo $row[0]?></p>
                    <p>Pet can't eat: <?php echo $row[1]?></p>
                    <a class="edit_buttom" href="./edit_food_info.php"> Edit</a>
                </div>
            </section>

            <div class="buttons">
                <div class="modify_event"><a href="./removeFood.php">Delete info</a></div>
            </div>




            <h2 class="planner">Weekly planner</h2>
            

          


            <div class="calendar">



    <div class="timeline">
    <div class="spacer"></div>
    <div class="time-marker"></div>
    <div class="time-marker"><?php echo $row[2]?></div>
    <div class="time-marker"></div>
    <div class="time-marker"></div>
    <div class="time-marker"><?php echo $row[3]?></div>
    <div class="time-marker"></div>
    <div class="time-marker"></div>
    
        
    </div>

  <div class="days">
    <div class="day mon">
      <div class="date">
        <p class="date-day">Mon</p>
      </div>
      <div class="events">
        <div class="event start-10 end-12 corp-fi">
          <p class="title"><?php echo $row2[1]?></p>
          
        </div>
        <div class="event start-1 end-4 ent-law">
          <p class="title"><?php echo $row2[2]?></p>
        
        </div>
      </div>
    </div>
    <div class="day tues">
      <div class="date">
        <p class="date-day">Tues</p>
      </div>
      <div class="events">
        <div class="event start-10 end-12 corp-fi">
          <p class="title"><?php echo $row2[3]?></p>
          
        </div>
        <div class="event start-1 end-4 ent-law">
          <p class="title"><?php echo $row2[4]?></p>
          
        </div>
      </div>
    </div>
    <div class="day wed">
      <div class="date">
        <p class="date-day">Wed</p>
      </div>
      <div class="events">
        <div class="event start-10 end-12 corp-fi">
          <p class="title"><?php echo $row2[5]?></p>
          
        </div>
        <div class="event start-1 end-4 ent-law">
          <p class="title"><?php echo $row2[6]?></p>
          
        </div>
      </div>
    </div>
    <div class="day thurs">
      <div class="date">
        <p class="date-day">Thurs</p>
      </div>
      <div class="events">
        <div class="event start-10 end-12 corp-fi">
          <p class="title"><?php echo $row2[7]?></p>
          
        </div>
        <div class="event start-1 end-4 ent-law">
          <p class="title"><?php echo $row2[8]?></p>
         
        </div>
      </div>
    </div>
    <div class="day fri">
      <div class="date">
        <p class="date-day">Fri</p>
      </div>
      <div class="events">
        <div class="event start-10 end-12 corp-fi">
          <p class="title"><?php echo $row2[9]?></p>
        
        </div>
        <div class="event start-1 end-4 ent-law">
          <p class="title"><?php echo $row2[10]?></p>
          
        </div>
      </div>
    </div>
    <div class="day mon">
      <div class="date">
        <p class="date-day">Sat</p>
      </div>
      <div class="events">
        <div class="event start-10 end-12 corp-fi">
          <p class="title"><?php echo $row2[11]?></p>
          
        </div>
        <div class="event start-1 end-4 ent-law">
          <p class="title"><?php echo $row2[12]?></p>
        
        </div>
      </div>
    </div>
    <div class="day tues">
      <div class="date">
        <p class="date-day">Sun</p>
      </div>
      <div class="events">
        <div class="event start-10 end-12 corp-fi">
          <p class="title"><?php echo $row2[13]?></p>
          
        </div>
        <div class="event start-1 end-4 ent-law">
          <p class="title"><?php echo $row2[14]?></p>
          
        </div>
      </div>
    </div>
  </div>
</div>


<div class="buttons">
    <div class="modify_event"><a class="edit_buttom" href="./edit_plan_info.php"> Edit</a></div>
    <div class="modify_event"><a href="./removePlan.php">Delete plan</a></div>
                            
</div>



            

<h3 class="planner">Hours of feeding</h3>
<div class = "food_info_content">
<p>Lunch: <?php echo $row[2]?> </p>
<p>Dinner: <?php echo $row[3]?></p>
<a class="edit_buttom" href="./edit_hours_feeding.php"> Edit</a>
</div>


        <footer>
            <a href="./about_us.html">About us</a>
        </footer>

    </body>

</html>