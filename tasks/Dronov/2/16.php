<?php
    $num = 123321;
    $first = intval(strval($num)[0]);
    $second = intval(strval($num)[1]);
    $third = intval(strval($num)[2]);
    $fourth = intval(strval($num)[3]);
    $fifth = intval(strval($num)[4]);
    $sixth = intval(strval($num)[5]);

    $result1 = $first + $second + $third;
    $result2 = $fourth + $fifth + $sixth;
    if($result1 = $result2) {
        print('ууууууууууууу');
    } else {
        print('ыыыыыыыыыыы');
    }
?>