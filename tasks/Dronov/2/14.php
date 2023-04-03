<?php
    $num = 12345;
    $first_num = intval(strval($num)[0]);

    if (in_array($first_num, [1, 2, 3])) 
    {
        print('че такое?');
    }
?>