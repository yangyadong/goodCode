<?php
//isset($val), empty($val)，boolval($val), intval($val) $val == false , $val === false, $val == null 的区别，

//isset 是否定义
//empty 是否为假或不存在
$obj = false;
var_dump(isset($obj));
var_dump(isset($obj_1));


$obj_1 = true;
var_dump(empty($obj));
var_dump(empty($obj_1));
var_dump(empty($obj_2));


//boolval 获取变量的boolean，
$obj_2 = 0;
$obj_3 = 1;
var_dump(boolval($obj));
var_dump(boolval($obj_1));
var_dump(boolval($obj_2));
var_dump(boolval($obj_3));

// intval 获取变量的整数值
$obj_4 = 1.11;
var_dump(intval($obj_4));

$val = 'a';
var_dump($val == false);
var_dump($val === false);
var_dump($val == null);

?>