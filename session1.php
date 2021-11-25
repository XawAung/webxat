<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session1</title>
</head>
<body>
    <form action="" method="POST">
        <label>First Name: </label>
        <input type="text" name="firstname"><br><br>
        <label>Last Name: </label>
        <input type="text" name="lastname"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
    session_start();
    if(isset($_POST['submit'])) {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        echo "<script>alert('Go to session 2');</script>";
        echo "<script>location = 'session2.php';</script>";
    }
    
?>