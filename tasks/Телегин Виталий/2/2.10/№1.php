<?php
	$min = 10;
	
	if ($min >= 0 and $min <= 33) {
		echo '1 треть';
	}
	
	if ($min >= 34 and $min <= 66) {
		echo '2 треть';
	}
	
	if ($min >= 67 and $min <= 100) {
		echo '3 треть';
	}
?>