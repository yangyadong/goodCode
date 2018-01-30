<?php
// 从一个标准 url里取出文件的扩展名。如：http://www.baidu.com/abc/de/fg.php?id=1
//需要取出php或.php。

function getUrlExtension($url='')
{
	// echo pathinfo(parse_url($url)['path'])['extension'];
	$extension = pathinfo(parse_url($url, PHP_URL_PATH), PATHINFO_EXTENSION);
	return $extension;
}
$url = 'http://www.abc.com/ab/cd/e.php?id=1&data=2#laowen';

echo getUrlExtension($url);

?>