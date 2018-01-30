<?php
 
class Magic
{
    public $var = 'test';
 
    //构造函数,在创建对象的时候调用
    public function __construct()
    {
        echo '__construct called'.PHP_EOL;
    }
 
    //某个对象的引用都被删除、对象被销毁、调用exit()后、脚本关闭时被调用
    public function __destruct()
    {
        echo '__destruct called'.PHP_EOL;
    }
 
    //当给不可访问或不存在属性赋值时被调用
    public function __set($name, $value)
    {
        echo $name.'-'.$value;
        echo '__set called'.PHP_EOL;
    }
 
    //读取不可访问或不存在属性时被调用
    public function __get($name)
    {
        echo $name;
        echo '__get called'.PHP_EOL;
    }
 
    //调用不可访问或不存在的方法时被调用
    public function __call($name, $arguments)
    {
        echo $name . '-' . implode(',', $arguments);
        echo '__call called'.PHP_EOL;
    }
 
    //调用不可访问或不存在的静态方法时被调用
    public static function __callStatic($name, $arguments)
    {
        echo $name . '-' . implode(',', $arguments);
        echo '__callStatic called'.PHP_EOL;
    }
 
    //对不可访问或不存在的属性调用isset()或empty()时被调用
    public function __isset($name)
    {
        echo $name;
        echo '__isset called'.PHP_EOL;
        return true;
    }
 
    //对不可访问或不存在的属性进行unset时被调用
    public function __unset($name)
    {
        echo $name;
        echo '__unset called'.PHP_EOL;
    }
 
    //serialize时被调用，当你不需要保存大对象的所有数据时很有用
    public function __sleep()
    {
        echo '__sleep called'.PHP_EOL;
        return array('var1111111111');
    }
 
    //unserialize时被调用，可用于做些对象的初始化操作
    public function __wakeup()
    {
        echo '__wakeup called'.PHP_EOL;
        $this->var = 'test after wakeup';
    }
 
    //当一个类被转换成字符串时被调用
    public function __toString()
    {
        return '__toString called'.PHP_EOL;
    }
 
    //进行对象clone时被调用，用来调整对象的克隆行为
    public function __clone()
    {
        echo '__clone called'.PHP_EOL;
    }
 
    //当以函数方式调用对象时被调用
    public function __invoke()
    {
        echo '__invoke called'.PHP_EOL;
    }
 
    //当调用var_export()导出类时，此静态方法被调用。用__set_state的返回值做为var_export的返回值。
    public static function __set_state($arr)
    {
        return  '__set_state called'.PHP_EOL;
    }
 
    //当调用var_dump()打印对象时被调用（当你不想打印所有属性）适用于PHP5.6版本
    // public function __debuginfo($arr)
    // {
    //     echo '__debuginfo called'.PHP_EOL;
    //     return array(
    //         'var' => 'test fro __debuginfo'
    //     );
    // }
}
 
$m = new Magic(); //__construct()被调用
$m->not_exist_property = test; //__set()被调用
echo $m->not_exist_property;//__get()被调用
$m->abc(1,2,3); //__call()被调用
echo isset($m->not_exist_property); //__isset()被调用，返回bool值
unset($m->not_exist_property); //__unset()被调用
echo $tmp = serialize($m); //__sleep()被调用
unserialize($tmp); //__wakeup()被调用
$m1 = clone $m; //__clone()被调用，对象默认是引用传递，使用clone关键词则可实现对象复制
$m(); //__invoke()
eval( '$m2 = '  .  var_export ( $m ,  true ) .  ';' );var_dump($m2);
var_dump($m);
//最后__destruct()被调用
