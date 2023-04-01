<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $age = 42; 
    if ($age < 10 || $age > 99) {
        print("Число не попадает в диапазон от 10 до 99");
    } else {
        $digitSum = 0;
        $numberString = strval($age);
        for ($i = 0; $i < strlen($numberString); $i++) {
            $digitSum += intval($numberString[$i]);
        }
        if ($digitSum <= 9) {
            print("Сумма цифр однозначна");
        } else {
            print("Сумма цифр двузначна");
        }
    }    
?>
</body>
</html>