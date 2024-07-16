<?php
    session_start();

    $logMessage = "Au revoir ".$_SESSION['identifier'];
    session_destroy();
    header("location: ../Controller/home.php?message=$logMessage");

