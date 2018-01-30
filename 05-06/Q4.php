<?php

// 求数组中最大数的下标

$num = array(1,9,8,6,7,5,4,2,3);
$max = $num[0];
$index = 0;
foreach ($num as $key => $value) {
	if ($value>$max) {
		$max = $value;
		$index = $key;
	}
}

echo $index;

?>