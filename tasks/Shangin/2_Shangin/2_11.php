<?php
    $month = 3;
    if ($month == 12 or $month == 1 or $month == 2) {
        echo "зима";
    } elseif ($month == 3 or $month == 4 or $month == 5) {
        echo "весна";
    } elseif ($month == 6 or $month == 7 or $month == 8) {
        echo "лето";
    } elseif ($month == 9 or $month == 10 or $month == 11) {
        echo "осень";
    } 
?>
<br>
<?php
    $str = 'abcde';
    if ($str[0] == "a") {
        echo $str[0];
    }
?>
<br>
<?php
    $str = '12345';
    if ($str[0] == "1" or $str[0] == "2" or $str[0] == "3") {
        echo $str[0];
    }
?>
<br>
<?php
    $str = '123321';
    $res1 = $str[0] + $str[1] + $str[2];
    $res2 = $str[3] + $str[4] + $str[5];
    if ($res1 == "3" and $res2 == "3") {
        echo "да";
    }
?>
<br>