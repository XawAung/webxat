<?php
    session_start();

    if(isset($_SESSION['firstName'])) {
        echo 'Welcome '.$_SESSION['firstName'].$_SESSION['lastName'];
    }
    else{
        echo "<script>alert('Try session1.php first');</script>";
        echo "<script>location = 'session1.php';</script>";
    }
?>