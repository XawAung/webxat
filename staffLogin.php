<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stafflogin</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Email: </label>
        <input type="email" name="email"><br><br>
        <label for="">Password: </label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
session_start();
    $connect = mysqli_connect('localhost', 'root', '', 'myshop');

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $selectAccount = "select * from staff where Email = '$email' and Password = '$password'";

        $run = mysqli_query($connect, $selectAccount);
        $count = mysqli_num_rows($run);

        if($count > 0) {
            $data = mysqli_fetch_array($run);
            $_SESSION['staffname'] = $data['StaffName'];
            $_SESSION['email'] = $data['Email'];
            echo "<script>alert('Staff login successful');</script>";
            echo "<script>location = 'main.html';</script>";
        }
        else{
            echo "<script>alert('Email or password might be wrong. Please try agin!');</script>";
            echo "<script>location = 'staffLogin.php';</script>";
        }
    }
?>