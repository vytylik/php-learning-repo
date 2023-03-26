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
    $num = 3;
    if ((($num == 9) or (($num > 10) and ($num < 20))) or (($num > 20) and ($num < 30))) {
      print('+');
    } else {
      print('-');
    }
?>
</body>
</html>