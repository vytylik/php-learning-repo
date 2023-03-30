<?php
    $num = 123;
    $first = intval(strval($num)[0]);
    $second = intval(strval($num)[1]);
    $third = intval(strval($num)[2]);

    $result = $first + $second + $third;
    {
        print($result);
    }
?>