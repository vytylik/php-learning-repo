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
    $month = 10;
	if ($month >= 3 and $month < 6)
		print('Весна');
	elseif ($month >= 6 and $month < 9)
		print('Лето');
	elseif ($month >= 9 and $month < 12)
		print('Осень');
	elseif ($month == 1 or $month == 2 or $month == 12)
		print('Зима');
	else
		print('Неправильно введено число');
?>
</body>
</html>