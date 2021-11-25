
<?php

    $firstNum = $_POST['firstNum'];
    $secondNum = $_POST['secondNum'];
    $operator = $_POST['operator'];
    $result;

if(isset($_POST['btn'])) {
    

    // if($operator == '+'){
    //     $result = $firstNum + $secondNum;
    // }

    switch($operator) {
        case '+':
            $result = $firstNum + $secondNum;
            break;
        case '-':
            $result = $firstNum - $secondNum;
            break;
        case '*':
            $result = $firstNum * $secondNum;
            break;
        case '/':
            $result = $firstNum / $secondNum;
            break;
        default:
            $result = 'Unknown operator sign';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
    <style>

    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="">First Number: </label>
        <input type="text" placeholder="Enter a number" name="firstNum" required><br>

        <label for="">Operator: </label>
        <input type="text" placeholder="+, -, *, /" name='operator' required><br>

        <label for="">Second Number: </label>
        <input type="text" placeholder="Enter a number" name="secondNum" required><br>

        <label for="">Result: </label>
        <input type="text" readonly name="result" value="<?php echo $result; ?>"><br>

        <input type="submit" value="Calculate" name="btn">
    </form>
</body>
</html>