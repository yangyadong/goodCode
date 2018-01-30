<?php

// 订单号生成规则：10位时间戳+4位毫秒+2位随机数。已知函数isExist($orderId)可以判断订单号是否已经存在,重复可重新生成。写一个生成订单号的函数createOrderId()。

function getMillisecond() { 
	list($microsecond , $time) = explode(' ', microtime()); //' '中间是一个空格 
	return (float)sprintf('%.0f',(floatval($microsecond)+floatval($time))*10000); 
} 

function createOrderId() 
{
	$orderId = '';
	@$time = date();
	$time1 = getMillisecond();
	$rand = rand(10,99);
	$orderId = (string)$time . (string)$time1 . (string)$rand;
	// $isExist = isExist($orderId);
	// if ($isExist) {
	// 	createOrderId();
	// }
	return $orderId;
}

$orderId = createOrderId();
echo($orderId);

?>