Php	GoodCoder	

-Q1：请解释 == 与 ===的区别，且编写代码Demo说明。

-Q2：echo(),print(),print_r()的区别，且编写代码Demo说明。

-Q3：请写出如下程序的输出结果。

<?php
$test = 'aaaaaa';
$abc = &$test;
unset($test);
echo $abc;
?>

-Q4：请写出如下程序的输出结果。

<?php 
$count = 5; 
function get_count(){ 
static $count = 0; 
return $count++; 
} 
echo $count; 
++$count; 
echo get_count(); 
echo get_count(); 
?>

-Q5：isset($val), empty($val)，boolval($val), intval($val) $val == false , $val === false, $val == null 的区别，且编写代码Demo说明。



03-04：

-Q1：请写一个函数，尽可能高效的，从一个标准 url里取出文件的扩展名。如：http://www.baidu.com/abc/de/fg.php?id=1

，需要取出php或.php。

-Q2：请打印斐波那契数列10个， 1，1，2，3，5……（递归、循环）。

-Q3：假设订单号生成规则：10位时间戳+4位毫秒+2位随机数。已知函数isExist($orderId)可以判断订单号是否已经存在,重复可重新生成。写一个生成订单号的函数createOrderId()。

-Q4：PHP实现类继承：要求有基类普通订单，包含属性订单类型(orderType)、方法打印订单信息(打印类型-单号)、Q3所述方法，子类有外卖订单，商超订单，质享订单，并覆盖基类属性、方法。要求正确使用abstract、final。

-Q5：请自己写一个函数，实现字符串的反转。



05-06：

-Q1：将下面的数组用一行拼装成一个字符串 i am qa ! day day up!

<?php 
$arr = array( 
    'I', 'AM', 'QA!', 'DAY', 'DAY', 'UP!' 
); 

-Q2：请写出以下程序的输出结果。

<?php 
function get_arr_ref(&$arr){ unset($arr[0]); }
function get_arr($arr){ unset($arr[0]); }
$arr1 = array(1, 2); $arr2 = array(1, 2); 
get_arr_ref($arr1); get_arr($arr2); 
echo count($arr1); echo count($arr2); ?>

-Q3：请写一个函数遍历目录下的所有文件和文件夹。

-Q4：求数组中最大数的下标。

-Q5：请写一个函数，将一个长度超过10 的数组最后5项直接截取，不改变顺序变为前5项，如{1,2,3,4,5,6,7,8,9,10}变为{6,7,8,9,10,1,2,3,4,5}。



07-08：

-Q1：请尽可能多的列举魔术方法，且编写代码说明其用法。

-Q2：PHP加载文件有哪几种方式？请分别列举，且编写代码Demo说明。

-Q3：请编写函数，分别模拟实现Http请求（POST请求，GET请求）。

-Q4：cookie于session的区别？

-Q5：php自动加载有那几种方法， __autoload()自动加载的缺陷？

PHP官网中文手册：http://php.net/manual/zh/

 (better)
W3C学习网站PHP教学：http://www.w3school.com.cn/php/

《PHP 之道》: http://laravel-china.github.io/php-the-right-way/



《深入PHP：面向对象、模式与实践》 https://book.douban.com/subject/6559267/


 PDF


CoderMaster	
11. PHP与基础组件(PHP 与Mysql、Redis、Nginx等)

12. PHP编码安全

13. PHP In Waimai学习(Wodp框架、NMQ、PHPlib常用函数等)

14. 包管理、PHP框架、第三方库学习(composer，框架Laraval/Yaf等， 库phpunit，monolog等)

15. SAPI、Zend虚拟机、内存模型等学习

16. PHP扩展开发
