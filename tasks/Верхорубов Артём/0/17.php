<?php
    $str = 'abcde';
    echo $str[0];
    echo $str[2]; 
    echo $str[4]; 
?>
<br>
<?php
    $str = 'abcde';
    $str[0] = 'e';
    $str[1] = 'd';
    $str[2] = 'c';
    $str[3] = 'b';
    $str[4] = 'a';
    echo $str; 
?>
<br>
<?php
    $str = 'abcde';
    $num = 3; 
    echo $str[$num]; 
?>
<br>
<?php
    $str = 'abcde';
    echo $str[4]; 
?>
<br>
<?php
    $str = 'abcde';
    echo $str[3]; 
?>
<br>
<?php
    $str = 'abcde';
    echo $str[2]; 
?>
<br>
<?php
    $str = '12345';
    echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
?>
<br>
<?php
    $num = 12345;
    $str = (string) $num;
    echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
?>
<br>
<?php
    $num = 12345;
    $str = (string) $num;
    echo $str[0] * $str[1] * $str[2] * $str[3] * $str[4];
?>
<br>
<?php
    $str = '12345';
    $str[0] = '5';
    $str[1] = '4';
    $str[2] = '3';
    $str[3] = '2';
    $str[4] = '1';
    echo $str; 
?>
