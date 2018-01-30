<?php

// 将一个长度超过10 的数组最后5项直接截取，不改变顺序变为前5项，如{1,2,3,4,5,6,7,8,9,10}变为{6,7,8,9,10,1,2,3,4,5}

$num = array(1,2,3,4,5,6,7,8,9,10);

$len = count($num);

$data = array();
if ($len>=10) {
	$data1 = array_slice($num, 0, $len-5);
	$data2 = array_slice($num, $len-5, 5);
	$data = array_merge($data2, $data1);
} else {
	$data = $num;
}
print_r($data);

?>
