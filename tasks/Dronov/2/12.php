<?php
$season = 11;

if (in_array($season, [12, 1, 2])) {
    print('Zima');
} elseif (in_array($season, [3, 4, 5])) {
    print('Vesna');
} elseif (in_array($season, [6, 7, 8])) {
    print('Leto');
} elseif (in_array($season, [9, 10, 11])) {
    print('Osen');
}
?>