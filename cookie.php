<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">User Name: </label>
        <input type="text" name="username"><br><br>
        <label for="">Password: </label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $userName = $_POST['username'];
        $password = $_POST['password'];

        setcookie(time()+60);

        echo $cookie_username = $userName;
        echo $cookie_password = $password;
    }
?>