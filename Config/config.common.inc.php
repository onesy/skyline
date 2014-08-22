<?php
error_reporting(E_ALL);

global $global_server;
// 这里还并不需要引入框架，框架由每个app视自己的使用情景部分引入。
define("GUIDER_PATH", __DIR__ . 'skyline' . DIRECTORY_SEPARATOR . 'Guider.class.php'); // 导入请求引导类