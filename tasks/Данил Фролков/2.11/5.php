<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>RebenokGolishom</title>
</head>
<body>
    <?php
    $num = '123456';
    
    if (($num[0] + $num[1] + $num[2]) == ($num[3] + $num[4] + $num[5])) {
        print('Сумма первых трёх цифра числа равна сумме последних трёх цифр числа');
    }

    else {
        print('Сумма не равна кароч');
    }
    ?>
</body>
</html>