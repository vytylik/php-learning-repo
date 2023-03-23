<?php
		$arr = ['a' => 1, 'b' => 2, 'c' => 3];
		$arr[1] = '!';
		$arr[1] = '?';
		$arr[1] = '/';
		var_dump($arr);
	?>