<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>RebenokGolishom</title>
</head>
<body>
    <?php
    $user = ['name' => 'john', 'age' => 30];
	
    $name = $user['name'] ?? 'unknown';

    print($name);
    ?>
</body>
</html>