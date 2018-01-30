<?php
// 打印斐波那契数列10个， 1，1，2，3，5……（递归、循环）
		
function fibonacci1 ()
{
	$num = array();
	$num[0] = 1;
	$num[1] = 1;
	echo $num[0], ' ', $num[1], ' ';
	for ($i=2; $i < 10; $i++) {
		$num[$i] = $num[$i-1] + $num[$i-2];
		echo $num[$i], ' ';
	}
}


function fibonacci2 ($num1, $num2, $num)
{
	$num++;
	if ($num <= 2) {
		echo 1, ' ';
		fibonacci2(1, 1, $num);
	} elseif ($num > 2 && $num < $GLOBALS['numAll']) {
		$sum = $num1 + $num2;
		echo $sum, ' ';
		fibonacci2($num2, $sum, $num);
	} elseif ($num == $GLOBALS['numAll']) {
		$sum = $num1 + $num2;
		echo $sum, ' ';
	}
}


fibonacci1();
echo("\r\n");
$numAll = 10;
fibonacci2(1, 1, 0);

?>