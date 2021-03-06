<?php

/*
 * The MIT License
 *
 * Copyright 2014 sunyuw <leentingOne@gmail.com https://github.com/onesy/skyline.git>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * @filename Function.php 
 * @encoding UTF-8 
 * @author sunyuw <leentingOne@gmail.com> 
 * @link https://github.com/onesy/skyline.git 
 * @copyright only free software in my mind 
 * @license http://mit-license.org/licenses/
 * @datetime Aug 22, 2014  4:51:23 PM
 * @version 1.0
 * @Description no description yet
 */
error_reporting(E_ALL);

global $global_root_server;
global $global_cfg;
// 这里还并不需要引入框架，框架由每个app视自己的使用情景部分引入。
define("ROOT_PROJECT_PATH", dirname(__DIR__));
define("SKY_LINE_PATH", ROOT_PROJECT_PATH . DIRECTORY_SEPARATOR . 'Skyline');
define("GUIDER_PATH", SKY_LINE_PATH . DIRECTORY_SEPARATOR . 'Guider.class.php'); // 定义请求引导类路径
