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
    $year = '3';
	switch ($year) {
		case '1':
			echo '1 весна';
		break;
		case '2':
			echo '2 лето';
		break;
		case '3':
			echo '3 осень';
		break;
		default:
			echo '4 зима';
		break;
	}
?>
</body>
</html>