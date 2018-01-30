<?php

// 写一个函数，实现字符串的反转

function test($str)
{
	$num = strlen($str);
	for ($i = $num-1; $i >= 0 ; $i--) { 
		echo $str[$i];
	}
}

$str1 = 'abcd';
test($str1);

?>