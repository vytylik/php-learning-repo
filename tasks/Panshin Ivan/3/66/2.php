<?php
	for ($i = 1; $i <= 9; $i++) {
		$str = ''; // каждый раз зачищаем строку
		
		for ($j = 1; $j <= $i; $j++) {
			$str .= $i;
		}
		
		print($str . '<br>');
	}