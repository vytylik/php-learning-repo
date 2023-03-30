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
    $str = '123456';
    if (($str[0]+$str[1]+$str[2]) == ($str[3]+$str[4]+$str[5]))
		print('Да');
	else
		print('Нет');
?>
</body>
</html>