<?php

    $SERVER = "localhost";
    $USER   = "root";
    $PASS   = "";

    $lasterr = error_reporting();
    error_reporting(0); // make sure to comment this line out if you're debugging

    $conn = mysqli_connect($SERVER, $USER, $PASS, "fourground");

    if (!$conn) {
            $ERROR = "Can't connect to database";
            $DESC = "PHP failed to connect to the SQL database at $SERVER.<br>Error description: " . mysqli_connect_error();
            $CHOICES = array(
                "Is the password correct in `/func/conn.php`?",
                "Does the database `fourground` exist?",
                "Make sure the MySQL server is running and working properly."
            );
            require("error.php");
    }

    error_reporting($lasterr);
?>