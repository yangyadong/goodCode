<?php
//写出程序的输出

$count = 5;
function get_count(){
    static $count = 0;
    return $count++;
}
echo $count;
echo "\r\n";
++$count;
echo get_count();
echo "\r\n";
echo get_count();
echo "\r\n";
?>