<?php
session_start();
if(!isset($_SESSION['staffname'])) {
    echo "<script>alert('Please login first');</script>";
    echo "<script>location='staffLogin.php';</script>";
}
else{
    echo "Welcome ".$_SESSION['staffname'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productDisplay</title>
</head>
<body>
    <form action="" method="POST">
    <h2 align='center'>Product Display</h2>
        <table align="center" border='1' width=80%>
            <tr>
                <th>Product Name: </th>
                <td>example</td> 
                <td>example</td> 
                <td>example</td> 
                <td>example</td> 
            </tr>
        </table>
    </form>
</body>
</html>