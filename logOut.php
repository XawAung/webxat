<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logOut</title>
</head>
<body>
    
</body>
</html>

<?php
    session_start();
    session_destroy();

    echo "<script>alert('Logging out successful');</script>";
    echo "<script>location='main.html';</script>";
?>