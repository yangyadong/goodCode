<?php

// 将下面的数组用一行拼装成一个字符串 i am qa ! day day up!
$arr = array( 
    'I', 'AM', 'QA!', 'DAY', 'DAY', 'UP!' 
); 

foreach ($arr as $key => $value) {
	print_r($value . ' ');
}

?>