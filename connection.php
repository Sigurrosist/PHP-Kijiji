<?php

// Do nothing when the connection is okay and send the users to the connection error page when the connection was not succesful
require_once 'dbConfig.php'; // include : if there's an error, then stop. it's different than  require or require once.
if(mysqli_connect_error())
{
    //echo "Connection failed :".mysqli_connect_error()." <br />";
    header("location:connectionError.php");
}
?>