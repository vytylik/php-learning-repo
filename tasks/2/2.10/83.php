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
    $min = 32;
	if ($min >= 0 and $min <= 19) {
		echo '1 четверть';
	}
	if ($min >= 20 and $min <= 39) {
		echo '2 четверть';
	}
	if ($min >= 40 and $min <= 59) {
		echo '3 четверть';
	}
?>
</body>
</html>