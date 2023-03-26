<?php
    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo count($arr);
?>
<br>
<?php
    $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
    echo count($arr);
?>
<br>
<?php
    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo $arr[count($arr) - 1];
?>
<br>
<?php
    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo $arr[count($arr) - 2];
?>
<br>
