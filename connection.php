<?php

    $link = mysqli_connect("localhost", "anish", "anish", "USERS");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>