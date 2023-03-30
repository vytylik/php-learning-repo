<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>RebenokGolishom</title>
</head>
<body>
    <?php
    if (isset($user['name'])) {
		$result = $user['name'];
	} elseif (isset($user['surname'])) {
		$result = $user['surname'];
	} else {
		$result = '';
	}

    $result = $user['name'] ?? $user['surname'] ?? 'empty';
    ?>
</body>
</html>