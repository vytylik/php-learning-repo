<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>RebenokGolishom</title>
</head>
<body>
    <?php
    $day = 41;
    
    if ($day <= 10) {
        print("1 декада");
    }

    elseif ($day <= 20) {
        print("2 декада");
    }

    elseif ($day <= 31) {
        print("3 декада");
    }

    else {
        print("Нету такого дня еблан");
    }
    ?>
</body>
</html>