<?php
    session_start();
    
    $_SESSION["accesso"] = false;

    session_destroy();

    header("Refresh:1; URL=../home.php");
?>