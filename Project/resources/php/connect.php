<?php
         $dbhost = "localhost";
         $dbuser = "root";
         $dbpass = "";
         $db = "pet_smart_manager";
         $dbconn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

         if(! $dbconn ) {
            die('Could not connect: ' . mysql_error());
         }

?>
