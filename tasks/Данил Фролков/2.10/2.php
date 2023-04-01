<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>RebenokGolishom</title>
</head>
<body>
    <?php
    $arr = [1, 2, 3, 4, 5];

    if (mb_strlen($arr) == 3) {
        print("В массиве ровно 3 элемента");
    }

    else {
        print("В массиве либо меньше 3 элементов, либо больше 3 элементов");
    }
    ?>
</body>
</html>