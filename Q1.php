<?php
	// -Q1：请解释 == 与 ===的区别，且编写代码Demo说明。
	// == 与 === 在于 === 比较的时候也会比较数据类型

	$sum = 1;
	function compare($obj1, $obj2) 
	{
		echo '例';
		echo $GLOBALS['sum']++;
		echo ': ';
		echo "<br>";
		if ($obj1 == $obj2) {
			echo '"=="运算符下：';
			var_dump($obj1);
			echo ' 与 ';
			var_dump($obj2);
			echo ' 比较结果: ' . '相等';
		} else {
			echo '"=="运算符下：';
			var_dump($obj1);
			echo ' 与 ';
			var_dump($obj2);
			echo ' 比较结果: ' . '不相等';
		}
		echo "<br>";
		if ($obj1 === $obj2) {
			echo '"==="运算符下：';
			var_dump($obj1);
			echo ' 与 ';
			var_dump($obj2);
			echo ' 比较结果: ' . '相等';
		} else {
			echo '"===" 运算符下：';
			var_dump($obj1);
			echo ' 与 ';
			var_dump($obj2);
			echo ' 比较结果: ' . '不相等';
		}
		echo "<br>";	
		echo "<br>";
	}


	$obj1 = true;
	$obj2 = 1;
	$obj3 = false;
	$obj4 = 0;

	$obj5 = true;
	$obj6 = 1;
	$obj7 = false;
	$obj8 = 0;
	compare($obj1, $obj5);
	compare($obj1, $obj6);
	compare($obj1, $obj7);
	compare($obj1, $obj8);

	compare($obj2, $obj5);
	compare($obj2, $obj6);
	compare($obj2, $obj7);
	compare($obj2, $obj8);

	compare($obj3, $obj5);
	compare($obj3, $obj6);
	compare($obj3, $obj7);
	compare($obj3, $obj8);

	compare($obj4, $obj5);
	compare($obj4, $obj6);
	compare($obj4, $obj7);
	compare($obj4, $obj8);

?>