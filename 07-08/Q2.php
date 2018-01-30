<?php

// PHP加载文件有哪几种方式

// 1.include()和require()的区别：

// include()引入文件时，如果遇到错误会提示错误并继续执行；require()引入文件遇到错误时也提示错误但会终止程序的运行。

// require()语句一般放在php脚本页面的最前面，php在执行前，就先读入require()引入的文件，文件的内容会变成此脚本的一部分，一旦出现错误，则立即退出程序。

// include()语句一般在用到时才引入，所以通常是放在流程控制的处理区段中，php脚本在执行到它时，才会将文件包含进来。

// 即require()是预加载机制，位置在脚本最前面，一开始就引入所有可能用到的文件；include()是即用即加载，位置灵活。


// 2.include()、require()和include_once()、require_once()的区别：

// include()、require()执行即包含文件，不会对引入的文件进行比较判断，
// 可能会出现重复包含的情况；而include_once()、require_once()在包含时会先判断文件是否已经包含过了，
// 如果已包含，则不再包含文件，这样的引入文件方式即可以节省资源，又可避免重复定义的错误。


?>