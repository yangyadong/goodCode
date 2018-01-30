<?php
//写出程序的输出

$test = 'aaaaaa';
$abc = &$test;
unset($test);
echo $abc;
echo "\r\n";
?>