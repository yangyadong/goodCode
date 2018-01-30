<?php
//echo(),print(),print_r()的区别，且编写代码Demo说明



//echo是PHP语句, print和print_r是函数,语句没有返回值,函数可以有返回值
//print（）   只能打印出简单类型变量的值(如int,string)
//print_r（） 可以打印出复杂类型变量的值(如数组,对象)

$obj = '123';
$obj1 = array(1,2,3);
echo  $obj;
echo "\r\n";
print $obj;
echo "\r\n";
print_r($obj);

echo "\r\n";
echo $obj;
echo "\r\n";
print $obj1;
echo "\r\n";
print_r($obj1);
