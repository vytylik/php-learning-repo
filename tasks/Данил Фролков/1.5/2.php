<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>RebenokGolishom</title>
</head>
<body>
    <?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
    $arr['a'] .= +3;
    $arr['b'] = 'Хуй саси) ';
    $arr['c'] = 'Чурбанчик)';
    var_dump($arr);
    ?>
</body>
</html>