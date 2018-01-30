<?php 

// 写出程序的输出结果：1、2

function get_arr_ref(&$arr){ 
	unset($arr[0]); 
}
function get_arr($arr){ 
	unset($arr[0]); 
}
$arr1 = array(1, 2); 
$arr2 = array(1, 2); 
get_arr_ref($arr1); 
get_arr($arr2); 
echo count($arr1);
echo count($arr2); 

?>